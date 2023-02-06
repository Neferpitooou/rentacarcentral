<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d501371.39458311803!2d124.51913510486152!3d10.966088398582086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1669372586241!5m2!1sen!2sph" width="1155" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7826.5030398488325!2d125.001011!3d11.2428989!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x330877007d8af2e3%3A0x11e6d7d4c3f3e2f8!2sTacloban%20Rent%20a%20Car%20Burgos%20St%20Downtown%2C%20Tacloban%20City%206500%20Leyte!3m2!1d11.2428989!2d125.00101099999999!5e0!3m2!1sen!2sph!4v1675076086858!5m2!1sen!2sph"
                    width="1155" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 pt-3">
                <div class="contact_info">
                    <p>If you got any questions, please do not hesitate to send us a message. We reply within 24 hours!
                    </p>
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Leyte</h6>
                        <p>Philippines 6541</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">Contact: (+63) 912 874 7123</a></h6>
                        <p>Mon to Fri 8am to 5 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">rentacarcentral@gc0de.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-3">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Enter Message"></textarea>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn theme_btn button_hover">Send
                                Message</button>
                        </div>
                        <!-- </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Thank you</h2>
                <p>Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Sorry !</h2>
                <p> Something went wrong </p>
            </div>
        </div>
    </div>
</div>
<!--================End Contact Success and Error message Area =================-->