<?php

session_start();
require_once('dblink.php');
//登入

if (isset($_SESSION['login_state'])) {

	// Set session variables
	//將 session 賦值其他變數名稱
	$user_id = $_SESSION["user_id"];
	$company_id = $_SESSION['company_id'];
	$company_name = $_SESSION["company_name"];
	$name = $_SESSION["name"];
	$phone = $_SESSION["phone"];
	$password = $_SESSION["password"];
	$authority = $_SESSION["authority"];
	$status = $_SESSION["status"];
	$ip = $_SESSION["ip"];
} else {

	echo "<script>alert('查無權限，請登入謝謝');location.href ='login.php'; </script>";
}
