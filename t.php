<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php test</title>
</head>
<body>
	<form action="welcome_post.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="password" name="email"><br>
		<input type="submit">
	</form>

	<form action="welcome_get.php" method="get">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="password" name="email"><br>
		<input type="submit">
	</form>
</body>
</html>