<html>
<body>
<form action="phpscript.php" method="post">
Name := <input type="text" name="name">
Address := <input type="text" name="address">
Contact := <input type="text" name="contact">

<input type="submit" name="insert" value="INSERT">
<input type="submit" name="update" value="UPDATE">
<input type="submit" name="delete" value="DELETE">
<input type="submit" name="show" value="SHOW">
</body>
</html>

<?php
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("shirpur",$con);
	
	$name=$_POST["name"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	
	if(isset($_POST["insert"]))
	{
		$q="insert into dadus values('$name','$address','$contact')";
		mysql_query($q,$con);
		
		echo "Insert Record Successfully";
	}
	if(isset($_POST["update"]))
	{
		$q="update dadus set name='$name' where contact='$contact'";
		mysql_query($q,$con);
		
		echo "Updated Record Successfully";
	}
	if(isset($_POST["delete"]))
	{
		$q="delete from dadus where contact='$contact'";
		mysql_query($q,$con);
		
		echo "Delete Record Successfully";
	}
	if(isset($_POST["show"]))
	{
		$q="select * from dadus";
		$result=mysql_query($q,$con);
		echo "<table border=2>";		
		echo "<tr>
				<td>name</td>
				<td>address</td>
				<td>contact</td>
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