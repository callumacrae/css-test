<!DOCTYPE html>
<html>
<head>
	<title>Callum Macrae</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header>
		<h1>Callum Macrae</h1>
		<p>callum@lynxphp.com</p>
		<p>+44 (0)7845 733 638</p>
		<p>skype: callumacrae</p>
		<p>msn: callumacrae@hotmail.co.uk</p>
		<ul>
			<li><a href="http://twitter.com/callumacrae/">twitter</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">portfolio</a></li>
			<li><a href="https://github.com/callumacrae/">github</a></li>
		</ul>
	</header>
	<footer>
		<span>Copyright &copy; Callum Macrae 2011</span><br />
		<span><?php
$quotes = file_get_contents('quotes.txt');
$quotes = explode(PHP_EOL, $quotes);
echo $q[rand(0, count($q) - 1)];

?></span>
	</footer>
</body>
</html>