<div>

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="card-title">Add User </h3>
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
                                <h3 class="expanel-title" style="text-align: center">User Personal Information &nbsp
                                </h3>
                            </div>
                            <div class="expanel-body">
                                <div class="row row-sm">

                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="col-md-12 form-label">First Name</label>
                                                <input class="form-control mb-4" placeholder="First Name" type="text"
                                                    wire:model.defer='firstname' value='{{ old('firstname') }}'>
                                            </div>
                                            <div class="col-12">
                                                <label class="col-md-12 form-label">Last Name</label>
                                                <input class="form-control mb-4" placeholder="Last Name" type="text"
                                                    wire:model.defer='lastname' value='{{ old('lastname') }}'>
                                            </div>
                                            <div class="col-12">
                                                <label class="col-md-12 form-label">Email</label>
                                                <input class="form-control mb-4" placeholder="Email" type="text"
                                                    wire:model.defer='email' value='{{ old('email') }}'>
                                            </div>
                                            <div class="col-12">
                                                <label class="col-md-12 form-label">Phone </label>
                                                <input class="form-control mb-4" placeholder="Phone" maxlength="10"
                                                    type="text" wire:model.defer='phone'
                                                    value='{{ old('phone') }}'>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group ">
                                                    <label class="col-md-12 form-label">Password </label>
                                                    @if ($showpassword)
                                                        <input type="text" wire:model.defer="password"
                                                            class="form-control  @error('password') is-invalid @enderror"
                                                            placeholder="Password *">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <a wire:click="showpassword()"><i
                                                                        class="fe fe-eye"></i></a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <input type="password" wire:model.defer="password"
                                                            class="form-control  @error('password') is-invalid @enderror"
                                                            placeholder="Password *">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <a wire:click="showpassword()"><i
                                                                        class="fe fe-eye-off"></i></a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <a wire:click="rand_string()"><i
                                                                    class="fe fe-refresh-ccw"></i></a>
                                                        </div>
                                                    </div>

                                                    {{-- <div class="col-12" style="margin-top: 3.5%;">
                                                    <button type="button" class="btn btn-primary"
                                                        wire:click.prevent="rand_string()">Random</button>
                                                </div> --}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-4">
                                        <div class="row">

                                            <div class="col-lg">
                                                <label class="col-md-12 form-label">Zones</label>

                                                <div class="col-md-12" style="max-height: 376px; overflow-y:scroll">
                                                    <div class="e-table">
                                                        <div class="table-responsive table-lg mt-3">
                                                            <table
                                                                class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">

                                                                <tbody>
                                                                    {{-- <tr  >
                                                                        <td colspan='3'><input class="form-control mb-4" placeholder="Search" type="text" wire:model.defer='search' wire:keydown="Search()" ></td>
                                                                    </tr> --}}

                                                                    @foreach ($zones as $zone)
                                                                        <tr>
                                                                            <td width='10px'><label
                                                                                    class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="example-checkbox1"
                                                                                        value="{{ $zone->id }}"
                                                                                        wire:model="zoneSelect.{{ $zone->id }}"
                                                                                        wire:click="getRoles()">
                                                                                    <span
                                                                                        class="custom-control-label"></span>
                                                                                </label></td>
                                                                            <td width='50px'>{{ $loop->index + 1 }}
                                                                            </td>
                                                                            <td>{{ $zone->zone }}</td>
                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    @if ($getRoles)
                                        <div class="col-4">
                                            <div class="row">

                                                <div class="col-lg">
                                                    <label class="col-md-12 form-label">Roles</label>

                                                    <div class="col-md-12"
                                                        style="max-height: 376px; overflow-y:scroll">
                                                        <div class="e-table">
                                                            <div class="table-responsive table-lg mt-3">
                                                                <table
                                                                    class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">

                                                                    <tbody>
                                                                        {{-- <tr  >
                                                                        <td colspan='3'><input class="form-control mb-4" placeholder="Search" type="text" wire:model.defer='search' wire:keydown="Search()" ></td>
                                                                    </tr> --}}

                                                                        @foreach ($roles as $role)
                                                                            <tr>
                                                                                <td width='10px'><label
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            name="example-checkbox1"
                                                                                            value="{{ $role->name }}"
                                                                                            wire:model.defer="select.{{ $role->name }}">
                                                                                        <span
                                                                                            class="custom-control-label"></span>
                                                                                    </label></td>
                                                                                <td width='50px'>
                                                                                    {{ $loop->index + 1 }}
                                                                                </td>
                                                                                <td>{{ $role->name }}</td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    @endif


                                </div>

                                <div>
                                    <input type="button" value="   Save   " name="action" wire:click="UserAdd()"
                                        class="btn btn-primary mt-2 mb-2 ml-2 ">

                                    <button type="button" wire:click="Close()" class="btn btn-danger">
                                        Close</button>

                                </div>
                            </div>


                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function() {
            $('#select2-dropdown').select2();
        });
    </script>
@endpush
