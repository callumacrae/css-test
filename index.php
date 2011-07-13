<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Callum Macrae</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<header>
		<h1>Callum Macrae</h1>
		<b>callum@lynxphp.com</b>
		<b>+44 (0)7845 733 638</b>
		<b>skype: callumacrae</b>
		<b>msn: callumacrae@hotmail.co.uk</b>
		<ul>
			<li><a href="#">about</a></li>
			<li><a href="#">portfolio</a></li>
			<li><a href="http://twitter.com/callumacrae/">twitter</a></li>
			<li><a href="https://github.com/callumacrae/">github</a></li>
		</ul>
	</header>
	<div id="content">
		<article>
			<p>Callum Macrae is a web developer and programmer based in the UK. He specialises in live-time and/or communication web applications, and also does a lot of work on phpBB, including work to the core itself.</p>
			<p>Previous work includes work in Node.js, JavaScript, PHP and Python, and he also has experience in HTML(5) and CSS(3). He finds he works best on large-scale websites and applications, although has worked on both small and big solutions.</p>
			<p>See his portfolio to see some of his best work.</p>
		</article>
	</div>
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
