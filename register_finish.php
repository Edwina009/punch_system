<?php
require_once('dblink.php');

$apply = $_REQUEST['apply'];
$name = $_REQUEST['name'];
$phone = $_REQUEST["phone"];
$key_code = uniqid(date("Y_m_d") . "_$phone _");
$password = $_REQUEST["password"];
$company_name = $_REQUEST["company_name"];
$shop = "本店";
$ip = $_REQUEST["ip"];
$address = $_REQUEST["address"];
$authority = 'manager';
$status = 'y';
//echo $name.$phone.$password;

if ($apply == "申請") {

    $company = "INSERT INTO `company` SET  `company_name`='$company_name'";
    $query1 = $my_db->query($company);
    $num1 = $query1->rowCount();
    $company_id = $my_db->lastInsertId();

    $shop = "INSERT INTO `shop` SET `company_id`='$company_id',`key_code`='$key_code', `shop`='$shop',`shop_ip`='$ip',`shop_address`='$address'";
    $query2 = $my_db->query($shop);
    $num2 = $query2->rowCount();

    $user = "INSERT INTO `user` SET  `company_id`='$company_id',`key_code`='$key_code', `company_name`='$company_name', `name`='$name' , `phone`='$phone',  `password`='$password',`authority`='manager'";
    $query3 = $my_db->query($user);
    $user_id = $my_db->lastInsertId();
    $num3 = $query3->rowCount();

    if ($num1 != "0" && $num2 != "0" && $num3 != "0") {
        //setting session
        $_SESSION["user_id"] = $user_id;
        $_SESSION["company_id"] = $company_id;
        $_SESSION["company_name"] = $company_name;
        $_SESSION["name"] = $name;
        $_SESSION["phone"] = $phone;
        $_SESSION["password"] = $password;
        $_SESSION["authority"] = $authority;
        $_SESSION["status"] = $status;
        $_SESSION["ip"] = $ip;

        //echo "<script>alert('申請成功');location.href='punch.php';</script>";
    } else {
        echo "<script>alert('申請失敗，請致電客服人員');</script>";
    }
} else {
    echo "<script>location.href='login.php';</script>";
}


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
/*
if ($phone != "null" && $password != "null") {
    //驗證有無註冊過
    $registered = "SELECT * FROM `punch_employee` WHERE `name`='$name' and `phone`='$phone';";
    $registered_query = $my_db->query($registered);
    $num = $registered_query->rowCount();
    $row = $registered_query->fetch();

    //print_r($registered_query);
    if ($num != "0") {

        echo "<script>alert('已有帳號');location.href = 'login.php';</script>";
    } else {

        $register_sql = "INSERT INTO `punch_employee` SET `name`='$name',`phone`='$phone',`password`='$password',`shop`='$shop'";

        $registered_query = $my_db->query($register_sql);

        echo  $register_sql;

        echo "<script>alert('註冊成功'); location.href='punch.php'</script>";

        echo "<script>alert('註冊成功'); location.href='punch.php'</script>";
    }
} else {

    echo "<script>alert('資料有誤，請重新註冊!'); location.href = 'register.php';</script>";
}*/
