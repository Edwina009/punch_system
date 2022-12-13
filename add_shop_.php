<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>新增分店!</title>
        <?php require_once('setting.php'); ?>
    </head>

</head>

<body class="">
    <div class="container">
        <div class="content my-5 py-5 text-center animate__animated animate__fadeIn">
            <img class="my-1" src="css/images/shop.png" width="40%" alt="shop.png" />
            <h2 class="py-2">新增分店</h2>
            <form method="post" action="register_finish.php">

                <label for="shop_Name" class="">分店名稱</label>
                <input type="text" name="name" id="shop_Name" class="form-control input" placeholder="分店名稱" required>
                <label for="shop_ip" class="">分店網路ip位置</label>
                <input type="text" name="shop_ip" id="shop_ip" class="form-control input" required>
                <label for="shop_address" class="">分店地址</label>
                <input type="text" value="" name="shop_address" id="shop_address" class="form-control input" placeholder="分店地址" required>

                <button style="width:20%;font-size: 20px;" class="btn btn-outline-secondary mt-4" value="新增" type="submit">新增</button>
            </form>

        </div>

    </div>



</body>

</html>