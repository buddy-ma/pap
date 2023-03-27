<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;
use App\Models\Proprietaire;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use App\Rules\PhoneValidation;
use App\Models\ProductCategory;

class AddProduct extends Component
{
    use WithFileUploads;

    public $producttypes, $productcategories;
    public $firstname, $lastname, $phone, $email, $logo, $pdf, $is_promoteur = false;
    public $category, $type, $title, $description, $ville, $quartier, $address, $prix, $date, $video, $vr, $position, $unite_surface, $surface, $surface_habitable, $surface_terrain, $nbr_pieces, $nbr_chambres;
    public $has_balcon_terrace = false, $has_garage_parking = false, $has_piscine = false, $has_cave = false, $has_access_handicape = false;
    public $images = [], $i = 0;

    public function mount()
    {
        $this->producttypes = ProductType::get();
        $this->productcategories = ProductCategory::get();
        array_push($this->images, $this->i);
    }

    public function render()
    {
        return view('livewire.add-product');
    }

    public function save()
    {
        $this->validate([
            'firstname' => 'required|string|max:50|min:1',
            'lastname' => 'required|string|max:50|min:1',
            'phone' => ['required', 'digits:10', new PhoneValidation()],
            'email' => 'nullable|email|max:255|min:1',

            'type' => 'required',
            'title' => 'required|string|max:255|min:1',
            'description' => 'required|min:1',
            'position' => 'required|string|max:255|min:1',
            'ville' => 'required|string|max:255|min:1',
            'quartier' => 'required|string|max:255|min:1',
            'address' => 'required|string|max:255|min:1',
            'prix' => 'required',
            'date' => 'nullable',
            'video' => 'nullable|string|max:255|min:1',
            'vr' => 'nullable|string|max:255|min:1',
            'unite_surface' => 'required',
            'surface' => 'required',
            'surface_habitable' => 'nullable',
            'surface_terrain' => 'nullable',
            'nbr_pieces' => 'required',
            'nbr_chambres' => 'nullable',
            'images.0' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'images.*' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        if ($this->is_promoteur) {
            $this->validate([
                'logo'  => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
                'pdf'  => 'required|mimes:pdf',
            ]);
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
        }
        $proprietaire->save();

        $product = new Product();
        $product->proprietaire_id = $proprietaire->id;
        $product->type_id = $this->type;
        $product->title = $this->title;
        $product->description = $this->description;
        $e = explode(",", $this->position);
        $product->latitude = $e[0];
        $product->longitude = $e[1];
        $product->ville = $this->ville;
        $product->quartier = $this->quartier;
        $product->address = $this->address;
        $product->prix = $this->prix;
        $product->date = $this->date ?? now();
        $product->video_link = $this->video ?? '';
        $product->vr_link = $this->vr ?? '';
        $product->unite_surface = $this->unite_surface;
        $product->surface = $this->surface;
        $product->surface_habitable = $this->surface_habitable;
        $product->surface_terrain = $this->surface_terrain;
        $product->nbr_pieces = $this->nbr_pieces;
        $product->nbr_chambres = $this->nbr_chambres;
        $product->save();
        if (isset($this->images)) {
            $j = 0;
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
}