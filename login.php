<!DOCTYPE html>
<html>

<head>
	<title>打卡系統</title>
	<?php

	require_once('setting.php');
	require_once('function/function.php');

	?>
</head>

<body class="">
	<div class="container">

		<div class="content text-center my-5 animate__animated animate__fadeIn">
			<img class="my-5" src="css/images/clock.png" width="50%" alt="clock.png" />
			<h2 class="">打卡系統</h2>
			<form class="my-5" action="login_verify.php" method="post">
				<hr style="margin: 3em 0;" />
				<label for="inputPhone">Phone</label>
				<input type="phone" class="form-control input" name="phone" id="inputPhone" placeholder="手機號碼" required autofocus><br>
				<label for="inputPassword" class="">Password</label>
				<input type="password" class="form-control input" name="password" id="inputPassword" placeholder="Password" required>
				<br>
				<!--取得ip位址-->
				<input name="ip" style="display:none;" value=<?= $_SERVER['REMOTE_ADDR'] ?>>

				<input name="login" style="width:20%;" class="btn btn-secondary py-2 my-3" type="submit" value="登入">

			</form>
			<hr style="margin: 1em 0;" />
			<a style="width:30%;" class="my-4 btn btn-outline-secondary" href="apply_demo.php">申請試用</a>

			<div class="bg-dark text-dark py-3">
				© 2022 張琇媛 版權所有
			</div>
		</div>

	</div>
</body>

</html>