<?php 
 require_once '../config/config.php'; 
    

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>
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
<title>Online Recharge a Corporate Category Bootstrap Responsive Web Template | index :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
  
  <style>
   #h{
       font-size:40px;
       text-align:center;
       margin-right:70px;     
       color:red; 
   }
   .dropdown
   {
      margin-left:15px;
      
   }
 
  </style>
  
       
</head>
<!-- //head -->
<!-- body -->
<body >

<!--header-->
<header>
	<div class="container">
		<!--logo-->

			<div class="logo">
				<h3><a href="welcome.php">Paydo Distributor</a></h3>
			</div>

		<!--//logo-->
		  <div class="w3layouts-login">
                      <a href="logout.php"><i class="glyphicon glyphicon-user"> </i>Logout</a>
 	    	              
				<div class="clearfix"></div>
    <!--Login modal-->

    <!--//Login modal-->
    </div>
 </header>

<!--//-->	
	<div class=" header-right">
		
	</div>
	 

    <!--Vertical Tab-->
	<div class="categories-section main-grid-border" id="mobilew3layouts">
		<div class="container">
		<?php
		$find = "select * from dis_users where dis_mobile = '".$_SESSION['username']."'";
        $query=mysqli_query($link,$find);
        $rows = mysqli_num_rows($query);
        if($rows > 0)
         {
             while($result = mysqli_fetch_array($query))
             {
                              $balance=$result['balance'];
                  $pv_balance=$result['pv_balance'];
                 
             }
         }
         else
         {
            echo "can't fetch row";
         }
          echo $website. '&nbspPoints is '.$balance.'&nbsp;&nbsp;&nbsp;<a href="pay.php#parentHorizontalTab4" class="btn-primary btn-sm">Add More</a><br/><br/>';
	if ($pv_balance > 1)
{
       echo $website. '&nbspOld balance is '.$pv_balance.'&nbsp;&nbsp;&nbsp;<a href="pv_balance_transfer.php" class="btn-primary btn-sm">Transfer Now</a><br/><br/>';
}
else
{
       echo  $website. '&nbspOld balance is (processing)&nbsp;&nbsp;&nbsp;<a href="pv_balance_transfer.php" class="btn-primary btn-sm">Transfer</a><br/><br/>';
}	
		?>
   <p style='color:#e91e63; font-style:bold; font-size:15px'>You can't recharge from distributor panel. create an agent account for own recharge from manage account menu. </p><br/>
			
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						<li><i class="icon fa fa-mobile" aria-hidden="true"></i>Mobile</li>
						<li><i class="icon fa fa-television" aria-hidden="true"></i>DTH</li>
						<li><i class="icon fa fa-credit-card" aria-hidden="true"></i>Data Card</li>
						<li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Electricity</li>
						<li><i class="icon fa fa-phone" aria-hidden="true"></i>Land Line</li>
						<li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>Broad Band</li>
						<li><i class="icon fa fa-flask" aria-hidden="true"></i>Gas</li>
						<li><i class="icon fa fa-tint" aria-hidden="true"></i>Insurance</li>
						<li><i class="icon fa fa-user" aria-hidden="true"></i>Manage Account</li>
	                                        <li><i class="icon fa fa-tint" aria-hidden="true"></i>Total Balance</li>
					</ul>
					</div>
					<div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
						<div>
                            <div class="tabs-box">
                                
                    <img src="images/mobile.png" class="w3ls-mobile" alt="" data-pin-nopin="true">
                <ul class="tabs-menu">
                    <li><a href="#tab1"><label class="radio"><input type="radio" name="radio" checked=""><i></i>Prepaid</label></a></li>
                    <li><a href="#tab2"><label class="radio"><input type="radio" name="radio"><i></i>Postpaid</label></a></li>
                </ul>
			     <div class="clearfix"> </div>
			     <div class="tab-grids">
                    <div id="tab1" class="tab-grid">  
		                      <div class="login-form">	
						<form action="" method="post" id="signup">
						<ol>							
							<li>
                                <h4>Enter your mobile number</h4>
								<input type="tel" id="tel" name="number" pattern="\d{10}" placeholder="Enter Mobile Number" required="required" />
								
								<p class="validation01">
								    <span class="valid"><?php echo $operator; ?></span>
									<span class="invalid">Please enter a valid mobile number</span>
									<span class="valid">That's what we wanted!</span>
								</p>		
							</li>
                            <li>
                               <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="operator">
                                <option value="">Select Operator</option>
                                <option value="2">Aircel</option>
				                <option value="1">Airtel</option>
				                <option value="4">Bsnl Topup</option>
				                <option value="5">Bsnl Special</option>
				                <option value="3">Idea</option>
				                <option value="6">Reliance CDMA</option>
				                <option value="22">Reliance GSM</option>
				                <option value="7">Tata Docomo Topup</option>
				                <option value="8">Tata Docomo Special</option>
				                <option value="9">Tata Indicom</option>
				                <option value="10">Vodafone</option>
				                <option value="11">MTS</option>
				                <option value="12">Telenor</option>
				                <option value="13">Telenor Special</option>
				                <option value="14">Loop Mobile</option>
				                <option value="15">Videocon</option>
				                <option value="16">Videocon Special</option>
				                <option value="17">MTNL DL Topup</option>
				                <option value="18">MTNL DL Special</option>
				                <option value="19">MTNL Mumbai</option>
				                <option value="20">MTNL Mumbai Special</option>
				                <option value="21">Tata Walky</option>
                                </select>
                                </div>
                            </li>
                         
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Recharge?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />	
                                    </div>
                                    <div class="mobile-rchge">
                                        <a href="plans.php">VIEW ALL PLANS</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" name="submit" value="Recharge Now" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	

                    </div>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>							
							<li>
                                <h4>Enter your mobile number</h4>
								<input type="tel" id="tel" name="number" pattern="\d{10}" placeholder="Enter Mobile Number" required />
								<p class="validation01">
									<span class="invalid">Please enter a valid mobile number</span>
									<span class="valid">That's what we wanted!</span>
								</p>
							</li>
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                <option value="">Select Operator</option>
				<option value="30">Vodafone Postpaid</option>
				<option value="31">Airtel Postpaid</option>
				<option value="32">Bsnl Postpaid</option>
				<option value="33">Idea Postpaid</option>
				<option value="34">Loop Postpaid</option>
				<option value="35">Reliance CDMA Postpaid</option>
				<option value="36">Reliance GSM Postpaid</option>
				<option value="37">Tata Docomo GSM Postpaid</option>
				<option value="38">Tata Indicom Postpaid</option>
				<option value="39">Tata Walky Postpaid</option>
                                </select>
                                </div>
                            </li>
                            
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Pay?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" name="submit" value="Pay bill" />
                            </li>
                            
                            
				        </ol>
						</form>	
																							
						</div>	
                    </div>
				</div>
			
			<div class="clearfix"> </div>
		</div>
	<!-- script -->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$("#tab4").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>
                            
							
                            
            
                    
			             </div>
                        <!-- /tab1 -->
			<!-- tab2 -->
						<div>
							
		                      <div class="login-form">
                                  <i class="icon fa fa-television inner-icon" aria-hidden="true"></i>
						<form action="" method="post" id="signup">
                            
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                <option value="Select Operator">DTH Operator</option>
 				<option value="28">VIDEOCON DTH</option>
				<option value="26">SUN DTH</option>
				<option value="24">BIG TV DTH</option>
				<option value="27">TATA SKY DTH</option>
				<option value="25">DISH DTH</option>
                                <option value="23">AIRTEL DTH</option>	
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" name="number" value="Enter Customer ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Customer ID';}" required="">	
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" name="submit" value="Recharge Now" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
                        <!-- /tab2 -->
                        
                        <!-- tab3 -->
				<div>
                    <i class="icon fa fa-credit-card inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>							
							<li>
                                  <h4>Enter your Datacard number</h4>
								<input type="tel" id="tel" pattern="\d{10}" name="number" placeholder="Enter Datacard Number" required />
								<p class="validation01">
									<span class="invalid">Please enter a valid 10 digit Datacard number</span>
									<span class="valid">That's what we wanted!</span>
								</p>
							</li>
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                  <option value="Select Operator">Select Operator</option>
                                  <option value="84">MTS MBlaze</option>
                                  <option value="83">Reliance NetConnect</option>
                                  <option value="82">Reliance NetConnect+</option>
                                  <option value="81">Reliance NetConnect 3G</option>
                                  <option value="85">MTS MBrowse</option>
                                  <option value="86">Tata Photon+</option>
                                  <option value="87">Tata Photon Whiz</option>
                                  <option value="88">Vodafone 3G</option>
                                  <option value="89">Aircel Pocket Internet</option>
                                  <option value="90">BSNL Datacard</option>
                                  <option value="91">MTNL Delhi Datacard	</option>
                                  <option value="92">MTNL Mumbai Datacard</option>
                                  <option value="93">Reliance Jio</option>
                                 
                                </select>
                                </div>
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Pay?</h4>
                                    <div class="mobile-rchge">
                                       <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" name="submit" value="Recharge Now" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	

                    </div>
                    </div>
                        <!-- /tab3 -->
                        
                        
                        <!-- tab4 -->
                        <div>
                            <i class="icon fa fa-lightbulb-o inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                  <option value="Select Operator">Select Operator</option>
                                  <option value="52">Ajmer Vidyut Vitran Nigam - RAJASTHAN</option>
                                  <option value="53">APDCL - ASSAM</option>
                                  <option value="54">BESCOM - BENGALURU</option>
                                  <option value="55">BEST Undertaking - MUMBAI</option>
                                  <option value="56">BSES Rajdhani - DELHI</option>
                                  <option value="57">BSES Yamuna - DELHI</option>
                                  <option value="58">CESC - WEST BENGAL</option>
                                  <option value="59">CSEB - CHHATTISGARH</option>
                                  <option value="60">DHBVN - HARYANA</option>
                                  <option value="61">DNHPDCL - DADRA & NAGAR HAVELI</option>
                                  <option value="62">India Power</option>
                                  <option value="63">Jaipur Vidyut Vitran Nigam - RAJASTHAN</option>
                                  <option value="64">Jamshedpur Utilities & Services (JUSCO)</option>
                                  <option value="65">Jodhpur Vidyut Vitran Nigam - RAJASTHAN</option>
                                  <option value="66">Madhya Kshetra Vitaran - MADHYA PRADESH</option>
                                  <option value="67">MSEDC - MAHARASHTRA</option>
                                  <option value="68">Noida Power - NOIDA</option>
                                  <option value="69">Odisha Discoms - ODISHA</option>
                                  <option value="70">Paschim Kshetra Vitaran - MADHYA PRADESH</option>
                                  <option value="71">Reliance Energy - MUMBAI	</option>
                                  <option value="72">Southern Power - ANDHRA PRADESH</option>
                                  <option value="73">Southern Power - TELANGANA	</option>
                                  <option value="74">Tata Power - DELHI	</option>
                                  <option value="75">Torrent Power</option>
                                  <option value="76">TSECL - TRIPURA</option>
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" name="number" value="Consumer Number/ID/K number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Customer Account Number';}" required="">	
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Pay?</h4>
                                    <div class="mobile-rchge">
                                       <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            
                            <li>
                                <input type="submit" class="submit" name="submit" value="Proceed" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
                        </div>
                        <!-- /tab4 -->
                        
                        
                        <!-- tab5 -->
						<div>
                            
							<i class="icon fa fa-phone inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                  <option value="Select Operator">Select Operator</option>
                                  <option value="42">RELIANCE INFOCOM LANDLINE</option>
                                  <option value="43">TIKONA INTERNET LANDLINE</option>
                                  <option value="44">AIRTEL LANDLINE</option>
                                  <option value="45">BSNL LANDLINE</option>
                                  <option value="46">TATA DOCOMO CDMA LANDLINE</option>
                                  <option value="47">MTNL DELHI LANDLINE	</option> 
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" name="number" value="Telephone Number(with STD code)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone Number(with STD code)';}" required="">	
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Pay?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" name="submit" class="submit" value="Pay Bill" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
							
						</div>
                        <!-- /tab5 -->
                        <!-- tab6 -->
						<div>
							<i class="icon fa fa-connectdevelop inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true">
                                  <option data-tokens="Select Operator">Select Operator</option>
                                  <option data-tokens="Operator1">Operator1</option>
                                  <option data-tokens="Operator2">Operator2</option>
                                  <option data-tokens="Operator3">Operator3</option>
                                  <option data-tokens="Operator4">Operator4</option>
                                  <option data-tokens="Operator5">Operator5</option>
                                  <option data-tokens="Operator6">Operator6</option>
                                  <option data-tokens="Operator7">Operator7</option>
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" value="Telephone Number(with STD code)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone Number(with STD code)';}" required="">	
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Pay?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" value="Pay Bill" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
						</div>
                        <!-- /tab6 -->
                        
                        <!-- tab7 -->
						<div>
							
							<i class="icon fa fa-flask inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                  <option value="Gas Operator">Gas Operator</option>
                                  <option value="48">Adani Gas</option>
                                  <option value="49">Gujarat Gas</option>
                                  <option value="50">Indraprastha Gas</option>
                                  <option value="51">Mahanagar Gas</option>
                                  <option value="166">Haryana City Gas</option>
                                  <option value="167">Sabarmati Gas</option>
                                  <option value="168">Siti Energy Gas - Uttar Pradesh</option>
                                  <option value="169">Tripura Natural Gas</option>                                  
                                </select>
                                </div>
                            </li>
                           <li>                                
                                    <div class="agileits-select">
                                        <input type="text" class="selectpicker show-tick" id="customer" name="amount" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter amount';}" required="" />
                                    </div>
                            </li>                            
                            <li>
                              <input type="text" id="customer" value="Customer Account Number" name="number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Customer Account Number';}" required="">	
                            </li>
                            
                            <li>
                                <input type="submit" class="submit" name="submit" value="Proceed" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
						</div>
                        <!-- /tab7 -->
                        
                        <!-- tab8 -->
						<div>
							<i class="icon fa fa-insurance inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                  <option value="Insurance">Insurance Provider</option>
                                  <option value="77">Bharti AXA Life Insurance</option>
                                  <option value="78">ICICI Prudential Life Insurance</option>
                                  <option value="79">IndiaFirst Life Insurance</option>
                                  <option value="80">Tata AIA Life Insurance</option>
                                  <option value="171">Tata AIG General Insurance</option>

                                </select>
                                </div>
                            </li>
                            <li>                                
                                    <div class="agileits-select">
                                        <input type="text" class="selectpicker show-tick" id="customer" name="amount" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter amount';}" required="" />
                                    </div>
                            </li>
                            <li>
                            <div class="agileits-select">     
                              <input type="text" class="selectpicker show-tick" id="customer" name="number" value="Consumer Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Consumer Number';}" required="">	
                            </div>                 
                            </li>
                            
                            <li>
                                <input type="submit" class="submit" name="submit" value="Proceed" />
                            </li>
				        </ol>
						</form>	
																							
						</div>	
						</div>
						</div>
                        <!-- /tab8 -->
                        
                        <!-- tab9 -->
						<div>
							<i class="icon fa fa-user inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						
				
                                        
                                                     <br/><a href="change.php" class="btn btn-success">Change My Password</a><br/><br/>
                                                     <br/><a href="commission.php" class="btn btn-success">My Commission of Recharge</a><br/><br/>
                                                     <a href="bill_payment.php" class="btn btn-success">My Commission of Bil payment</a><br/><br/>
                                                     <a href="list.php" class="btn btn-success">My Agents</a><br/><br/>
                                                     <a href="open.php" class="btn btn-success">Add Agent</a><br/><br/>
                                                     <a href="pay.php" class="btn btn-success">Add Balance</a><br/><br/>
                                                     <a href="transfer1.php" class="btn btn-success">Push Balance</a><br/><br/>   
                                                    <a href="summary.php" class="btn btn-success">Summary</a><br/><br/>                                                      						
																							
					
						</div>
						</div>
</div>	
                        <!-- /tab9 -->
 
          			<div>
							<i class="icon fa fa-insurance inner-icon" aria-hidden="true"></i>
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="" method="post" id="signup">
						<ol>	
                        
						 <li><?php  echo "Your Distributor Balance: ".$balance." /-"; ?></li>
					       <li><?php echo "Your Total Agents Balance: ".$qty." /-"; ?>      </li>
				
				        </ol>
						</form>	
																							
						</div>	
						</div>
						</div>
                        <!-- tab10 -->
					
                        <!-- /tab10 -->
                        
                        <!-- tab11 -->
				
                        <!-- /tab11 -->
                        
                        <!-- tab12 -->
						
                        <!-- /tab12 -->
                        
                        <!-- tab13 -->
					
                        <!-- /tab13 -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<!-- //Categories -->


<!--phone-->
	<div class="phone" id="mobileappagileits">
		<div class="container">
			<div class="col-md-6">
				<img src="images/ph1.png" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 phone-text">
				<h4>Online Payment mobile app on your smartphone!</h4>
                <p class="subtitle">Simple and Fast Payments</p>
					<div class="text-1">
						<h5>Recharge</h5>
						<p>Recharge your Mobile, DTH, Datacard etc...</p>
					</div>
					<div class="text-1">
						<h5>Paybills</h5>
						<p>Pay your Bills(Electricity, Water, Gas, Broadband, Landline etc...)</p>
					</div>
					<div class="text-1">
						<h5>Book Online</h5>
						<p>Book Online Tickets(Movies, Bus, Train etc...)</p>
					</div>
					<div class="agileinfo-dwld-app">
							<h6>Download The App : 
								<a href="#"><i class="fa fa-apple"></i></a>
								<a href="#"><i class="fa fa-windows"></i></a>
								<a href="#"><i class="fa fa-android"></i></a>
							</h6>
						</div>
			</div>
            <div class="clearfix"></div>
            <div class="wthree-mobile-app">
				<form action="#" method="get"> 
					<input class="text" type="tel" name="tel" placeholder="Enter Your Mobile Number" required="">
					<input type="submit" value="Send Download Link">
				</form>
			</div>
		</div>
	</div>
<!--//phone-->

	
<!-- Support content -->
	<div class="w3l-support">
		<div class="container">
			<div class="col-md-5 w3_agile_support_left">
				<img src="images/cus.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-7 w3_agile_support_right">
				<h5>Online Recharge</h5>
				<h3>24/7 Customer Service Support</h3>
				<p>Pellentesque accumsan cursus dui, sodales blandit urna sodales vitae. 
					Maecenas placerat eget mi vitae euismod. Duis aliquam efficitur mi, 
					et eleifend velit.</p>
				<div class="agile_more">
					<a href="support.html" class="type-4">
						<span> Support </span>
						<span> Support  </span>
						<span> Support  </span>
						<span> Support  </span>	
						<span> Support  </span>
						<span> Support  </span>
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //Support content -->

    
<!--offers-->
		<div class="w3-offers">
			<div class="container">
				<div class="w3-agile-offers">
					<h3>the best offers</h3>
					<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
			</div>
		</div>
<!--//offers-->
    
<!--partners-->
	<div class="w3layouts-partners">
		<h3>We are accepted at</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg1.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg2.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg3.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg4.png" alt=""></a></li>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg5.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg6.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg7.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg8.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg9.png" alt=""></a></li>	
				</ul>
			</div>
		</div>	
<!--//partners-->	
    
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
					<li><a href="about.php">About Us</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="faq.php">Faq</a></li>	
					<li><a href="#mobileappagileits" class="scroll">Mobile</a></li>	
					<li><a href="feedback.html">Feedback</a></li>	
					<li><a href="contact.php">Contact</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="icons.html">Icons Page</a></li>
					
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
				<h2><a href="index.html">ONLINE RECHARGE</a></h2>
			</div>
			<div class="col-md-8 agileits-footer-class">
				<p >© 2017 Online Recharge. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</footer>

<!--//footer-->
    
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
    <!-- Banner-slider -->
<script src="js/responsiveslides.min.js"></script>
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
<script src="js/bootstrap-select.js"></script>
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
<!-- //body -->
</html>
<!-- //html -->