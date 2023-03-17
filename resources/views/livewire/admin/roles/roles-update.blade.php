<div>
    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="card-title">Update Roles </h3>
                    </div>
                    <div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert"><button type="button" class="close"
                                    data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ $message }}.
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div>
                                <strong class="text-danger">Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <form>
                        @csrf
                        <div class="expanel expanel-default">
                            <div class="expanel-heading">
                                <h3 class="expanel-title" style="text-align: center">User Group Information &nbsp
                                </h3>
                            </div>

                            <div class="expanel-body">
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="col-md-12 form-label">Role Name</label>
                                        <input class="form-control mb-4" placeholder="Role Name" type="text"
                                            wire:model='name' value='{{ old('name') }}'>
                                    </div>

                                    <div class="col-lg">
                                        <div class="col-md-12" style="max-height: 500px ; overflow:auto">
                                            <div class="e-table">
                                                <div class="table-responsive table-lg mt-3">
                                                    <table
                                                        class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                                        <tbody>
                                                            <tr
                                                                @isset($select[0]) style="background-color:#f4eefd"
                                                                @endisset>
                                                                <td><label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="example-checkbox1" value="1"
                                                                            wire:model="select.0"
                                                                            wire:click="selectAll()"> <span
                                                                            class="custom-control-label"></span>
                                                                    </label></td>
                                                                <td></td>
                                                                <td>Select All</td>
                                                            </tr>
                                                            @foreach ($permissions as $permission)
                                                                <tr
                                                                    @isset($select[$permission->id])
                                                                style="background-color:#f4eefd" @endisset>
                                                                    <td><label class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="example-checkbox1"
                                                                                value="{{ $permission->id }}"
                                                                                wire:model="select.{{ $permission->id }}">
                                                                            <span class="custom-control-label"></span>
                                                                        </label></td>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $permission->name }}</td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" value="Update" name="action" wire:click="RoleUpdate()"
                                            class="btn btn-primary mt-4 mb-0">
                                        <button type="button" wire:click="Close()" class="btn btn-danger mt-4 mb-0">
                                            Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
