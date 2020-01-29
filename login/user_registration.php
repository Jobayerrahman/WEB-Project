<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>User Registration</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="form">
		<div class="main-body1">
			<br>
			<br>
			<h1>USER REGISTRATION</h1>

			<div class="box">
				<label for="name">NAME</label>
				<br>

				<input type="text" name="f-name" id="name" class="input-box2" placeholder="First Name" required>

				<input type="text" name="l-name" id="name" class="input-box2" placeholder="Last Name" required>
			</div>

			<div class="box">
				<label for="username">USERNAME</label>
				<br>
				<input type="text" name="username" id="username" class="input-box1" required>
			</div>

			<div class="box">
				<label for="email">EMAIL</label>
				<br>
				<input type="email" name="email" id="email" class="input-box1" required>
			</div>

			<div class="box">
				<label for="password">PASSWORD</label>
				<br>
				<input type="password" name="password" id="password" class="input-box1" required>
				<p id="pass_text"></p>
			</div>

			<div class="box">
				<label for="c-password">CONFIRM PASSWORD</label>
				<br>
				<input type="password" name="c-password" id="c-password" class="input-box1" required>
			</div>

			<div class="box">
				<label for="gender">GENDER</label>
				<div class="radio-style">
					<input type="radio" name="gender" value="Male" required> Male
					<input type="radio" name="gender" value="Female" required> Female
					<input type="radio" name="gender" value="Other" required> Other
				</div>
				
			</div>
			<div class="box">
				<label for="date">DATE OF BIRTH</label>
				<br>
				<input type="date" name="date" id="date" class="input-box1" required>
			</div>
			<div class="login">
				<input type="submit" value="SUBMIT" name="submit" class="button" >
				<p>Already A Member? <a href="login.php" class="sign-up">Login</a></p>
			</div>
		</div>
	</form>



</body>

</html>


<?php
$con=mysqli_connect("localhost","root","","food");

if(isset($_POST["submit"]))
{
	if(!$con)
	{
		die("Connection Error :".mysqli_connect_error());
	}
	else
	{
		$f_name=$_POST["f-name"];
		$l_name=$_POST["l-name"];
		$uname=$_POST["username"];
		$email=$_POST["email"];
		$pass=$_POST["password"];
		$gender=$_POST["gender"];
		$birth=$_POST["date"];

		
		if($pass==$_POST["c-password"]){
			$str="INSERT INTO `login` (username,password,usertype) VALUES ('$uname','$pass','user');";

			$result=mysqli_query($con,$str);

			$str1="INSERT INTO `userpage` (firstname,lastname,username,email,gender,birthdate) VALUES ('$f_name','$l_name','$uname','$email','$gender','$birth');";

			$result1=mysqli_query($con,$str1);
		}else{
			
		}

		

	}
}
	
?>

