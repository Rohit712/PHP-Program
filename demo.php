<html>
<body>
	<form action="demo.php" method="post">
	Name<input type="text" name="uname"><br>
	Address<input type="text" name="add"><br>
	Gender
	Male<input type="radio" name="Male">
	Female<input type="radio" name="Female"><br>
			<input type="submit" name="Save">
			</form>
</body>
</html>
<?php
	
	if(isset($_POST['Save']))
	{
			$uname=$_POST['uname'];
			$add=$_POST['add'];
			$r1=$_POST['r1'];
			
	echo "Displaying Information";
	echo "Name :=".$uname;												
	echo "Address :=".$add;												
	echo "Gender :=".$r1;
	}	
												
?>