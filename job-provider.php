
<!--header-->
	<?php include 'header.php';?>
<!--End header-->

<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Job Provider</h2>
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
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="bg_heading text-center mb-4"><h3 class="m-0">Post Your Jobs</h3></div>    
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="cmpname" class="form-control" value="" placeholder="Company Name *" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" value="" placeholder="Designation" required="">
                                    </div>
                                </div>
                                  <div class="col-md-6 col-sm-6 col-12">
                                     <input type="text" name="zcode" placeholder="Zip Code *" required="">
                                   </div>
                                
                                <div class="col-md-6 col-sm-6 col-12 state">
                                    <select class="select" name="Company Size">
                                        <option selected="selected" disabled="">Company Size</option>
                                        <option>SOLE PROPRIETOR</option>
                                        <option>1 to 3</option>
                                        <option>4 to 10</option>
                                        <option>10 to 20</option>
                                        <option>20+</option>
                                    </select>
                                </div>
                            
                               
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="location" class="form-control" value="" placeholder="Location" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="salary" class="form-control" value="" placeholder="Salary" required="">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" value="Job Description" placeholder="Job Description" required=""></textarea>
                                    </div>
                                </div>
                                 
                                <div class="col-xl-12 col-sm-12">
                                    <div class="form-group form-bottom text-center">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">Submit</button>
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