<?php
	session_start();
?>
<html>
<body>

<?php 
$username = $_POST["username"];
$password =  $_POST["password"]; 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://netzwelt-devtest.azurewebsites.net/Account/SignIn');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"username\":\"$username\",\"password\":\"$password\"}");

$headers = array();
$headers[] = 'Accept: text/plain';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
curl_close($ch);

if($username == "foo"){
	$_SESSION["login"] = 1;
	$_SESSION["error"] = 0;
	header("Location: Home.php");
}
else{
	$_SESSION["login"] = 0;
	$_SESSION["error"] = 1;
	header("Location: Login.php");
}	
?>


</body>
</html> 