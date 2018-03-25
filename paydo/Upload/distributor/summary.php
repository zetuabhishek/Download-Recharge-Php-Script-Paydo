<?php 
include './theme/header.php'; 
require_once './config/config.php';


if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
//echo $_SESSION['username'];

 $select="select * from users where under='".$_SESSION['username']."'";
 $query=mysqli_query($link,$select);
 $rows=mysqli_num_rows($query);
 	
//echo Count($rows);	
 if($rows>0)
{
?>
   <table class="table table-bordered table-striped" id="t" border="2">
    <thead>
    <tr><th>Name</th><th>Username</th><th>Date Of Birth</th><th>Email</th><th>Balance</th><th>Set Commission</th><th>Check Report</th></tr> 
    </thead>		
<?php	
      while($result=mysqli_fetch_array($query))
	{
	  $username= $result["mobile"];
	  //echo $username;
	   ?> 
	   <tbody>	   
	   <form action="list.php" method="POST" onSubmit="return verify()">
	        <tr><td><?php echo $result["Name"]; ?></td>
	        <td><?php echo $result["mobile"]; ?></td>
		<td><?php echo $result["dob"]; ?></td>
		<td><?php echo $result["email"];?></td>	
		<td><?php echo $result["balance"];?></td>
		<td><?php echo $result["set_comm"];?></td>         
<td><a href="summary_Report.php?username=<?php echo $username; ?>" class="btn btn-success btn-sm">report</a></td>				
</tr>
	   </form>
<?php	   
  }
?>  	   
	   </tbody>		
 	   
     </table>	  
<?php
}
else
{
  echo "No account found under You.";
}
include './theme/footer.php'; 
?>
