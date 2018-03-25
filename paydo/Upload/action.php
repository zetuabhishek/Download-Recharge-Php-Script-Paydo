<?php
// Include config file
require_once './config/config.php';
include './theme/header.php';


// Define variables and initialize with empty values
$mobile = $password = $confirm_password = $name = $email = $dob = $address = $mobile = $package = $comm = "";
$mobile_err = $password_err = $confirm_password_err = $name_err = $email_err = $dob_err = $address_err = $mobile_err = $package_err = $comm_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter a mobile number.";
        echo $mobile_err;
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE mobile = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_mobile);
            
            // Set parameters
            $param_mobile = trim($_POST["mobile"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $mobile_err = "This mobile number is already taken.";
                    echo $mobile_err;
                } else{
                    $mobile = trim($_POST["mobile"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    
    if(empty(trim($_POST['name']))){
        $name_err = "Please enter Your name.";     
    } 
    else{
        $name = trim($_POST['name']);
    }
	
	
    if(empty(trim($_POST['dob']))){
        $dob_err = "Please enter Date Of Birth.";     
    } 
    else{
        $dob = trim($_POST['dob']);
    }

 if(empty(trim($_POST['address']))){
        $address_err = "Please enter address";     
    } 
    else{
        $address = trim($_POST['address']);
    }
    
    if(empty(trim($_POST['email']))){
        $email_err = "Please enter email id.";     
    } 
    else{
        $email = trim($_POST['email']);
    }
    
    if(empty(trim($_POST['package']))){
        $package_err = "Please select package.";
        //echo  $package_err;    
    } 
    else{
        $package = trim($_POST['package']);			
    }
    if(empty(trim($_POST['set_comm']))){
        $comm_err = "Please select commission.";
        //echo  $package_err;    
    } 
    else{
        $comm = trim($_POST['set_comm']);			
    }    
    
/*switch ($package) {
    case "retailer":
        $package = "Retailer";
        break;
    case "trial":
        $package = "Trial";
        break;
    case "pro-Retailer":
        $package = "Pro-retailer";
        break;
    case "agent":
        $package = "Agent";
        break;
    case "pro-Retailer":
        $package = "Pro-Retailer";
        break;
    case "sub-agent":
        $package = "Sub-agent";
        break;                
    default:
        $package = "";
}*/
    $bb =0;

    // Check input errors before inserting in database
if(empty($mobile_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (Name, mobile, password, package, balance, set_comm, email, dob, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $name, $param_mobile, $param_password, $package, $bb, $comm,
			        $email, $dob, $address);
            
            // Set parameters
            $param_mobile = $mobile;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page

$message = urlencode("Congratulation. Your are registered with paydo.in your username - $mobile and password - $password");
 
    $response_type = 'json';

    $route = "4";
 
    $postData = array(
        'authkey' => '143687AuFR3CSOd5aa60b59',
        'mobiles' => $mobile,
        'message' => $message,
        'sender' => 'PAYDOO',
        'route' => $route,
        'response' => $response_type
    );
 

   $url = "https://control.msg91.com/api/sendhttp.php?";
 
 
   $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        
    ));
 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
 

    $output = curl_exec($ch);
     if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }
 
    curl_close($ch);

                header("location: reglogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
 include './theme/footer.php';
?>