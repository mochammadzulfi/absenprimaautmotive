<?php
	//ini_set("display_errors", 0);
	//error_reporting(0);

	$base_path		= "https://absen.primaautomotive.id/";
	$db_name		= "primaaut_primaautomotive";
	$db_user		= "primaaut_primaautomotive";
	$db_pass		= "@DM1ND4TABASE@2022";
	$db_host		= "localhost";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) die("Connection for user $db_user refused!");
	//mysql_select_db($db_name, $conn) or die("Can not connect to database!");
?>
