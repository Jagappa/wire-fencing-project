<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Businnes, Portfolio, Corporate"> 
	<meta name="Author" content="WebThemez"> 
    <title>Student Gandance</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="elegant_font/style.css" />
    <!--[if lte IE 7]><script src="elegant_font/lte-ie7.js"></script><![endif]-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="elegant_font/style.css"> 
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.conn.min.js" ></script> 


    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
	
	<?php

 $type_ans=$_POST["security_ans"];
 $hintans=$_POST["hintans"];
 $pwd=$_POST["password"];
  $username=$_POST['username'];
if($type_ans==$hintans)
{
?>
</head>
		<script>
		var allowsubmit = false;
		$(function(){
			//on keypress 
			$('#confpass').keyup(function(e){
				//get values 
				var pass = $('#pass').val();
				var confpass = $(this).val();
				
				//check the strings
				if(pass == confpass){
					//if both are same remove the error and allow to submit
					$('.error').text('');
					allowsubmit = true;
				}else{
					//if not matching show error and not allow to submit
					$('.error').text('Password not matching');
					allowsubmit = false;
				}
			});
			
			//jquery form submit
			$('#form').submit(function(){
			
				var pass = $('#pass').val();
				var confpass = $('#confpass').val();
 
				//just to make sure once again during submit
				//if both are true then only allow submit
				if(pass == confpass){
					allowsubmit = true;
				}
				if(allowsubmit){
					return true;
				}else{
					return false;
				}
			});
		});
	</script>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="status"></div>
    </div>
 
    <!-- Header End -->
    <header>



        
    </header>



 





    
    <!-- Client Section End -->  
	
 <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
              <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Forgot Password <?php //echo $username; ?></span></h2>
                   
                    <!--<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">We love feedback. Fill out the form below and we'll get back to you as soon as possible. in minus distinctio dolores ipsam.</p> -->
                </div> 
                <!-- Section Header End -->

                <div class="contact-details">
 

                    <!-- Contact Form -->
                    <div class="contact-form wow bounceInRight"> 
                
       	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="form" method="post"	 action="update_password.php" >  
		 <div class="col-md-6">
		 <input type="hidden" name="user_name" value="<?php echo $username; ?>">
		 
		<input type="password" class="form-control"  placeholder="Enter New Password" required  name="pass" id="pass" />
		
		<p class="help-block"></p>
		</div> 	
		 <div class="col-md-6">
		<input type="password" class="form-control"  placeholder="Enter Confirm Password"  name="confpass" id="confpass" required/>
		</div> 	
 <div class="form-group">
							<span class="error" style="color:red"></span><br />
						</div>
<!--	<div class="col-md-12">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div> 	 --> 
		 
		<div class="col-md-4 col-md-offset-5"><br><div id="success"> </div><button type="submit" name="submit" class="btn btn-default">Submit</button></div> 
		
		
		</form>
      </div>
	  
 
            </div>
			
        </div>
		
    </section>
	
	
	
	



    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">

                    
					<br/><br/>
<p>Copyright © 2019-2020.  <a href="#" target="_blank">Free Bootstrap Template</a> by WebThemez.com, All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
  
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
 
 
    <script src="js/custom.js"></script>
	<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong Hint Answer");
document.location="index.php";

</script>
<?php

}
?>

</body>
</html>
