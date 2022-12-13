<?php
require_once('session.php');

$punch_record = $_REQUEST['punch_record'];
$punch_record = explode("_", $punch_record);
print_r($punch_record);
$category = $punch_record["0"];
$punch_time = $punch_record["1"];
echo "category" . $category;
echo "punch_time" . $punch_time;
$punch_date = $punch_record[2];

//echo  $punch_id.$punch_record[2].$punch_record[1].$punch_record[0]."打卡成功";

$record_sql = "INSERT INTO `record` SET `user_id`='$user_id',`company_id`='$company_id',`category`='$category',`punch_time`='$punch_time',`punch_ip`='$ip'";
echo $record_sql . "<br>";

$record = $my_db->query($record_sql);
$num = $record->rowCount($record);
if ($num != "0") {
    echo "<script>alert('打卡成功');</script>";
}
