<?php
session_start();
if($_SESSION['login'] == 1){
	echo "Territories <br> <br>" ;
	echo "Here are the list of territories";
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://netzwelt-devtest.azurewebsites.net/Territories/All');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

	$result = curl_exec($ch);

	curl_close($ch);
	
}
else{
	header("Location: Login.php");
}

?>

</body>
</html>