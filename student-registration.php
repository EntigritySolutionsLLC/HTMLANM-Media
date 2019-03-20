
<!--header-->
	<?php include 'header.php';?>
<!--End header-->

<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Student Registration</h2>
        </div>
       <!--  <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Login</li>
        </ul>  -->
    </div>
</section>
<!--End Page Title-->

<div class="login_wrapper student_registration">
    <div class="container">
        <div class="login-register">
          <form id="contact_form" name="contact_form" class="form_ps" action="sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" value="" placeholder="First Name *" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" value="" placeholder="Last Name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control" value="" placeholder="Your Email *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="phone" class="form-control" value="" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 state">
                                    <select class="select" name="State">
                                        <option selected="selected" disabled="">State *</option>
                                        <option>MP</option>
                                        <option>UP</option>
                                        <option>Gujarat</option>
                                        <option>Bihar</option>
                                        <option>Rajasthan</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 city">
                                  <select class="select" name="City">
                                    <option selected="selected" disabled="">City *</option>
                                    <option>Ahmedabad</option>
                                    <option>Indore</option>
                                    <option>Gwalior</option>
                                    <option>Bhopal</option>
                                    <option>Jabalpur</option>
                                    <option>Udaiypur</option>
                                    <option>Jaipur</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="zcode" placeholder="Zip Code *" required="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="skype" class="form-control" value="" placeholder="Skype Id *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="university" class="form-control" value="" placeholder="University" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="adds" class="form-control" value="" placeholder="Address 1" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="adds" class="form-control" value="" placeholder="Address 2" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                       <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input class="form-control" type="text" readonly />
                                             <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-sm-12">
                                    <div class="form-group form-bottom text-center">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
        </div> 
  </div>
</div>


<!--Footer-->
	<?php include 'footer.php';?>
<!--End Footer--> 

</div>
</body>
</html>