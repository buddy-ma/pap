<?php

namespace App\Http\Livewire;

use App\Models\CommercialiserContact;
use Livewire\Component;

class CommercialiserContactsAdmin extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = CommercialiserContact::get();
    }

    public function render()
    {
        return view('livewire.commercialiser-contacts-admin');
    }

    public function repondre($id)
    {
        $c = CommercialiserContact::find($id);
        $c->answered = 1;
        $c->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
        ]);
        $this->contacts = CommercialiserContact::get();
    }
}
