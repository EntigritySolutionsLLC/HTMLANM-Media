
<!--header-->
	<?php include 'header.php';?>
<!--End header-->

<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Buy Seller</h2>
        </div>
       <!--  <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Login</li>
        </ul>  -->
    </div>
</section>
<!--End Page Title-->

<div class="login_wrapper buyseller_registration">
    <div class="container">


        <div class="login-register login-area">
            <div class="tabs-box">
                <div class="tab-buttons clearfix">
                    <a href="#tab-one" class="tab-btn active-btn">Public</a>
                    <a href="#tab-two" class="tab-btn">Private</a>
                </div>
                <div class="tab-content">
                    <div class="tab active-tab" id="tab-one" style="display: block">
                        <div class="register text-center form_ps">
                            <form id="contact_form" name="contact_form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">SIZE (EMPLOYEES)</label>
                                           <select class="select" name="Company Size">
                                            <option selected="selected" disabled="">SOLE PROPRIETOR</option>
                                            <option>1 to 3</option>
                                            <option>4 to 10</option>
                                            <option>10 to 20</option>
                                            <option>20+</option>
                                       </select>  
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">OFFICE</label>
                                           <select class="select" name="Office">
                                            <option selected="selected" disabled="">Office</option>
                                            <option>Leased</option>
                                            <option>Own</option>
                                           </select>  
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">AVE. REVNUE IN LAST 3 YEARS</label>
                                           <select class="select" name="Ave">
                                            <option selected="selected" disabled="">UPTO 500000</option>
                                            <option>UPTO 500000</option>
                                            <option>500,000 TO 1,000,000</option>
                                            <option>1,000,000 TO 2,000,000</option>
                                            <option>2,000,000 TO 5,000,000</option>
                                            <option>5,000,000 ABOVE</option>
                                       </select>  
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">AREA OF SERVICES</label>
                                         
                                        <select class="select" name="area_of_service">
                                        <option selected="selected" disabled="">AREA OF SERVICES</option>
                                        <option value="1">Audit</option>
                                        <option value="2">Accounting &amp; Bookkeeping</option>
                                        <option value="3">Tax Planning</option>
                                        <option value="4">Bankruptcy</option>
                                        <option value="5">Business Planning</option>
                                        <option value="6">Business Start-Ups</option>
                                        <option value="7">Business Valuations</option>
                                        <option value="8">Computer Consulting</option>
                                        <option value="9">Consulting Services</option>
                                        <option value="10">Continuing Education</option>
                                        <option value="11">Corporate Taxes</option>
                                        <option value="12">Cost Accounting</option>
                                        <option value="13">Elder Care</option>
                                        <option value="14">Estate Planning</option>
                                        <option value="15">Estate Tax Returns</option>
                                        <option value="16">Expatriate Tax</option>
                                        <option value="17">Fiduciary Accounting</option>
                                        <option value="18">Financial Management</option>
                                        <option value="19">Financial Statements</option>
                                        <option value="20">Foreign National Tax</option>
                                        <option value="21">Forensic Accounting</option>
                                        <option value="22">Fraud Prevention</option>
                                        <option value="23">Incorporation &amp; Dissolution</option>
                                        <option value="24">Incorporation Services</option>
                                        <option value="25">Individual Taxation</option>
                                        <option value="26">Insurance</option>
                                        <option value="27">International Taxation</option>
                                        <option value="28">Internet/High Tech</option>
                                        <option value="29">Inventory</option>
                                        <option value="30">Investment Advisory</option>
                                        <option value="31">Leasing/Asset Acquisition</option>
                                        <option value="32">Litigation Support</option>
                                        <option value="33">Management Advisory</option>
                                        <option value="34">Marriage &amp; Divorce</option>
                                        <option value="35">Mergers &amp; Acquisitions</option>
                                        <option value="36">Partnership Llc/Llp</option>
                                        <option value="37">Partnership Taxation</option>
                                        <option value="38">Payroll &amp; Sales Tax</option>
                                        <option value="39">Peer Review</option>
                                        <option value="40">Pension &amp; Retirement</option>
                                        <option value="41">Small Business</option>
                                        <option value="42">Projections &amp; Forecasts</option>
                                        <option value="43">Software Support</option>
                                        <option value="44">State Taxation</option>
                                        <option value="45">Taxation-General</option>
                                        <option value="46">Trusts</option>
                                        <option value="47">Tax Preparation</option>
                                        <option value="48">Tax Planning</option>
                                        <option value="49">Cfo Services</option>
                                        <option value="50">Fractional Cfo Services</option>
                                        <option value="51">Controller Services</option>
                                        <option value="52">Tax Representation</option>
                                        <option value="53">Irs Representation</option>
                                        <option value="54">Business Tax Preparation</option>
                                        <option value="55">Back Office Support Services</option>
                                        <option value="56">Bookkeeping Services</option>
                                        <option value="57">Divorce Accounting</option>
                                        <option value="58">Expatriate Taxation</option>
                                        <option value="59">Expatriate / Nr Taxation</option>
                                        <option value="60">Forensic Accounting</option>
                                        <option value="61">International Taxation</option>
                                        <option value="62">Soc Compliance</option>
                                        <option value="63">Technology Services</option>
                                        <option value="64">Internal Control</option>
                                        <option value="65">Financial Planning</option>
                                        <option value="66">Retirement Planning</option>
                                        <option value="67">Payroll</option>
                                        <option value="68">Sales Tax</option>
                                        <option value="69">Litigation Support</option>
                                        <option value="70">Investment Advisory</option>
                                        <option value="71">Business Valuation</option>
                                        <option value="72">Merger And Acquisition</option>
                                        </select>  
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">STATE</label>
                                            <select class="form-control gen_info_state" name="state">
                                            <option selected="selected" disabled="">Select State</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="IA">Iowa</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MD">Maryland</option>
                                            <option value="ME">Maine</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MT">Montana</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NY">New York</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VA">Virginia</option>
                                            <option value="VT">Vermont</option>
                                            <option value="WA">Washington</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WY">Wyoming</option>
                                            </select> 
                                        </div>
                                    </div>
                                  
                                    
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">Zip Code</label>
                                            <input type="text" name="form_website" class="form-control" value="" placeholder="ZIP" required="">
                                        </div>
                                    </div>
                                   <!--  <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group form-bottom">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">Click here to login</button>
                                        </div>
                                    </div> -->
                                     <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                            <button class="thm-btn bg-clr1 mb-3" type="submit">Next</button>
                                        </div>
                                     
                                </div>
                            </form>
                            
                                            
                        </div>
                    </div>
                    <div class="tab" id="tab-two" style="display: none;">
                        <div class="register text-center form_ps">
                            <form id="contact_form2" name="contact_form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                     
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">AVE. ACCOUNT RECEIVABLES</label>
                                            <input type="text" name="AVE. ACCOUNT RECEIVABLES" class="form-control" value="" placeholder="AVE. ACCOUNT RECEIVABLES" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="label">TAX SOFTWARE</label>
                                           <select class="select" name="ATX">
                                        <option selected="selected" disabled="">ATX</option>
                                        <option value="ATX" selected="">ATX</option>
                                        <option value="BLOCK">BLOCK</option>
                                        <option value="CCH PRO SYSTEMFX GLOBAL">CCH PRO SYSTEMFX GLOBAL</option>
                                        <option value="CCH PROSYSTEM">CCH PROSYSTEM</option>
                                        <option value="COLLEGE STUDENT">COLLEGE STUDENT</option>
                                        <option value="DRAKE">DRAKE</option>
                                        <option value="GO SYSTEM TAX RS">GO SYSTEM TAX RS</option>
                                        <option value="INTUIT TAX ONLINE">INTUIT TAX ONLINE</option>
                                        <option value="JACKSON HEWITT">JACKSON HEWITT</option>
                                        <option value="KIPLINGER TAXCUT">KIPLINGER TAXCUT</option>
                                        <option value="LACERTE">LACERTE</option>
                                        <option value="OLT PRO">OLT PRO</option>
                                        <option value="PETZ CROSSLINK">PETZ CROSSLINK</option>
                                        <option value="PRO SERIES">PRO SERIES</option>
                                        <option value="RCS TAXSLAYER">RCS TAXSLAYER</option>
                                        <option value="TAXACT">TAXACT</option>
                                        <option value="TAXSIMPLE">TAXSIMPLE</option>
                                        <option value="TAXWARE">TAXWARE</option>
                                        <option value="TURBO TAX">TURBO TAX</option>
                                        <option value="ULTRA TAX CS">ULTRA TAX CS</option>
                                        <option value="ULTRA TAX CS SAAS">ULTRA TAX CS SAAS</option>
                                        <option value="UNIVERSAL TAXWISE">UNIVERSAL TAXWISE</option>
                                           </select>  
                                        </div>
                                    </div>
 
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row form-group form-bottom justify-content-center">
                                           <div class="col-md-6">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="thm-btn bg-clr1 mb-3" type="submit" data-loading-text="Please wait...">Click here to login</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                           <!--  <p>A password will be e-mailed to you.</p>
                            <div class="forgot">
                                <a href="#">Forgot your password?</a>
                            </div>
                            <ul class="login-info">
                                <li>Log in with</li>
                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                            </ul>   -->             
                        </div>
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