
<!--header-->
	<?php include 'header.php';?>
<!--End header-->
<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Forget Password</h2>
        </div>
       <!--  <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Login</li>
        </ul>  -->
    </div>
</section>
<!--End Page Title-->

<div class="login_wrapper loging_sep forget_pass">
    <div class="container">
        <div class="login-register">
          <div class="register text-center form_ps">
                            <form id="contact_form" name="contact_form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="email" name="form_email" class="form-control" value="" placeholder="Email id" required="">
                                        </div>
                                    </div>
                                    
                                   <!--  <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Confirm Password" required="">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group form-bottom">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="thm-btn bg-clr1 sbmit" type="submit" data-loading-text="Please wait...">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <p>Please enter the email address you used to setup your account.</p>
                            <p>We will send you and email with instructions and a link to reset password.</p>
                            <div class="forgot">
                                <a href="reset-password.html">Reset Password</a>
                            </div>
                                        
                        </div> 
        </div> 
  </div>
</div>


<!--Footer-->
	<?php include 'footer.php';?>
<!--End Footer-->



<script type="text/javascript">
        $(document).ready(function(){
            
            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn thm-btn bg-clr1 sw-btn-finish')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn thm-btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });


            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'default',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarButtonPosition: 'end',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
            });


            // // External Button Events
            // $("#reset-btn").on("click", function() {
            //     // Reset wizard
            //     $('#smartwizard').smartWizard("reset");
            //     return true;
            // });

            // $("#prev-btn").on("click", function() {
            //     // Navigate previous
            //     $('#smartwizard').smartWizard("prev");
            //     return true;
            // });

            // $("#next-btn").on("click", function() {
            //     // Navigate next
            //     $('#smartwizard').smartWizard("next");
            //     return true;
            // });

            // $("#theme_selector").on("change", function() {
            //     // Change theme
            //     $('#smartwizard').smartWizard("theme", $(this).val());
            //     return true;
            // });

            // // Set selected theme on page refresh
            // $("#theme_selector").change();
        });
    </script>

</div>
</body>
</html>