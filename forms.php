<!DOCTYPE html>
<html>
<head>
	<title>Handling Forms with PHP</title>
</head>
<body>
	<h2>Thanks for registering into our newsletter platform. We really appreciate your feedback</h2>

	<dl>
		<dt>First Name:</dt>
		<dd><?php echo $_POST["firstName"]; ?></dd>

		<dt>Last Name:</dt>
		<dd><?php echo $_POST["lastName"]; ?></dd>

		<dt>Password:</dt>
		<dd><?php echo $_POST["password"]; ?></dd>

		<dt>Retype Password:</dt>
		<dd><?php echo $_POST["retypePassword"] ?></dd>

		<dt>Your E-mail:</dt>
		<dd><?php echo $_POST["email"] ?></dd>

		<dt>Your Feedback: </dt>
		<dd><?php echo $_POST["comments"] ?></dd>
	</dl>

</body>
</html>