<?php

namespace App\Http\Livewire;

// use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Roles extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $ShowAddRole    = false;
    public $ShowupdateRole = false;
    public $permissions;
    public $role_id = 0;
    public $permission;
    public $groups;
    public $name;
    public $confirming = 0;
    public $search, $paginate, $perPage;
    public $select     = [];
    public $selected_group;

    public function mount()
    {
        $this->search = '';
        $this->paginate = 1;
        $this->perPage = 10;
        $this->groups = Permission::groupBy('p_group')->orderBy('p_group')->get();
    }

    private function resetInputFields()
    {
        $this->permission     = '';
        $this->name           = '';
        $this->select         = [];
    }

    public function render()
    {
        // $this->authorize('role-list');

        if (in_array(1, array_column(Auth::user()->roles->toArray(), 'id'))) {
            $roles = Role::orderBy('name')->paginate($this->perPage);
        } else {
            $roles = Role::where('id', '<>', 1)->orderBy('name')->paginate($this->perPage);
        }


        $this->permissions = Permission::when($this->selected_group, function ($query) {
            $query->where('p_group', $this->selected_group);
        })
            ->when($this->search, function ($query) {

                $query->where("name", 'LIKE', "%{$this->search}%");
            })
            ->get();

        return view('livewire.admin.roles.roles', ["roles" => $roles]);
    }

    public function confirmdelete($id)
    {
        $this->confirming = $id;
    }

    public function Canceldelete()
    {
        $this->confirming = 0;
    }

    public function ShowAddRole()
    {
        $this->resetInputFields();
        $this->resetValidation();


        $this->ShowupdateRole = false;
        $this->ShowAddRole = !$this->ShowAddRole;
    }


    public function RoleAdd()
    {
        $validator = $this->validate([
            'name' => 'required',
        ]);
        unset($this->select[0]);

        $role = Role::create(['guard_name' => 'web', 'name' => $this->name]);
        $role->syncPermissions($this->select);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Role Updated Successfully!',
        ]);
        $this->ShowAddRole = false;
    }

    public function RoleShow($id)
    {
        $this->resetValidation();
        $this->resetInputFields();




        $role = Role::find($id);
        $pres = array_column($role->getAllPermissions()->toArray(), 'id');

        if (count($this->permissions) == count($pres)) {
            $this->select[0] = 1;
        }

        foreach ($pres as $per) {
            $this->select[$per] = $per;
        }
        $this->name = $role->name;
        $this->role_id = $role->id;

        $this->ShowAddRole = false;
        $this->ShowupdateRole = true;
    }

    public function selectAll()
    {

        if ($this->select[0] == 0) {

            $pres = array_column($this->permissions->toArray(), 'id');

            foreach ($pres as $per) {
                $this->select[$per] = 0;
            }
        } else {

            $pres = array_column($this->permissions->toArray(), 'id');

            foreach ($pres as $per) {
                $this->select[$per] = $per;
            }
        }
        // dd($this->select[0]);
    }

    public function RoleUpdate()
    {

        $validator = $this->validate([
            'name' => 'required',
        ]);
        unset($this->select[0]);

        $role = Role::find($this->role_id);
        $role->name = $this->name;
        $role->save();

        foreach ($this->select as $key => $value) {
            $this->select[$key] = intval($value);
        }

        $role->syncPermissions($this->select);

        $this->ShowupdateRole = false;

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Role Updated Successfully!',
        ]);
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();
    }

    public function Close()
    {
        $this->ShowupdateRole = false;
        $this->ShowAddRole    = false;
        $this->select         = [];
    }

    public function Search()
    {
    }
}
