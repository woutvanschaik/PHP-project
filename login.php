<?php
session_start();

$lln = $_POST['lln'];
$ww = $_POST['ww'];

if($lln >=100000 && $lln <1000000 && $ww == 'test') {
	$_SESSION['login'] = true;
	$_SESSION['user'] = $lln;
}
?>
<!doctype html>
<html>
</html>