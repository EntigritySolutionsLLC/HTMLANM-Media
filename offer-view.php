
<!--header-->
	<?php include 'header.php';?>
<!--End header-->
<div class="city_list_wrapper">
<!--Page Title-->
<section class="page-title" style="background: url(images/resources/page-title.jpg); padding: 110px 0px 50px;">
    <div class="container clearfix">
        <div class="title pull-left">
            <h2>Your Offer</h2>
        </div>
       <!--  <ul class="title-manu pull-right">
            <li><a href="index.html">home</a></li>
            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
            <li>Login</li>
        </ul>  -->
    </div>
</section>
<!--End Page Title-->

<section class="your_offer_wrap sp-six">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 image_wrap text-center">
            <img src="images/certifi-main.png">
        </div>
        <div class="col-md-4 col-sm-6 col-12 image_wrap text-center">
            <img src="images/certifi-main.png">
        </div>
        <div class="col-md-4 col-sm-6 col-12 image_wrap text-center">
            <img src="images/certifi-main.png">
        </div>
    </div>
</div>
</section>


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