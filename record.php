<?php

require_once('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>打卡頁面</title>

  <?php require_once('setting.php'); ?>

</head>

<body class="">
  <div class="container">

    <div class="content bg-dark text-light rounded text-center my-5 animate__animated animate__fadeIn">
      <div>
        <label for="month" class="my-4">查詢月份</label>
        <input type="month" value="<?= $time ?>" name="month" id="month" class="form-control input">

        <button name="search" id="search" onclick="record(this.id)" class="btn btn-outline-warning my-3 rounded-pill">
          <i class="fas fa-search mx-2"></i>查詢打卡紀錄
        </button>
      </div>

      <h6 style="margin: 1em 0;"><span id="name"><?= $_SESSION["name"] . "的打卡紀錄 "; ?></span><span id="time"></span></h6>
      <div class="punch_record">
        <table class="table record table-striped table-dark text-center">
          <thead>
            <tr>
              <th scope='col'>日期</th>
              <th scope='col'>班別</th>
              <th scope='col'>時間</th>
              <th scope='col'>備註</th>
            </tr>
          </thead>
          <tbody id="punch_record_content">

          </tbody>
        </table>
      </div>
      <?php require_once('footer_nav.php');  ?>
    </div>
  </div>
</body>


<script>
  //一般員工 查詢record
  function record(id) {

    //打卡按鈕id
    let search_id = event.target.id;
    //選取打卡按鈕記得加#字號
    let search_btn = document.querySelector("#" + search_id);
    //觸發時間 打卡時間
    let month = document.querySelector('#month');

    let search_time = month.value;

    //document.querySelector("#time").innerHTML = search_time.value + "月的打卡紀錄";

    alert(search_time);

    //ajax
    let xhr = new XMLHttpRequest();
    let url = "punch_record_ajax.php?search_time=" + search_time;
    xhr.open('get', url, true);
    xhr.onload = function() {

      //alert(this.responseText);
      document.querySelector("#punch_record_content").innerHTML = this.responseText;

    };

    xhr.send();


  }
</script>

</html>