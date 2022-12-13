<?php
require_once('session.php');
$time = $_REQUEST['search_time'];


$search = "SELECT * FROM `record` WHERE `user_id`='$user_id' AND `insert_time` LIKE '%$time%';";

$search_re = $my_db->query($search);

while ($row = $search_re->fetch()) {
   $date = explode("-", $row['insert_time']);
   $date = explode(" ", $date[2]);

?>
   <tr class="px-3">
      <th scope="row"><?= $date[0] ?></th>
      <td><?= $row['category'] ?></td>
      <td><?= $row['punch_time'] ?></td>
      <td><input type="text" placeholder="備註" name="" id=""></td>
   </tr>
<?php
}

?>