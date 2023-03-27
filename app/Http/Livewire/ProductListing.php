<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductListing extends Component
{
    public $categories, $selected_category;
    public $search, $paginate, $order_by, $sort_by, $perPage;

    public function mount()
    {
        $this->selected_category = 0;
        $this->search = '';
        $this->sort_by = 'DESC';
        $this->order_by = 'title';
        $this->perPage = 10;
        $this->categories = Categorie::get();
    }
    public function render()
    {
        $products = Product::leftJoin('blog_has_categories as bc', 'bc.blog_id', 'blogs.id')
            ->when($this->selected_category != 0, function ($query) {
                $query->where('bc.categorie_id', $this->selected_category);
            })
            ->groupBy('bc.blog_id')
            ->search(trim($this->search))
            ->orderby($this->order_by, $this->sort_by)
            ->paginate($this->perPage);
        return view('livewire.product-listing', [
            'products' => $products
        ]);
    }
}