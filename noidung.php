<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="noidungcss.css">
</head>
<body>
	<!-- Noi dung -->
		<div class="NoiDung">
			<div class="row">
				<div class="col-md-1"></div>

				<div class="col-md-10">
					<!-- Menu left -->
					<div style="width: 70%; float: left;padding:0 10px;"  class="menu-left">
						<?php
							include 'slideshow.php';
						?>
					<hr>
					<div class="row">
						<?php
							include 'dexuat.php';
						?>
				</div>
				<hr>
					<div class="row">
						<?php
							include 'review-menu.php';
						?>
	                </div>
	                <hr>
					<div class="row">
						<?php
							include 'monan.php';
						?>
	                </div>  
					</div><!-- end menu-left-->
				<div style="width: 30%; float: right; padding-left: 20px;" class="menu-right"> <!-- menu right -->
					
					<?php
						include 'chude-menu.php';
					?>

					<hr>
					<div class="top-review"> <!-- top review -->
						<div class="panel with-nav-tabs panel-default">
                			<?php
                				include 'tab-review.php';
                			?>
            			</div>
					</div> <!-- end top review -->
				</div><!-- end menu right -->
			</div>
				<div class="col-md-1"></div>
			</div>
		</div>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
</body>
</html>
