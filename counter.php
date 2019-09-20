<html>
<body>
<form action="counter.php method="post">
<input type="submit" name="count" value="COUNT">
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
?>