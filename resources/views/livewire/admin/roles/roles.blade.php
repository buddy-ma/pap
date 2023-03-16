<div>
    <div wire:loading
        style="width:100%;height:100%;background-color:rgb(238, 231, 255,0.5);position: absolute;
    z-index: 10000;
    right: 0;
    left: 0;
    ">
        <div class='dot-spin' style="top:50%;margin:auto"></div>
    </div>

    @can('role-create')
        <a><button type="button" wire:click="ShowAddRole()" class="btn btn-primary mb-2"><i class="fe fe-plus mr-2"></i>Add
                User Group</button>
        </a>
    @endcan
    @if ($ShowAddRole == true)
        @include('livewire.admin.roles.roles-add')
    @elseif($ShowupdateRole == true)
        @include('livewire.admin.roles.roles-update')
    @endif

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">

                <div class="card-body">

                    <div class="e-table">
                        <div class="table-responsive table-lg mt-3">
                            <table class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Id</th>
                                        <th class="wd-15p border-bottom-0">User Group Name</th>
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th class="wd-15p border-bottom-0">Updated at</th>
                                        <th class="wd-20p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="change-role">
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td>{{ $role->updated_at }}</td>
                                            <td class="align-middle">
                                                <div class="btn-group align-top">
                                                    @if ($confirming === $role->id)
                                                        <button type="button" class="btn btn-icon  btn-primary"
                                                            wire:click.prevent="deleteRole({{ $role->id }})"><i
                                                                class="fe fe-check"></i></button>
                                                        <button type="button" class="btn btn-icon  btn-danger"
                                                            wire:click.prevent="Canceldelete()"><i
                                                                class="fe fe-x"></i></button>
                                                    @else
                                                        <button type="button" class="btn btn-icon  btn-info mr-1"
                                                            wire:click.prevent="RoleShow({{ $role->id }})"><i
                                                                class="fe fe-edit"></i></button>
                                                        <button type="button" class="btn btn-icon  btn-danger"
                                                            wire:click.prevent="confirmdelete({{ $role->id }})"><i
                                                                class="fe fe-trash"></i></button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $roles->links() }}
                        </div>
                    </div>
                    <!--/div-->
                </div>
            </div>
        </div>
    </div>
</div>
