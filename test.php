<?php

$phone = $_REQUEST["phone"];
	$password= $_REQUEST["password"];
	$ip= $_REQUEST["ip"];
    echo $phone.$password.$ip.$_REQUEST["login"];

    if(isset($_REQUEST["login"])){

        echo isset($_REQUEST["login"]);
    }else{
        echo "trty";
    }

?>