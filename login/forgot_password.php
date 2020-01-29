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
			<h1>CHANGE PASSWORD</h1>

			<div class="box">
				<label for="username">USERNAME</label>
				<br>
				<input type="text" name="username" id="username" class="input-box" required>
			
			</div>

			<div class="box">
				<label for="password">PASSWORD</label>
				<br>
				<input type="password" name="password" id="password" class="input-box" required>
				<p id="uname"></p>
			</div>
			<div class="box">
				<label for="password">CONFIRM PASSWORD</label>
				<br>
				<input type="password" name="password" id="password" class="input-box" required>
				<p id="uname"></p>
			</div>
			
			<div class="login">
				<input type="submit" value="Submit" name="submit" class="button" >
			</div>

		</div>
	</form>



</body>

</html>

<?php
$con=mysqli_connect("localhost","root","","food");

if(isset($_POST["submit"]))
{
	
}
	
?>
