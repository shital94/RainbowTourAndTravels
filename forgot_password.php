<!DOCTYPE html>
<html>

<head>



<title>::: Forgot Password ::: </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login and Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
        
        
<!-- //custom-theme -->

<!-- register2_part.php header -->

<link rel="stylesheet" href="theme/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="theme/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="theme/css/lightbox.css">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<!--//web-fonts-->
<link href="theme/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="theme/css/owl.carousel.css" type="text/css" media="all"/>
<link href="theme/css/btn.css" rel="stylesheet" type="text/css"/>
<link href="theme/css/style.css" rel="stylesheet" type="text/css">
<link href="theme/css/dropdown.css" rel="stylesheet" type="text/css">
<link href="theme/css/footer.css" rel="stylesheet" type="text/css">
<link href="theme/css/bootstrap.css">
<!--login css-->
<link href="theme/css/login-style.css" rel="stylesheet" type="text/css">
<link href="theme/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
<!--//login css-->


<!-- // register2_part.php header -->

<link href="theme/css/login-style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="theme/js/jquery-1.9.1.min.js"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="theme/css/easy-responsive-tabs.css" />
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
 
</head>

<body class="bg agileinfo">
<?php
include "inc/register2_part.php";
?>
   <h1 class="agile_head text-center">  Forgot Password </h1>
   <div class="w3layouts_main wrap">
    <!--Horizontal Tab-->
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>Lost Your Password ??</li>
                
            </ul>
            <div class="resp-tabs-container hor_1">
               
                <div class="agile_its_registration">
                    <form action="#" method="post" class="agile_form">
					  
					  <p>Email</p>
					  <input type="email" name="email" required />
					  <p>Password</p>
					  <input type="password" name="Password" id="password1"  required="required">
					  <p>Confirm Password</p>
					  <input type="password" name="Confirm Password" id="password2"  required="required">
         	  			
					   <input type="submit" value="OK"/>
					   <input type="reset" value="Reset" />
					</form> 
				</div>
            </div>
        </div>
		 <!-- //Horizontal Tab -->
    </div>
	<div class="agileits_w3layouts_copyright text-center">
			<p>Login and Signup Form</p>
	</div>
<!--tabs-->

<script src="theme/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!--//tabs-->


<!-- end of 2nd reusable part -->
<script src="theme/js/jquery-2.2.3.min.js"></script>
<script src="theme/js/bootstrap.js"></script>
<script src="theme/js/dropdown.js"></script>
<!--login js-->
<script src="theme/js/easyResponsiveTabs.js"></script>
<script src="theme/js/jquery-1.6.3.min.js"></script>
<script src="theme/js/jquery-1.9.1.min.js"></script>
<!--//login js-->

<!-- //scripts files link register2_part -->


</body>
<?php
include "footer.php";
?>
</html>



