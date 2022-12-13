<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<head>
		<title>打卡系統試用申請!</title>
		<?php require_once('setting.php'); ?>
	</head>

</head>

<body class="">
	<div class="container">
		<div class="content my-5 py-5 text-center animate__animated animate__fadeIn">
			<h2 class="py-5">打卡系統試用申請!</h2>
			<form method="post" action="register_finish.php">
				<label for="company">公司名稱</label>
				<input type="text" name="company_name" id="company" class="form-control input" placeholder="公司名稱" required autofocus>
				<label for="address">公司地址</label>
				<input type="text" name="address" id="address" class="form-control input" placeholder="公司地址" required>
				<label for="ip">現行網路ip位置(系統偵測，自動填寫)</label>
				<input type="text" name="ip" id="ip" class="form-control input" placeholder="網路ip位置" value="<?= $_SERVER['REMOTE_ADDR'] ?>" readonly>

				<label for="inputName" class="">姓名</label>
				<input type="text" name="name" id="inputName" class="form-control input" placeholder="中文名字" required>
				<label for="inputPhone" class="">手機</label>
				<input type="phone" name="phone" id="inputPhone" class="form-control input" placeholder="手機" pattern="09\d{2}\d{6}" required>
				<label for="inputPassword" class="">密碼</label>
				<input type="password" name="password" id="inputPassword" class="form-control input" placeholder="密碼" required>

				<button style="width:20%;font-size: 20px;" class="btn btn-outline-secondary mt-4" name="apply" value="申請" type="submit">申請</button>
			</form>

		</div>

	</div>



</body>

</html>