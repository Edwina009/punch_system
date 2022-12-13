<?php
//內含dblink.php
require_once('session.php');

$sql_user = "SELECT * FROM `user` WHERE `user_id`='$user_id'";
$result = $my_db->query($sql_user);
// echo $sql_user;

if (isset($_REQUEST['update'])) {

    $name = $_REQUEST['name'];
    $phone = $_REQUEST["phone"];
    $password = $_REQUEST["password"];
    $department = $_REQUEST["department"];
    $shop = $_REQUEST["shop"];
    $sql_user = "UPDATE `punch_employee`  SET `shop`='$shop',`department`='$department',`name`='$name' , `phone`='$phone',`password`='$password'  WHERE `punch_id`='$punch_id'";
    echo  $sql_user;
    $re_update = $my_db->query($sql_user);
    echo $re_update . '--';
    if ($re_update) {

        $_SESSION["name"] = $name;
        $_SESSION["phone"] = $phone;
        $_SESSION["password"] = $password;
        $_SESSION["shop"] = $shop;
        $_SESSION["punch_id"] = $punch_id;
        echo "<script>alert('修改成功'); location.href='user_data.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>會員資料</title>

    <?php require_once('setting.php'); ?>

</head>

<body class="">
    <div class="container">

        <div class="bg-dark text-light  content text-center my-5 animate__animated animate__fadeIn">
            <div class="py-5">

                <div class="my-5">
                    <h5> <span id="user_name"><?= $_SESSION["name"] ?></span>的個人資訊</h5>
                    <hr style="margin: 2em 0;" />
                    <div class="">
                        <table class="text-center table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">權限</th>
                                    <th scope="col">公司</th>
                                </tr>
                            </thead>
                            <form action="user_data.php" method="post">
                                <tbody class="user_data">

                                    <?php while ($row = $result->fetch()) {
                                    ?>

                                        <tr>
                                            <th><?= $row['user_id'] ?></th>
                                            <td><input readonly type="text" name="department" value=<?= $row['authority'] ?>></td>
                                            <td scope="row"><input readonly type="text" name="company_name" value=<?= $row['company_name'] ?>> </td>
                                        </tr>

                                        <tr>
                                            <th scope="col">姓名</th>
                                            <th scope="col">手機</th>
                                            <th scope="col">密碼</th>
                                        </tr>
                                        <tr>

                                            <td><input type="text" name="name" value=<?= $row['name'] ?>></td>

                                            <td><input type="text" name="phone" value=<?= $row['phone'] ?>></td>
                                            <td><input type="text" name="password" value=<?= $row['password'] ?>></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="5" class="text-center">

                                            <button class="mx-auto btn btn-outline-info2 py-3 px-5 mx-2" type="submit" name="update" value="提交">提交</button>
                                        </td>
                                    </tr>
                                </tbody>

                            </form>
                        </table>
                    </div>

                </div>

            </div>

            <?php require_once('footer_nav.php');  ?>

        </div>
    </div>
    <div id="sql"></div>
</body>


</html>