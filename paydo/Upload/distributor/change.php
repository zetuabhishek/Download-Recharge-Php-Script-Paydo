<?php
require_once '../config/config.php';
include '../theme/header.php';

$select="select * from dis_users where dis_mobile='".$_SESSION["username"]."'";
$query=mysqli_query($link,$select);

while($result=mysqli_fetch_array($query))
{
  $pass=$result['dis_password'];
}

//echo $pass."<br>"; 

if($_POST["flag"]=="match")
{
   $pass1=trim($_POST["password"]);

                       if(password_verify($pass1, $pass)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                           echo "<script>window.alert('Old password found')</script>";
                       ?>
                       <form action="change.php" method="post">
                      
                       New Password:<input type="password" class="billing-address-name form-control" size="10" name="new_password"><br/><br/>
                                    <input type="hidden" name="flag" value="change"/>
                                    <input type="submit" class="submit" name="submit" value="change"/>
                     
                       </form>             
                       <?php
                       }
                           else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                            echo $password_err;                      
                        }
}                        
else
{
?>
<form action="change.php" method="post">
Old Password:<input type="password" class="billing-address-name form-control" size="10" name="password"><br/><br/>
<input type="hidden" name="flag" value="match"/>
<input type="submit" class="submit" name="submit" value="match"/>
</form>
<?php
if($_POST["flag"]=="change")
{
  $new_password=trim($_POST["new_password"]);
  $param_pass=password_hash($new_password, PASSWORD_DEFAULT); // Creates a password hash
  $change="update dis_users set dis_password='$param_pass' where dis_mobile='".$_SESSION["username"]."'";
  if($query1=mysqli_query($link,$change))
  {
   echo "<script>window.alert('password changed successfully')</script>";
   header("location: login.php");  
  }
}

}

include './theme/footer.php';

?>