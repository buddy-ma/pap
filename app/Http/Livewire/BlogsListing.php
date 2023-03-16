<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Correction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class BlogsListing extends Component
{
    public Model $model;

    public $field;

    public $status;

    public $corrections;

    public function mount()
    {
        $this->status = (bool) $this->model->getAttribute($this->field);
    }

    public function accept()
    {
        $this->model->setAttribute($this->field, 1)->save();
        return redirect('admin/blogs');
    }

    public function render()
    {
        return view('livewire.blogs-listing');
    }
}
