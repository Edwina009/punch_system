<?php

/*
   if($ip=="36.225.69.167"){
         echo "<script>alert('大忠店ip正確')</script>";
    }elseif($ip=="36.224.210.55"){
       echo "<script>alert('新春店ip正確')</script>";
    }else{
     echo "<script>alert('未知網域')</script>";
    };

*/
//ip位置
function ip($ip,$shop_ip,$shop_name){
    $shop_name=$shop_name."網路正確";
    if($user_ip==$shop_ip){
         echo "<script>alert($shop_name)</script>";
    }else{
     echo "<script>alert('未知網域')</script>";
    };
 }


?>
