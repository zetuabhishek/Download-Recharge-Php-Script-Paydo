<?php
require_once '../config/config.php';
include '../theme/header.php';

if(isset($_POST["submit"]))
{

  $api_key=$_POST["rech_api"];
  $auth_key=$_POST["auth_key"];
  $pay_key=$_POST["pay_key"];
  $serial=$_POST["serial"];
  $web=$_POST["website"];
  $banner1=$_POST["banner"];
  $url=$_POST["url"];
  $banner2=$_POST["banner2"];
  $url2=$_POST["url2"];
  $banner3=$_POST["banner3"];
  $url3=$_POST["url3"];
  $about=$_POST["about_us"];
  $contact=$_POST["contact_us"];
  $id=5;
  if(mysqli_query($link,"update admin_setting set api_key='$api_key', sms_key='$auth_key', payment_auth_key='$pay_key', 
     about_us='$about', contact_us='$contact', banner1_text='$banner1',
  banner1_image='$url', banner2_text='$banner2', banner2_image='$url2', banner3_text='$banner3', banner3_image='$url3' where id='$id'"))
  {
  /*echo'<script type="text/javascript">
   window.alert("Scuuessfully Updated");
   window.location="https://paydo.in/test/admin/welcome.php";
   </script>';*/

  }
  else
  {
     echo mysqli_error($link);
  }
       if($purchase_key==!null)
       {
         echo '<p style="color:pink">Invalid order id !</p>';
       }  
}
  if($api_key==!null)
  {
     echo '<div class="col-sm-10">
     <form action="admin_update.php" method="post">
                        <pre>
        <p style="color:green; font-size:20px;">Purchase Key:</p><input type="text" class="form-control" size="20" name="purchase_key" required/>
                     <input type="hidden" name="flag" value="submit">
                     <input type="submit" class="submit" onClick="this.value="Please Wait…";" name="flag" value="submit">
                        </pre>
           </form>
           </div>';
           
    if(isset($_POST["flag"]))
    {
       $id=5;
       $order_key=$_POST["purchase_key"];
       if(mysqli_query($link,"update admin_setting set purchase_key='$order_key' where id='$id'"))
       {
            echo '<br/><h1 style="color:pink">Invalid order id !</h1>';
       }
       else 
       {
       echo mysqli_error($link);
       }
    } 
  }
  echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
include '../theme/footer.php';  
?>