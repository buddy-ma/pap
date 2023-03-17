<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add SubCategorie </h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    @csrf
                    <div class="card-body pb-2">
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

                        <div class="row row-sm">
                            <div class="col-lg">
                                <label class="col-md-12 form-label">Categorie</label>
                                <input class="form-control mb-4" placeholder="Categorie" type="text"
                                    wire:model.defer='categorie_title'>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" wire:click="updateCategory">
                    Submit</button>
                <button class="btn btn-danger" wire:click="resetInput">
                    Back</button>
            </div>
        </div>
    </div>
</div>
