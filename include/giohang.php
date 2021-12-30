
<?php

include('./db/connect.php');
if(isset($_GET['dangxuat'])){
	session_destroy();

}if(isset($_POST['themgiohang']))
{
	echo "123";
}

if(isset($_POST['thanhtoan_cus']))
	{
		
		$khachhang_id=$_SESSION['cusomer_id'];
		$mahang=rand(0,9999);
		// for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
		// 	$sanpham_id=$_POST['thanhtoan_product_id'][$i];
		// 	$soluong=$_POST['thanhtoan_soluong'][$i];
		// 	$sql_donhang=mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
			
		// 	$sql_giaodich=mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
			
		// 	$sql_detele_giohang=mysqli_query($con,"DELETE from tbl_giohang where sanpham_id='$sanpham_id'");
				
		// 	}
		$date   = new DateTime(); //this returns the current date time
		$result = $date->format('Y-m-d-H-i-s');
		$mahang=$mahang."-".$result;
		$giaodich_customer=mysqli_query($con,"SELECT * from tbl_giohang");
		while($row_giaodich_customer=mysqli_fetch_array($giaodich_customer))
		{
			$sanpham_id=$row_giaodich_customer['sanpham_id'];
			$soluong=$row_giaodich_customer['soluong'];
			$checksl=mysqli_query($con,"SELECT * from tbl_sanpham where sanpham_id=$sanpham_id");
			$rw_sl_conlai=mysqli_fetch_array($checksl);
			$sl_conlai=$rw_sl_conlai['sanpham_soluong']-$soluong;
			$sql_donhang=mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
			$sql_giaodich=mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
			$sql_update_sanpham_=mysqli_query($con,"UPDATE tbl_sanpham SET sanpham_soluong=$sl_conlai where sanpham_id= $sanpham_id");
			$sql_detele_giohang=mysqli_query($con,"DELETE from tbl_giohang where sanpham_id='$sanpham_id'");
		}
	}

?>


<div class="privacy py-sm-5 py-4 bg-white">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Giỏ hàng của bạn</span>
			</h3>
			<?php
				if(isset($_SESSION['login_success']))
				{
					$name_cus=$_SESSION['login_success'];
					$id_cus=$_SESSION['cusomer_id'];
					$rw_cus=mysqli_query($con,"SELECT * FROM tbl_khachhang where khachhang_id='$id_cus'");
					$customer=mysqli_fetch_array($rw_cus);
				
			?>
			<div class="card" style="width: 100%;">
				<div class="card-body" id="dataCustomer">
				<div class="row" >
						<input id="choose_id_cus" type="hidden" value="<?php echo $id_cus ?>" >
						<div class="col-6" id="fo_customer_id_show">
							
							
							
						</div>
						
						<div class="col-6" id="fo_customer_id">
							
						</div>
						
					</div>
					
				</div>
			</div>
			<?php }?>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
                <?php
                
                $sql_lay_giohang=mysqli_query($con,"SELECT Count(*) as total from tbl_giohang ORDER BY giohang_id desc");
                $data_count_=mysqli_fetch_assoc($sql_lay_giohang);
                ?>
				<div class="table-responsive">
                    <form id="form_giohang_12" action="" method="POST" onsubmit="return checkPayment(<?php echo $data_count_['total']  ?>,<?php echo $_SESSION['cusomer_id']  ?>)">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>

								<th>Giá ($)</th>
								<th>Tổng giá ($)</th>

								<th>Xoá</th>
							</tr>
						</thead>
						<tbody id="cart_id">
                            
                            
                           
						</tbody>
					</table>
                    </form>
				</div>
			</div>
		</div>
	</div>
	

	
