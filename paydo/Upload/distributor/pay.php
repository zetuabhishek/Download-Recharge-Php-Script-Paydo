<?php 
include './theme/header.php';
require_once './config/config.php';
 
//echo $_SESSION['mobile']."<br>";

if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){
  header("location: log.php");
  exit;
}  
$date = date("Y-m-d h:i:s"); 
/*---------------------------------------------------------------*/  
$select = "select * from users where mobile ='".$_SESSION['mobile']."'";
$query = mysqli_query($link,$select);
   while($result=mysqli_fetch_array($query))
   {
      $sub_id = $result["id"];
   }
//echo $sub_id."<br>";

?>
<head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>	
<body>
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
			<h3 class="w3-head">Select Payment Option</h3>
<label class="control-label"> point load time use <b>chrome browser</b> only and don't leave or refresh the page</label>
<br/><br/>

			<!--<h2>Add balance with Jio Money for offer, please contact to us whatsapp +918759759506</h2>-->
	<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
            <li>Debit Card Payment Option</li>
               
            </ul>


            <div class="resp-tabs-container hor_1">
            
            <!-- start icici payment -->
            
             <div class="vertical_post">
                
    <form action="form.php" method="post" name="payuForm">
    
<label class="control-label"> Please use debit card option only.</label>
<br/>
 
												<div class="section_room_pay">
<label class="control-label">Select Amount For Paydo Points</label><br/> 
									<select class="selectpicker show-tick" data-live-search="true" required="required" name="amount">
													  <option value="">select</option>
                                                                                                          <option value="300">Rs.300 = 300 Paydo Points</option>
                                                                                                          <option value="500">Rs.500 = 500 Paydo Points</option>
													  <option value="1000">Rs.1000 = 1000 Paydo Points</option>
													  													  
                                                                                                          <option value="1900">Rs.1900 = 1900 Paydo Points</option></select>
</div><br/>    

<div class="w3_agileits_card_number_grid_right">
													<label class="control-label">First Name</label>
													<input class="billing-address-name form-control" type="text" name="firstname" placeholder="first name"/>
												</div>	
<div class="w3_agileits_card_number_grid_right">
                                                                                                        <label class="control-label">Last Name</label>
													<input class="billing-address-name form-control" type="text" name="lastname" placeholder="last name"/>
												</div>	
<div class="w3_agileits_card_number_grid_right">
                                                                                                        <label class="control-label">Email</label>
													<input class="billing-address-name form-control" type="text" name="email" placeholder="yourname@domain.com"/>
												</div><br/>
	
<div class="w3_agileits_card_number_grid_right">
                                                                                                        <label class="control-label">Phone:</label><br/>
													<input class="billing-address-name form-control" type="hidden" name="phone" value="<?php echo $_SESSION['mobile']; ?>"/>
<input class="billing-address-name form-control" type="hidden" name="udf1" value="<?php echo $_SESSION['mobile']; ?>"/>
<?php echo $_SESSION['mobile']; ?>
												</div>
<br/>	
	

<div class="w3_agileits_card_number_grid_right">
                                                                                                        <label class="control-label">Address</label>
													<input class="billing-address-name form-control" type="text" name="address1" placeholder="address"/>
												</div>	

<div class="w3_agileits_card_number_grid_right">
                                                                                                        <label class="control-label">City</label>
													<input class="billing-address-name form-control" type="text" name="city" placeholder="city"/>
												</div>

<div class="section_room_pay">
													<label class="control-label">State/Province</label><br/>
																										<select class="selectpicker show-tick" data-live-search="true" required="required" name="state">
													  <option value="">select</option>													
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
                                                                                                        <label class="control-label">Pincode</label>
													<input class="billing-address-name form-control" type="text" name="zipcode" placeholder="pincode"/>
												</div>

<div class="w3_agileits_card_number_grid_right">

<input class="billing-address-name form-control" type="hidden" name="productinfo" value="paydo points"/>
<input type="hidden" name="curl" value="https://paydo.in/failure.php" />
<input type="hidden" name="pg" value="DC" />

												</div>		

   
          
           <input class="submit" type="submit" onClick="this.value='Please Wait…';" name="submitted" value="MAKE PAYMENT">
          
     
    </form>            



					</div>			</div>

           
                
                
<!--end icici payment -->                
                          
<!-- credit-card -->
		<script type="text/javascript" src="theme/js/creditly.js"></script>
                    <link rel="stylesheet" href="theme/css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->

                </div>   
 <!-- <div class="vertical_post">
Send your payment to <b>paydo@icici</b> or Paytm - <b>8759759506</b>  and send transfer id to <a href="https://api.whatsapp.com/send?phone=918759759506">whatsapp team +91-8759759506 [clcik to send]</a> -->
  </div>
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


<?php
 include 'theme/footer.php';
?>