<?php
session_start();
if($_SESSION['login'] == 0){
	header("Location: Login.php");
}
else{
echo "Territories <br> <br>" ;
echo "Here are the list of territories";
}
?>

</body>
</html>