
<!--header-->
	<?php include 'header.php';?>
<!--End header-->

<div class="master_profile_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg);">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Update Profile</h2>
        </div>
        <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Update Profile</li>
        </ul> 
    </div>
</section>
<!--End Page Title-->


<div class="master_profile_content cart_menu_tab">
    <div class="container">
     <div class="row">   
        <ul class="nav nav-tabs tab_ul responsive col-lg-4 col-md-4 col-12" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#change_password" role="tab">Change Password</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#mypostjobs" role="tab">My Post Jobs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#myapplyjobs" role="tab">My Apply Jobs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#buy_practice" role="tab">Buy Practice</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#sell_practice" role="tab">Sell Practice</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#manage_review" role="tab">Manage Review</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#my_orders" role="tab">My Orders</a>
    </li>

</ul>

 <div class="tab-content responsive col-lg-8 col-md-8 col-12">
    <div id="change_password" class="container change_password tab-pane active" role="tabpanel">
      <div class="change_password_form form_ps">

                        <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>Change Your Profile Password</h4>
                            </div>
                        </div>

                        <div class="row">
                            <form>
                            <div class="col-md-12 col-sm-12 col-12 form-group">
                                <label for="oldpass" class="label">Old Password</label>
                                <input type="text" name="oldpass" placeholder="Old Password" required="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 form-group">
                                <label for="newpass" class="label">New Password</label>
                                <input type="text" name="newpass" placeholder="New Password" required="">
                            </div>

                             <div class="col-md-12 col-sm-12 col-12 form-group">
                                <label for="confirmpass" class="label">Confirm Password</label>
                                <input type="text" name="confirmpass" placeholder="Confirm Password" required="">
                            </div>

                            <div class="col-md-12 link-btn text-center mb-3 mt-3">
                                <a href="#" class="thm-btn bg-clr1 submit_btn color_black">Update Now</a>
                            </div>

                             </form>

                            <div class="col-md-12 link-btn text-center mb-3 mt-3 submit_message">
                                  <div class="order_confirm_content text-center">
                                    <h2>Your Password has been changed....</h2>
                                </div>
                             </div>

                            


                        </div>
                    </div>  
    </div>

    <div id="mypostjobs" class="container mypostjobs tab-pane" role="tabpanel">
        <div class="posted_job form_ps">
                        <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>Posted My Jobs</h4>
                            </div>
                        </div>

                 <div class="table-responsive ps_table">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th class="product">Designation</th>
                                    <th class="location">Location</th>
                                    <th class="Status">Status</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="designation">HTML Developer</td>
                                    <td>Ahmedabad</td>
                                    <td>Pending</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="designation">ASP Developer</td>
                                    <td>Ahmedabad</td>
                                    <td>Complete</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="designation">Full Stack Developer</td>
                                    <td>Ahmedabad</td>
                                    <td>Not Discuss</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>    
                        
                    </div>  
    </div>

    <div id="myapplyjobs" class="container myapplyjobs tab-pane" role="tabpanel">
        <div class="post_job_form form_ps">
                        <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>Apply Your Jobs</h4>
                            </div>
                        </div>

                    <div class="table-responsive ps_table">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th class="product">Posted By</th>
                                    <th class="location">Designation</th>
                                    <th class="Status">Location</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="designation">Entigrity</td>
                                    <td>HTML Developer</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="designation">Entigrity</td>
                                    <td>ASP Developer</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="designation">Entigrity</td>
                                    <td>Full Stack Developer</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                </div>

                    </div>  
    </div>

    <div id="buy_practice" class="container buy_practice tab-pane" role="tabpanel">
     
      <div class="row">
            <div class="col-md-12 col-12 title_md">
                <h4>Buyer</h4>
            </div>
        </div>

      <div class="table-responsive ps_table">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th class="product">City Zip</th>
                                    <th class="location">Emp Size</th>
                                    <th class="Status">Revenue Size</th>
                                    <th class="action">Area Of Service</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">380061 </td>
                                    <td>50</td>
                                    <td>Dummy Data</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name">380061 </td>
                                    <td>50</td>
                                    <td>Dummy Data</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                               <tr>
                                    <td class="name">380061 </td>
                                    <td>50</td>
                                    <td>Dummy Data</td>
                                    <td>Ahmedabad</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                </div> 

    </div>

    <div id="sell_practice" class="container sell_practice tab-pane" role="tabpanel">
      
       <div class="row">
            <div class="col-md-12 col-12 title_md">
                <h4>Seller</h4>
            </div>
        </div> 

        <div class="table-responsive ps_table">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th class="product">Emp Size</th>
                                    <th class="location">Office</th>
                                    <th class="Status">Avg. Revenue</th>
                                    <th class="action">Avg. Acc. Receivable</th>
                                    <th class="action">Area Of Service</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">50 </td>
                                    <td>Gujarat</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name">50 </td>
                                    <td>Gujarat</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name">50 </td>
                                    <td>Gujarat</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td>Dummy Data</td>
                                    <td class="total">
                                         <a href="#" class="thm-btn bg-clr1">Apply</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                </div> 

    </div>

    <div id="manage_review" class="container manage_review tab-pane" role="tabpanel">
      
        <div class="row">
            <div class="col-md-12 col-12 title_md">
                <h4>Manage Your Reviews</h4>
            </div>
        </div>

      <div class="table-responsive ps_table">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th class="product">Name</th>
                                    <th class="location">State</th>
                                    <th class="Status">City</th>
                                    <th class="action">Email</th>
                                    <th class="action">Rating</th>
                                    <th class="action">Status</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Michele </td>
                                    <td>Gujarat</td>
                                    <td>Ahmedabad</td>
                                    <td>ashishmehta546@gmail.com</td>
                                    <td>4</td>
                                    <td><span class="link_bg">active</span></td>
                                    <td class="del-item">
                                     <img src="images/icon/close.png" alt="">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name">Michele </td>
                                    <td>Gujarat</td>
                                    <td>Ahmedabad</td>
                                    <td>ashishmehta546@gmail.com</td>
                                    <td>4</td>
                                    <td><span class="link_bg">active</span></td>
                                    <td class="del-item">
                                     <img src="images/icon/close.png" alt="">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name">Michele </td>
                                    <td>Gujarat</td>
                                    <td>Ahmedabad</td>
                                    <td>ashishmehta546@gmail.com</td>
                                    <td>4</td>
                                    <td><span class="link_bg">active</span></td>
                                    <td class="del-item">
                                     <img src="images/icon/close.png" alt="">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                </div> 
    </div>

    <div id="my_orders" class="container my_orders tab-pane" role="tabpanel">
      
      <div class="row">
                            <div class="col-md-12 col-12 title_md">
                                <h4>My order History</h4>
                            </div>
                        </div>

      <div class="table-responsive ps_table">
                    <table class="table cart-table">

                        <thead>
                                <tr>
                                    <th class="product">image</th>
                                    <th class="location">Order No</th>
                                    <th class="Status">Delivery Date</th>
                                    <th class="action">Status</th>
                                    <th class="action">Total</th>
                                </tr>
                            </thead>

                        <tbody>
                            <tr>
                                <td class="product text-center">
                                    <img src="images/certi_img_sm.png" alt="image">
                                </td>
                                <td>ADI2731486
                                    <br>
                                     <span>qty: <b>1</b></span>
                                </td>
                                <td><span class="date"><b>09-03-19</b></span></td>
                                <td> Pending </td>
                                <td class="dark_text total amount">
                                    $25.00
                                </td>
                            </tr>

                             <tr>
                                <td class="product text-center">
                                    <img src="images/certi_img_sm.png" alt="image">
                                </td>
                                <td>ADI2731486
                                    <br>
                                    <span>qty: <b>1</b></span>
                                </td>
                                <td><span class="date"><b>09-03-19</b></span></td>
                                <td> Pending </td>
                                <td class="dark_text total amount">
                                    $25.00
                                </td>
                            </tr>

                             <tr>
                                <td class="product text-center">
                                    <img src="images/certi_img_sm.png" alt="image">
                                </td>
                                <td>ADI2731486
                                    <br>
                                    <span>qty: <b>1</b></span>
                                </td>
                                <td><span class="date"><b>09-03-19</b></span></td>
                                <td> Pending </td>
                                <td class="dark_text total amount">
                                    $25.00
                                </td>
                            </tr>
                           <!--  <tr>
                                <td><span class="date">Order Date : <b>05-03-19</b></span></td>
                                <td>Order Id : <b>ADI2731486</b></td>
                                <td class="total amount">Total Order: <b>$30.00</b></td>
                            </tr> -->
                            
                        </tbody>
                    </table>
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