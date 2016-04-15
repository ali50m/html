<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP test</title>
</head>
<body>
<?php 
$request = "https://api.64clouds.com/v1/getServiceInfo?veid=109659&api_key=private_WId4nkZbYJisEjSoFQdpnvq0";
$serviceInfo = json_decode (file_get_contents ($request));
print_r ($serviceInfo);
 ?>
</body>
</html>