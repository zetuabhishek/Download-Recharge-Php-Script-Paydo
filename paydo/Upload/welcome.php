<?php 
  require_once './theme/header.php'; 
  require_once './config/config.php';
      
session_start();
if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){
header("location: login.php");
exit;
}

$find = "select * from users where mobile = '".$_SESSION["mobile"]."'";
        $query_ekyc=mysqli_query($link,$find);
        $rows_ekyc = mysqli_num_rows($query_ekyc);
        if($rows_ekyc > 0)
         {
             while($result_ekyc = mysqli_fetch_array($query_ekyc))
             {
                  $ekyc=$result_ekyc['ekyc'];
             }
         }
         else
         {
header("location: index.php");
            echo "can't fetch row";
         }

if($ekyc=="0"){

         // header("location: ekyc.php");
 echo 'Please complete your ekyc before use our service &nbsp;&nbsp;<a href="ekyc.php" class="btn-primary btn-sm">Submit ekyc</a><br/><br/>';

}
else
{ 
  
?>
    


    <!--Vertical Tab-->
	<div class="categories-section main-grid-border" id="mobilew3layouts">
		<div class="container">
		
 <?php		 
	$find = "select * from users where mobile = '".$_SESSION["mobile"]."'";
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


$find = "select * from users where mobile = '".$_SESSION['mobile']."'";
        $query3=mysqli_query($link,$find);
        $rows3 = mysqli_num_rows($query3);
        if($rows3 > 0)
         {
             while($result3 = mysqli_fetch_array($query3))
             {
             $username=$result3['Name'];
             $usersregdate=$result3['created_at'];
             $package=$result3['package'];
             $balance=$result3['balance'];
             }
         }


$stop_date = date('Y-m-d', strtotime($usersregdate . ' +3 day'));

$time = date('Y-m-d');// sever time zetusolutions

$diff = abs(strtotime($stop_date) - strtotime($time)); //remaining time 

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$t="trial";
$p="pro";
$b="basic";

echo 'Help Number - '.$mobile.'<br/>';
if ($p == $package) {
    echo 'Hi '.$username.', A  <b>Big</b> Welcome from '.$website.' <br/><br/>';
} elseif ($b == $package) {
    echo 'Hi '.$username.', A  <b>Big</b> Welcome from '.$website.' and your current <b>Package is '.$package.' </b><br/><br/>';
} else {
    if($time < $stop_date) {
echo 'Hi '.$username.', A  <b>Big</b> Welcome from '.$website.' But your current <b>Package is '.$package.' ( this is demo of pro plan ) </b> It will has only Your '.$days.' days. Please Upgrade for lifetime account &nbsp;&nbsp;&nbsp;<a href="upgrade.php" class="btn-primary btn-sm">Upgrade</a><br/><br/>';

}else
{
echo "your account expired";
header("location: expired.php");
}
}

?>
<br/>
<div class="container"><a href="http://<?php echo $domain; ?>/app.apk"><p class="btn btn-success btn-lg">Download App</p></a></div>
<br/>
Notifications - 
<ul>
<li>1.  Recharge Offline - ReLive 1PM</li><li>
2. Old balance transfer starting from today, It'll go one by one user.</li>
</ul>
<br/>


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
					</ul>
					</div>
					<div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
						<div>
                            <div class="tabs-box">
                                
                    <img src="theme/images/mobile.png" class="w3ls-mobile" alt="" data-pin-nopin="true">
                <ul class="tabs-menu">
                    <li><a href="#tab1"><label class="radio"><input type="radio" name="radio" checked=""><i></i>Prepaid</label></a></li>
                    <li><a href="#tab2"><label class="radio"><input type="radio" name="radio"><i></i>Postpaid</label></a></li>
                </ul>
			     <div class="clearfix"> </div>
			     <div class="tab-grids">
                    <div id="tab1" class="tab-grid">  
		                      <div class="login-form">	
						<form action="prepaid.php" method="post" id='signup'>
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
                                                <option value="93">Reliance Jio</option>
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
                               <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="5">Delhi/NCR</option>
				<option value="3">Mumbai</option>
				<option value="6">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="13">Andhra Pradesh</option>
				<option value="8">Tamil Nadu</option>
				<option value="9">Karnataka</option>
				<option value="12">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="16">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="2">West Bengal</option>
				<option value="18">Rajasthan</option>
				<option value="14">Kerala</option>
				<option value="1">Punjab</option>
				<option value="20">Haryana</option>
				<option value="17">Bihar & Jharkhand</option>
				<option value="23">Orissa</option>
				<option value="24">Assam</option>
				<option value="26">North East</option>
				<option value="21">Himachal Pradesh	</option>
				<option value="25">Jammu & Kashmir</option>
				<option value="7">Chennai</option>
				<option value="11">UP West</option>
				<option value="10">UP East</option>
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
                                          <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Recharge Now"/>
                                         
                            </li>
				        </ol>
						</form>	
																							
						</div>	

                    </div>
        
 
       
        
        
                    
                    <div id="tab2" class="tab-grid">
		                      <div class="login-form">
						<form action="postpaid.php" method="post" id="signup">
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
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="5">Delhi/NCR</option>
				<option value="3">Mumbai</option>
				<option value="6">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="13">Andhra Pradesh</option>
				<option value="8">Tamil Nadu</option>
				<option value="9">Karnataka</option>
				<option value="12">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="16">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="2">West Bengal</option>
				<option value="18">Rajasthan</option>
				<option value="14">Kerala</option>
				<option value="1">Punjab</option>
				<option value="20">Haryana</option>
				<option value="17">Bihar & Jharkhand</option>
				<option value="23">Orissa</option>
				<option value="24">Assam</option>
				<option value="26">North East</option>
				<option value="21">Himachal Pradesh	</option>
				<option value="25">Jammu & Kashmir</option>
				<option value="7">Chennai</option>
				<option value="11">UP West</option>
				<option value="10">UP East</option>
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
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Pay bill" />
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
						<form action="dth.php" method="post" id="signup">
                            
						<ol>	
                            <li>
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" name="operator">
                                <option value="">Select Operator</option>                              
 				<option value="28">VIDEOCON DTH</option>
				<option value="26">SUN DTH</option>
				<option value="24">BIG TV DTH</option>
				<option value="27">TATA SKY DTH</option>
				<option value="25">DISH DTH</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="5">Delhi/NCR</option>
				<option value="3">Mumbai</option>
				<option value="6">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="13">Andhra Pradesh</option>
				<option value="8">Tamil Nadu</option>
				<option value="9">Karnataka</option>
				<option value="12">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="16">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="2">West Bengal</option>
				<option value="18">Rajasthan</option>
				<option value="14">Kerala</option>
				<option value="1">Punjab</option>
				<option value="20">Haryana</option>
				<option value="17">Bihar & Jharkhand</option>
				<option value="23">Orissa</option>
				<option value="24">Assam</option>
				<option value="26">North East</option>
				<option value="21">Himachal Pradesh	</option>
				<option value="25">Jammu & Kashmir</option>
				<option value="7">Chennai</option>
				<option value="11">UP West</option>
				<option value="10">UP East</option>
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
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Recharge Now" />
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
						<form action="data_card.php" method="post" id="signup">
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
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="2">Aircel</option>
                                <option value="1">Delhi/NCR</option>
				<option value="2">Mumbai</option>
				<option value="3">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="5">Andhra Pradesh</option>
				<option value="6">Tamil Nadu</option>
				<option value="7">Karnataka</option>
				<option value="8">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="9">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="11">West Bengal</option>
				<option value="12">Rajasthan</option>
				<option value="13">Kerala</option>
				<option value="14">Punjab</option>
				<option value="15">Haryana</option>
				<option value="16">Bihar & Jharkhand</option>
				<option value="17">Orissa</option>
				<option value="18">Assam</option>
				<option value="19">North East</option>
				<option value="20">Himachal Pradesh	</option>
				<option value="21">Jammu & Kashmir</option>
				<option value="22">Chennai</option>
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
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Recharge Now" />
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
						<form action="el.php" method="post" id="signup">
<?php if($t == $package) {
echo 'HI '.$username.', Your <b>Package is '.$package.' ( this is demo of pro plan ) </b>. this option not available under trial plan. Please Upgrade for lifetime account &nbsp;&nbsp;&nbsp;<a href="upgrade.php" class="btn-primary btn-sm">Upgrade</a><br/><br/>';

}else
{	?>
						<ol>

                            <li>
<P> You can pay only before 2 days ago from the last date. Bill payment take up to 2 days</p>
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
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="5">Delhi/NCR</option>
				<option value="3">Mumbai</option>
				<option value="6">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="13">Andhra Pradesh</option>
				<option value="8">Tamil Nadu</option>
				<option value="9">Karnataka</option>
				<option value="12">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="16">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="2">West Bengal</option>
				<option value="18">Rajasthan</option>
				<option value="14">Kerala</option>
				<option value="1">Punjab</option>
				<option value="20">Haryana</option>
				<option value="17">Bihar & Jharkhand</option>
				<option value="23">Orissa</option>
				<option value="24">Assam</option>
				<option value="26">North East</option>
				<option value="21">Himachal Pradesh	</option>
				<option value="25">Jammu & Kashmir</option>
				<option value="7">Chennai</option>
				<option value="11">UP West</option>
				<option value="10">UP East</option>
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" name="number" placeholder="Consumer Number/ID/K number"  required="">	
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
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Proceed" />
                            </li>
				        </ol>
<?php } ?>

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
						<form action="landline.php" method="post" id="signup">
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
                                  <option value="47">MTNL DELHI LANDLINE</option> 
                                </select>
                                </div>
                            </li>
                            <li>
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="2">Aircel</option>
                                <option value="1">Delhi/NCR</option>
				<option value="2">Mumbai</option>
				<option value="3">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="5">Andhra Pradesh</option>
				<option value="6">Tamil Nadu</option>
				<option value="7">Karnataka</option>
				<option value="8">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="9">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="11">West Bengal</option>
				<option value="12">Rajasthan</option>
				<option value="13">Kerala</option>
				<option value="14">Punjab</option>
				<option value="15">Haryana</option>
				<option value="16">Bihar & Jharkhand</option>
				<option value="17">Orissa</option>
				<option value="18">Assam</option>
				<option value="19">North East</option>
				<option value="20">Himachal Pradesh	</option>
				<option value="21">Jammu & Kashmir</option>
				<option value="22">Chennai</option>
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" class="selectpicker show-tick" name="number" value="Telephone Number(with STD code)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone Number(with STD code)';}" required="">	
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
                                <input type="submit" onClick="this.value='Please Wait…';" name="submit" class="submit" value="Pay Bill" />
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
						<form action="#" method="post" id="signup">
						<ol>	
                           
                                <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true">
                                  <option data-tokens="Select Operator">Select Operator</option>
                                  <option data-tokens="Operator1">Super Net - Kolkata</option>
                                  <option data-tokens="Operator2">Skynet - Kolkata</option>
                                  
                                </select>
                                </div>
                            </li>
                            <li>
                              <input type="text" id="customer" name="number" value="Telephone Number(with STD code)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone Number(with STD code)';}" required="">	
                            </li>
                            <li>
                                                           <div class="agileits-select">
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="2">Aircel</option>
                                <option value="1">Delhi/NCR</option>
				<option value="2">Mumbai</option>
				<option value="3">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="5">Andhra Pradesh</option>
				<option value="6">Tamil Nadu</option>
				<option value="7">Karnataka</option>
				<option value="8">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="9">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="11">West Bengal</option>
				<option value="12">Rajasthan</option>
				<option value="13">Kerala</option>
				<option value="14">Punjab</option>
				<option value="15">Haryana</option>
				<option value="16">Bihar & Jharkhand</option>
				<option value="17">Orissa</option>
				<option value="18">Assam</option>
				<option value="19">North East</option>
				<option value="20">Himachal Pradesh	</option>
				<option value="21">Jammu & Kashmir</option>
				<option value="22">Chennai</option>
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
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" value="Pay Bill" />
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
						<form action="gas.php" method="post" id="signup">
<?php 
if($t == $package) {
echo 'HI '.$username.', Your <b>Package is '.$package.' ( this is demo of pro plan ) </b>. this option not available under trial plan. Please Upgrade for lifetime account &nbsp;&nbsp;&nbsp;<a href="upgrade.php" class="btn-primary btn-sm">Upgrade</a><br/><br/>';

}else
{	?>
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
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="2">Aircel</option>
                                <option value="1">Delhi/NCR</option>
				<option value="2">Mumbai</option>
				<option value="3">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="5">Andhra Pradesh</option>
				<option value="6">Tamil Nadu</option>
				<option value="7">Karnataka</option>
				<option value="8">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="9">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="11">West Bengal</option>
				<option value="12">Rajasthan</option>
				<option value="13">Kerala</option>
				<option value="14">Punjab</option>
				<option value="15">Haryana</option>
				<option value="16">Bihar & Jharkhand</option>
				<option value="17">Orissa</option>
				<option value="18">Assam</option>
				<option value="19">North East</option>
				<option value="20">Himachal Pradesh	</option>
				<option value="21">Jammu & Kashmir</option>
				<option value="22">Chennai</option>
                                </select>
                                </div>
                            </li>
                           <li>                                
                                    <div class="agileits-select">
                                        <input type="text" id="customer" class="selectpicker show-tick" name="amount" placeholder="Enter Amount" required="">
                                    </div>
                            </li>                            
                            <li>
                              <input type="text" id="customer" class="selectpicker show-tick"  value="Customer Account Number" name="number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Customer Account Number';}" required="">	
                            </li>
                            
                            <li>
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Proceed" />
                            </li>
				        </ol>
<?php } ?>
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
						<form action="insurance.php" method="post" id="signup">
						<ol>	
<?php if($t == $package) {
echo 'HI '.$username.', Your <b>Package is '.$package.' ( this is demo of pro plan ) </b>. this option not available under trial plan. Please Upgrade for lifetime account &nbsp;&nbsp;&nbsp;<a href="upgrade.php" class="btn-primary btn-sm">Upgrade</a><br/><br/>';

}else
{	?>
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
                                <select class="selectpicker show-tick" data-live-search="true" required="required" name="circle">
                                <option value="">Select Circle</option>
                                <option value="2">Aircel</option>
                                <option value="1">Delhi/NCR</option>
				<option value="2">Mumbai</option>
				<option value="3">Kolkata</option>
				<option value="4">Maharashtra</option>
				<option value="5">Andhra Pradesh</option>
				<option value="6">Tamil Nadu</option>
				<option value="7">Karnataka</option>
				<option value="8">Gujarat</option>
				<option value="8">Uttar Pradesh (E)</option>
				<option value="9">Madhya Pradesh</option>
				<option value="10">Uttar Pradesh (W)</option>
				<option value="11">West Bengal</option>
				<option value="12">Rajasthan</option>
				<option value="13">Kerala</option>
				<option value="14">Punjab</option>
				<option value="15">Haryana</option>
				<option value="16">Bihar & Jharkhand</option>
				<option value="17">Orissa</option>
				<option value="18">Assam</option>
				<option value="19">North East</option>
				<option value="20">Himachal Pradesh	</option>
				<option value="21">Jammu & Kashmir</option>
				<option value="22">Chennai</option>
                                </select>
                                </div>
                            </li>
                            <li>                                
                                    <div class="agileits-select">
                                        <input type="text" id="customer" class="selectpicker show-tick" name="amount" placeholder="Enter Amount" required="">
                                    </div>
                            </li>
                            <li>
                            <div class="agileits-select">     
                              <input type="text" class="selectpicker show-tick" id="customer" name="number" value="Consumer Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Consumer Number';}" required="">	
                            </div>                 
                            </li>
                            
                            <li>
                                <input type="submit" onClick="this.value='Please Wait…';" class="submit" name="submit" value="Proceed" />
                            </li>
<?php } ?>
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
						
	
                           
                         
                               <br/><a href="cashback.php" class="btn btn-success">My PointBack of Recharge</a><br/><br/>
<?php 
if($t == $package) { ?>
<a href="unable.php" class="btn btn-success">My SurPoint of Bill Payment</a><br/><br/>

<?php
}else
{
?>
                               <a href="bill_payment.php" class="btn btn-success">My SurPoint of Bill Payment</a><br/><br/>
<?php } ?>
                               <a href="account.php" class="btn btn-success">My Account Update</a><br/><br/>
                               <a href="pay.php#parentHorizontalTab4" class="btn btn-success">Add <?php echo $website; ?> Points</a><br/><br/>
                               <a href="balancestatement.php" class="btn btn-success"><?php echo $website; ?> Points Statement</a><br/><br/>
                               <a href="result.php" class="btn btn-success">Recharge History</a><br/><br/>
                               <a href="change.php" class="btn btn-success">Change Password</a><br/><br/>
                              																							
						</div>	
						</div>
						</div>
                        <!-- /tab9 -->
                        
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
<?php } ?>	
<div class="w3layouts-partners">

		<div class="container">
		
				
				<h3>24/7 Customer Service Support</h3><br/>
				<h3>Call +91-<?php echo $mobile; ?> <br/> email <?php echo $email; ?></h3>

</div>		</div>
			


 
 
    
<!-- subscribe -->
	<div class="w3-subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Join Us</h4>  
				<ul>
					<li><a href="https:/facebook.com/Paydoin-Online-Recharge-Business-2066554576896410" class="fa fa-facebook sicon facebook"> </a></li>
<li><a href="https://plus.google.com/b/107299483429956233724/107299483429956233724" class="fa fa-google-plus sicon googleplus"> </a></li>
				
				</ul> <br/>

<ul>
<li><img src="https://paydo.in/iso.jpg" width="100" heigth="80"> </li>
<li><img src="https://paydo.in/inst.jpg" width="100" heigth="80"></li>
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
					<?php


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
		<script src="theme/js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
    <!-- Banner-slider -->
<script src="theme/js/responsiveslides.min.js"></script>
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
<script src="theme/js/bootstrap-select.js"></script>
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
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aadcabcd7591465c708a95d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		<!-- //here ends scrolling icon -->
</body>
<!-- //body -->
</body>
<!-- //body -->
</html>
<!-- //html -->
</html>
<!-- //html -->

