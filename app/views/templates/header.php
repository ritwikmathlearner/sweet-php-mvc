<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Issue Tracking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header-top">
	<span>
		<?php
        date_default_timezone_set("Asia/Calcutta");
        echo date("Y-m-d h:i:sa")
        ?>
	</span>
    <span>
		Nerdyturtlez Computer Issue Tracker
	</span>
    <span class="header-top-contact">
		In case of emergency contact John Doe
	</span>
</header>
<?php require 'nav.php'; ?>