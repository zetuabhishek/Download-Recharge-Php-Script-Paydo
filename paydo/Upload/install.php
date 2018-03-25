<?php
include './config/setup_config.php';
//include './theme/header.php';
?>
<center>
<form action="action_install.php" method="post">
                     <pre>
<input type="hidden" name="filename" value="admin_test.sql"/><br/>
Server name:<input type="text" name="servername" value="localhost"/><br/>
User name:  <input type="text" name="username" vaLue=""/><br/>
Password:   <input type="password" name="password"/></br/>
Database:   <input type="text" name="db"/></br/>
            <input type="submit" name="submit" value="connect"/>
			         </pre>
			         </form>
			         </center>
<?php
//include './theme/footer.php';
?>