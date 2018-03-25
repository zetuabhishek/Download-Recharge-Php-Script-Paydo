<?php
// Include config file
require_once '../config/config.php';
//include './distributor/link.php';
 
// Define variables and initialize with empty values
$dis_mobile = $password = $confirm_password = $name = $email = $dob = $mobile = $package = $comm = "";
$dis_mobile_err = $password_err = $confirm_password_err = $name_err = $email_err = $dob_err = $mobile_err = $package_err = $comm_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["mobile"]))){
        $dis_mobile_err = "Please enter a mobile number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM dis_users WHERE dis_mobile = ?";
        
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
                    $mobile_err = "This Mobile Number is already taken.";
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
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO dis_users (Name, dis_mobile, dis_password, package, balance, set_comm, email, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $param_mobile, $param_password, $package, $bb, $comm,
			        $email, $dob);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
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

?>