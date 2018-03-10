<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php
		if(isset($_POST["submitField"])){
			processForm();
		}else{
			displayForm();
		}

		function
	?>

	<form action="validateForm.php" method="post">
		<div>
			<label for="firstName">
				FirstName:
				<input type="text" name="firstName" id="firstName" placeholder="Please Enter your First Name">
			</label>
		</div>
		<div>
			<label for="lastName">
				LastName:
				<input type="text" name="lastName" id="lastName" placeholder="Please Enter your Last Name">
			</label>
		</div>
		<div>
			<label for="password">
				Password:
				<input type="password" name="password" id="password" placeholder="Enter Password">
			</label>
		</div>
		<div>
			<label for="retypePassword">
				Retype-Password:
				<input type="password" name="retypePassword" id="retypePassword">	
			</label>
		</div>
		<div>
			<label for="email">
				E-mail Address:
				<input type="email" name="email" id="email">
			</label>
		</div>
		<div>
			<label for="comments">Type your Comments Here: </label>
			<textarea name="comments" id="comments" rows="5" cols="60"></textarea>
		</div>
		<input type="submit" name="submitField" id="submitField">
</body>
</html>