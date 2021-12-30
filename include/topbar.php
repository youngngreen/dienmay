<?php
include('./db/connect.php');
if (isset($_POST['log_out']) && isset($_SESSION["login_success"])) {
	try {
		$delete_giohang_=mysqli_query($con,"SELECT * from tbl_giohang");
		while($row_dele_giohang=mysqli_fetch_array($delete_giohang_))
		{
			$id_sp_gh=$row_dele_giohang['giohang_id'];
			mysqli_query($con,"DELETE from tbl_giohang where giohang_id=$id_sp_gh");
		}
		session_destroy();
	} catch (Exception $e) {
		echo "loi";
	}
	header("Refresh:0");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0;padding: 0;">
	
	<button onclick="topBarBtn()" class="navbar-toggler widthfull" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div style="background-color: black;margin:0" class="collapse navbar-collapse btn_top_bar" id="navbarSupportedContent">
		<div class="col-2 user_name text-center">
			<p><?php
				if (isset($_SESSION['cusomer_id'])) {
					echo $_SESSION['login_success'];
				} else {
					echo "Người dùng";
				}
				?></p>
		</div>
		<div class="col-2 app_ text-center">
			<div class="dropdown">
				<p>Tải ứng dụng</p>


				<div class="dropdown-content ">
					<img style="width: 90px;" src="./images/qrcode.png" alt="">


				</div>

			</div>
		</div>

		<div class="col-2 connect_ text-center d-flex align-items-center justify-content-center">
			<p>Kết nối</p>
			<a href="#"><i style="color: aliceblue;" class="fab fa-facebook ml-2"></i></a>

			<a href="#"><i style="color: aliceblue;" class="fab fa-instagram ml-2"></i></a>
		</div>
		<div class="col-2 contact d-flex align-items-center justify-content-center contact_"><a href="?quanly=lienhe">Contact</a></div>
		<?php
		if (isset($_SESSION["cusomer_id"]) || isset($_SESSION["login_success"])) {
			$id_customer = $_SESSION["cusomer_id"];
		?>
			<div class="col-2 contact d-flex align-items-center justify-content-center donhang_view_"><a style="color:#999999 !important" href="?quanly=xemdonhang&khachhang=<?php echo $id_customer ?>">Xem đơn hàng</a></div>
			<div class="col-2 text-center d-flex align-items-center justify-content-center log_out">
				<form action="index.php" method="POST">
					<input type="submit" name="log_out" style="width:auto;background:none;border:none;color:#999999;font-weight:600" value="Log-out">
				</form>

			</div>

		<?php
		} else {
		?>
			<div class="col-2 login_ text-center">
				<?php
				include('./include/form_regis.php');
				?>
			</div>
			<div class="col-2 regis_ text-center">
				<?php
				include('./include/form_login.php');
				?>
			</div>
		<?php
		} ?>
	</div>
</nav>
<div style="margin: 0;background-color: white" class="row header-bot_inner_wthreeinfo_header_mid">
	<!-- logo -->
	<div class="col-md-3 logo_agile d-flex">
		
		
			<a href="index.php" class="font-weight-bold font-italic" style="text-align: center;">
			<img src="images/logo_1.png" alt=" " style="width: 37%;"  class="img-fluid">
			</a>
		
	</div>
	<!-- //logo -->
	<!-- header-bot -->
	<div class="col-md-9 header mt-4 mb-md-0 mb-4">
		<div class="row">
			<!-- search -->
			<div class="col-12 agileits_search">
				<form class="form-inline" action="index.php?quanly=timkiem" method="post">
					<input name="search_product" class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" required>
					<button style="max-width: 25%;" class="btn my-2 my-sm-0" name="search_btn" type="submit">Tìm kiếm</button>
				</form>
			</div>


		</div>
	</div>
</div>