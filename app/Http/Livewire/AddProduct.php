<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;
use App\Models\Proprietaire;
use App\Models\ProductExtras;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use App\Rules\PhoneValidation;
use App\Models\ProductCategory;

class AddProduct extends Component
{
    use WithFileUploads;

    public $productcategories, $producttypes, $productextras;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false, $is_commercial = false;
    public $category, $type, $title, $reference, $description, $ville, $quartier, $address, $prix, $disponibilite, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_salons, $nbr_chambres;
    public $hasextras = [];
    public $images = [], $i = 0;

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
            'position' => 'required|string|max:255|min:1',
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
            'images.0' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'images.*' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
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
        $product->proprietaire_id = $proprietaire->id;
        $product->product_type_id = $this->type;
        $product->product_category_id = $this->category;
        $product->title = $this->title;
        $product->reference = $this->reference;
        $product->description = $this->description;
        $e = explode(",", $this->position);
        $product->latitude = $e[0];
        $product->longitude = $e[1];
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
        unset($this->images[$key]);
    }

    public function addBien()
    {
        $this->dispatchBrowserEvent('swal:addBien');
    }

    public function submitAddBien($request)
    {
        dd($request);
    }
}