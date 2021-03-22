<?php


    session_start();
	
?>
<html>

    <body>
        <h1>Welcome<?php echo $_SESSION["user"];?></h1>
		<a href="change_password.php">Change Password</a>
		
    </body>
</html>