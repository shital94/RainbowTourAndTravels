<!-- start 13th part -->
<script src="theme/js/jquery-2.2.3.min.js"></script> 

					<script src="theme/js/lightbox-plus-jquery.min.js"></script>	
			<!-- Owl-Carousel-JavaScript -->
	<script src="theme/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- flexSlider -->
					<script defer src="theme/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
 <!-- Move-top-scrolling -->
<script type="text/javascript" src="theme/js/move-top.js"></script>
<script type="text/javascript" src="theme/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Move-top-scrolling -->
<!-- Calendar -->
				<link rel="stylesheet" href="theme/css/jquery-ui.css" />
				<script src="theme/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<!--js for bootstrap working-->
	<script src="theme/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- end 13th part -->