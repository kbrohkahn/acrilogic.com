<html>
<head>
	<title>acriLogic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="Free Web tutorials on HTML and CSS">
	<link rel="icon" href="/favicon.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
	<script src="/assets/js/jquery-2.1.4.min.js"></script>

</head>
<body>
	<div id="header">
		<i id="nav-icon" class="fa fa-bars"></i>
		<a id="title" href="/">
			<img src="/assets/img/icon.png" alt="acriLogic Icon">
			acriLogic
		</a>
		<div id="subtitle">Powerful technologies. Clean interfaces. Enjoyable applications.</div>
		<div id="nav">
			<ul>
				<li id="nav-close-item"><a href="#">Close menu</a></li>
				<li><?php echo anchor('', 'Home', '') ?></li>
				<li><?php echo anchor('apps/music_home', 'Music Home', '') ?></li>
				<li><?php echo anchor('apps/ratfink', 'Ratfink', '') ?></li>
				<li><?php echo anchor('apps/prezcon', 'Prezcon', '') ?></li>
				<li><?php echo anchor('support', 'Contact', '') ?></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<?php if (isset($application)) {
			echo "<div class='application-title'><img src='/assets/img/".$application."/icon.png' alt='".$title." Icon'><h1>".$title."</h1></div>";
		}

		else if ($title != "Home") {
			echo "<h1>".$title."</h1>";
		}?>