<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- <div style="width: 150px;height:50px;background-color:rgb(238, 231, 255);position: absolute;
    z-index: 10000;
    right: 0;
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;">
    <div class='dot-spin' style="

    margin-left:30px ;
    margin-top: 20px;"></div>
    </div> --}}

    <div wire:loading
        style="width:100%;height:100%;background-color:rgb(238, 231, 255,0.5);position: absolute;
    z-index: 10000;
    right: 0;
    left: 0;
    ">
        <div class='do        <div class=' dot-spin' style="top:50%;margin:auto"></div>
    </div>

    <div class="text-right">
        <button wire:click="change(1)"
            class="btn btn-outline-info @if ($is_agency == 1) bg-info text-white @endif  mt-4 mb-4 mr-4">
            Admin Permmissions </button>
        <button wire:click="change(2)"
            class="btn btn-outline-info @if ($is_agency == 2) bg-info text-white @endif mt-4 mb-4 mr-4">
            Agency Permmissions </button>

    </div>

    @can('permission-create')
        <div class="container-fluid mb-2">
            <div class="row">
                <div class="col-2">
                    <button wire:click="ShowAddPermission()" type="button" class="btn btn-primary"><i
                            class="fe fe-plus mr-2"></i>Add Permission</button>
                </div>

            </div>
        </div>
    @endcan


    {{-- Do your work, then step back. --}}
    @if ($ShowAddPermission == true)
        @include('livewire.admin.permissions.permissions-add')
    @elseif($ShowupdatePermission == true)
        @include('livewire.admin.permissions.permissions-update')
    @endif

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    <div class="e-table">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div id="example1_filter" class="dataTables_filter">
                                    <div id="example1_filter" class="dataTables_filter float-right text-left">

                                        <label class="float-right"><input class="form-control form-control-sm"
                                                placeholder="Search..." wire:model='search'></label>
                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left"
                                        style="max-width: 40px; display: inline-block">
                                        <span>&#8203;</span>
                                        <select wire:model='perPage' name="example1_length" aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left ml-3"
                                        style="width: 300px; display: inline-block">
                                        <span>Filter by :</span>
                                        <select wire:model='selected_group' name="example1_length"
                                            aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option>Permission Group</option>
                                            @foreach ($groups as $grp)
                                                <option value="{{ $grp->p_group }}">{{ $grp->p_group }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left ml-3"
                                        style="width: 20px; display: inline-block">
                                        <span>&#8203;</span>
                                        <label class="float-right ml-3">
                                            <button class="btn btn-danger form-control-sm" wire:click="resetgroup">
                                                <i class="fa fa-close" style="line-height: 20px"></i>
                                            </button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-lg mt-3">
                                <table
                                    class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("id")'>Id <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("p_group")'>
                                                Permission Group <i class="float-right fa fa-unsorted"
                                                    style="line-height: 20px"></i></th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("title")'>Name <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("name")'>Code <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0">Created at</th>
                                            <th class="wd-15p border-bottom-0">Updated at</th>
                                            <th class="wd-20p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change-permission">
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $permission->id }}</td>
                                                <td>{{ $permission->p_group }}</td>
                                                <td>{{ $permission->title }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->created_at }}</td>
                                                <td>{{ $permission->updated_at }}</td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        @if ($confirming === $permission->id)
                                                            <button type="button" class="btn btn-icon  btn-primary"
                                                                wire:click.prevent="deletePermission({{ $permission->id }})"><i
                                                                    class="fe fe-check"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="Canceldelete()"><i
                                                                    class="fe fe-x"></i></button>
                                                        @else
                                                            <button type="button" class="btn btn-icon  btn-info mr-1"
                                                                wire:click.prevent="PermissionShow({{ $permission->id }})"><i
                                                                    class="fe fe-edit"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="confirmdelete({{ $permission->id }})"><i
                                                                    class="fe fe-trash"></i></button>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($paginate == 1)
                                    {{ $permissions->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
