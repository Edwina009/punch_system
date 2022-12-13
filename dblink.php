<?php

/* 
        $db_host = "localhost";//伺服器  192.168.66.63 
        $db_username = "cchouse20";//帳
	$db_password = "cchouse20!QAZ1qaz";//密
        $dbname="cchouse20";//資料庫名稱
        */

$db_host = "127.0.0.1:3307"; //伺服器
$db_username = "root"; //帳
$db_password = ""; //密
$dbname = "work"; //資料庫名稱
//錯誤處理
try {
        //連線資料庫
        $my_db = new PDO(
                "mysql:host={$db_host};dbname={$dbname};charset=utf8",
                $db_username,
                $db_password
        );
} catch (PDOException  $e) {

        echo "Error: " . $e->getMessage() . "<br>";
        //die() 函数输出一条消息，并退出当前脚本。该函数是 exit() 函数的别名。
        die("資料庫連接失敗！");
}

       /* 
  $my_db = mysqli_connect($db_host, $db_username, $db_password, $dbname);

  if (!$my_db) {
      die("Connection failed: " . mysqli_connect_error());
  }
     mysqli_query($my_db, "SET NAMES utf8");

*/
