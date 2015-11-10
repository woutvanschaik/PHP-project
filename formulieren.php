<?php
session_start();
?>
<!doctype html>
<html>
	<head><title> LOGIN </title></head>
	<body>
<?php
if( !isSet($_SESSION['login'])){
	$_SESSION['login'] = false;
	$_SESSION['user'] = 0;
}	

if($_SESSION['login']){
echo 'Hallo ' . $_SESSION['login'] ;
} else{
?>
<form method="POST" action="login.php">
	<input type="text" name="lln" id="lln" required placeholder = "Gebruikersnaam"/>
	<input type="password" name="ww" id="ww" required placeholder = "Wachtwoord" />
	<input type="submit" value="Login" />
</form>
<?php	
}
?>
	
	</body>




</html>