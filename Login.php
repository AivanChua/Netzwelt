<?php
	session_start();
?>
<html>
<body>
<?php
	if(isset($_SESSION["login"])){
		if($_SESSION["login"] > 1){	
			echo "Invalid username or password<br><br>";
			$_SESSION["login"] = 0;
		}
		else if($_SESSION["login"] == 1){
			header("Location: Home.php");
		}
	}
?>
<form action="Main.php" method="post">
	Username<br><input type="text" name="username"><br><br>
	Password<br><input type="password" name="password'"><br><br>
	<input type="submit" value="Login">
</form>

</body>

</html>