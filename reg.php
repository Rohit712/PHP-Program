<html>
	<body>
		<form method="post" action="reg.php">
			first name<input name="fname">
			last name<input name="lname">
			email id<input name="email">
			password<input type="password" name="pass">
			confirm password<input type="password" name="cpass">
			qualification<input name="quali">
			gender
			female<input type="radio" value="female" name="r1">
			male<input type="radio" value="male" name="r1">
			city
			<select name=list1>
				<option selected>dhule</option>
				<option selected>mukmbai</option>
				<option selected>nashik</option>
				<option selected>dhule</>
			</select>
				country
				<select name=list2>
					<option selected>us</option>
					<option selected>uk</option>
					<option selected>uganda</option>
					<option selected>england</>
				</select>
				security  question
				<select name="list3">
					<option selected>pet name</option>
					<option selected>school name</option>
					<option selected>mother name</option>
				</select>
				answer <input type="text" name="ans" />
				<input type="submit" name="submit">


		</form>
	</body>
</html>

		<?php
			if(isset($_POST['submit']))
			{
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];
				$quali=$_POST['quali'];
				$city=$_POST['list1'];
				$country=$_POST['list2'];
				$quetion=$_POST['list3'];
				$answer=$_POST['ans'];
				$gender=$_POST['r1'];
				if(empty($fname))
				{
					$error[] = "first name should not blank";
				}
				if(empty($lname))
				{

					$error[] = "lasst name should not blank";
				}
				if(empty($email))
				{

					$error[] = "email name should not blank";
				}
				if(empty($pass)&& ($cpass))
				{

					$error []= "pass should not blank";
				}
				if(empty($quali))
				{

					$error []= "quali should not blank";
				}
				if(empty($city))
				{

					$error[] = "city should not blank";
				}
				if(empty($country))
				{

					$error []= "country should not blank";
				}
			if(empty($quetion))
				{

					$error []= "quetion should not blank";
				}if(empty($answer))
				{

					$error[] = "answer should not blank";
				}

				if((strcmp($pass,$cpass)<0) || (strcmp($pass,$cpass)>0))
				{
						$error[]="pass and cpass not match";

				}
				else
				{
						echo "user info"</br>";
						echo "first name:- ".$fname."</br>";
						echo "last name:- ".$lname."</br>";
						echo "emai:- ".$email."</br>";
						echo "pass:- ".$pass."</br>";
						echo "quali:- ".$quali."</br>";
						echo " gender:- ".$gender."</br>";
						echo "city:- ".city."</br>";
						echo "country:- ".$country."</br>";
						echo "fse que:- ".$quetion."</br>";
						echo "ans:- ".$answer."</br>";

				}
			}

		?>