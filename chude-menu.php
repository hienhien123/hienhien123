<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.list-menu{
			margin: 10px -10px;
		}
		.list-menu li{
			height: 80px;
		}
		.list-menu li a{
			padding-left: 10px;
		}
		.list-menu li img{
			width: 80px;
		}
	</style>
</head>
<body>
	<div class="chude">		
								<p><h3 style="padding-left: 10px;">Danh sách chủ đề</h3></p>
								<hr>
								<?php 
											$connect = mysqli_connect('localhost','root','','db');
											mysqli_set_charset($connect,"utf8");

											$rows = mysqli_query($connect,"
											select *
											from chude;
											");
											while($info=mysqli_fetch_assoc($rows)){
												$name_chude = $info['name_chude'];
												$review_chude = $info['review_chude'];
												$image = $info['image'];
												$href = $info['href'];
											?>
								<div class="tab-content">
			                        <div class="tab-pane fade in active" id="Trang1">
			                        	<ul type="none" class="list-menu">
		                        		
			                        		<li>
			                        			<?php echo "<a href='".$href."'>" ?>
			                        				<div class="row">
			                        				<div class="col-md-3">	<?php echo " <img style='margin-top:-20px;height:76px;' src=' ".$image. " ' alt='Check'>";?></div>
			                        				<div class="col-md-9"><h5 style="margin-top: -18px;"> <?php echo "$name_chude" ?> </h5></div>										
			                        			
			                        				</div>
			                        			</a>
			                        		</li>
			                        		

		                        		
		                        	</ul>

		                        </div>
		                    	</div>
		                    	<?php
							}
								
										?>
							</div>

 <!-- Chu De Menu -->
 
                    
					<!-- end chu de mennu -->
</body>
</html>
