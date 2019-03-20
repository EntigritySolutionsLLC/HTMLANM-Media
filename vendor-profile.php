
<!--header-->
	<?php include 'header.php';?>
<!--End header-->

<div class="master_profile_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg);">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Vendor Profile</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Vendor Profile</li>
        </ul> 
    </div>
</section>
<!--End Page Title-->


<div class="master_profile_content cart_menu_tab">
    <div class="container">
     <div class="row">   
        <ul class="nav nav-tabs tab_ul responsive col-lg-4 col-md-4 col-12" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#vedit_profile" role="tab">Edit Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="vendor-add-product.html">Product Information</a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="vendor-add-product.html">Add Product</a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#your_offer" role="tab">Your Offer</a>
    </li>
    

</ul>

 <div class="tab-content responsive col-lg-8 col-md-8 col-12">
    <div id="vedit_profile" class="container change_password tab-pane active" role="tabpanel">
      <div class="change_password_form form_ps">

                        <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>Vendor Information</h4>
                            </div>
                        </div>

                        <div class="row">
                           <form id="contact_form" name="contact_form" class="form_ps" action="sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" value="" placeholder="Firm Name" required="">
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
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="website" class="form-control" placeholder="Website" required="">
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
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="mobile no" class="form-control" value="" placeholder="Mobile No" required="">
                                    </div>
                                </div>
                            <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="skype" class="form-control" value="" placeholder="Skype Id *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="ext" class="form-control" value="" placeholder="EXT" required="">
                                    </div>
                                </div>
                               <div class="col-md-6 col-sm-6 col-12 offer-type">
                                  <select class="select" name="Select Offer Type">
                                    <option selected="selected" disabled="">Select Offer Type</option>
                                    <option>Products</option>
                                    <option>Solution</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 cate">
                                  <select class="select" name="Select Category">
                                    <option selected="selected" disabled="">Select Category</option>
                                    <option value="" selected="selected">Select Category</option><option value="1">ACCOUNTING</option><option value="5">APPS</option><option value="7">BUSINESS VALUATION</option><option value="8">DOCUMENT MANAGEMENT</option><option value="9">E-TOOLS</option><option value="10">E-SIGNATURES</option><option value="11">FINANCIAL PLANNING</option><option value="12">PRACTICE MANAGEMENT</option><option value="13">QUICKBOOKS ADD-ONS</option><option value="14">TAX SOFTWARE</option><option value="16">BILLING &amp; PAYMENTS</option><option value="17">TAX &amp; DOCUMENT AUTOMATION</option><option value="18">WORK FLOW</option><option value="19">HUMAN RESOURCE &amp; PAYROLL</option><option value="20">ACCOUNTING MARKETING</option>
                                    </select>
                                </div>
                                
                                <div class="col-xl-12 col-sm-12">
                                    <div class="form-group form-bottom text-center">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>  
    </div>

    <div id="your_offer" class="container mypostjobs tab-pane" role="tabpanel">
        <div class="posted_job form_ps">
                        <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>Select Your Offer</h4>
                            </div>
                        </div>

                        <label class="checkbox_ps"> Yes
              <div class="checkbx"> <input type="checkbox" checked="checked">
                 <span class="checkmark"></span></div>
            </label>

            <label class="checkbox_ps"> Custom
              <div class="checkbx"> <input type="checkbox">
                 <span class="checkmark"></span></div>
            </label>
                        
                    </div>  
    </div>

    </div>
</div>

    </div>
</div>


<!--Footer-->
	<?php include 'footer.php';?>
<!--End Footer-->


</div>
</body>
</html>