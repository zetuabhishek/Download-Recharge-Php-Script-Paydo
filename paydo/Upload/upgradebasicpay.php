<?php 
 include 'theme/header.php';
      //require_once "link.php";
      require_once "action.php"; 
      require_once "login.php";
      
session_start();

if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){
  header("location: index.php");
  exit;
}
?>
	
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

 
			<h3 class="w3-head">Payment</h3>
	<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
                <li>Online Safe Payment</li>
                
            </ul>
            <div class="resp-tabs-container hor_1">
                <div>
                    <form action="http://zeetsale.com/submit.php" method="post" name="frmTransaction" class="creditly-card-form agileinfo_form" onSubmit="return validate()">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
								                <input name="account_id" type="hidden" value="25158"/>
								                <?php $id=rand(1000,9999); ?>
										<input name="reference_no" type="hidden" value="<?php echo $id; ?>"/>
										<input name="channel" type="hidden" value="0"/>
										<div class="299"><input name="return_url" type="hidden" value="https://paydo.in/upgrade_basic.php" /></div>
                                                                             
												 <input name="display_currency_rates" type="hidden" value="1" />
												 <input name="description" type="hidden" value="Upgrade to Basic Plan"/>
												 <input name="payment_option" type="hidden" value=""/>
												 <input name="bank_code" type="hidden" value=""/>
												 <input name="emi" type="hidden" value=""/>
												 <input name="page_id" type="hidden" value="" />
												 <input name="country" type="hidden" value="IND" />
										<!--shipping-->	
										<input name="ship_name" type="hidden" value="Shipping Name" />
										<input name="ship_address" type="hidden" value="Shipping Address" />
										<input name="ship_city" type="hidden" value="Shipping City" />
										<input name="ship_state" type="hidden" value="Shipping State" />	
										<input name="ship_postal_code" type="hidden" value="" />
										<input name="ship_country" type="hidden" value="IND" />
										<input name="ship_phone" type="hidden" value="" />
<input name="amount" type="hidden" value="299" name="amount"/>

										
										
										
										
										
										
										
										 
												<div class="controls">
	<label class="control-label">Upgrade Package to Basic and package details details<br/> </label><br/>
									<p class="selectpicker show-tick">
													 Basic Plan Fee - Rs.299												 
<div class="299">FLAT 3.35% Recharge Commission + Bill Payment + DTH Connection <br/><br/> </p>


												</div><br/>
													<label class="control-label">Your Name </label>
									<input class="billing-address-name form-control" type="text" name="name" placeholder="JohnSmith">
												</div>
												
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Address</label>
															<input class="billing-address-name form-control" type="text" name="address" placeholder="your present address">
																		  
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<label class="control-label">City</label>
													<input class="billing-address-name form-control" type="text" name="city" placeholder="current city">
												</div>
												<div class="section_room_pay">
													<label class="control-label">State/Province</label><br/>
																										<select class="selectpicker show-tick" data-live-search="true" required="required" name="state">
													  <option value="Andra Pradesh">Andra Pradesh</option>
													  <option value="Arunachal Pradesh

">Arunachal Pradesh

</option>
													  <option value="Assam">Assam</option>
													  <option value="Bihar">Bihar</option>
													  <option value="Chhattisgarh">Chhattisgarh</option>
													  <option value="Goa">Goa</option>
													  <option value="Gujarat">Gujarat</option>
													  <option value="Haryana">Haryana</option>
													  <option value="Himachal Pradesh

">Himachal Pradesh

</option>
													  <option value="Jammu and Kashmir

">Jammu and Kashmir

</option>
													  <option value="Jharkhand

">Jharkhand

</option>
													  <option value="Karnataka">Karnataka</option>
													  <option value="Kerala">Kerala</option>
													  <option value="Madya Pradesh

">Madya Pradesh

</option>
													  <option value="Maharashtra">Maharashtra</option>
													  <option value="Manipur">Manipur</option>
													  <option value="Meghalaya">Meghalaya</option>
													  <option value="Mizoram">Mizoram</option>
													  <option value="Nagaland">Nagaland</option>
													  <option value="Orissa">Orissa</option>
													  <option value="Punjab">Punjab</option>
													  <option value="Rajasthan">Rajasthan</option>
													  <option value="Sikkim">Sikkim</option>
													  <option value="Tamil Nadu

">Tamil Nadu

</option>
													  <option value="Tripura">Tripura</option>
													  <option value="Uttaranchal">Uttaranchal</option>
													  <option value="Uttar Pradesh

">Uttar Pradesh

</option>
													  <option value="West Bengal

">West Bengal

</option>
													  <option value="Andaman and Nicobar Islands

">Andaman and Nicobar Islands

</option>
													  <option value="Chandigarh

">Chandigarh

</option>
													  <option value="Dadar and Nagar Haveli

">Dadar and Nagar Haveli

</option>
													  <option value="Daman and Diu

">Daman and Diu

</option>
													  <option value="Delhi">Delhi</option>
													  <option value="Lakshadeep

">Lakshadeep

</option>
													  <option value="Pondicherry">Pondicherry</option>
													  
													</select>
												</div><br/>
												<div class="w3_agileits_card_number_grid_right">
													<label class="control-label">ZIP/Postal Code</label>
													<input class="billing-address-name form-control" type="text" name="postal_code" placeholder="area pincode">
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<label class="control-label">Email</label>
													<input class="billing-address-name form-control" type="text" name="email" placeholder="name@yourdomain.in"/>
												</div>												
												<div class="w3_agileits_card_number_grid_right">
													<label class="control-label">Your Registered Number</label>
													<input class="billing-address-name form-control" type="hidden" name="phone" value="<?php echo $_SESSION['mobile']; ?>"/><br/>
<span class="help-block" style="color:purple"><?php echo $_SESSION['mobile']; ?></span>													
												</div>
												<div class="section_room_pay">
												<input name="currency" type="hidden" value="INR">
												</div>
												<div class="section_room_pay">
													
												<input type="hidden" name="display_currency" value="INR"												                                        </div>												
												<div class="section_room_pay">
												<input type="hidden" name="card_brand" value="">
												</div>
												<div class="section_room_pay">
													
											        <input type="hidden" class="year" name="payment_mode" value="">
												</div>										
												<div class="section_room_pay">
													<input type="hidden" name="mode" value="LIVE">
				                                                  
												</div>														
												
											</div>
											<input class="btn btn-success btn-lg" type="submit" name="submitted" value="MAKE PAYMENT">
										</div>
									</section>
								</form>

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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
   

<?php
 include 'theme/footer.php';
?>