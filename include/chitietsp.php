<?php
include('mini-cart.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else
{
	$id='';
}
$sql_chitiet=mysqli_query($con,"SELECT * from tbl_sanpham as sp where sanpham_id='$id'")
?>


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Trang chủ</a>
                    <i>|</i>
                </li>
                <?php 

					$id_category=mysqli_query($con,"SELECT * from tbl_sanpham  where sanpham_id='$id'");
					$id_category_fetch=mysqli_fetch_array($id_category);
					$id_cate=$id_category_fetch['category_id'];
					$row_danhmuc=mysqli_query($con,"SELECT * from tbl_category where category_id='$id_cate'");
					$row_danhmuc_ca=mysqli_fetch_array($row_danhmuc);
				?>
                <li><a
                        href="?quanly=danhmuc&id=<?php echo $row_danhmuc_ca['category_id'] ?>"><?php echo $row_danhmuc_ca['category_name'] ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
while($row_chitiet=mysqli_fetch_array($sql_chitiet)){
?>
<div class="banner-bootom-w3-agileits py-5 " style="background-color: white;">
    <div class="container py-xl-4 py-lg-2 ">
        <!-- tittle heading -->
        <!-- <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ingle
				<span>P</span>age</h3> -->
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">

                            <li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/products/<?php echo $row_chitiet['sanpham_image'] ?>"
                                        data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3"><?php echo $row_chitiet['sanpham_name'] ?></h3>
                <p class="mb-3">
                    <span class="item_price"><?php echo number_format($row_chitiet['sp_khuyenmai']) ." $" ?></span>
                    <del
                        class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']) ." $" ?></del>
                    <label>Free delivery</label>
                </p>

                <div class="product-single-w3l">
                    <p><?php echo $row_chitiet['sanpham_chitiet'] ?></p>
                    <br>
                    <br>
                    <p><?php echo $row_chitiet['sanpham_mota'] ?></p>

                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="" method="post">
                            <fieldset>
                                <input type="hidden" name="tensanpham"
                                    value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                                <input type="hidden" name="sanpham_id"
                                    value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                                <input type="hidden" name="giasanpham"
                                    value="<?php echo $row_chitiet['sanpham_gia'] ?>" />
                                <input type="hidden" name="hinhanh"
                                    value="<?php echo $row_chitiet['sanpham_image'] ?>" />
                                <input type="hidden" name="soluong" value="1" />

                                <input id="search_them" style="width: 100%;" id_search="<?php echo $row_chitiet['sanpham_id'] ?>" type="button" name="themgiohang"
                                    value="<?php if($row_chitiet['sanpham_soluong']>0){echo "Mua";}else{echo "Sold out";} ?>"
                                    class="btn <?php if($row_chitiet['sanpham_soluong']>0){echo "btn-success";}else{echo "btn-primary";} ?>" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
?>
