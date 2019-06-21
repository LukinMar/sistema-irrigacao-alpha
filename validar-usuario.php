<?php
session_start();
ob_start();
if(!$_SESSION['usuario']) {
echo '<script type="text/javascript">window.location = "login.php"</script>';
	exit();
}

