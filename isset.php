<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Isset</title>
</head>
<body>
<form method ="post">
     User Name: <input type="text" name ="username"/><br>
	 Password: <input type="password" name="password"/><br>
	 <input type="submit" value="Login" name="Login"><br/><br/>
</form>
     <?php
	     if(isset($_POST["username"]))
		 {
			 if($_POST["username"]=='')
			 {
				 echo "Please input user name";
			 }
		 }
	 ?>
</body>
</html>