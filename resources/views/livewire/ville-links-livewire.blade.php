<div>

    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Ajouter des liens</h4>
            <ol class="breadcrumb">
                @isset($links[0]->ville->title)
                    <li class="breadcrumb-item"><i class="fe fe-layout  mr-2 fs-14"></i>{{ $links[0]->ville->title }}</li>
                @else
                    <li class="breadcrumb-item"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</li>
                @endisset
                <li class="breadcrumb-item active" aria-current="page"><a href="">Ajouter des liens</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ $message }}.
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    @if ($edit)
                        <h3 class="card-title">Modifier lien </h3>
                    @else
                        <h3 class="card-title">Ajouter lien </h3>
                    @endif
                </div>
                <div class="card-body pb-2">
                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <label>Titre*</label>
                                <input type="text" wire:model="title" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg">
                                <label class="d-block">Link </label>
                                <input wire:model="link" type="text" class="form-control" />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    @if ($edit)
                        <button wire:click="update" type="button" class="btn btn-warning">Update</button>
                    @else
                        <button wire:click="store" type="button" class="btn btn-success">Save</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tous les liens </h3>
                </div>
                <div class="card-body pb-2">
                    <ul class="list-group mb-0">
                        @foreach ($links as $link)
                            <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 "
                                tabindex="0">
                                <h5 class="d-inline">{{ $link->title }}</h5>
                                <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                    <strong>
                                        <a wire:click="edit({{ $link->id }})" style="cursor: pointer"> Edit
                                        </a>
                                        |
                                        <a wire:click="delete({{ $link->id }})" style="cursor: pointer">
                                            Delete
                                        </a>
                                    </strong>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
