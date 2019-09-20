<html>
<body>
<form action="counter1.php" method="post">
<input type="submit" name="count" value="COUNT">
<input type="submit" name="d1" value="DESTROY">
</form>
</body>
</html>

<?php

	session_start();
	$_SESSION["Count"]=0;

	if(isset($_POST["count"]))
	{
		$_SESSION["count"]=$_SESSION["count"]+1;

		echo $_SESSION["count"];
	}
	if(isset($_POST["d1"]))
	{
		session_destroy();
	}


?>