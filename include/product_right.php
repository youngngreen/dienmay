<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
    <div class="side-bar p-sm-4 p-3">
        <div class="search-hotel border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">Tìm kiếm..</h3>
            <form action="?quanly=timkiem" method="post">
                <input type="search" placeholder="Sản phẩm..." name="search_product" required="">
                <input type="submit" name="search_btn" value=" ">
            </form>
        </div>
        <!-- price -->


        <!-- electronics -->
        <div class="left-side border-bottom py-2">

            <h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
            <ul>
                <?php
				$sql_category_sidebar = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
				while ($row_category_sidebar = mysqli_fetch_array($sql_category_sidebar)) {
				?>
                <li>
                    <!-- <input type="checkbox" class="checked"> -->

                    <span class="span"><a
                            href="?quanly=danhmuc&id=<?php echo $row_category_sidebar['category_id'] ?>"><?php echo $row_category_sidebar['category_name'] ?></a>
                    </span>
                </li>
                <?php
				}
				?>

            </ul>
        </div>

        <div class="f-grid py-2">
            <h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
            <div class="box-scroll">
                <div class="scroll">
                    <?php
					$sql_product_hot = mysqli_query($con, "SELECT * from tbl_sanpham where sanpham_hot>'0' order by sanpham_id desc");
					while ($row_product_hot = mysqli_fetch_array($sql_product_hot)) {
					?>
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="images/products/<?php echo $row_product_hot['sanpham_image'] ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a
                                href="?quanly=chitietsp&id=<?php echo $row_product_hot['sanpham_id'] ?>"><?php echo $row_product_hot['sanpham_name'] ?></a>
                            <p style="color:red" class=" price-mar mt-2">
                                <?php echo number_format($row_product_hot['sanpham_gia']) . "$" ?></p>
                        </div>
                    </div>
                    <?php
					}
					?>
                </div>
            </div>
        </div>
        <div class="f-grid py-2" >
           
            <img style="width: 100%;" src="./images/ad/ad1.png" alt="">
            <img style="width: 100%;"src="./images/ad/ad2.png" alt="">
            <img style="width: 100%;"src="./images/ad/ad3.png" alt="">
            <img style="width: 100%;"src="./images/ad/ad4.png" alt="">
            <img style="width: 100%;"src="./images/ad/ad5.jpg" alt="">
        </div>
        <!-- //best seller -->
    </div>
    <!-- //product right -->
</div>