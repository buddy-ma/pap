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
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Categories</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Category*</label>
                                                <select wire:model="selected_category" class="form-control">
                                                    <option value="">Select option</option>
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Types</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                @foreach ($types as $type)
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5 "
                                                        tabindex="0">
                                                        @if ($type->id == $selected_type)
                                                            <div wire:click="selectType({{ $type->id }})"
                                                                style="cursor: pointer"
                                                                class="w-3 h-3 bg-success mr-3 mt-1 brround">
                                                            </div>
                                                        @else
                                                            <div wire:click="selectType({{ $type->id }})"
                                                                style="cursor: pointer"
                                                                class="w-3 h-3 bg-gray mr-3 mt-1 brround">
                                                            </div>
                                                        @endif
                                                        <h5 class="d-inline" style="cursor: pointer"
                                                            wire:click="selectType({{ $type->id }})">
                                                            {{ $type->title }}</h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="edit({{ $type->id }})"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="delete({{ $type->id }})"
                                                                    style="cursor: pointer">
                                                                    Delete
                                                                </a>
                                                            </strong>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="expanel-footer">
                                            @if (!empty($selected_category))
                                                <button class="btn btn-block btn-primary" type="button"
                                                    wire:click="add">Add</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Extras</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                @foreach ($extras as $extra)
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5"
                                                        tabindex="0">

                                                        <h5 class="d-inline">{{ $extra->title }}</h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="editExtra({{ $extra->id }})"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="deleteExtra({{ $extra->id }})"
                                                                    style="cursor: pointer">
                                                                    Delete
                                                                </a>
                                                            </strong>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="expanel-footer">
                                            @if (!empty($selected_category))
                                                <button class="btn btn-block btn-primary" type="button"
                                                    wire:click="addExtra">Add</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
