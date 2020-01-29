<?php  
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	

</head>

<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<div class="main-body">
			<br><br>
			<h1>ACCOUNT LOGIN</h1>

			<div class="box">
				<label for="username">USERNAME</label>
				<br>
				<input type="text" name="username" id="username" class="input-box" required>
				<p id="uname"></p>
			</div>

			<div class="box">
				<label for="password">PASSWORD</label>
				<br>
				<input type="password" name="password" id="password" class="input-box" required>
				<p id="uname"></p>
			</div>

			<div class="check">
				<div class="check-box">
					<input type="checkbox" name="checkbox" id="checkbox">
					<label for="checkbox">Remember me</label>
				</div>
				<div class="remember">
					<a href="forgot_password.php" class="remember-me">
						Forgot Password?
					</a>
				</div>

			</div>
			
			<div class="login">
				<input type="submit" value="Login" name="submit" class="button" >
				<p>Not a member? <a href="registation_page.php" class="sign-up">Sign Up</a></p>
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
		$str="select * from login where username='".$_POST["username"]."' and password='".$_POST["password"]."';";
		$result=mysqli_query($con,$str);
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_array($result);
			$_SESSION["uname"]=$row["username"];
			$_SESSION["type"]=$row["usertype"];
			
			if($_SESSION["type"]=="admin"){
				header("Location: ../admin/admin_page.php");
			}
			elseif($_SESSION["type"]=="user"){
				header("Location: ../user/user_page.php");
			}
			elseif($_SESSION["type"]=="manager"){
				header("Location: ../manager/user_page.php");
			}
		}

	}
}
	
?>
