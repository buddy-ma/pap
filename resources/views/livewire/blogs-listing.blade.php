<div>

    {{-- @if($status==1)
    <div class="text-center">
        <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-trash"></i> Refuse</button>
    </div>
    @elseif($ismodified == 0)
    <div class="text-center">
    {{-- @elseif(non accepted and modified) --}}
{{-- 1 --}}    @if(( $status == 0 && $model->ismodified == 1) || ($model->modifications==0 && $status == 0 && $model->ismodified==0) ) 
    <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-trash"></i> Refuse</button>
    <button wire:click="accept" class="btn btn-icon  btn-success"><i class="fe fe-check"></i> Accept</button>
    @elseif($status==1)
    <div class="text-center">
        <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-trash"></i> Refuse</button>
    </div>
    @elseif($model->ismodified == 0 && $status==0)
        <button wire:click="accept" class="btn btn-icon btn-success"><i class="fe fe-check"></i> Accept</button>
    @endif
    {{-- Modal --}}

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add your Remarks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
            <form method="post">
                <div class="modal-body">
                <div class="col-lg">
                    <textarea name="correction" id="" cols="65" rows="10" wire:model="corrections" required></textarea>
                    @error('corrections') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="submit" wire:click.prevent="refuse" class="btn btn-danger close-modal" >Yes, Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
    
</div>
