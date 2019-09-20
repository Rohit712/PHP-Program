<html>
<body>
<form action="data.php" method="post">
	<input type="text" name="t1">
	<input type="text" name="t2">
	<input type="text" name="t3">
	<input type="submit" name="add" value="Add">
	<input type="submit" name="delete" value="Delete">
	<input type="submit" name="update" value="Update">
	<input type="submit" name="show" value="Display">
</form>
</body>
</html>
<?php
	$rollno=$_POST['t1'];
	$name=$_POST['t2'];
	$address=$_POST['t3'];	
	$con=mysql_connect("localhost","root");
	mysql_select_db("student");

	if(isset($_POST['add']))
	{
		$q="insert into stud values($rollno,'$name','$address')";
		mysql_query($q);
		echo "Record Save Successfully";
	}
	if(isset($_POST['delete']))
	{
		$q="delete from student where rollno=$rollno";
		mysql_query($q);
		echo "Record Delete Successfully";
	}
?>