<?php
require_once './config/config.php';


echo '<div id="div"><form action="setting.php" method="post">
                 <pre>
<b>Admin Username:</b>        <input type="text"  name="username" value=""/> <b>Password:</b>        <input type="password"  name="password" value=""/><br/>

<b>Website name:</b>    <input type="text"  name="website" value=""/> <b>Domain Name: ( e.g. http://paydo.in)</b>     <input type="text"  name="domain" value=""/><br/>

<b>Email ID:</b>        <input type="text"  name="email" value=""/> <b>Mobile No:</b>       <input type="text"  name="mobile" value=""/><br/> 

<b>Company Name:</b>    <input type="text"  name="company" value=""/> <b>Company Address:</b>  <input type="text"  name="company_add" value=""/><br/>                   
                 <input type="submit" onClick="this.value="Please Wait…";" class="submit" name="submit" value="save" />                                      
                 </pre>  
</form></div>';

if(isset($_POST["submit"]))
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  $web=$_POST["website"];
  $domain=$_POST["domain"];
  $email=$_POST["email"];
  $mobile=$_POST["mobile"];
  $company=$_POST["company"];
  $address=$_POST["company_add"];
    $id=5;
  if(mysqli_query($link,"update admin_setting set username='$username', password='$password', website='$web', domain_name='$domain', email_id='$email',
   mobile_number='$mobile', company_name='$company', company_add='$address' where id='$id'"))
  {
  ?>
   <script type="text/javascript">
   window.alert("Updated");
   window.location="info.php";
   </script>
  <?php 
  }
  else
  {
     echo mysqli_error($link);
  }
  //echo $api_key;

  mysqli_close($link);
}

?>
<style>
#div
{
  color:#3F729B;
}
</style>