<?php
	
	include_once('./db/connect.php');

?>

<div class="ads-grid py-sm-5 py-4 bg-white">
    <div class="container py-xl-4 py-lg-2 ">
        <!-- tittle heading -->

        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9">
                <div class="wrapper">
                    <!-- first section -->
                    <?php
							$sql_cate_home=mysqli_query($con,"SELECT * from tbl_category order by category_id desc ");
							while($row_cate_home=mysqli_fetch_array($sql_cate_home)){
								$id_category=$row_cate_home['category_id'];
						?>
                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                        <h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home['category_name'] ?>
                        </h3>
                        <div class="row">
                            <?php
									$sql_product=mysqli_query($con,"SELECT * from tbl_sanpham order by sanpham_id desc");
									while($row_sanpham=mysqli_fetch_array($sql_product)){
										if($row_sanpham['category_id']==$id_category){
								?>

                            <div class="col-md-4 product-men mt-5">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img height="100%" width="100%" id="img_id"
                                            value="<?php echo $row_sanpham['sanpham_image'] ?>"
                                            src="images/products/<?php echo $row_sanpham['sanpham_image'] ?>" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>>"
                                                    class="link-product-add-cart">Xem sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center border-top mt-4">
                                        <h4 class="pt-1">
                                            <a id="sp_id" value="<?php echo $row_sanpham['sanpham_name'] ?>"
                                                href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span id="gia_km"
                                                value="<?php echo number_format($row_sanpham['sp_khuyenmai']) ?>"
                                                class="item_price"><?php echo number_format($row_sanpham['sp_khuyenmai']) ." $" ?></span>
                                            <del><?php echo number_format($row_sanpham['sanpham_gia']) ." $" ?></del>
                                        </div>
                                        <input id="themmon_ngon" id_mon=<?php echo $row_sanpham['sanpham_id'] ?>
                                            type="button" name="themgiohang"
                                            value="<?php if($row_sanpham['sanpham_soluong']>0){echo "Mua"; }else{echo "Bán hết";}?>"
                                            class="btn <?php if($row_sanpham['sanpham_soluong']>0){echo "btn-success"; }else{echo "btn-primary";} ?>">



                                    </div>
                                </div>
                            </div>

                            <?php
										}
										}
									?>

                        </div>
                    </div>
                    <?php } ?>
                    <!-- Hình ảnh -->
                    <div class="product-sec1 product-sec2 px-sm-5 px-3 bot_img">
                        <div class="row">
                            <h3 class="col-md-4 effect-bg">Merry Christmas 2021</h3>
                            <p style="color:pink" class="w3l-nut-middle">Get Extra 10% Off</p>
                            <div class="col-md-8 bg-right-nut">
                                <img src="images/image1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //product left -->

            <!-- product right -->
            <?php
				include('product_right.php');
				 ?>

        </div>
    </div>
</div>

<?php
	if(isset($_GET['quanly']))
	{
		
		if($_GET['quanly']=='danhmuc')
		{
			
		include('mini-cart.php');
		}
	
	}
	else{include('mini-cart.php');}?>