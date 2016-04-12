<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php test</title>
</head>
<body>
	<?php
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("webdictionary.txt"));
	fclose($myfile);
	?>
</body>
</html>