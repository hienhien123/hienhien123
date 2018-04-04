<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="BTL_css/footercss.css">
</head>
<body>
	<div id="footer">
		<div class="row">
			<?php
				include 'linhvucreview.php';
				include 'contact.php';
				include 'applications.php';
			?>
		</div>	
			<?php
				include 'follow-icon.php';
			?>
		<div class="row">
			<?php
				include 'reversed.php';
			?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
