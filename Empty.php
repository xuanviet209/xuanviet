<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
<?php
     if(empty($_POST['username'])){
		 echo 'Bạn chưa nhập tên đăng nhập';
	 }
?>
</head>
<body>
<form id="frm1" method="post" action="" name="register">
     User Name: <input type="text" name="username"/><br>
	 Password: <input type="password" name= "password"/><br>
	 <input type="submit" name ="action" id=" submit" value ="Đăng nhập"/>
	 <input type="reset" value="reset"/><br>
</form>

</body>
</html>