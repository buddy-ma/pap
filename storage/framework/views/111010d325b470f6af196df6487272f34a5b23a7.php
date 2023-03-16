<div>    
    <div class="container p-b-100">

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="title title3">
                    <div class="main-title">
                        <h2 class=" text-white">Get in touch <!DOCTYPE html></h2>
                    </div>
                    <div class="sub-title">
                        <p class="text-white">Leave your message here and we will get in contact soon.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6 p-r-0 map">
                <div class="iframe-container" style="background: #fff">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_shwltyny.json" style="width: 450px; height: 450px;" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
            <div class="col-xl-5 p-l-0 col-md-6 set-z-index form-footer">
                <div class="bg-white">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Fullname*</label>
                                    <input wire:model="fullname" class="form-control" id="name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Phone">Phone *</label>
                                    <input type="tel" pattern="[0-9]{10}" maxlength="10" id="phone" wire:model="phone" required
                                    class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Email">Email *</label>
                                    <input class="form-control" wire:model="email" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Subject">Reason *</label>
                                    <select class="form-control" model.model="reason" id="reason">
                                        <option value="service"> Need a service </option>
                                        <option value="question"> Ask a question</option>
                                        <option value="other"> Others </option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message *</label>
                            <input class="form-control" wire:model="message" type="text">
                        </div>

                        <button type="button" wire:click="save" class="btn btn-default primary-btn event-btn m-0-auto">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\BUDDY\buddy_old\resources\views/livewire/contact-livewire.blade.php ENDPATH**/ ?>