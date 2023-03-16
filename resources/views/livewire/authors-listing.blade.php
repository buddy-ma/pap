
<div class="row">
    <div class="col-xl-4">
        <div class="form-group">
            <label class="custom-switch">
                <span class="custom-switch-description mr-2">{{$status ? 'Enable' : 'Disable'}}</span>
                <input wire:model.lazy="status" role="switch" type="checkbox" name="toggle" class="custom-switch-input"  @if($status) checked @endif >
                <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
            </label>
        </div>
    </div>
</div>
