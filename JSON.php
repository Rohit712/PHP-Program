<html>
<body>
<?php

	$myObj->name="rohit";
	$myObj->address="Shirpur";
	$myObj->age=30;
	
	echo json_encode($myObj);
	

	$json='{"name":"rohit","address":"Shirpur","age":30}';
	
	$str=json_decode($json,true);
	
	foreach($str as $key => $value)
	{
			echo $key ."=>".$value."<br>";
	}
?>
</body>
</html>