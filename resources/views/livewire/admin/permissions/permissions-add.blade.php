<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Permission </h3>
            </div>
            <div class="card-body pb-2">
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
                <form>
                    @csrf
                    <div class="expanel expanel-default">
                        <div class="expanel-heading">
                            <h3 class="expanel-title" style="text-align: center">Permission Information
                            </h3>
                        </div>

                        <div class="expanel-body">
                            <div class="row row-sm">
                                <div class="col-3 mb-3">
                                    <label class="col-md-12 form-label">Permission Name</label>
                                    <input class="form-control mb-4" placeholder="Permission Name" type="text"
                                        wire:model.defer='name' value='{{ old('name') }}'>
                                </div>
                                <div class="col-1 mb-3">
                                    <label class="col-md-12">.</label>
                                    <span class="btn btn-success " wire:click="get_title_and_group()">
                                        <i class="fa fa-exchange"></i>
                                    </span>
                                </div>
                                <div class="col-4 mb-4">
                                    <label class="col-md-12 form-label">Permission title</label>
                                    <input class="form-control mb-4" placeholder="Permission title" type="text"
                                        wire:model='title' value='{{ old('title') }}'>
                                </div>
                                <div class="col-4 mb-4">
                                    <label class="col-md-12 form-label">Permission group</label>
                                    <input class="form-control mb-4" placeholder="Permission groupe" type="text"
                                        wire:model='groupe' value='{{ old('groupe') }}'>
                                </div>
                            </div>

                            <div>
                                <input type="button" value="Save" name="action" wire:click="PermissionAdd()"
                                    class="btn btn-primary mt-4 mb-0">
                                <button type="button" wire:click="Close()" class="btn btn-danger mt-4 mb-0">
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
