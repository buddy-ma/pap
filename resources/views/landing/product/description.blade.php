<div class="row">
    <div class="col-8">
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3">{{ $product->description }}</p>
        </div>
    </div>
    <aside class="col-lg-4 col-md-12 car">
        <div class="single widget">
            <div class="sidebar">
                <div class="widget-boxed mt-33">
                    <div class="widget-boxed-header">
                        <h4>Agent Information</h4>
                    </div>
                    <div class="widget-boxed-body">
                        <div class="sidebar-widget author-widget2">
                            <div class="agent-contact-form-sidebar">
                                <h4>Contact</h4>
                                <form name="contact_form" method="post" action="functions.php">
                                    <input type="text" id="fname" name="full_name" placeholder="Full Name"
                                        required />
                                    <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number"
                                        required />
                                    <input type="email" id="emailid" name="email_address"
                                        placeholder="Email Address" required />
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <input type="submit" name="sendmessage" class="multiple-send-message"
                                        value="Submit Request" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
