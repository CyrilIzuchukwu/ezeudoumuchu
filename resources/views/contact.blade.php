@extends('layout.app')
@section('content')

<div class=" banner-area" style="padding: 90px 0px !important;">
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
                                <div class="icon-box ibox-secondary ibox-outline ">
                                    <div class="ibox-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <h3>Name</h3>
                                    <address>Dr. Chibueze Ofobuike <br> (Mayor, Aguata LGA) </address>
                                    <span>Burial Planning Commitee Chairman</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-6">
                                <div class="icon-box ibox-secondary ibox-outline">
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
                        <form method="post" id="contact-form" class="contact-form clearfix" action="">

                            <label for="name">Your Name (required)</label>
                            <input name="name" type="text" id="name" name="user_name" class="form-control" placeholder="your name">
                            <label for="email">Your Email (required)</label>
                            <input name="email" type="text" id="email" name="user_email" class="form-control" placeholder="name@example.com">

                            <label for="message">Your Message</label>
                            <textarea cols="2" rows="2" id="message" name="user_message" placeholder="Leave your message here" class="form-control"></textarea>

                            <input type="submit" class="button btn-primary" value="Send Message">
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
        <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Anambra%20state,%20umuchu+(Map%20Direction)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">hiking gps</a></iframe></div>
    </div>


</div>

<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
    // Initialize EmailJS
    (function() {
        emailjs.init("public key");
    })();

    // Handle form submission
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Show a loading indicator if needed
        const formMessage = document.querySelector(".form-message");
        formMessage.textContent = "Sending...";

        // Use EmailJS to send the form data
        emailjs
            .sendForm("service code", "template code", this)
            .then(() => {
                formMessage.textContent = "Message sent successfully!";
                formMessage.style.color = "green";
                this.reset();
            })
            .catch((error) => {
                console.error("Error:", error);
                formMessage.textContent = "Failed to send the message. Please try again.";
                formMessage.style.color = "red";
            });
    });
</script>
<script src="assets/js/vendor/jquery.min.js"></script>

@endsection