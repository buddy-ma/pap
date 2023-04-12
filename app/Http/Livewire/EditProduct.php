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

class EditProduct extends Component
{
    use WithFileUploads;

    public $product;
    public $productcategories, $producttypes, $productextras;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false, $is_commercial = false;
    public $category, $type, $title, $description, $ville, $quartier, $address, $prix, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_salons, $nbr_chambres;
    public $hasextras = [];
    public $images = [], $i = 0;

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->firstname = $this->product->proprietaire->firstname;
        $this->lastname = $this->product->proprietaire->lastname;
        $this->phone = $this->product->proprietaire->phone;
        $this->email = $this->product->proprietaire->email;

        $this->type = $this->product->product_type_id;
        $this->category = $this->product->product_category_id;
        $this->title = $this->product->title;
        $this->description = $this->product->description;
        $this->position = $this->product->latitude . ',' . $this->product->longitude;
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
        foreach (json_decode($this->product->extras) as $key => $value) {
            $this->hasextras[$key] = $value;
        }
        $this->productcategories = ProductCategory::get();
        foreach (json_decode($this->product->images) as $key => $value) {
            $this->images[$key] = $value->image;
        }
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

        return view('livewire.edit-product');
    }

    public function save()
    {
        //product validation
        $this->validate([
            'type' => 'required',
            'title' => 'required|string|max:255|min:1',
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
            // 'images.0' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            // 'images.*' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
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

        $this->product->proprietaire->firstname = $this->firstname;
        $this->product->proprietaire->lastname = $this->lastname;
        $this->product->proprietaire->phone = $this->phone;
        $this->product->proprietaire->email = $this->email;
        if ($this->is_promoteur) {
            if (!empty($this->logo)) {
                $logo = md5(microtime()) . '.' . $this->logo->extension();
                $this->logo->storeAs('public/product/logo', $logo);
                $this->product->proprietaire->logo = $logo;
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
        $this->product->description = $this->description;
        $e = explode(",", $this->position);
        $this->product->latitude = $e[0];
        $this->product->longitude = $e[1];
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
                    $img->storeAs('public/product/images/', $img_title);
                    ProductImages::create([
                        'product_id' => $this->product->id,
                        'image' => $img_title
                    ]);
                }
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
}
