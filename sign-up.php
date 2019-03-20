
<!--header-->
	<?php include 'header.php';?>
<!--End header-->
<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Registration</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Registration</li>
        </ul> 
    </div>
</section>
<!--End Page Title-->

<div class="login_wrapper">
    <div class="container">
     
      <div id="smartwizard" class="login-register login-area">
            <ul>
                <li><a href="#label-1">General Information</a></li>
                <li><a href="#label-2">License Information</a></li>
                <li><a href="#label-3">Firm/Company Details</a></li>
               <!--  <li><a href="#step-4">Step 4<br /><small>This is step description</small></a></li> -->
            </ul>

            <div>
                <div id="label-1" class="tab-pane step-content" style="display: block;">
                    <!-- <h3 class="border-bottom border-gray pb-2">Step 1 Content</h3> -->
                   <div class="register form_ps">
                           
                    <form id="contact_form1" name="contact_form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input type="text" name="form_name" class="form-control" value="" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input type="email" name="form_email" class="form-control" value="" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    

<div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="email" name="form_email" class="form-control" value="" placeholder="Personal Email id" required="">
                                        </div>
                                    </div><div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="text" name="form_email" class="form-control" value="" placeholder="Official Email Id" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Mobile Number" required="">
                                        </div>
                                    </div>
<div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Direct Phone" required="">
                                        </div>
                                    </div>

<div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Skype Id" required="">
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Confirm Password" required="">
                                        </div>
                                    </div><div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input type="text" name="form_add" class="form-control" value="" placeholder="address" required="">
                                        </div>
                                    </div>

<div class="col-md-6 col-sm-6 col-12 state">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">State *</option>
                                    <option>MP</option>
                                    <option>UP</option>
                                    <option>Gujarat</option>
                                    <option>Bihar</option>
                                    <option>Rajasthan</option>
                                </select>
                            </div>
<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
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
                                <input type="text" name="code" placeholder="Pin Code *" required="">
                            </div>


                                </div>
                            </form>
                             
                          
                        </div>

                </div>
                <div id="label-2" class="">
                    <!-- <h3 class="border-bottom border-gray pb-2">Step 2 Content</h3> -->
               <div class="register form_ps">

                    <form id="contact_form2" name="contact_form" action="sendmail.php" method="post">
                        <div class="row clearfix">
                          <div class="col-md-6 col-sm-6 col-12 state">
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">License State *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <input type="text" name="code" placeholder="License Number *" required="">
                        </div>

                        <div class="col-md-6 col-sm-6 col-12 licensestatus">
                            
                            <select class="select" name="Depertment">
                                <option selected="selected" disabled="">License Status *</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>


                        <div class="col-md-6 col-sm-6 col-12">
                            <input type="text" name="code" placeholder="License Expiration *" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 col-12 mb-2 title_md">
                             <h4>Location Serviced</h4>
                        </div>

                        <div class="col-md-6 col-sm-6 col-12 locatsrvc">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Location State *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12 cities">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Location Cities *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                               
                            </div>   
                            </form>

                             
                   </div>

                </div>
                <div id="label-3" class="">
                   <div class="register form_ps">
                    <form id="contact_form3" name="contact_form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input type="text" name="form_name" class="form-control" value="" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    
                                    


<div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <input type="email" name="form_email" class="form-control" value="" placeholder="Email id" required="">
                                        </div>
                                    </div>

<div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input type="text" name="form_add" class="form-control" value="" placeholder="address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Mobile Number" required="">
                                        </div>
                                    </div>


<div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="Skype Id" required="">
                                        </div>
                                    </div>
                                    

                                    

<div class="col-md-6 col-sm-6 col-12 state">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">State *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">City *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="code" placeholder="Pin Code *" required="">
                            </div>
<div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="code" placeholder="Website *" required="">
                            </div>
<div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="code" placeholder="Office Phone *" required="">
                            </div>

<div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="code" placeholder="EXT *" required="">
                            </div>

<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Firm/Company Size *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>

<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Designation *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>

<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Area of Service *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>

<div class="col-md-6 col-sm-6 col-12 city">
                                
                                <select class="select" name="Depertment">
                                    <option selected="selected" disabled="">Industry Served *</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>


                                </div>
                            </form>
                             
                   </div>
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