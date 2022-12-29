<html>
<head>
<title>URL Components example</title>
<body>
<?php
$url = 'http://www.example.com/php-example/index.php';
print_r(parse_url($url));
$scheme = parse_url($url,PHP_URL_SCHEME);
echo "<br><br>Scheme : $scheme";           
$host = parse_url($url,PHP_URL_HOST);
echo "<br><br>Host : $host";
$path = parse_url($url,PHP_URL_PATH);
echo "<br><br>path : $path"; 
print(parse_url($url, PHP_URL_PORT));
echo "<br><br>path : $port";
?>
</body>
</html>