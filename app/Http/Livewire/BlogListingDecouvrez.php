<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Ville;
use Livewire\Component;

class BlogListingDecouvrez extends Component
{
    public $selected_category, $selected_ville, $villes;
    public $search, $paginate, $order_by, $sort_by, $perPage;

    public function mount()
    {
        $this->villes = Ville::get();
        $this->selected_category = 9;
        $this->selected_ville = 0;
        $this->search = '';
        $this->sort_by = 'DESC';
        $this->order_by = 'title';
        $this->perPage = 10;
    }

    public function render()
    {
        $blogs = Blog::leftJoin('blog_has_categories as bc', 'bc.blog_id', 'blogs.id')
            ->when($this->selected_ville != 0, function ($query) {
                $query->where('blogs.ville_id', $this->selected_ville);
            })
            ->where('bc.categorie_id', $this->selected_category)
            ->groupBy('bc.blog_id')
            ->select('blogs.*')
            ->search(trim($this->search))
            ->orderby($this->order_by, $this->sort_by)
            ->paginate($this->perPage);

        return view('livewire.blog-listing-decouvrez', [
            'blogs' => $blogs
        ]);
    }

    public function enable($id)
    {
        $b = Blog::find($id);
        $b->status = 1;
        $b->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
        ]);
    }

    public function disable($id)
    {
        $b = Blog::find($id);
        $b->status = 0;
        $b->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
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