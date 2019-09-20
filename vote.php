<html>
<head>
<style type="text/css">
.a1
{
	color:orange;
	font-size:15px;
	font-style:italic;
	align:center;
	
}
.a2
{
	color:red;
	font-size:15px;
	font-style:Bold;
}
</style>
</head>
<body>
<form action="vote.php" method="post">
Rohit Pawar<input type="submit" class="a1" name="bjp" value="BJP"><br>
Vishal Patil<input type="submit" class="a2" name="cong" value="CONGRESS"><br>
</form>
</body>
</html>
<?php
	
		
		$_SESSION["b"]=0;
		$_SESSION["c"]=0;
		$_SESSION["t"]=0;
		if(isset($_POST["bjp"]))
		{
			session_start();
			$_SESSION["b"]=$_SESSION["b"]+1;
			$_SESSION["t"]=$_SESSION["t"]+1;
		}
		
		if(isset($_POST["cong"]))
		{
			session_start();
			$_SESSION["c"]=$_SESSION["c"]+1;
			$_SESSION["t"]=$_SESSION["t"]+1;
		}
		
		echo "Rohit Pawar Votes := ".$_SESSION["b"]."<br>";
		echo "Vishal Patil Votes := ".$_SESSION["c"]."<br>";
		echo "Total Votes Is := ".$_SESSION["t"]."<br>";
?>