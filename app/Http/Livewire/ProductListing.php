<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\ProductType;

class ProductListing extends Component
{
    public $categories, $selected_category, $types, $selected_type;
    public $search, $paginate, $perPage, $status;

    public function mount()
    {
        $this->search = '';
        $this->status = 1;
        $this->selected_category = 0;
        $this->selected_type = 0;
        $this->perPage = 10;
        $this->categories = ProductCategory::get();
        $this->types = ProductType::get();
    }

    public function off()
    {
        $this->status = 0;
    }
    public function on()
    {
        $this->status = 1;
    }
    public function turnOff($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
        ]);
    }
    public function turnOn($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
        ]);
    }
    public function render()
    {
        $products = Product::where('status', $this->status)->when($this->selected_category != 0, function ($query) {
            $query->where('product_category_id', $this->selected_category);
        })->when($this->selected_type != 0, function ($query) {
            $query->where('product_type_id', $this->selected_type);
        })->search(trim($this->search))
            ->paginate($this->perPage);

        return view('livewire.product-listing', [
            'products' => $products
        ]);
    }
}