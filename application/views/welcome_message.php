<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="assets/dist/mainstyle-dist.css">
	
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div class="leftbox">
		<h2>The page you are looking at is being generated dynamically by CodeIgniter.</h2>

		<h3>If you would like to edit this page you'll find it located at:</h3>
		<h4>application/views/welcome_message.php</h4>
	</div>
	<div class="rightbox">

		<h5>The corresponding controller for this page is found at:</h5>
		<h6>application/controllers/Welcome.php</h6>

		<a href="http://link.html">Link Test</a>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>