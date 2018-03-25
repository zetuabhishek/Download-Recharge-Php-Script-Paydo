<?php
include "../theme/header.php";
?>
<div class="container">
<form action="plans.php" method="POST">
                
Operator:     <select name="operator" class="form-control" id="opid" title="select your mobile service provider">
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
				<option value="12">Uninor</option>
				<option value="13">Uninor Special</option>
				<option value="14">Loop Mobile</option>
				<option value="15">Videocon</option>
				<option value="16">Videocon Special</option>
				<option value="17">MTNL DL Topup</option>
				<option value="18">MTNL DL Special</option>
				<option value="19">MTNL Mumbai</option>
				<option value="20">MTNL Mumbai Special</option>
				<option value="21">Tata Walky</option>
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
</select><br/>

Circle:       <select name="circle" class="form-control" id="cirId" title="select your circle area">
                <option value="">Select Circle</option>
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
				
</select><br/>

Offer Type:   <select name="type" class="form-control" title="select your offer type">
                 <option value="2G">2G</option>
				 <option value="3G">3G</option>
				 <option value="FTT">Full Talktime</option>
				 <option value="LSC">LSC</option>
				 <option value="OTR">OTR</option>
				 <option value="RMG">Roaming Pack</option>
				 <option value="SMS">SMS Pack</option>
				 <option value="TUP">TUP</option>
				 
               </select><br/>

		<input type="submit" name="submit" class="btn btn-success" value="Check"/>
</form>
<?php
function opName($operatorId){
switch ($operatorId) {
    case 1:
        $operatorName= "Airtel";
        break;
    case 2:
        $operatorName= "Aircel";
        break;
    case 3:
        $operatorName= "Idea";
        break;
    case 4:
        $operatorName= "Bsnl Topup";
        break;
        
        case 5:
        $operatorName= "Bsnl Special";
        break;
        case 6:
        $operatorName= "Reliance CDMA";
        break;
        case 22:
        $operatorName= "Reliance GSM";
        break;
        case 7:
        $operatorName= "Tata Docomo Topup";
        break;
        case 8:
        $operatorName= "Tata Docomo Special";
        break;
        case 9:
        $operatorName= "Tata Indicom";
        break;
        case 10:
        $operatorName= "Vodafone";
        break;
        case 11:
        $operatorName= "MTS";
        break;
        case 12:
        $operatorName= "Uninor";
        break;
        case 13:
        $operatorName= "Uninor Special";
        break;
        case 14:
        $operatorName= "Loop Mobile";
        break;    
    default:
        $operatorName= "";
}
return $operatorName;

}

function cirName($circleId){
switch ($circleId) {
    case 1:
        $circleName= "Delhi/NCR	";
        break;
    case 2:
        $circleName= "Mumbai";
        break;
    case 3:
        $operatorName= "Kolkata";
        break;
    case 4:
        $circleName= "Maharashtra";
        break;
        
        case 5:
        $circleName= "Andhra Pradesh";
        break;
        case 6:
        $circleName= "Tamil Nadu";
        break;
        case 7:
        $circleName= "Karnataka";
        break;
        case 8:
        $circleName= "Gujarat";
        break;
        case 9:
        $operatorName= "Uttar Pradesh (E)";
        break;
        case 10:
        $circleName= "Madhya Pradesh";
        break;
        case 11:
        $circleName= "Uttar Pradesh (W)	";
        break;
        case 12:
        $circleName= "West Bengal";
        break;
        case 13:
        $circleName= "Rajasthan";
        break;
        case 14:
        $circleName= "Kerala";
        break;
        case 15:
        $circleName= "Punjab";
        break; 
        case 16:
        $circleName= "Haryana";
        break; 
        case 17:
        $circleName= "Bihar & Jharkhand	";
        break;
        case 18:
        $circleName= "Orissa";
        break; 
        case 19:
        $circleName= "Assam";
        break; 
        case 20:
        $circleName= "North East";
        break;
        case 21:
        $circleName= "Himachal Pradesh";
        break;  
        case 22:
        $circleName= "Jammu & Kashmir";
        break;  
        case 23:
        $circleName= "Chennai";
        break;  		
    default:
        $circleName= "";
}
return $operatorName;

}

if(isset($_POST["submit"]))
{
    $operatorId=$_POST["operator"];
    $operatorName=opName($operatorId);
	//echo $operatorName;
	$circleId=$_POST["circle"];
	$circleName=cirName($circleId);
	//echo "<br>".$circleName;
	$type=$_POST["type"];

$token="qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";

$url="https://api.rechapi.com/rech_plan.php?format=xml&token=$token&type=$type&cirid=$circleId&opid=$operatorId";
   $request_timeout = 60; // 60 seconds timeout
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   $curl_error = curl_errno($ch);
   $getserver= curl_getinfo($ch);
   curl_close($ch);
   if($getserver["http_code"]==200 || $curl_error=="28" )
   {
    
           $xml = simplexml_load_string($output);
           $plan=$xml->type;
           $error=$xml->resCode;
           $reason=$xml->resText;
		   $planId=$xml->planId;
		   $detail=$xml->detail;
		   $amount=$xml->amount;
		   $val=$xml->validity;
		   $bal=$xml->talktime;
//print_r($output);	
?>
 <table class="table" border="2">
 <thead>
  <tr>
    <th>Amount</th>
    <th>Detail</th>
    <th>Validity</th>
    <th>Talktime</th>
  </tr>
 </thead>  
 <?php 
$xml = new SimpleXMLElement($output);
//echo $xml->data->type->planId["id"];
//echo $xml->type->planId->amount;
// or...........
foreach ($xml->type->planId as $element) {
  foreach($element as $key => $val)
   {
   }  
	  $amount="{$element->amount}";
	  $val="{$element->validity}";
	  $detail="{$element->detail}";
	  $tt="{$element->talktime}";
	  
?>	<tbody>  
	<tr> <td><?php echo $amount; ?></td>
	  <td><?php echo $detail; ?></td>
	  <td><?php echo $val; ?></td>
	  <td><?php echo $tt; ?></td>
	  <br/>
      </tr>
       <tbody>
<?php	  
    }   
    
  }
?>  
 </table>
</div>
<?php		 
}
include "./theme/footer.php";
?>
