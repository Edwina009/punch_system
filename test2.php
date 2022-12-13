<?php

require_once('test.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form class="my-5" action="test2.php" method="post">
					<hr style="margin: 3em 0;" />
					<label for="inputPhone" >Phone</label>
					 <input type="phone" class="form-control input"   name="phone" id="inputPhone" placeholder="手機號碼" required autofocus><br>
					 <label for="inputPassword" class="">Password</label>
					 <input type="password" class="form-control input" name="password" id="inputPassword" placeholder="Password" required>
					  <br>
					<!--取得ip位址-->
					 <input  name="ip" style="display:none;" value=<?=$_SERVER['REMOTE_ADDR'] ?>>
					 
					 <input name="login" style="width:20%;" class="btn btn-secondary py-2 my-3" type="submit" value="登入">

				</form>


</body>
</html>