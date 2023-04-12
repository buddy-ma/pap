<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductType;
use App\Models\ProductExtras;
use App\Models\ProductCategory;

class ProductTypesAdmin extends Component
{
    public $categories, $selected_category;
    public $types, $selected_type, $deleted_type;
    public $extras, $selected_extra, $deleted_extra;

    protected $listeners = ['submitAdd', 'submitEdit', 'confirmDelete', 'submitAddExtra', 'submitEditExtra', 'confirmDeleteExtra'];
    public function mount()
    {
        $this->categories = ProductCategory::get();
    }

    public function render()
    {
        $this->types = ProductType::when($this->selected_category != 0, function ($query) {
            $query->where('product_category_id', $this->selected_category);
        })->get();

        $this->extras = ProductExtras::when($this->selected_type != 0, function ($query) {
            $query->where('product_type_id', $this->selected_type);
        })->get();

        return view('livewire.product-types-admin');
    }

    public function selectType($id)
    {
        if ($this->selected_type != $id) {
            $this->selected_type = $id;
        } else {
            $this->selected_type = null;
        }
    }
    public function add()
    {
        $this->dispatchBrowserEvent('swal:addType', [
            'title' => 'Ajouter un type',
            'button' => 'Ajouter',
            'returnFunction' => 'submitAdd',
        ]);
    }

    public function edit($id)
    {
        $this->selected_type = $id;
        $p = ProductType::find($id);
        $this->dispatchBrowserEvent('swal:addType', [
            'title' => 'Modifier un type',
            'button' => 'Modifier',
            'type' => $p->title,
            'returnFunction' => 'submitEdit',
        ]);
    }

    public function delete($id)
    {
        $this->deleted_type = $id;
        $this->dispatchBrowserEvent('swal:confirmDelete', [
            'text' => 'Vous ne pourrez pas revenir en arrière !',
            'returnFunction' => 'confirmDelete',
        ]);
    }

    public function submitAdd($title)
    {
        $type = new ProductType();
        $type->product_category_id = $this->selected_category;
        $type->title = $title;
        $type->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);
    }

    public function submitEdit($title)
    {
        $type = ProductType::find($this->selected_type);
        $type->title = $title;
        $type->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);
    }

    public function confirmDelete()
    {
        $type = ProductType::find($this->deleted_type);
        $type->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Suprimé en success !'
        ]);
    }

    //extras
    public function addExtra()
    {
        $this->dispatchBrowserEvent('swal:addType', [
            'title' => 'Ajouter un extra',
            'button' => 'Ajouter',
            'returnFunction' => 'submitAddExtra',
        ]);
    }

    public function editExtra($id)
    {
        $this->selected_extra = $id;
        $e = ProductExtras::find($id);
        $this->dispatchBrowserEvent('swal:addType', [
            'title' => 'Modifier un extra',
            'button' => 'Modifier',
            'type' => $e->title,
            'returnFunction' => 'submitEditExtra',
        ]);
    }

    public function deleteExtra($id)
    {
        $this->deleted_extra = $id;
        $this->dispatchBrowserEvent('swal:confirmDelete', [
            'text' => 'Vous ne pourrez pas revenir en arrière !',
            'returnFunction' => 'confirmDeleteExtra',
        ]);
    }

    public function submitAddExtra($title)
    {
        $extra = new ProductExtras();
        $extra->product_type_id = $this->selected_type;
        $extra->title = $title;
        $extra->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);
    }

    public function submitEditExtra($title)
    {
        $extra = ProductExtras::find($this->selected_extra);
        $extra->title = $title;
        $extra->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Saved successfully !'
        ]);
    }

    public function confirmDeleteExtra()
    {
        $extra = ProductExtras::find($this->deleted_extra);
        $extra->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'text' => 'Suprimé en success !'
        ]);
    }
}