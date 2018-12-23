<?php
define( 'ABSPATH', dirname(__FILE__) . '/' );
$bg = glob(ABSPATH.'img/backgrounds/*.png');
$count = count($bg) - 1;
$random = rand(0, $count);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kbotei</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<style>
body {
	background: url(img/backgrounds/<?php echo basename($bg[$random]);?>) top left repeat;
}

</style>
</head>
<body>
<div id="page">

<div id="header">
	<h1>Joshua Coucke</h1>
	<div class="contact">joshua.coucke [at] me.com</div>
</div> <!-- header -->

<div id="content">
	<h2 class="title">Web Development</h2>
	<ul>
		<li>PHP, HTML5, CSS, JS, and JQuery.</li>
		<li>Wordpress plugins and installations.</li>
		<li>Custom solutions to meet individual needs</li>
	</ul>
</div> <!-- content -->

</div> <!-- page -->
</body>
</html>