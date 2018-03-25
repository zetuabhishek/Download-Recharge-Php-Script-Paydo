<head>
<title>Online Recharge a Corporate Category Bootstrap Responsive Web Template | index :: w3layouts</title>
<link href="ebs/css/bootstrap.css" rel="stylesheet" type="hidden/css" media="all" /><!-- bootstrap-CSS -->
<link rel="stylesheet" href="ebs/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="ebs/css/font-awesome.css" rel="stylesheet" type="hidden/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='hidden/javascript' src='ebs/js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="ebs/css/style.css" rel="stylesheet" type="hidden/css" media="all" />	
<!--//theme-style-->
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="hidden/html; charset=utf-8" />
<meta name="keywords" content="Online Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
 
</head>

<?php 
include './theme/header.php';
?>
<div class="container">
<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

$hashData = "578a6ae28317092cb8db94202be68582"; //Pass your Registered Secret Key

unset($_POST['submitted']);
ksort($_POST);
foreach ($_POST as $key => $value){
	if (strlen($value) > 0) {
		$hashData .= '|'.$value;
	}
}
if (strlen($hashData) > 0) {
	$secure_hash = strtoupper(hash("sha512",$hashData));//for SHA512
	//$secure_hash = strtoupper(hash("sha1",$hashData));//for SHA1
	//$secure_hash = strtoupper(md5($hashData));//for MD5
}
//echo $hashData;

//print_r($secure_hash_md5); exit;
?>
<form action="https://secure.ebs.in/pg/ma/payment/request" name="payment" method="POST">

<input type="hidden" value="<?php echo $_POST["account_id"];?>" name="account_id"/>
<input type="hidden" value="<?php echo $_POST["address"];?>" name="address"/>
<input type="hidden" value="<?php echo $_POST["amount"];?>" name="amount"/>
<input type="hidden" value="<?php echo $_POST["bank_code"];?>" name="bank_code"/>
<input type="hidden" value="<?php echo $_POST["card_brand"];?>" name="card_brand"/>
<input type="hidden" value="<?php echo $_POST["channel"];?>" name="channel"/>
<input type="hidden" value="<?php echo $_POST["city"];?>" name="city"/>
<input type="hidden" value="<?php echo $_POST["country"];?>" name="country"/>
<input type="hidden" value="<?php echo $_POST["currency"];?>" name="currency"/>
<input type="hidden" value="<?php echo $_POST["description"];?>" name="description"/>
<input type="hidden" value="<?php echo $_POST["display_currency"];?>" name="display_currency"/>
<input type="hidden" value="<?php echo $_POST["display_currency_rates"];?>" name="display_currency_rates"/>
<input type="hidden" value="<?php echo $_POST["email"];?>" name="email"/>
<input type="hidden" value="<?php echo $_POST["emi"];?>" name="emi"/>
<input type="hidden" value="<?php echo $_POST["mode"];?>" name="mode"/>
<input type="hidden" value="<?php echo $_POST["name"];?>" name="name"/>
<input type="hidden" value="<?php echo $_POST["page_id"];?>" name="page_id"/>
<input type="hidden" value="<?php echo $_POST["payment_mode"];?>" name="payment_mode"/>
<input type="hidden" value="<?php echo $_POST["payment_option"];?>" name="payment_option"/>
<input type="hidden" value="<?php echo $_POST["phone"];?>" name="phone"/>
<input type="hidden" value="<?php echo $_POST["postal_code"];?>" name="postal_code"/>
<input type="hidden" value="<?php echo $_POST["reference_no"];?>" name="reference_no"/>
<input type="hidden" value="<?php echo $_POST["return_url"]; ?>" name="return_url"/>
<input type="hidden" value="<?php echo $_POST["ship_address"];?>" name="ship_address"/>
<input type="hidden" value="<?php echo $_POST["ship_city"];?>" name="ship_city"/>
<input type="hidden" value="<?php echo $_POST["ship_country"];?>" name="ship_country"/>
<input type="hidden" value="<?php echo $_POST["ship_name"];?>" name="ship_name"/>
<input type="hidden" value="<?php echo $_POST["ship_phone"];?>" name="ship_phone"/>
<input type="hidden" value="<?php echo $_POST["ship_postal_code"];?>" name="ship_postal_code"/>
<input type="hidden" value="<?php echo $_POST["ship_state"];?>" name="ship_state"/>
<input type="hidden" value="<?php echo $_POST["state"];?>" name="state"/>
<input type="hidden" value="<?php echo $secure_hash; ?>" name="secure_hash"/>
Click below continue .....
<button type="submit" onclick="document.payment.submit();" class="btn btn-primary btn-lg"> Continue </button><br/>
<a href="http://paydo.in/pay.php" class="btn btn-warning btn-lg">Back</a>
</form>
<?php
//include './theme/footer.php';
?>
</div>