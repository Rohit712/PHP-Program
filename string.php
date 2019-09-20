<html>
<body>
<form action="string.php" method="post">
<input type="text" name="t1">
<input type="submit" name="b1">

</form>
<?php
	
		$st1=$_POST["t1"];
		if(isset($_POST["b1"]))
		{
			echo "String Is :=".$st1;
			echo "String Lenght Is :=".strlen($st1);
			//echo "STring Uppercase :=".toupper($st1);
			echo "String Reverse Is :=".strrev($st1);
			echo "After Trim string Is :=".trim($st1,ro);
		}
?>
</body>
</html>
