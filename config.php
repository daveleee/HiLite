<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$conn=mysqli_connect('127.0.0.1:8080', 'test', 'go******') or die("DB connect error!");
	mysqli_select_db($conn, 'testdb') or die("DB select error!");
?>