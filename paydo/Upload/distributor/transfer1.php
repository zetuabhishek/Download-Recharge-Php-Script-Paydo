<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Online Recharge a Corporate Category Bootstrap Responsive Web Template | Pay :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!-- metatags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- /metatags -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->

</head>
<!-- /head -->
<!-- body -->
<body>
<!--header-->
<header>
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">Online Recharge</a></h1>
			</div>
		<!--//logo-->
		  <div class="w3layouts-login">
				<a href="logout.php"><i class="glyphicon glyphicon-user"> </i>Logout</a>
			</div>    
				<div class="clearfix"></div>
    <!--Login modal-->

    <!--//Login modal-->
    </div>
</header>
<!-- //header -->
	
<!-- innerbanner -->	
	<div class="agileits-inner-banner">
		
	</div>
<!-- //innerbanner -->

<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="welcome.php"><i class="fa fa-home home_1"></i></a> / <span>Pay</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Pay -->
	<div class="agile-pay w3layouts-content">
    <div class="container">
			<h3 class="w3-head">Payment/<a href="welcome.php">Don't Pay?</a></h3>
	<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
                 <li>PUSH BALANCE</li>
            </ul>
            <div class="resp-tabs-container hor_1">
                <div>
				
				<div>
				<?php
require_once '../config/config.php';

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

$find = "select balance from dis_users where dis_mobile = '".$_SESSION['username']."'";
$queryy=mysqli_query($link,$find);
$rows = mysqli_num_rows($queryy);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($queryy))
     {
         $d=$result['balance']; 
         
         echo"<h4 style='color:green'>Balance: $d</h4><br/>";
         
     }
  }

if($_POST["flag"]== "search")
{
	//$balance=$_POST["balance"];
        $username=$_POST["username"]; 
	$select = "select mobile from users where mobile='$username' and under='".$_SESSION['username']."'";
	
	if($query = mysqli_query($link,$select))
	{
	        
	}
	  	
	$rows = mysqli_num_rows($query);

if($rows>0)
{
echo "<script>window.alert('Your User Found')</script>";
?>
                    <div class="vertical_post">
									<form action="transfer1.php" method="POST">
<?php
while($result=mysqli_fetch_array($query))
{		  
?>									
										
										
						                <div>
										    										    <input type="text" class="billing-address-name form-control" size="10" name="username" placeholder="enter username" value="<?php echo $result['mobile']; ?>" required><br/>
<?php
}
?>											

											<input type="text" class="billing-address-name form-control" placeholder="enter amount" name="balance" required="required"><br/>
											<input type="text" class="billing-address-name form-control" placeholder="enter transferid" name="tsid" required="required"><br/>
										</div>
										<input type="submit" name="submit" onClick="this.value='Please Wait…';"  value="pushbalance"/>
<input type="hidden" name="flag" value="pushbalance"/>
									</form>
					</div>
				<?php
  }
 else
 {
      echo "<h2 style='color:#FF00FF'>Oops! User not found.</h2>"; 
      echo "<br><p><a href='transfer1.php'>Try Again</a></p>"; 
 }
  
}
else
{
?>
                    <div class="vertical_post">
									<form action="transfer1.php" method="POST">
									<div>
										    <input type="text" class="billing-address-name form-control" size="10" name="username" placeholder="enter username" value="<?php echo $result['username']; ?>" required><br/>
											<input type="submit" name="submit" onClick="this.value='Please Wait…';" value="search"/>
			                                <input type="hidden" name="flag" value="search"/>
									</form>
                    </div>									
                </div>	
<?php
}
$bal=$_POST["balance"];


if($_POST["flag"]=="pushbalance")
{
	$username=$_POST["username"];
	
	    $commission=$_POST["type"];
        $method="PUSH";
        $status="SUCCESS";
	    $p="Data are saved";
        $tid=rand(10000000,99999999);
        $t_m = ($bal*$commission)/100;
        $add_bal=$bal+$t_m;
        //$f_bal=$d+$add_bal;
        $tsid = $_POST["tsid"];
        date_default_timezone_set("Asia/Calcutta");
        $date = date("Y-m-d h:i:s"); 	
	//echo $custCom;
$search = "select balance from users where mobile= '".$username."'";
$query1=mysqli_query($link,$search);
$rows = mysqli_num_rows($query1);
  if($rows > 0)
  {
     while($start = mysqli_fetch_array($query1))
     {
         $user_bal=$start['balance']; 
         //echo $user_bal;
     }
  }
$f_bal=$user_bal+$add_bal;
/*important*/$amount=$d-($bal+$t_m);
$zero = 1;
/*-------------------------------------------------------------------------------------------------------------------------*/
if($zero < $bal){
if($d < $add_bal)
{
   echo "<p style='color:red;'>your account balance is low Rs.$d. You can't send Rs. $add_bal. You have to recharge your wallet <br/> <a href='pay.php' class='btn btn-info btn-xs'>Add Balance</a></p>";
}
else
{	
	$select="select payment_id from statement where payment_id = '$tsid'";
	if($query2=mysqli_query($link,$select))
	{
	   $info = mysqli_num_rows($query2);
	 if($info > 0)
	 {
	      echo "<p style='color:#FF00FF'>duplicate entry/not enetred your transfer id</p>";
	      echo "<br><p style='color:#FF00FF'>payment not done<a href='transfer1.php'>Refresh</a></p>"; 
	 }
	
	 else
	 {	   
	    $insert="insert into statement(username,under,payment_id,payment_method,payment_mode,status,transaction_id,amount,date,address)values('".$username."','".$_SESSION['username']."','".$tsid."','".$method."','".$method."',
	            '".$status."','".$tid."','".$bal."','".$date."','".$result["address"]."')";
	    if($query3 = mysqli_query($link,$insert))
	    {
	    	$update="update users set balance='$f_bal' where mobile ='".$username."'";
	        if($info1 = mysqli_query($link,$update))
	        {
	          mysqli_query($link, "update dis_users set balance='$amount' where dis_mobile='".$_SESSION['username']."'");
	          echo "<p id='py' style='color:green'>payment has been succeded</p>";
	        }
	     
	    } 
	    else
	    {
	       echo "payment made not done";
	    }

     }
    }
    	
}
}
else{
echo "<p style='color:red;'>Negative values not allow. push amount should be more than Rs.1/- </p>";
}
}
echo '<center><a href="https://paydo.in/distributor/welcome.php#parentVerticalTab9" class="btn btn-success btn-lg">Back</a></center>';	 
?>				
	               
            </div>
        </div>
    </div>
 </div>
	
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
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
	<!-- // Pay -->

<!-- subscribe -->
	<div class="w3-subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Join Us</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook sicon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter sicon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus sicon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble sicon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss sicon rss"> </a></li> 
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

<!--footer-->
<footer>
	<div class="container-fluid">
		<div class="w3-agile-footer-top-at">
			<div class="col-md-2 agileits-amet-sed">
				<h4>Company</h4>
				<ul class="w3ls-nav-bottom">
					<li><a href="about.html">About Us</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="faq.html">Faq</a></li>	
					<li><a href="index.html#mobileappagileits">Mobile</a></li>	
					<li><a href="feedback.html">Feedback</a></li>	
					<li><a href="contact.html">Contact</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="icons.html">Icons Page</a></li>
					
				</ul>	
			</div>
			<div class="col-md-3 agileits-amet-sed ">
				<h4>Mobile Recharges</h4>
					<ul class="w3ls-nav-bottom">
						<li><a href="index.html#parentVerticalTab1">Airtel</a></li>
						<li><a href="index.html#parentVerticalTab1">Aircel</a></li>
						<li><a href="index.html#parentVerticalTab1">Vodafone</a></li>
						<li><a href="index.html#parentVerticalTab1">BSNL</a></li>
						<li><a href="index.html#parentVerticalTab1">Tata Docomo</a></li>
						<li><a href="index.html#parentVerticalTab1">Reliance GSM</a></li>	
						<li><a href="index.html#parentVerticalTab1">Reliance CDMA</a></li>	
						<li><a href="index.html#parentVerticalTab1">Telenor</a></li>	
						<li><a href="index.html#parentVerticalTab1">MTS</a></li>	
						<li><a href="index.html#parentVerticalTab1">Jio</a></li>	
					</ul>	
			</div>
			<div class="col-md-3 agileits-amet-sed ">
				<h4>DATACARD RECHARGES</h4>
				   <ul class="w3ls-nav-bottom">
						<li><a href="index.html#parentVerticalTab3">Tata Photon</a></li>
						<li><a href="index.html#parentVerticalTab3">MTS MBlaze</a></li>
						<li><a href="index.html#parentVerticalTab3">MTS MBrowse</a></li>
						<li><a href="index.html#parentVerticalTab3">Airtel</a></li>
						<li><a href="index.html#parentVerticalTab3">Aircel</a></li>
						<li><a href="index.html#parentVerticalTab3">BSNL</a></li>	
						<li><a href="index.html#parentVerticalTab3">MTNL Delhi</a></li>	
						<li><a href="index.html#parentVerticalTab3">Vodafone</a></li>	
						<li><a href="index.html#parentVerticalTab3">Idea</a></li>	
						<li><a href="index.html#parentVerticalTab3">MTNL Mumbai</a></li>
						<li><a href="index.html#parentVerticalTab3">Tata Photon Whiz</a></li>	
					</ul>	
			</div>
			<div class="col-md-2 agileits-amet-sed">
				<h4>DTH Recharges</h4>
				<ul class="w3ls-nav-bottom">
						<li><a href="index.html#parentVerticalTab2"> Airtel Digital TV Recharges</a></li>
						<li><a href="index.html#parentVerticalTab2">Dish TV Recharges</a></li>
						<li><a href="index.html#parentVerticalTab2">Tata Sky Recharges</a></li>
						<li><a href="index.html#parentVerticalTab2">Reliance Digital TV Recharges</a></li>
						<li><a href="index.html#parentVerticalTab2">Sun Direct Recharges</a></li>
						<li><a href="index.html#parentVerticalTab2">Videocon D2H Recharges</a></li>	
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
				<h2><a href="index.html">ONLINE RECHARGE</a></h2>
			</div>
			<div class="col-md-8 agileits-footer-class">
				<p >ﾂｩ 2017 Online Recharge. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</footer>
<!--//footer-->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
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
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</body>
<!-- /body -->
</html>
<!-- /html -->