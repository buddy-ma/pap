<div>
    <div class="row flex-lg-nowrap mt-5">
        <div class="col-12">
            @if (Session::get('success'))
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>{{ Session::get('success') }}
                </div>
            @endif
            <div class="row flex-lg-nowrap">
                <div class="col-lg-9">
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-xl-4 col-6">
                                <div class="card item-card">
                                    <div class="card-header">
                                        <div class="card-title"> {{ $product->title }}</div>
                                        @if ($status == 1)
                                            <button wire:click="turnOff({{ $product->id }})" type="button"
                                                class="btn btn-icon btn-danger ml-auto"><i
                                                    class="fe fe-trash"></i></button>
                                        @else
                                            <button wire:click="turnOn({{ $product->id }})" type="button"
                                                class="btn btn-icon btn-danger ml-auto"><i
                                                    class="fe fe-trash"></i></button>
                                        @endif

                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            @if ($product->first_image() !== null)
                                                <img src="{{ URL::asset('storage/product/images/' . $product->first_image()->image) }}"
                                                    alt="img" class="img-fluid w-100" style="max-height: 240px">
                                            @else
                                                <img src="{{ URL::asset('admin_assets/images/products/1.jpg') }}"
                                                    alt="img" class="img-fluid w-100">
                                            @endif
                                        </div>
                                        <div class="card-body px-0 row pb-0">
                                            <div class="col-12 mb-3">
                                                <i class="fe fe-eye"></i> {{ $product->vues }} vues
                                            </div>
                                            <div class="col-12 mb-3">
                                                <i class="fe fe-phone"></i> {{ $product->vues_phone }} vues telephone
                                            </div>
                                            <div class="col-12">
                                                <i class="fe fe-send"></i> {{ count($product->contacts) }} rempli le
                                                formulaire
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center pb-4 pl-4 pr-4">
                                        <a href="/admin/products/edit/{{ $product->id }}"
                                            class="btn btn-primary btn-block mb-2">
                                            <i class="fe fe-edit mr-1"></i>Modifier</a>
                                        <a href="/produit/{{ $product->slug }}" target="_blank"
                                            class="btn btn-success btn-block mb-2">
                                            <i class="fe fe-eye mr-1"></i>Voir</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-warning d-block w-100" role="alert">
                                <i class="fa fa-exclamation mr-2" aria-hidden="true"></i> No products!
                            </div>
                        @endforelse

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="card-title"> Categories &amp; Fliters</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mt-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" wire:model="selected_category">
                                            <option value="0">--Select--</option>
                                            @foreach ($categories as $ctg)
                                                <option value="{{ $ctg->id }}">{{ $ctg->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select class="form-control" wire:model="selected_type">
                                            <option value="0">--Select--</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <label class="custom-switch"
                                            @if ($status == 1) wire:click="off" @else wire:click="on" @endif>
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">
                                                @if ($status == 1)
                                                    Juste Désactivés
                                                @else
                                                    Juste activés
                                                @endif
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
