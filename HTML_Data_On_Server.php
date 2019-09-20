<html>
<body>
<form action="HTML_Data_On_Server.php" method="post">
Enter Name <input type="text" name="F_Name"><br>
Gender
Male <input type="radio" value="male" name="r1">
Female <input type="radio" value="Female" name="r1"><br>
E_mail ID <input type="text" name="email"><br>

Select Your Country
<select name="list">
<option selected> India </option>
<option selected> Pakistan </option>
<option selected> America </option>
<option selected> England </option>
</select><br>
<input type="submit" value="submit" name="submit"/><br>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$Fname=$_POST['F_Name'];
	$email=$_POST['email'];
	$Country=$_POST['list'];
	$Gender=$_POST['r1'];
	
	echo "User Information<br>";
	
	echo "Name :-".$Fname."<br>";
	echo "email :-".$email."<br>";
	echo "Country :-".$Country."<br>";
	echo "Gendar :-".$Gender."<br>";
}