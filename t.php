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
		<input type="submit" value="按此提交">
	</form>

	<!-- 发送电子邮件 -->
	<form action="MAILTO:ali50m@live.com" method="post" enctype="text/plain">

		<h3>这个表单会把电子邮件发送到 W3School。</h3>
		姓名：<br />
		<input type="text" name="name" value="yourname" size="20">
		<br />
		电邮：<br />
		<input type="text" name="mail" value="yourmail" size="20">
		<br />
		内容：<br />
		<input type="text" name="comment" value="yourcomment" size="40">
		<br /><br />
		<input type="submit" value="发送">
		<input type="reset" value="重置">

	</form>
</body>
</html>