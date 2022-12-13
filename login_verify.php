<?php
//須記得加session_start(); 否則session設了也沒用
session_start();

require_once('dblink.php');
//登入
if (isset($_REQUEST["login"])) {

	$phone = $_REQUEST["phone"];
	$password = $_REQUEST["password"];
	$ip = $_REQUEST["ip"];

	//驗證帳號
	$sql = "SELECT * FROM `user` where `phone` = $phone  and  `password` = $password";
	$result = $my_db->query($sql);
	$row = $result->fetch();
	$num = $result->rowCount();

	//驗證正確
	if ($num) {

		$login_state = "login_in";
		$_SESSION['login_state'] = $login_state;
		// Set session variables
		$_SESSION["user_id"] = $row['user_id'];
		$_SESSION["company_id"] = $row['company_id'];
		$_SESSION["company_name"] = $row['company_name'];
		$_SESSION["name"] = $row['name'];
		$_SESSION["phone"] = $row['phone'];
		$_SESSION["password"] = $row['password'];
		$_SESSION["authority"] = $row['authority'];
		$_SESSION["status"] = $row['status'];
		$_SESSION["ip"] = $ip;

		echo "<script> location.href = 'punch.php';</script>";
	} else {
		//驗證已經註冊但打錯密碼
		$sql2 = "SELECT * FROM `user` where `phone` = $phone";
		$result = $my_db->query($sql);
		//print_r( $result) ;
		$row2 = $result->fetch();
		$num2 = $result->rowCount();

		if ($num2) {

			echo "<script>alert('請確認帳號或密碼'); location.href = 'login.php'</script>";
		} else {

			echo "<script>alert('查無資料,請註冊帳號');location.href = 'login.php'</script>";

			//echo "<script>alert('查無資料,請註冊帳號');</script>";
		}
	}
}

//登出
if (isset($_REQUEST["login_out"])) {

	$login_state = "login_out";

	$_SESSION['login_state'] = $login_state;

	session_unset();

	echo "<script>alert('登出成功');location.href='login.php';</script>";
}
