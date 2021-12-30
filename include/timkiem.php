<?php
	if (isset($_POST['search_btn']))
    {
		$tukhoa=$_POST['search_product'];

	$sql_product=mysqli_query($con,"SELECT * from tbl_sanpham where sanpham_name LIKE '%$tukhoa%' order by sanpham_id desc ");
	$title=$tukhoa;
    $a=1;
    }
?>
<div class="ads-grid py-sm-5 py-4 bg-white">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_cate=mysqli_fetch_array($sql_product)){ 
								?>
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style='width:100%;height:100%' src="images/products/<?php echo $row_cate['sanpham_image'] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_cate['sanpham_id'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html"><?php echo $row_cate['sanpham_name'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_cate['sp_khuyenmai']) ." $" ?></span>
												<del><?php echo number_format($row_cate['sanpham_gia']) ." $" ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="?quanly=giohang" method="post">
											
													<fieldset>
														<input type="hidden" name="tensanpham" value="<?php echo $row_cate['sanpham_name'] ?>" />
														<input type="hidden" name="sanpham_id" value="<?php echo $row_cate['sanpham_id'] ?>" />
														<input type="hidden" name="giasanpham" value="<?php echo $row_cate['sanpham_gia'] ?>" />
														<input type="hidden" name="hinhanh" value="<?php echo $row_cate['sanpham_image'] ?>" />
														<input type="hidden" name="soluong" value="1" />
														
														<input id="themmon_ngon"  id_mon=<?php echo $row_cate['sanpham_id'] ?> type="button" name="themgiohang" value="<?php if($row_cate['sanpham_soluong']>0){echo "Mua";}else{echo "Sold out";} ?>" class="btn <?php if($row_cate['sanpham_soluong']>0){echo "btn-success";}else{echo "btn-primary";} ?>" >

													</fieldset>
							
												</form>
											</div>

										</div>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
						
						<!-- //fourth section -->
					</div>
				</div>
				
				<!-- //product left -->
				<!-- product right -->
				<?php
					include('product_right.php');
					include('mini-cart.php');
				?>
			</div>
		</div>
	</div>