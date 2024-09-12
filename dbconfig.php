<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "db_c110193216";
	//mysqli_connect($host,$user,$password);
	//mysqli_select_db($datbase);
	$link = mysqli_connect($host,$user,$password,$datbase);
	mysqli_query($link, "SET NAMES utf8");
?>