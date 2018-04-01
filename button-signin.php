<div class="row">
			<div style="margin-top:3px;" class="col-md-4">
			<a href="login.php?page=dangnhap" class="btn btn-success">Đăng nhập</a>
			<a href="register.php?page=dangki" class="btn btn-success">Đăng kí</a>
			
			<?php if(isset($_SESSION["loged"])){
				
				echo "<a href='index.php?act=logout' class='btn btn-danger'>Đăng xuất</a>";
			?>

				<script type="text/javascript">$('.btn-success').hide();</script>
						<?php
			 } ?>
		</div>
		</div>