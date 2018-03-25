<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<style>
#t
{
  text-align:center;
}
</style>
<SCRIPT LANGUAGE=JAVASCRIPT>
function verify(){
    if(document.forms[0].myName.value==""){
        alert("Please enter a name in the field");
        return false;
        }else{
        return true;
        }
  }
</SCRIPT>

<?php 
include '../theme/header.php'; 
require_once '../config/config.php';

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
echo $_SESSION['username'];
 $select="select * from users where under='".$_SESSION['username']."'";
 $query=mysqli_query($link,$select);
 $rows=mysqli_num_rows($query);
 	
//echo Count($rows);	
 if($rows>0)
{
?>
   <table class="table table-bordered table-striped" id="t" border="2">
    <thead>
    <tr><th>Name</th><th>Username</th><th>Date Of Birth</th><th>Email</th><th>Balance</th><th>Set Commission</th><th>Click to Set Commission</th><th>Click to delete Agent</th></tr> 
    </thead>		
<?php	
      while($result=mysqli_fetch_array($query))
	{
    $status= $result["status"];
	   ?> 
	   <tbody>	   
	   <form action="list.php" method="POST" onSubmit="return verify()">
	        <tr><td><?php echo $result["Name"]; ?></td>
	        <td><?php echo $result["mobile"]; ?></td>
		<td><?php echo $result["dob"]; ?></td>
		<td><?php echo $result["email"];?></td>	
		<td><?php echo $result["balance"];?></td>
		<td><?php echo $result["set_comm"];?></td>         
<td><a href="set_comm.php" class="btn btn-success btn-sm">set</a></td>				
<?php
if($status="0")
{ 
?>		
		<td><input type="submit" class="btn btn-danger btn-sm" name="delete" value="Disable" onclick="myFunction()">
		</td>

<?php
}else{
?>
<td><input type="submit" class="btn btn-danger btn-sm" name="active" value="Active" onclick="myFunction()">
		</td>
<?php
} 
?>
</tr>
	   </form>
	   </tbody>		
	<?php
	 if(isset($_POST["delete"]))
         {
             $sql="delete users set status='1' where mobile='".$result["mobile"]."'";
             if($query=mysqli_query($link,$sql))
             {
                echo "account deleted successfully"; 
             }
             else
             {
                echo mysqli_error($link);
             }
                 
         } 
  		      		   
      } 
      ?>
	 	   
     </table>	  
  <?php	   
}
else
{
  echo "No account found under You.";
}
include './theme/footer.php'; 
?>
