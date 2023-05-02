<?php

namespace App\Http\Livewire;

use Image;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;
use Illuminate\Support\Str;
use App\Models\ProductBiens;
use App\Models\ProductVille;
use App\Models\ProductExtras;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use App\Rules\PhoneValidation;
use App\Models\ProductCategory;
use App\Models\ProductQuartier;

class EditProduct extends Component
{
    use WithFileUploads;
    protected $listeners = ['submitAddBien'];

    public $product;
    public $productcategories, $producttypes, $productextras;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false, $is_commercial = false, $hide_infos = false;
    public $category, $type, $title, $slug, $reference, $description, $ville, $quartier, $address, $prix, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_salons, $nbr_chambres;
    public $hasextras = [];
    public $images = [], $productbiens = [], $i = 0;
    public $clicked = false;
    public $villes = [], $quartiers = [];

    public function mount($id)
    {
        $this->villes = ProductVille::get();
        $this->quartiers = ProductQuartier::get();

        $this->product = Product::find($id);
        $this->firstname = $this->product->proprietaire->firstname;
        $this->lastname = $this->product->proprietaire->lastname;
        $this->phone = $this->product->proprietaire->phone;
        $this->email = $this->product->proprietaire->email;

        $this->type = $this->product->product_type_id;
        $this->category = $this->product->product_category_id;
        $this->title = $this->product->title;
        $this->reference = $this->product->reference;
        $this->description = $this->product->description;
        $this->position = $this->product->position;
        $this->ville = $this->product->ville;
        $this->quartier = $this->product->quartier;
        $this->address = $this->product->address;
        $this->prix = $this->product->prix;
        $this->video = $this->product->video_link;
        $this->vr = $this->product->vr_link;
        $this->unite_surface = $this->product->unite_surface;
        $this->surface = $this->product->surface;
        $this->surface_habitable = $this->product->surface_habitable;
        $this->surface_terrain = $this->product->surface_terrain;
        $this->nbr_salons = $this->product->nbr_salons;
        $this->nbr_chambres = $this->product->nbr_chambres;
        $this->images = array_fill_keys(array(0, 1, 2, 3, 4, 5, 6, 7), '');
        foreach (json_decode($this->product->extras) as $key => $value) {
            $this->hasextras[$key] = $value;
        }
        $this->productcategories = ProductCategory::get();
        foreach (json_decode($this->product->images) as $key => $value) {
            $this->images[$key] = $value->image;
        }
        array_push($this->images, $this->i);

        foreach (json_decode($this->product->biens) as $key => $value) {
            $this->productbiens[$key] = [
                'title' => $value->title,
                'price' => $value->price,
                'surface' => $value->surface,
            ];
        }
    }

    public function render()
    {
        $this->producttypes = ProductType::when($this->category != 0, function ($query) {
            $query->where('product_category_id', $this->category);
        })->get();
        $this->productextras = ProductExtras::when($this->type != 0, function ($query) {
            $query->where('product_type_id', $this->type);
        })->get();

        return view('livewire.edit-product');
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
            'position' => 'required|string|max:255|min:1',
            'ville' => 'required|string|max:255|min:1',
            'quartier' => 'required|string|max:255|min:1',
            'address' => 'required|string|max:255|min:1',
            'prix' => 'required',
            'video' => 'nullable|string|max:255|min:1',
            'vr' => 'nullable|string|max:255|min:1',
            'unite_surface' => 'required',
            'surface' => 'required',
            'surface_habitable' => 'nullable',
            'surface_terrain' => 'nullable',
            'nbr_salons' => 'required',
            'nbr_chambres' => 'nullable',
            // 'images.0' => 'required|image|mimes:jpeg,jpg,png,svg',
            // 'images.*' => 'image|mimes:jpeg,jpg,png,svg',
        ]);

        if (!$this->is_commercial) {
            $this->validate([
                'firstname' => 'required|string|max:50|min:1',
                'lastname' => 'required|string|max:50|min:1',
                'phone' => ['required', 'digits:10', new PhoneValidation()],
                'email' => 'nullable|email|max:255|min:1',
            ]);

            if ($this->is_promoteur) {
                $this->validate([
                    'logo'  => 'required|image|mimes:jpeg,jpg,png,svg',
                    'pdf'  => 'required|mimes:pdf',
                ]);
            }
        }

        $this->product->proprietaire->firstname = $this->firstname;
        $this->product->proprietaire->lastname = $this->lastname;
        $this->product->proprietaire->phone = $this->phone;
        $this->product->proprietaire->email = $this->email;
        if ($this->hide_infos) {
            $this->product->proprietaire->hide_infos = 1;
        } else {
            $this->product->proprietaire->hide_infos = 0;
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
                $this->product->proprietaire->logo = $logo_title;
            }
            if (!empty($this->pdf)) {
                $pdf = md5(microtime()) . '.' . $this->pdf->extension();
                $this->pdf->storeAs('public/product/pdf', $pdf);
                $this->product->proprietaire->pdf = $pdf;
            }
        }
        $this->product->proprietaire->save();

        $this->product->product_type_id = $this->type;
        $this->product->product_category_id = $this->category;
        $this->product->title = $this->title;
        $this->product->slug = Str::slug($this->title, '-');
        $this->product->reference = $this->reference;
        $this->product->description = $this->description;
        $this->product->position = $this->position;
        $this->product->ville = $this->ville;
        $this->product->quartier = $this->quartier;
        $this->product->address = $this->address;
        $this->product->prix = $this->prix;
        $this->product->video_link = $this->video ?? '';
        $this->product->vr_link = $this->vr ?? '';
        $this->product->unite_surface = $this->unite_surface;
        $this->product->surface = $this->surface;
        $this->product->surface_habitable = $this->surface_habitable;
        $this->product->surface_terrain = $this->surface_terrain;
        $this->product->nbr_salons = $this->nbr_salons;
        $this->product->nbr_chambres = $this->nbr_chambres;
        $extra = json_encode($this->hasextras);
        $this->product->extras = $extra;
        $this->product->save();

        if (isset($this->images)) {
            foreach ($this->images as $img) {
                if (is_file($img)) {
                    $img_title = md5(microtime()) . '.' . $img->extension();
                    // $img->storeAs('public/original/product/images/', $img_title);
                    $destinationPath = public_path('/storage/product/images');

                    $newImage = Image::make($img->getRealPath());
                    $newImage->resize(1200, 700, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $img_title);

                    ProductImages::create([
                        'product_id' => $this->product->id,
                        'image' => $img_title
                    ]);
                }
            }
        }
        ProductBiens::where('product_id',  $this->product->id)->delete();

        if (isset($this->productbiens)) {
            foreach ($this->productbiens as $bien) {
                ProductBiens::create([
                    'product_id' => $this->product->id,
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

    public function addImage()
    {
        $this->i++;

        array_push($this->images, $this->i);
    }

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
        $this->productbiens[] = [
            'title'  => $title,
            'price'   => $prix,
            'surface' => $surface
        ];
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
}