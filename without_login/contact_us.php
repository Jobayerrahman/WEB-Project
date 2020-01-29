<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Contact Us</h1>
	
	<p>Please feel free to contact us. We maty not answer all your postings,but it's sure ,we check every posting made by you.</p>
	<br>
	<h5>Type of FeedBack *</h5>
	
	<select>
	  <option value="Criticism">Criticism</option>
	  <option value="Correction">Correction</option>
	  <option value="Complain">Complain</option>
	  <option value="opinion">opinion</option>
	</select>
	
	<h5>Subject</h5>
	
	<form action="DisplayForm.php" method="post" rows="4" cols="50" >
		
			<input type="text" name="Subject" >
		
	
	<h5>Details</h5>
	
	
		<input type="text" name="details" style="font-size:18pt;height:170px;width:250px;">

	<h5>Name</h5>

	
		<input type="text" name="name">
	
	<h5>Email</h5>

	
		<input type="text" name="email">
		<h5>Contact Number</h5>

	
		<input type="text" name="contact_number">
	

	
		<input type="submit" name="submit">
	</form>



</body>
</html>