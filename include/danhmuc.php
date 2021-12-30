<?php
	if (isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
	else{
		$id='';
	}
	$sql_cate=mysqli_query($con,"SELECT * from tbl_category as cate,tbl_sanpham as sp where cate.category_id =sp.category_id and sp.category_id='$id' order by sp.sanpham_id desc ");
	$sql_category=mysqli_query($con,"SELECT * from tbl_category as cate,tbl_sanpham as sp where cate.category_id =sp.category_id and sp.category_id='$id' order by sp.sanpham_id desc ");
	$row_title=mysqli_fetch_array($sql_category);
	$title=$row_title['category_name']
?>
<style>
.product-men {
    margin-bottom: 10px;
}
</style>
<div class="ads-grid py-sm-5 py-4 bg-white">
    <div class="container py-xl-4 py-lg-2 ">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title?></h3>
        <!-- //tittle heading -->
        <div class="row">

            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9">
                <div class="wrapper">

                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                        <div class="row">
                            <?php
								while($row_cate=mysqli_fetch_array($sql_cate)){ 
								?>
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img style="width:100%;height:100%" src="images/products/<?php echo $row_cate['sanpham_image'] ?>" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="?quanly=chitietsp&id=<?php echo $row_cate['sanpham_id'] ?>"
                                                    class="link-product-add-cart">Xem sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center border-top mt-4">
                                        <h4 class="pt-1">
                                            <a
                                                href="?quanly=chitietsp&id=<?php echo $row_cate['sanpham_id'] ?>"><?php echo $row_cate['sanpham_name'] ?></a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span
                                                class="item_price"><?php echo number_format($row_cate['sp_khuyenmai']) ."$" ?></span>
                                            <del><?php echo number_format($row_cate['sanpham_gia']) ."$" ?></del>
                                        </div>
                                        <input id="themmon_ngon" id_mon=<?php echo $row_cate['sanpham_id'] ?>
                                            type="button" name="themgiohang"
                                            value="<?php if($row_cate['sanpham_soluong']>0){echo "Mua";}else{echo "Bán hết";} ?>"
                                            class="btn <?php if($row_cate['sanpham_soluong']>0){echo "btn-success";}else{echo "btn-primary";} ?>">

                                    </div>
                                </div>
                            </div>
                            <?php
								}
								?>
                        </div>
                    </div>


                </div>
            </div>
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

