<?php
//內含dblink.php
require_once('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>使用者中心</title>

	<?php require_once('setting.php'); ?>

</head>

<body class="">
	<div class="container">

		<div class="content text-center my-5 animate__animated animate__fadeIn">
			<div class="py-5">

				<div class="my-5">
					<h5>你好 <span id="user_name"><?= $_SESSION["name"] ?></span></h5>
					<hr style="margin: 2em 0;" />
					<div class="flex-y">

						<a href="punch.php" class="btn btn-outline-info2 py-3 px-5 mx-2">打卡</a>

						<a href="record.php" class="btn btn-outline-info2 py-3 px-5 mx-2">查詢打出勤紀錄</a>

						<a href="user_data.php" class="btn btn-outline-info2 py-3 px-5 mx-2">更改會員資料</a>

						<a href="add_employee.php" class="btn btn-outline-info2 py-3 px-5 mx-2">新增員工</a>

						<a href="add_shop.php" class="btn btn-outline-info2 py-3 px-5 mx-2">新增分店</a>

						<a href="permissions.php" class="btn btn-outline-info2 py-3 px-5 mx-2">編輯權限</a>

					</div>

				</div>

			</div>

			<?php require_once('footer_nav.php');  ?>

		</div>
	</div>
	<div id="sql"></div>
</body>


</html>