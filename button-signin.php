<div class="row">
			<div style="margin-top:3px;" class="col-md-4">
			<a href="login.php?page=dangnhap" class="btn btn-success">Đăng nhập</a>
			<a href="register.php?page=dangki" class="btn btn-success">Đăng kí</a>
			
			
			<?php if(isset($_SESSION["loged"])){
				if($_SESSION["admin"] == '4697'){
					echo "<a href='dang-review.php' class='btn btn-primary'>Đăng Review</a>";
				}
				echo $_SESSION['fullname'];
				echo "<a href='index.php?act=logout' class='btn btn-danger'>Đăng xuất</a>";
			?>

				<script type="text/javascript" src="BTL_js/hide.js"></script>
						<?php } ?>
		</div>
		</div>
