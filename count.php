<HTML>
<BODY>
<form action="count.php" method="POST">
<input type="submit" name="count">
<input type="submit" name="reset">
</form>
<?php
	session_start();
	$SESSION["Count"]=0;
	if(isset($_POST["count"]))
	{
		$_SESSION["count"]=$_SESSION["count"]+1;
		echo" ".$_SESSION["count"];
	}

	if(isset ($_POST["reset"]))
	{
		session_destroy();
	}
?>