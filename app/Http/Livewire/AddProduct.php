<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductBiens;
use Livewire\Component;
use App\Models\ProductType;
use App\Models\Proprietaire;
use App\Models\ProductExtras;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use App\Rules\PhoneValidation;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;

class AddProduct extends Component
{
    use WithFileUploads;

    public $productcategories, $producttypes, $productextras;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false, $is_commercial = false;
    public $category, $type, $title, $reference, $description, $ville, $quartier, $address, $prix, $disponibilite, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_salons, $nbr_chambres;
    public $hasextras = [];
    public $images = [], $productbiens = [], $i = 0, $j = 0;

    protected $listeners = ['submitAddBien'];

    public function mount()
    {
        $this->productcategories = ProductCategory::get();
        array_push($this->images, $this->i);
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

    public function save()
    {
        //product validation
        $this->validate([
            'type' => 'required',
            'title' => 'required|string|max:255|min:1',
            'reference' => 'required|string|max:255|min:1',
            'description' => 'required|min:1',
            'position' => 'nullable|string|max:255|min:1',
            'ville' => 'required|string|max:255|min:1',
            'quartier' => 'required|string|max:255|min:1',
            'address' => 'required|string|max:255|min:1',
            'prix' => 'required',
            'video' => 'nullable|string|max:255|min:1',
            'disponibilite' => 'nullable|string|max:255|min:1',
            'vr' => 'nullable|string|max:255|min:1',
            'unite_surface' => 'required',
            'surface' => 'required',
            'surface_habitable' => 'nullable',
            'surface_terrain' => 'nullable',
            'nbr_salons' => 'required',
            'nbr_chambres' => 'required',
        ]);


        $j = 0;
        foreach ($this->images as $img) {
            if (isset($img)) {
                $this->validate([
                    'images.' . $j => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
                ]);
                $img = str_replace(' ', '', $img->getClientOriginalName());
                ++$j;
            }
        }

        if (!$this->is_commercial) {
            $this->validate([
                'firstname' => 'required|string|max:50|min:1',
                'lastname' => 'required|string|max:50|min:1',
                'phone' => ['required', 'digits:10', new PhoneValidation()],
                'email' => 'nullable|email|max:255|min:1',
            ]);

            if ($this->is_promoteur) {
                $this->validate([
                    'logo'  => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
                    'pdf'  => 'required|mimes:pdf',
                ]);
            }
        }

        $proprietaire = new Proprietaire();
        $proprietaire->firstname = $this->firstname;
        $proprietaire->lastname = $this->lastname;
        $proprietaire->phone = $this->phone;
        $proprietaire->email = $this->email;
        if ($this->is_promoteur) {
            if (!empty($this->logo)) {
                $logo = md5(microtime()) . '.' . $this->logo->extension();
                $this->logo->storeAs('public/product/logo', $logo);
                $proprietaire->logo = $logo;
            }
            if (!empty($this->pdf)) {
                $pdf = md5(microtime()) . '.' . $this->pdf->extension();
                $this->pdf->storeAs('public/product/pdf', $pdf);
                $proprietaire->pdf = $pdf;
            }
            $proprietaire->is_promoteur = 1;
        }

        $proprietaire->save();

        $product = new Product();
        if ($this->is_commercial) {
            $product->user_id = Auth::guard('web')->id();
        }
        $product->proprietaire_id = $proprietaire->id;
        $product->product_type_id = $this->type;
        $product->product_category_id = $this->category;
        $product->title = $this->title;
        $product->reference = $this->reference;
        $product->description = $this->description;
        if ($this->position) {
            $e = explode(",", $this->position);
            $product->latitude = $e[0];
            $product->longitude = $e[1];
        }
        $product->ville = $this->ville;
        $product->quartier = $this->quartier;
        $product->address = $this->address;
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
                $img_title = md5(microtime()) . '.' . $img->extension();
                $img->storeAs('public/product/images/', $img_title);
                ProductImages::create([
                    'product_id' => $product->id,
                    'image' => $img_title
                ]);
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

    public function addImage()
    {
        $this->i++;

        array_push($this->images, $this->i);
    }

    public function removeimg($key)
    {
        unset($this->images[$key]);
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
}