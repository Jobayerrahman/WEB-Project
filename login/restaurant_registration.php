<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Restaurant Registration</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="form">
		<div class="main-body1">
			<br>
			<br>
			<h1>RESTAURANT REGISTRATION</h1>

			<div class="box">
				<label for="username">RESTAURANT NAME</label>
				<br>
				<input type="text" name="name" id="name" class="input-box1" required>
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
		$uname=$_POST["username"];
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pass=$_POST["password"];

		
		if($pass==$_POST["c-password"]){
			$str="INSERT INTO `login` (username,password,usertype) VALUES ('$uname','$pass','manager');";

			$result=mysqli_query($con,$str);

			$str1="INSERT INTO `restaurant` (username,name,email) VALUES ('$uname','$name','$email');";

			$result1=mysqli_query($con,$str1);
		}else{
			
		}

		

	}
}
	
?>

