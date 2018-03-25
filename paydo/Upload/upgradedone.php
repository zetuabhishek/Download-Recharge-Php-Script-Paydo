<?php


include "theme/header.php";

$msg = $_GET["message"];
echo $_GET["ref"];
echo "<br>";

?>


<div class="container">

Your Account Upgrade and Status <?php
echo $msg;
?>  <br/><br/><a href="welcome.php"  class="btn-primary btn-sm">Back to Account </a> 


</div>

<?php

include "theme/footer.php";
?>
<script>
window.stop();
</script>