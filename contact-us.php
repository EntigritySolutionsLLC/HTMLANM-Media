
<!--header-->
	<?php include 'header.php';?>
<!--End header-->


<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg);">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Contact Us</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Contact Us</li>
        </ul> 
    </div>
</section>
<!--End Page Title-->


<!--Contact Section-->
<section class="contact-section sp-ten">
    <div class="container">
        <div class="map-area pb-two">
            <div class="google-map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.7907448833635!2d-73.98985568415827!3d40.74462977932838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a614ccab0b%3A0xfc98b3faf0ce90dc!2s244+5th+Ave+%232412%2C+New+York%2C+NY+10001%2C+USA!5e0!3m2!1sen!2sin!4v1551803611375" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="contact-area">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="left-side">
                        <div class="text-title">
                            <h5>Communicate us</h5>
                        </div>
                        <div class="social-links">
                            <div class="item">
                                <div class="icon-box">
                                    <i class="flaticon-home-button"></i>
                                </div>
                                <div class="icon-text">
                                    <p>244 Fifth Avenue, Suite 2412,<br>New York, N.Y. 10001</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="icon-text">
                                    <p>(646-688-2884)<br>(1-8413-7890-1990-170)</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-box">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="icon-text">
                                    <p>info@nfcpa.org<br>editor@nfcpa.org</p>
                                </div>
                            </div>
                        </div>                                           
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="right-side">
                        <div class="text-title"> 
                            <h5>Contact form</h5>
                        </div>
                        <form id="contact_form" name="contact_form" action="sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control" value="" placeholder="Your Email *" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="form_website" class="form-control" value="" placeholder="Website *" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Type Your Message Here . . ."></textarea>
                                    </div>
                                    <div class="form-group form-bottom">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</section>
<!--End Contact Section-->

<!--Footer-->
	<?php include 'footer.php';?>
<!--End Footer-->

</div>
</body>
</html>