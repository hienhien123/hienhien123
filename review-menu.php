<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

			<div class="review">
						<p><h4 style="width: 20%; margin-left: 15px;padding-left: 10px; border-bottom: 3px solid orange;">Review mới</h4></p>
										<?php 
												$connect = mysqli_connect('localhost','root','','db');
												mysqli_set_charset($connect,"utf8");

												$rows = mysqli_query($connect,"
												select * from review
												");
												while($info=mysqli_fetch_assoc($rows)){
												$name = $info['name'];
												$address = $info['address'];
												$image = $info['image'];
												$href =$info['href'];
												?>

											
							                       
							                        	<ul type="none" class="col-md-4 list-review">
							                        		
								                        <li style="float: left;"><?php echo "<a style='height: 260px;text-decoration:none;' class='thumbnail' href='".$href."'>" ?>
								                        		<?php echo "<img style='width: 220px; height: 250px;' alt='' src='".$image." '>" ?>
								                        					<h4 style="margin-top: -100px; color: #ffffff;"> <?php echo "$name" ?>
								                        					<br>Địa chỉ: <?php echo "$address" ?>	</h4>						
								                        			</a>
								                        	</li>
							                        	</ul>

							            <?php } ?>
									
	                            </div>
	                            
	</body>
</html>	
