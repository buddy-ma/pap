<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Categorie;
use Livewire\Component;

class BlogListing extends Component
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
        $blogs = Blog::leftJoin('blog_has_categories as bc', 'bc.blog_id', 'blogs.id')
            ->when($this->selected_category != 0, function ($query) {
                $query->where('bc.categorie_id', $this->selected_category);
            })
            ->groupBy('bc.blog_id')
            ->search(trim($this->search))
            ->orderby($this->order_by, $this->sort_by)
            ->paginate($this->perPage);

        return view('livewire.blog-listing', [
            'blogs' => $blogs
        ]);
    }

    public function resetFilters()
    {
        $this->search = '';
        $this->sort_by = 'ASC';
        $this->order_by = 'title';
        $this->perPage = 10;
        $this->selected_category = 0;
    }
}
