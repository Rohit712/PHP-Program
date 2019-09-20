 <html>
<body>
<form action="script.php" method="post">
First Name :=<input type="text" name="fname">
Last Name :=<input type="text" name="lname">
Address :=<input type="text" name="address">
	<input type="submit" name="insert" value="INSERT">
	<input type="submit" name="update" value="UPDATE">
	<input type="submit" name="delete" value="DELETE">
	<input type="submit" name="show" value="SHOW">
	<input type="submit" name="create" value="CREATE">
</body>
</html>

<?php

	$con=mysql_connect("localhost","root","");
	mysql_select_db("shirpur",$con);
	
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$address=$_POST["address"];
	
	/*if(isset($_POST["create"]))
	{
		$q="create table dadu(fname varchar(20), lname varchar(20), address varchar(20))";
		mysql_query($q,$con);
		
		echo "Create Table Successfully";
	}*/
	if(isset($_POST["insert"]))
	{
		$q="insert into student11 values('$fname','$lname','$address')";
		mysql_query($q,$con);
		
		echo "Insert Data Successfully";
	}
	if(isset($_POST["update"]))
	{
		$q="update student11 set fname='$fname' where address='$address'";
		mysql_query($q,$con);
		
		echo "Update Data Successfully";
	}
	if(isset($_POST["delete"]))
	{
		$q="delete from student11 where fname='$fname'";
		mysql_query($q,$con);
		
		echo "Delete Record Successfully";
	}
	if(isset($_POST["show"]))
	{
		$q="select * from student11";
		$result=mysql_query($q,$con);
		echo "<table border=2>";
		echo "<tr>
				<td>fname</td>
				<td>lname</td>
				<td>address</td>
				</tr>";
				
				while($row=mysql_fetch_array($result))
				{
					echo "<tr>
							<td>$row[0]</td>
							<td>$row[1]</td>
							<td>$row[2]</td>
							</tr>";
				}
				echo "</table>";
	}
?>