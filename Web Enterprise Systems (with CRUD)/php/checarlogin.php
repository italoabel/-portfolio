<?php
if(isset($_COOKIE['ssid'])) {
	require("conectarbd.php");

	$ssid = mysqli_real_escape_string($conexao, $_COOKIE['ssid']);

	$q = "SELECT * FROM `usuario` WHERE `ssid`='$ssid'";
	$r = @mysqli_query($conexao, $q);
	if(mysqli_num_rows($r) == 1) {

	} else {
		header("Location: ../php/logout.php");
	}
} else {
	header("Location: ../Index.html");
}

?>