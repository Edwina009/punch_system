<?php
//內含dblink.php
require_once('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>打卡頁面</title>

	<?php require_once('setting.php'); ?>

</head>

<body class="" onload="show_date();show_time()">
	<div class="container">

		<div class="content text-center my-5 animate__animated animate__fadeIn">
			<div class="py-4">
				<div id="clock" class="clock text-light py-2 px-2 rounded">
					<div id="show_date" class="py-3"></div>
					<div id="show_time"></div>
					<div id="show_second" class="py-3"></div>
				</div>
				<div class="my-4">
					<h5>你好 <span id="user_name"><?= $_SESSION["name"] ?></span></h5>
					<h3 id="billboard" class="w-90 btn btn-dark py-3">公佈欄</h3>
					<ol class="billboard-content text-left px-5 mx-3">
						<li>test</li>
						<li>test</li>
					</ol>
				</div>
				<div class="my-3">
					<h5 class="w-90 shadow-lg rounded bg-dark py-3 mx-4 text-light">本日打卡紀錄</h5>
					<span class="h5 mt-3 py-3 px-3">上班08:55</span>
					<span class="h5 mt-3 py-3 px-3">下班06:00</span>
					<hr style="margin: 1em 0;" />
					<div class="flex">

						<div id="punch_on" class=" btn btn-outline-info2 
						py-3 px-5 mx-2" onclick="punch(this.id)">上班
						</div>

						<div id="punch_off" class="btn btn-outline-info2 
						py-3 px-5 mx-2" onclick="punch(this.id)">下班
						</div>


					</div>


				</div>

			</div>

			<?php require_once('footer_nav.php');  ?>

		</div>
	</div>
	<div id="sql"></div>
</body>

<script>
	function punch(id) {

		//打卡按鈕id
		let punch_id = event.target.id;
		//選取打卡按鈕記得加#字號
		let punch_btn = document.querySelector("#" + punch_id);
		//觸發時間 打卡時間
		let punch_time = document.querySelector('#show_time');

		let punch_date = document.querySelector('#show_date');

		let punch_record = punch_btn.innerText + "_" + punch_time.innerText + "_" + punch_date.innerText;

		alert(punch_record);

		//ajax
		let xhr = new XMLHttpRequest();
		let url = "punch_insert.php?punch_record=" + punch_record;
		xhr.open('get', url, true);
		xhr.onload = function() {

			//alert(this.responseText);
			document.querySelector("#sql").innerHTML = this.responseText;

		};

		xhr.send();


	}

	//jquery

	$(document).ready(function() {
		$('#billboard').click(function(event) {

			$(".billboard-content").fadeToggle("slow");
		});
	});
</script>
<!--
<script src="js/app.js"></script>
-->


</html>