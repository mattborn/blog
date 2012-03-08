<?php include_once 'blog.php'; ?><!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Blog via M B</title>
		<meta name="author" content="Matthew Born">
		<meta name="description" content="I'm a web designer from Chicago + I love you.">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="stylesheet" href="css/blog.css">
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<?php new Blog; ?>
	<body>
		<script>if (typeof window.JSON === 'undefined'){ document.write('<script src="json2.js"><\/script>'); }</script>
		<script src="js/jquery.js"></script>
		<script src="js/history.js"></script>
		<script src="js/blog.js"></script>
	</body>
</html>