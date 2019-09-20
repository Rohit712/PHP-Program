<html>
<body>
<form action="validation.php" method="post">
Name <input type="text" name="t1">
Address<input type="text" name="t2">
Contact<input type="text" name="t3">
<input type="submit" name="b1" value="ok">
</form>
</body>
</html>

<?php
		
	if(isset($_POST["b1"]))
	{
		$name=$_POST["t1"];
		$address=$_POST["t2"];
		$contact=$_POST["t3"];
		
		if(empty($name))
		{
			echo $error[]="Name Is Not Empty";
		}
		if(empty($address))
		{
			echo $error[]="Address Is Not Empty";
		}
		if(empty($contact))
		{
			echo $error[]="Contact Is Not Empty";
		}
	}
?>
 