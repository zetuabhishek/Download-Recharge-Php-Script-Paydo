<?php
// Include config file
include '../config/config.php';
include '../theme/header.php';

$dis_mobile = $dis_password = "";
$dis_mobile_err = $dis_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["submit"])){
 
    // Check if username is empty
    if(empty(trim($_POST["mobile"]))){
        $dis_mobile_err = 'Please enter registered mobile number.';
        echo $dis_mobile_err;
    } else{
        $dis_mobile = trim($_POST["mobile"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $dis_password_err = 'Please enter your password.';
        echo $dis_password_err;
    } else{
        $dis_password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($dis_mobile_err) && empty($dis_password_err)){
        // Prepare a select statement
        $sql = "SELECT dis_mobile, dis_password FROM dis_users WHERE dis_mobile = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_mobile);
            
            // Set parameters
            $param_mobile = $dis_mobile;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $dis_mobile, $hashed_dis_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($dis_password, $hashed_dis_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $dis_mobile;
                            echo "<script>alert('login successfull')</script>";      
                            header("location: welcome.php");
							//echo "login successfull";
                        } else{
                            // Display an error message if password is not valid
                            $dis_password_err = 'The password you entered was not valid.';
                            echo $dis_password_err;
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $dis_mobile_err = 'No account found with that mobile number.';
                    echo $dis_mobile_err;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        //mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<?php
 include './theme/footer.php';
?>