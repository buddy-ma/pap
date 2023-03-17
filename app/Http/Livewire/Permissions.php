<?php

namespace App\Http\Livewire;

use App\Lib\UserLog;
use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Permissions extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    public $ShowAddPermission = false;
    public $ShowupdatePermission = false;
    //Groups is for list of groupby for blade;
    public $name, $selected_group, $groups;
    public $title;
    //groupe input;
    public $groupe;
    public $id_permission;
    public $confirming = 0;
    public $search, $paginate, $perPage, $order_by, $sort_by;
    public $is_agency = 1;

    public function mount()
    {
        $this->search = '';
        $this->paginate = 1;
        $this->perPage = 10;
        $this->sort_by = 'asc';
        $this->order_by = 'id';
        $this->groups = Permission::groupby('p_group')->orderby('p_group')->get();
        $this->selected_group = '';
    }
    public function render()
    {
        $this->authorize('permission-list');
        if ($this->selected_group) {
            $permissions = Permission::when($this->is_agency, function ($query) {
                if ($this->is_agency == 2) {
                    $query->where('guard_name', 'agency');
                } else {
                    $query->where('guard_name', 'web');
                }
            })
                ->where('p_group', $this->selected_group)->search(trim($this->search))->orderby($this->order_by, $this->sort_by)->paginate($this->perPage);
        } else {
            $permissions = Permission::when($this->is_agency, function ($query) {
                if ($this->is_agency == 2) {
                    $query->where('guard_name', 'agency');
                } else {
                    $query->where('guard_name', 'web');
                }
            })
                ->search(trim($this->search))->orderby($this->order_by, $this->sort_by)->paginate($this->perPage);
        }
        return view('livewire.admin.permissions.permissions', ["permissions" => $permissions]);
    }
    public function change($nbr)
    {
        $this->is_agency = $nbr;

        if ($nbr != 1) {
            $this->groups = Permission::where('guard_name', 'agency')->groupby('p_group')->orderby('p_group')->get();
        }
    }
    public function selected_group($selected_group)
    {
        $this->selected_group = $selected_group;
    }
    public function resetgroup()
    {
        $this->selected_group = '';
    }
    public function orderby($name)
    {
        $this->order_by = $name;
        $this->sort_by = ($this->sort_by == 'ASC') ? 'DESC' : 'ASC';
    }

    public function reset_inputs()
    {
        $this->name = '';
        $this->title = '';
        $this->groupe = '';
    }

    public function confirmdelete($id)
    {
        $this->confirming = $id;
    }
    public function Canceldelete()
    {
        $this->confirming = 0;
    }
    public function ShowAddPermission()
    {
        $this->resetValidation();
        $this->reset_inputs();
        $this->ShowupdatePermission = false;
        $this->ShowAddPermission = !$this->ShowAddPermission;
    }
    public function PermissionAdd()
    {
        $this->validate([
            'name' => 'required|string|unique:permissions,name',
            'title' => 'required|string|unique:permissions,title',
            'groupe' => 'required',
        ]);
        $permission = new  Permission;
        $permission->name = $this->name;
        $permission->title = $this->title;
        $permission->p_group = $this->groupe;
        if ($this->is_agency != 1) {
            $permission->guard_name  = 'agency';
        } else {
            $permission->guard_name  = 'web';
        }
        $permission->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type'    => 'success',
            'message' => 'Permission has been added successfully',
        ]);
        $this->ShowAddPermission = false;
    }
    public function PermissionShow($id)
    {
        $this->resetValidation();
        $permission = Permission::find($id);
        $this->name = $permission->name;
        $this->title = $permission->title;
        $this->groupe = $permission->p_group;
        $this->id_permission = $permission->id;
        $this->ShowAddPermission = false;
        $this->ShowupdatePermission = true;
    }
    public function PermissionUpdate()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required|string',
            'groupe' => 'required',
        ]);
        $permission = Permission::find($this->id_permission);
        $permission->name = $this->name;
        $permission->title = $this->title;
        $permission->p_group = $this->groupe;
        $permission->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type'    => 'success',
            'message' => 'Permission has been updated successfully',
        ]);
    }

    public function deletePermission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
    }

    public function Close()
    {
        $this->ShowAddPermission    = false;
        $this->ShowupdatePermission = false;
    }

    public function get_title_and_group()
    {
        $removetiri = str_replace('-', ' ', $this->name);
        $this->title = ucfirst($removetiri);
        $firstword = strtok($this->name, "-");
        $this->groupe = ucfirst($firstword);
    }
}
