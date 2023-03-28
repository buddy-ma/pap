<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\ProductType;

class ProductListing extends Component
{
    public $categories, $selected_category, $types, $selected_type;
    public $search, $paginate, $perPage;

    public function mount()
    {
        $this->selected_category = 0;
        $this->selected_type = 0;
        $this->search = '';
        $this->perPage = 10;
        $this->categories = ProductCategory::get();
        $this->types = ProductType::get();
    }
    public function render()
    {
        $products = Product::when($this->selected_category != 0, function ($query) {
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
