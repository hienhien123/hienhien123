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
						<?php
						if(isset($_POST["dangbai"])){
							$name_review = $_POST["name_review"];
							$noidung = $_POST["noidung"];
							$image = $_POST["image"];
							$address = $_POST["address"];
							if($name_review =='' or $noidung ==	'' or $image ='%.jpg%' ){
								echo '<script type="text/javascript">alert("Đăng bài không thành công");</script>';
							}
							else{
							$connect = mysqli_connect('localhost','root','','db');
							mysqli_set_charset($connect,"utf8");
							mysqli_query($connect,"
								insert into review (name,noidung,image,address)
								values ('$name_review','$noidung','$image','$address')
								");
							header("location:index.php");

							echo '<script type="text/javascript">alert("Đăng bài thành công");</script>';

							}
						}
						?>
						<div class="row">
							<form action="" method="post">
								<div class="col-md-12">
									<div class="alert alert-info">
									  <strong>Đăng Review</strong>
									</div>
									<div class="panel panel-primary">
									    <div class="panel-body">
									    	<div class="form-group">
												<label for="email">Tên bài review</label>
												<input type="text" class="form-control" name="name_review" placeholder="Nhập tên bài review">
											</div>
								 
											<div class="form-group">
												<label for="email">Nội dung bài viết</label>
									
													<textarea name="noidung" id="editor1" rows="10" cols="80"> </textarea>
											
											</div>
								 
											<div class="form-group">
												<label for="pwd">Link ảnh</label>
												<input type="text" class="form-control" name="image" placeholder="Link ảnh...">
											</div>
								 
											<div class="form-group">
												<label for="email">Địa chỉ</label>
												<input type="text" class="form-control" name="address" placeholder="Địa chỉ...">
											</div>
								 
											<button type="submit" class="btn btn-default" name="dangbai">Đăng review</button>

									    </div>
									</div>
								</div>
								</form>
							
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
		</div>
		<div class="bottom">
			<?php require_once 'footer.php'; ?>
		</div>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>