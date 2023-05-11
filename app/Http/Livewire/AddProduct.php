<?php

namespace App\Http\Livewire;

use Image;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;
use Illuminate\Support\Str;
use App\Models\ProductBiens;
use App\Models\ProductVille;
use App\Models\Proprietaire;
use App\Models\ProductExtras;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use App\Rules\PhoneValidation;
use App\Models\ProductCategory;
use App\Models\ProductQuartier;
use Illuminate\Support\Facades\Auth;

class AddProduct extends Component
{
    use WithFileUploads;

    public $productcategories, $producttypes, $productextras;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false, $is_commercial = false, $hide_infos = false;
    public $category, $type, $title, $slug, $reference, $description, $ville, $quartier, $address, $prix, $prix_by, $disponibilite, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_salons, $nbr_chambres;
    public $hasextras = [];
    public $images = [], $productbiens = [], $j = 0;
    public $clicked = false;
    public $videoClicked = false;
    public $villes, $quartiers;
    public $promoteurs, $promoteur_id;

    protected $listeners = ['submitAddBien'];

    public function mount()
    {
        $this->villes = ProductVille::get();
        $this->quartiers = ProductQuartier::get();
        $this->productcategories = ProductCategory::get();
        $this->images = array_fill_keys(array(0, 1, 2, 3, 4, 5, 6, 7), '');
        $this->unite_surface = 'm²';

        $this->promoteurs = Proprietaire::where('is_promoteur', 1)->get();
    }

    public function render()
    {
        $this->producttypes = ProductType::when($this->category != 0, function ($query) {
            $query->where('product_category_id', $this->category);
        })->get();

        $this->productextras = ProductExtras::when($this->type != 0, function ($query) {
            $query->where('product_type_id', $this->type);
        })->get();
        return view('livewire.add-product');
    }

    public function getQuartier()
    {
        $v = ProductVille::where('title', $this->ville)->first();
        $this->quartiers = $v->quartiers;
    }

    public function save()
    {
        //product validation
        $this->validate([
            'type' => 'required',
            'title' => 'required|string|max:255|min:1',
            'reference' => 'required|string|max:255|min:1',
            'description' => 'required|min:1',
            'position' => 'nullable|string',
            'ville' => 'required|string|max:255|min:1',
            'quartier' => 'nullable|string|max:255|min:1',
            'address' => 'required|string|max:255|min:1',
            'prix' => 'required',
            'video' => 'nullable|string|max:255|min:1',
            'disponibilite' => 'nullable|string|max:255|min:1',
            'vr' => 'nullable|string|max:255|min:1',
            'unite_surface' => 'required',
            'surface' => 'required',
            'surface_habitable' => 'nullable',
            'surface_terrain' => 'nullable',
            'nbr_salons' => 'nullable',
            'nbr_chambres' => 'nullable',
            'images.0' => 'required|image|mimes:jpeg,jpg,png,svg',
        ], [
            'images.0.required' => 'Vous devez insérer au moins une image'
        ]);

        $j = 1;
        foreach ($this->images as $img) {
            if (isset($img) && !empty($img)) {
                $this->validate([
                    'images.' . $j => 'image|mimes:jpeg,jpg,png,svg',
                ]);
                $img = str_replace(' ', '', $img->getClientOriginalName());
                ++$j;
            }
        }

        if (!$this->is_commercial && !$this->promoteur_id) {
            $this->validate([
                'firstname' => 'required|string|max:50|min:1',
                'lastname' => 'required|string|max:50|min:1',
                'phone' => 'required|string|max:20|min:1',
                'email' => 'nullable|email|max:255|min:1',
            ]);

            if ($this->is_promoteur) {
                $this->validate([
                    'logo'  => 'required|image|mimes:jpeg,jpg,png,svg',
                    'pdf'  => 'required|mimes:pdf',
                ]);
            }
        }
        if (!$this->promoteur_id) {
            $proprietaire = new Proprietaire();
            $proprietaire->firstname = $this->firstname;
            $proprietaire->lastname = $this->lastname;
            $proprietaire->phone = $this->phone;
            $proprietaire->email = $this->email;
            if ($this->hide_infos) {
                $proprietaire->hide_infos = 1;
            } else {
                $proprietaire->hide_infos = 0;
            }
            if ($this->is_promoteur) {
                if (!empty($this->logo)) {
                    $logo_title = md5(microtime()) . '.' . $this->logo->extension();
                    $destinationPath = public_path('/storage/product/logo');
                    // $this->logo->storeAs('public/original/product/logo', $logo_title);
                    $newImage = Image::make($this->logo->getRealPath());
                    $newImage->resize(1200, 700, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $logo_title);
                    $proprietaire->logo = $logo_title;
                }
                if (!empty($this->pdf)) {
                    $pdf = md5(microtime()) . '.' . $this->pdf->extension();
                    $this->pdf->storeAs('/storage/product/pdf', $pdf);
                    $proprietaire->pdf = $pdf;
                }
                $proprietaire->is_promoteur = 1;
            }

            $proprietaire->save();
        }

        $product = new Product();
        if ($this->is_commercial) {
            $product->user_id = Auth::guard('web')->id();
        }
        if (!$this->promoteur_id) {
            $product->proprietaire_id = $proprietaire->id;
        } else {
            $product->proprietaire_id = $this->promoteur_id;
        }
        $product->product_type_id = $this->type;
        $product->product_category_id = $this->category;
        $product->title = $this->title;
        $product->slug = Str::slug($this->title, '-');
        $product->reference = $this->reference;
        $product->description = $this->description;
        $product->position = $this->position;
        $product->ville = $this->ville;
        $product->quartier = $this->quartier;
        $product->address = $this->address;
        $product->prix_by = $this->prix_by;
        $product->prix = $this->prix;
        $product->video_link = $this->video ?? '';
        $product->disponibilite = $this->disponibilite ?? '';
        $product->vr_link = $this->vr ?? '';
        $product->unite_surface = $this->unite_surface;
        $product->surface = $this->surface;
        $product->surface_habitable = $this->surface_habitable;
        $product->surface_terrain = $this->surface_terrain;
        $product->nbr_salons = $this->nbr_salons;
        $product->nbr_chambres = $this->nbr_chambres;
        $extra = json_encode($this->hasextras);
        $product->extras = $extra;
        $product->save();
        if (isset($this->images)) {
            foreach ($this->images as $img) {
                if (isset($img) && !empty($img)) {
                    $img_title = md5(microtime()) . '.' . $img->extension();
                    $destinationPath = public_path('/storage/product/images');
                    // $img->storeAs('public/original/product/images/', $img_title);

                    $newImage = Image::make($img->getRealPath());
                    $newImage->resize(1200, 700, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $img_title);

                    ProductImages::create([
                        'product_id' => $product->id,
                        'image' => $img_title
                    ]);
                }
            }
        }
        ProductBiens::where('product_id',  $product->id)->delete();
        if (isset($this->productbiens)) {
            foreach ($this->productbiens as $bien) {
                ProductBiens::create([
                    'product_id' => $product->id,
                    'title' => $bien['title'],
                    'price' => $bien['price'],
                    'surface' => $bien['surface'],
                ]);
            }
        }
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);

        return redirect('/admin/products');
    }

    public function is_promoteur()
    {
        $this->is_promoteur = !$this->is_promoteur;
    }

    public function hide_infos()
    {
        $this->hide_infos = !$this->hide_infos;
    }

    public function is_commercial()
    {
        $this->is_commercial = !$this->is_commercial;
        if ($this->is_commercial) {
            $user = Auth::guard('web')->user();
            $this->firstname = $user->firstname;
            $this->lastname = $user->lastname;
            $this->phone = $user->phone;
            $this->email = $user->email;
        } else {
            $this->firstname = '';
            $this->lastname = '';
            $this->phone = '';
            $this->email = '';
        }
    }


    // public function addImage()
    // {
    //     $this->i++;

    //     array_push($this->images, $this->i);
    // }

    public function removeimg($key)
    {
        $this->images[$key] = null;
    }

    public function addBien()
    {
        $this->dispatchBrowserEvent('swal:addBien');
    }

    public function submitAddBien($title, $prix, $surface)
    {
        $this->productbiens[$this->j] = [
            'title'  => $title,
            'price'   => $prix,
            'surface' => $surface
        ];
        $this->j++;
    }

    public function removebien($key)
    {
        unset($this->productbiens[$key]);
    }

    public function getSrc()
    {
        if (isset($this->position)) {
            $html = $this->position;
            preg_match('~iframe.*src="([^"]*)"~', $html, $result);
            $this->position = $result[1];
        }
        $this->clicked = true;
    }

    public function getVideoSrc()
    {
        if (isset($this->video)) {
            $html = $this->video;
            preg_match('~iframe.*src="([^"]*)"~', $html, $result);
            $this->video = $result[1];
        }
        $this->videoClicked = true;
    }
}
