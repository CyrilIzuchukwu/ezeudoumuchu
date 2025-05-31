@extends('layout.app')
@section('content')

<div class=" banner-area">
    <div class="overlay"></div>
    <!-- start page banner -->
    <div class="">
        <!-- start container -->
        <div class="container bannner-content">
            <h1>Contact Us</h1>
        </div>
        <!-- end container -->
    </div>
    <!-- end page banner -->
</div>


<div class="main" role="main">
    <div id="content" class="content full padding-tb20">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class=" contact-row row justify-content-center align-items-center">
                <div class="col-md-7">
                    <h1 class="contact-header">Contact Us</h1>
                    <p>For all inquiries related to the burial proceedings, kindly contact the committee chairman whose details are provided below</p>
                    <div class="spacer-45"></div>
                    <!-- start contact us -->
                    <div class="contact-us">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-md-7 col-sm-6">
                                <div class="icon-box ibox-secondary ibox-outline margin-70">
                                    <div class="ibox-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <h3>Name</h3>
                                    <address>Dr. Chibueze Ofobuike <br> (Mayor, Aguata LGA) </address>
                                    <span>Burial Planning Commitee Chairman</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-6">
                                <div class="icon-box ibox-secondary ibox-outline margin-70">
                                    <div class="ibox-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h3>PHONE</h3>
                                    <span>08063306798</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end contact us -->
                </div>
                <div class="col-md-5">
                    <div class="contact-form-wrapper pull-top">
                        <p class="margin-35">Feel free to contact us if you have any further questions.</p>
                        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="">

                            <label for="name">Your Name (required)</label>
                            <input name="name" type="text" id="name" class="form-control" placeholder="">
                            <label for="email">Your Email (required)</label>
                            <input name="email" type="text" id="email" class="form-control" placeholder="">

                            <label for="message">Your Message</label>
                            <textarea name="message" cols="2" rows="2" id="comments" class="form-control" placeholder=""></textarea>
                            <input name="submit" type="submit" class="button btn-primary" value="Send Message">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="spacer-60"></div>
        <div class="np-links">
            <div class="row">
            </div>
        </div>

        <div class="footer-img">
            <img src="{{ asset('assets/images/flower1-300x300.jpg') }}" alt="">
        </div>
    </div>
</div>



<div class="map-wraper">
    <div class="map-wraper-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
    </div>
</div>




@endsection
