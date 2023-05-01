<?php

namespace App\Http\Livewire;

use App\Models\ProductCategory;
use App\Models\Ville;
use Livewire\Component;
use App\Models\VilleLinks;

class VilleLinksLivewire extends Component
{
    public $ville_id, $links, $p_catgories;
    public $title, $link, $type;
    public $edit = false, $updated_id, $deleted;

    protected $listeners = ['confirmDelete'];

    public function mount($id)
    {
        $this->ville_id = $id;
        $this->p_catgories = ProductCategory::get();
        $this->links = VilleLinks::where('ville_id', $this->ville_id)->get();
    }

    public function render()
    {
        return view('livewire.ville-links-livewire');
    }

    public function store()
    {
        $this->validate([
            'title'  => 'required|string|max:255|min:3',
            'link'  => 'required|string|max:255|min:5',
            'type'  => 'required',
        ]);

        $link = new VilleLinks();
        $link->ville_id = $this->ville_id;
        $link->type = $this->type;
        $link->title = $this->title;
        $link->link = $this->link;
        $link->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $link = VilleLinks::find($id);
        $this->updated_id = $id;
        $this->type = $link->type;
        $this->title = $link->title;
        $this->link = $link->link;
        $this->edit = true;
    }

    public function update()
    {
        $this->validate([
            'title'  => 'required|string|max:20|min:3',
            'link'  => 'required|string|max:255|min:5',
        ]);

        $link = VilleLinks::find($this->updated_id);
        $link->type = $this->type;
        $link->title = $this->title;
        $link->link = $this->link;
        $link->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Updated successfully !'
        ]);

        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->type = null;
        $this->title = '';
        $this->link = '';
        $this->edit = false;
        $this->updated_id = null;
        $this->links = VilleLinks::where('ville_id', $this->ville_id)->get();
    }

    public function delete($id)
    {
        $this->deleted = $id;
        $this->dispatchBrowserEvent('swal:confirmDelete', [
            'fun' => 'confirmDelete'
        ]);
    }

    public function confirmDelete()
    {
        $cat = VilleLinks::find($this->deleted);
        $cat->delete();
        $this->links = VilleLinks::where('ville_id', $this->ville_id)->get();
    }
}
