<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>新增員工!</title>
        <?php require_once('setting.php'); ?>
    </head>

</head>

<body class="">
    <div class="container">
        <div class="content my-5 py-5 text-center animate__animated animate__fadeIn">
            <img class="my-1" src="css/images/employee.png" width="20%" alt="employee.png" />
            <h2 class="py-1">新增員工</h2>
            <form method="post" action="register_finish.php">

                <label for="inputName" class="">姓名</label>
                <input type="text" name="name" id="inputName" class="form-control input" placeholder="中文名字" required><br>
                <label for="inputPhone" class="">手機</label>
                <input type="phone" name="phone" id="inputPhone" class="form-control input" placeholder="手機" pattern="09\d{2}\d{6}" required><br>
                <label for="inputPassword" class="">密碼</label>
                <input type="password" name="password" id="inputPassword" class="form-control input" placeholder="密碼" required><br>

                <button style="width:20%;font-size: 20px;" class="btn btn-outline-secondary mt-4" value="新增" type="submit">新增</button>
            </form>

        </div>

    </div>



</body>

</html>