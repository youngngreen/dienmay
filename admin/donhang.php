<?php
include('../db/connect.php');
?>
<?php

if(isset($_POST['capnhatdonhang']))
{
    $xuly=$_POST['xuly'];
    $mahang_capnhat=$_POST['mahang_xuly'];
    $sql_capnhat_donhang=mysqli_query($con,"UPDATE tbl_donhang set status_donhang='$xuly' where mahang='$mahang_capnhat'");
    $sql_capnhat_giaodich=mysqli_query($con,"UPDATE tbl_giaodich set status_giaodich='$xuly' where magiaodich='$mahang_capnhat'");
    header('Location: dashboard.php?quanly=donhang');
}

?>
<?php
if(isset($_GET['xoadonhang']))
{
    $ma_donhang_delete = $_GET['xoadonhang'];
    $sql_delete_donhang=mysqli_query($con,"DELETE from tbl_donhang where mahang='$ma_donhang_delete'");
    header('Location: dashboard.php?quanly=donhang');
    
}elseif(isset($_GET['huydonhang']))
{
    $mahang_huy=$_GET['huydonhang'];
    $sql_check = mysqli_query($con,"SELECT status_donhang from tbl_donhang as dh where mahang= '$mahang_huy'");
    $check = mysqli_fetch_array($sql_check);
    if ($check[0] == 0)
        {$sql_capnhat_donhang=mysqli_query($con,"UPDATE tbl_donhang set status_donhang='2' where mahang='$mahang_huy'");
         $sql_capnhat_giaodich=mysqli_query($con,"UPDATE tbl_giaodich set status_giaodich='2' where magiaodich='$mahang_huy'");
        }
    
}
?>
    <div class="container">
        <div style="text-align: center" class="row">
            <div style="padding:0"  class="col-md-12">
                <h4>Liệt kê đơn hàng</h4>
                <table class="table table-bordered align-middle">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Tên khách hàng </th>
                        <th>Tình trạng đơn hàng </th>
                        <th>Mã hàng </th>
                        <th>Ngày đặt</th>
                        <th>Yêu cầu huỷ</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    //$sql_select_donhang=mysqli_query($con,"SELECT * from tbl_sanpham as sp,tbl_khachhang as kh,tbl_donhang as dh where dh.sanpham_id =sp.sanpham_id and dh.khachhang_id=kh.khachhang_id group by dh.mahang having count(dh.mahang)>1 order by dh.donhang_id desc")
                    $sql_select_donhang= mysqli_query($con,"SELECT * from tbl_donhang as dh,tbl_khachhang as kh where  dh.khachhang_id=kh.khachhang_id group by dh.mahang order by dh.ngaythang");
                    while($row_select_donhang=mysqli_fetch_array($sql_select_donhang)){
                        $i++;
                    ?>
                    <tr >
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_select_donhang['name'] ?></td>
                        <td><?php
                            if($row_select_donhang['status_donhang']=='0')
                            {
                                echo "Chưa xử lý";
                            }elseif($row_select_donhang['status_donhang']=='2')
                            {
                                echo "Đã huỷ";
                            }else
                            {
                                echo "Đã xác nhận và gửi hàng";
                            }
                        ?></td>
                        
                        <td><?php echo $row_select_donhang['mahang'] ?></td>
                        <td><?php echo $row_select_donhang['ngaythang'] ?></td>
                        <td>
                            
                            <?php
                                $mahang=$row_select_donhang['mahang'];
                                
                                $sql_select_huy_giaodich=mysqli_query($con,"SELECT * from tbl_giaodich as gd,tbl_donhang as dh where dh.mahang='$mahang' and dh.mahang=gd.magiaodich group by gd.magiaodich order by gd.giaodich_id limit 1  ");
                                $row_elect_huy_giaodich=mysqli_fetch_array($sql_select_huy_giaodich);
                                if( $row_elect_huy_giaodich['status_giaodich']=='2' &&$row_elect_huy_giaodich['status_donhang']!='2'){
                                    
                                ?>
                                
                                    <a href="?quanly=donhang&huydonhang=<?php echo $row_elect_huy_giaodich['magiaodich'] ?>">Xác nhận yêu cầu huỷ</a>
                                <?php 
                                }elseif($row_elect_huy_giaodich['status_giaodich']=='2' &&$row_elect_huy_giaodich['status_donhang']=='2'){
                                ?>
                                    <p>Đã huỷ</p>
                                <?php } else {?>    
                                    <p>None</p>
                                    <?php } ?>
                               
                        </td>
                        <td >
                            <a class="btn btn-danger" role="button" href="?quanly=donhang&xoadonhang=<?php echo $row_select_donhang['mahang'] ?>" >Xoá</a>
                            <a class="btn btn-primary" role="button" href="?quanly=donhang&mahang=<?php echo $row_select_donhang['mahang'] ?>" >Xem</a>

                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
            <?php
                if( isset($_GET['quanly']) =='donhang' && isset($_GET['mahang']))
                {
                    $mahang= $_GET['mahang'];
                    $sql_donhang = mysqli_query($con,"SELECT * from tbl_donhang as dh,tbl_sanpham as sp where dh.sanpham_id=sp.sanpham_id and dh.mahang='$mahang' ");
                    $sql_name = mysqli_query($con, "SELECT * from tbl_khachhang as kh,tbl_donhang as dh where dh.khachhang_id=kh.khachhang_id and dh.mahang='$mahang'");
                    $name = mysqli_fetch_array($sql_name);

            ?>
            <h4>Xem chi tiết đơn hàng của khách hàng <?php echo "$name[name]"; ?></h4>
            <div style="padding:0;height:300px"  class="col-md-12">
                <form action="#" method="POST">
                <table  class="table table-bordered ">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Mã đơn hàng</th>

                        <th>Tên sản phẩm </th>

                        <th>Tổng giá </th>
                        <th>Số lượng</th>

                        <th>Ngày đặt</th>

                    </tr>
                    <?php
                    $i=0;
                    while($row_donhang=mysqli_fetch_array($sql_donhang)){
                        $i++;
                    ?>
                    <tr >
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_donhang['mahang'] ?></td>

                        <td><?php echo $row_donhang['sanpham_name'] ?></td>
                        <td><?php echo number_format($row_donhang['sanpham_gia']* $row_donhang['soluong']) ." $"?></td>
                        
                        <td><?php echo $row_donhang['soluong'] ?></td>
                        <td><?php echo $row_donhang['ngaythang'] ?></td>

                        <input type="hidden" value="<?php echo $row_donhang['mahang'] ?> " name="mahang_xuly">
                        
                    </tr>
                    <?php } ?>
                </table>
                <select style="max-width:30%;align-content:center;display:inline-flex" class="form-control" name="xuly" >
                   
                    <option value="0">Chưa xử lý</option>
                    <option value="1">Đã xử lý</option>
                    <option value="2">Đã hủy</option>
                </select>
                <input  type="submit" value="Cập nhật" class="btn btn-success" name="capnhatdonhang">
                </form>
                <?php
                }
                ?>
            </div>
            
        </div>
    </div>
