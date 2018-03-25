<?php
require_once './config/config.php';
?>
<!--footer-->
<br/><br/>
<div class="container">
<div class="agile_more">
<a href="welcome.php" class="type-4">
						<span> Go Back </span>
						<span> Go Back  </span>
						<span> Go Back  </span>
						<span> Go Back </span>	
						<span> Go Back  </span>
						<span> Go Back  </span>
					</a>
</div></div>
<br/><br/>
 <script>
function goBack() {
    window.history.back()
}
</script>
<!-- subscribe -->
	<div class="w3-subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Join Us</h4>  
				<ul>
					<li><a href="https:/facebook.com/Paydoin-Online-Recharge-Business-2066554576896410" class="fa fa-facebook sicon facebook"> </a></li>
<li><a href="https://plus.google.com/b/107299483429956233724/107299483429956233724" class="fa fa-google-plus sicon googleplus"> </a></li>
					<!-- <li><a href="#" class="fa fa-twitter sicon twitter"> </a></li>
					
					<li><a href="#" class="fa fa-dribbble sicon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss sicon rss"> </a></li> -->
				</ul> <br/>

<ul>
<li><img src="https://paydo.in/iso.jpg" width="100" heigth="80"> </li>

				</ul>


			</div> 


			<div class="col-md-6 w3-agile-subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
				<form action="#" method="post"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div> 
				</form>  
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
<!-- //subscribe --> 
<footer>
	<div class="container-fluid">
		<div class="w3-agile-footer-top-at">
			<div class="col-md-2 agileits-amet-sed">
				<h4>Company</h4>
				<ul class="w3ls-nav-bottom">

<?php
session_start(); 

if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){ 
?>
<li><a href="index.php">Home</a></li>

                      


<?php }else{ ?>


		
                     <li><a href="welcome.php">Home</a></li>
<?php } ?>    	     


					
					<li><a href="about.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="terms.php">Terms & Conditions</a></li>
                                        <li><a href="policy.php">Privacy Policy</a></li>
					<li><a href="faq.php">Faq</a></li>
	                                <li><a href="refundpolicy.php">Refund Policy</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
					
				</ul>	
			</div>
			<div class="col-md-3 agileits-amet-sed ">
				<h4>Mobile Recharges</h4>
					<ul class="w3ls-nav-bottom">
						<li><a href="#mobilew3layouts" class="scroll">Airtel</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Aircel</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Vodafone</a></li>
						<li><a href="#mobilew3layouts" class="scroll">BSNL</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Tata Docomo</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Reliance GSM</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">Reliance CDMA</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">Telenor</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">MTS</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">Jio</a></li>	
					</ul>	
			</div>
			<div class="col-md-3 agileits-amet-sed ">
				<h4>DATACARD RECHARGES</h4>
				   <ul class="w3ls-nav-bottom">
						<li><a href="#mobilew3layouts" class="scroll">Tata Photon</a></li>
						<li><a href="#mobilew3layouts" class="scroll">MTS MBlaze</a></li>
						<li><a href="#mobilew3layouts" class="scroll">MTS MBrowse</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Airtel</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Aircel</a></li>
						<li><a href="#mobilew3layouts" class="scroll">BSNL</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">MTNL Delhi</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">Vodafone</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">Idea</a></li>	
						<li><a href="#mobilew3layouts" class="scroll">MTNL Mumbai</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Tata Photon Whiz</a></li>	
					</ul>	
			</div>
			<div class="col-md-2 agileits-amet-sed">
				<h4>DTH Recharges</h4>
				<ul class="w3ls-nav-bottom">
						<li><a href="#mobilew3layouts" class="scroll"> Airtel Digital TV Recharges</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Dish TV Recharges</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Tata Sky Recharges</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Reliance Digital TV Recharges</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Sun Direct Recharges</a></li>
						<li><a href="#mobilew3layouts" class="scroll">Videocon D2H Recharges</a></li>	
					</ul>	
			</div>
            <div class="col-md-2 agileits-amet-sed ">
				<h4>Payment Options</h4>
				   <ul class="w3ls-nav-bottom">
						<li>Credit Cards</li>
						<li>Debit Cards</li>
						<li>Any Visa Debit Card (VBV)</li>
						<li>Direct Bank Debits</li>
						<li>Cash Cards</li>	
					</ul>	
			</div>
		<div class="clearfix"> </div>
		</div>
    </div>
	<div class="w3l-footer-bottom">
		<div class="container-fluid">
			<div class="col-md-4 w3-footer-logo">
				<h2><a href="index.html">PayDo.In</a></h2>
			</div>
			<div class="col-md-8 agileits-footer-class">
		<p >© 2017 Zetu Solutions Opc Private Limited. All Rights Reserved | Design by  <a href="http://zetusolutions.in" target="_blank">Zetusolutions.In</a> </p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</footer>

<!--//footer-->
    
<!-- for bootstrap working -->
		<script src="<?php echo $domain; ?>/theme/js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
    <!-- Banner-slider -->
<script src="<?php echo $domain; ?>/theme/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
    <!-- //Banner-slider -->
<!-- //Responsive-slider -->   
<!-- Bootstrap select option script -->
<script src="<?php echo $domain; ?>/theme/js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- //Bootstrap select option script -->
    
<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/theme/css/easy-responsive-tabs.css " />
<script src="<?php echo $domain; ?>/theme/js/easyResponsiveTabs.js"></script>
<!-- //easy-responsive-tabs --> 
    <!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?php echo $domain; ?>/theme/js/move-top.js"></script>
			<script type="text/javascript" src="<?php echo $domain; ?>/theme/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->



			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</body>
<!-- //body -->
</body>
<!-- //body -->
</html>
<!-- //html -->