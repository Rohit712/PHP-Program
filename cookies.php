<html>
<body>
	<form action="cookies.php" method="post">
	Name<input type="text" name="t1" > <br>
	Password<input type="password" name="t1"><br>
	<input type="submit" name="Login" value="Login">
	<input type="submit" name="Delete" value="Delete">
	</form>
</body>
</html>
<?php
	
		if(isset($_POST['Login']))
		{
			$s=$_POST["t1"];
			setcookie("s","red",time()+120);
			echo "Welcome User <br>".s;
		}
		if(isset($_POST['Delete']))
		{
			$s=$_POST["t1"];
			setcookie("s","red",time()-120);
			echo "Deleted Cookies <br>".$COOKIE["$s"];
		}
?>