<div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Product </h3>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Promoteur / Proprietaire</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Prenom*</label>
                                                <input type="text" wire:model="firstname" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nom*</label>
                                                <input type="text" wire:model="lastname" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telephone*</label>
                                                <input type="text" wire:model="phone" maxlength="10"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" wire:model="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="expanel-footer">
                                            <div class="form-group mb-0">
                                                <label class="custom-switch">
                                                    <input type="checkbox" wire:click="is_promoteur()"
                                                        class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Promoteur ?</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="expanel-footer">
                                            <div class="form-group mb-0">
                                                <label class="custom-switch">
                                                    <input type="checkbox" wire:click="is_commercial()"
                                                        class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Commercial ?</span>
                                                </label>
                                            </div>
                                        </div>
                                        @if ($is_promoteur)
                                            <div class="expanel-body">
                                                <label class="form-label">Logo*</label>
                                                <input type="file" class="dropify" data-height="180"
                                                    wire:model="logo" />
                                            </div>
                                            <div class="expanel-body">
                                                <label class="form-label">PDF</label>
                                                <input type="file" class="dropify" data-height="180"
                                                    wire:model="pdf" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Produit</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Category*</label>
                                                <select wire:model="category" class="form-control">
                                                    <option>Select option</option>
                                                    @foreach ($productcategories as $pc)
                                                        <option value="{{ $pc->id }}">{{ $pc->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Type*</label>
                                                <select wire:model="type" class="form-control">
                                                    <option>Select option</option>
                                                    @foreach ($producttypes as $pt)
                                                        <option value="{{ $pt->id }}">{{ $pt->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Titre*</label>
                                                <input type="text" wire:model="title" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Reference*</label>
                                                <input type="text" wire:model="reference" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Description*</label>
                                                <textarea wire:model="description" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Prix*</label>
                                                <input type="number" wire:model="prix" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Ville*</label>
                                                <input type="text" wire:model="ville" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Quartier*</label>
                                                <input type="text" wire:model="quartier" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Addresse*</label>
                                                <input type="text" wire:model="address" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Unite Surface</label>
                                                <select wire:model="unite_surface" class="form-control"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option>Select option</option>
                                                    <option value="m²">m²</option>
                                                    <option value="hec">hec</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Surface*</label>
                                                <input type="text" wire:model="surface" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nbr Chambres*</label>
                                                <input type="number" wire:model="nbr_chambres"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nbr Salons</label>
                                                <input type="number" wire:model="nbr_salons" class="form-control" />
                                            </div>

                                            @if ($category == 3)
                                                <div class="form-group">
                                                    <label class="form-label">Disponibilite</label>
                                                    <input type="text" wire:model.defer="disponibilite"
                                                        class="form-control" value="Livraison ..." />
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label class="form-label">Video</label>
                                                <input type="text" wire:model="video" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Visite Virtuelle</label>
                                                <input type="text" wire:model="vr" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Position</label>
                                                <div class="input-group">
                                                    <input type="text" wire:model="position"
                                                        class="form-control" />
                                                    @if (!$clicked)
                                                        <button class="btn btn btn-primary br-tl-0 br-bl-0"
                                                            type="button" wire:click="getSrc()">save</button>
                                                    @endif
                                                </div>
                                            </div>
                                            @if ($category == 1 || $category == 3)
                                                <div class="form-group">
                                                    <label class="form-label">Surface Habitable</label>
                                                    <input type="text" wire:model="surface_habitable"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Surface Terrain</label>
                                                    <input type="text" wire:model="surface_terrain"
                                                        class="form-control" />
                                                </div>
                                            @endif

                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group">
                                                <label class="form-label">Extras</label>
                                                @foreach ($productextras as $extra)
                                                    <label class="custom-control custom-checkbox">
                                                        <input wire:model="hasextras.{{ $extra->id }}"
                                                            type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="{{ $extra->title }}">
                                                        <span class="custom-control-label">{{ $extra->title }}</span>
                                                    </label>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Images</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="row">
                                                @foreach ($images as $key => $img)
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label">Image {{ $loop->iteration }}*</label>
                                                        <input type="file" data-height="100"
                                                            wire:model="images.{{ $key }}" />
                                                        <button class="btn btn-danger ml-auto float-right"
                                                            type="button"
                                                            wire:click="removeimg({{ $key }})">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            {{-- <button class="btn btn-primary btn-block" type="button"
                                                wire:click="addImage">
                                                Ajouter Image
                                            </button> --}}
                                        </div>
                                    </div>
                                </div>
                                @if ($category == 3)
                                    <div class="e-panel mt-3">
                                        <div class="expanel expanel-default">
                                            <div class="expanel-heading">
                                                <h3 class="expanel-title text-center">Biens inclus</h3>
                                            </div>
                                            <div class="expanel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-inbox table-hover text-nowrap mb-0">
                                                        <tbody>
                                                            @isset($productbiens)
                                                                @foreach ($productbiens as $key => $bien)
                                                                    <tr class="">
                                                                        <td
                                                                            class="view-message dont-show font-weight-semibold">
                                                                            {{ $bien['title'] }}
                                                                        </td>
                                                                        <td class="view-message">{{ $bien['price'] }} dh
                                                                        </td>
                                                                        <td class="view-message">{{ $bien['surface'] }}m²
                                                                        </td>
                                                                        <td class="view-message text-center font-weight-semibold"
                                                                            wire:click="removebien({{ $key }})">
                                                                            <i class="fe fe-trash"></i>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endisset
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="expanel-footer">
                                                <button class="btn btn-primary btn-block" type="button"
                                                    wire:click="addBien">
                                                    Ajouter Appartement
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
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
                        <div class="btn-list text-right">
                            <button type="button" wire:click="save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
