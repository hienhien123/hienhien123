<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="BTL_css/noidungcss.css">
	<link rel="stylesheet" type="text/css" href="BTL_css/headercss.css">
	<style type="text/css">
		#Trang ul li{
			height: 150px;
		}
	</style>
</head>
<body>
	<div class="top">	
		<div class="row">
		<?php
			require_once 'vitri.php';
			include 'dangki.php';
		?>
			

		</div>
		<div class="row">
		<div class="col-sm-12">
          <nav class="List-menu navbar navbar-default"> 
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                  include 'logo.php';
                  include 'menu.php';
                ?>
              </div>
          </nav>
      </div>
  </div>
  </div>
  	<div class="NoiDung">
			<div class="row">
	<div class="col-md-1"></div>

				<div class="col-md-10">
					<!-- Menu left -->
					

					<div style="width: 70%; float: left;padding:0 10px;"  class="menu-left">
						<div class="row">
							<div class="chude">
								<p><h3 style="padding-left: 10px;">Quán ngon</h3></p>
								<hr>
								<?php 
											$connect = mysqli_connect('localhost','root','','db');
											mysqli_set_charset($connect,"utf8");

											$rows = mysqli_query($connect,"
											select * from quanngon
											");
											while($info=mysqli_fetch_assoc($rows)){
											$name = $info['name'];
											$img = $info['image'];
											$review = $info['review'];
											$address = $info['address'];
											$href=$info['href'];
										?>
								<div class="tab-content">
		                        <div class="tab-pane fade in active" id="Trang">
		                        	<ul type="none" class="list-menu">
		                        		
		                        		<li>
			                        		<?php echo "<a href='".$href."'>"?>
			                        			<div class="row">
			                        				<div class="col-md-2">
			                        			<?php echo "<img style='margin-top:-20px;width:120px;height: 146px; src='".$img."' alt=''>" ?>	
			                        			</div>
			                        				<div class="col-md-10">	<h3> <?php echo "$name" ?> </h3>
			                        					<h3>Địa chỉ: <?php echo "$address" ?></h3>	</div>								
			                        					</div>
			                        				
			                        			</a>
			                        	</li>
			                        	</ul>
			                        </div>
			                    </div>
			                    <?php } ?>
			           
			    </div>

			</div>

		                        		
	</div><!-- end menu-left-->
					
	<div style="width: 30%; float: right; padding-left: 20px;" class="menu-right"> <!-- menu right -->
					<div class="chude">
					<?php
						include 'chude-menu.php';
					?>
					</div>
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
		<div class="bottom">
			<?php require_once 'footer.php'; ?>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>