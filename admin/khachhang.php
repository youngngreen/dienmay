<?php
include_once('../db/connect.php');
?>
    <div style="max-width: 95%;"  class="container">
        <div class="row">
            
            <div  class="col-md-12">
               <center><h4 style="font-size: 30px;">Khách hàng đã đăng kí</h4></center> 
                <table style="text-align: center;" class="table table-bordered ">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Tên khách hàng </th>
                        <th>Số điện thoại </th>

                        <th>Địa chỉ </th>
                        <th>Email</th>
                        <th>Quản lý</th>

                    </tr>
                    <?php
                    $i=0;
                    $sql_select_khachhang=mysqli_query($con,"SELECT * from tbl_khachhang as kh order by kh.name desc");
                    while($row_select_khachhang=mysqli_fetch_array($sql_select_khachhang)){
                        $i++;
                    ?>
                    <tr >
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_select_khachhang['name'] ?></td>
                        <td><?php echo $row_select_khachhang['phone'] ?></td>
                        <td><?php echo $row_select_khachhang['address'] ?></td>
                        <td><?php echo $row_select_khachhang['email'] ?></td>
                        <td>
                            <a class="btn btn-primary" role="button" href="?quanly=khachhang&id=<?php echo $row_select_khachhang['khachhang_id'] ?>">Xem giao dịch</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
            <?php
                if(isset($_GET['id']))
                { $id = $_GET['id'];
                $sql_select_giaodich=mysqli_query($con,"SELECT * from tbl_giaodich as gd,tbl_sanpham as sp where sp.sanpham_id=gd.sanpham_id and '$id'=gd.khachhang_id order by gd.giaodich_id desc");
                $sql_ten=mysqli_query($con,"SELECT * from tbl_khachhang as kh where '$id'= kh.khachhang_id");
                $ten=mysqli_fetch_array($sql_ten);
                if($row_select_giaodich=mysqli_fetch_array($sql_select_giaodich)) {
            ?>
            <div class="col-md-12 ">
               <center> <h4 style="font-size: 30px;">Liệt kê lịch sử giao dịch của khách hàng <?php echo $ten['name'];?></h4></center> 
                <table style="text-align: center;" class="table table-bordered align-middle">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Mã giao dịch </th>
                        <th>Tên sản phẩm </th>
                        <th>Ngày đặt</th>

                    </tr>
                    <?php
                    $i=0;
                    while($row_select_giaodich=mysqli_fetch_array($sql_select_giaodich)){
                        $i++;
                    ?>
                    <tr >
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_select_giaodich['magiaodich'] ?></td>
                        <td><?php echo $row_select_giaodich['sanpham_name'] ?></td>
                        <td><?php echo $row_select_giaodich['ngaythang'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
               
            </div>
            <?php } else{ ?>
                <center> <h4 style="font-size: 30px;">Khách hàng <?php echo $ten['name'];?> chưa thực hiện giao dịch nào</h4></center> 
                <?php } } ?>
        </div>
    </div>
