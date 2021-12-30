<?php
include_once('../db/connect.php');
?>
<?php
    if(isset($_POST['themsanpham']))
    {
        $tensanpham=$_POST['tensanpham'];
       
        $chitiet=$_POST['chitiet'];
        
        $mota=$_POST['mota'];
        
        $hinhanh=$_FILES['hinhanh']['name'];
        
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        
        $giasanpham=$_POST['giasanpham'];
        
        $giakhuyenmai=$_POST['giakhuyenmai'];
        
        $danhmuc=$_POST['danhmuc'];
        $soluong=$_POST['soluong'];
        $path='../images/products/';
        $sql_insert_sanpham=mysqli_query($con,"INSERT INTO tbl_sanpham(sanpham_name,sanpham_chitiet,sanpham_mota,sanpham_image,sanpham_gia,sp_khuyenmai,category_id,sanpham_soluong) 
        values ('$tensanpham','$chitiet','$mota','$hinhanh','$giasanpham','$giakhuyenmai','$danhmuc','$soluong')");
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
        
    }elseif(isset($_GET['xoa']))
    {
        $id_sanpham_delete=$_GET['xoa'];
        $sql_delete_sanpham=mysqli_query($con,"DELETE FROM tbl_sanpham where sanpham_id='$id_sanpham_delete'");
        header('Location: dashboard.php?quanly=sanpham');
    }
    elseif(isset($_POST['suasanpham'])){
        
        $id_sanpham_update=$_POST['id_update'];
        $tensanpham=$_POST['tensanpham'];
       
        $chitiet=$_POST['chitiet'];
        
        $mota=$_POST['mota'];
        
        $hinhanh=$_FILES['hinhanh']['name'];
        
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        
        $giasanpham=$_POST['giasanpham'];
        
        $giakhuyenmai=$_POST['giakhuyenmai'];
        
        $danhmuc=$_POST['danhmuc'];
        $soluong=$_POST['soluong'];
        $path='../images/products/';
        if($hinhanh=='')
        {
            $sql_update_sanpham="UPDATE tbl_sanpham SET sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$giasanpham',sp_khuyenmai='$giakhuyenmai',category_id='$danhmuc',sanpham_soluong='$soluong' WHERE sanpham_id='$id_sanpham_update' "; 
            $update_1=mysqli_query($con,$sql_update_sanpham);  
            
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
            $sql_update_sanpham="UPDATE tbl_sanpham set sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_image='$hinhanh',sanpham_gia='$giasanpham',sp_khuyenmai='$giakhuyenmai',category_id='$danhmuc',sanpham_soluong='$soluong' where sanpham_id='$id_sanpham_update' "; 
            $update_2=mysqli_query($con,$sql_update_sanpham); 
            
        }
        
        header('Location: dashboard.php?quanly=sanpham');  
    }

    
?>
    <div style="max-width: 95%;" class="container">
        <div style="margin-top: 10px;" class="row">
            <div class="col-md-3">
                <?php

                    if(isset($_GET['sua']))
                    {
                        $id_sua_sanpham=$_GET['sua'];
                        $sql_select_sua=mysqli_query($con,"SELECT * from tbl_sanpham where sanpham_id='$id_sua_sanpham'");
                        $row_sua_sanpham=mysqli_fetch_array($sql_select_sua);
                ?>
                <h4 style="text-align:center;font-size:30px">Sửa sản phẩm</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" value="<?php echo $row_sua_sanpham['sanpham_name']  ?>" class="form-control" name="tensanpham">
                    <input type="hidden" value="<?php echo $row_sua_sanpham['sanpham_id']  ?>" class="form-control" name="id_update">
                    
                    <label for="">Hình ảnh</label>
                    <input type="file" value="12" name="hinhanh" class="form-control">
                    <img style="margin-top: 4px;" src="../images/products/<?php echo $row_sua_sanpham['sanpham_image']?>" height="80" width="80"><br>
                    <label for="">Gía sản phẩm</label>
                    <input type="text" value="<?php echo $row_sua_sanpham['sanpham_gia']  ?>" class="form-control" name="giasanpham">
                    <label for="">Gía khuyến mãi</label>
                    <input type="text" value="<?php echo $row_sua_sanpham['sp_khuyenmai']  ?>" class="form-control" name="giakhuyenmai">
                    <label for="">Số lượng</label>
                    <input type="text" value="<?php echo $row_sua_sanpham['sanpham_soluong']  ?>" class="form-control" name="soluong">
                    <label for="">Chi tiết</label>
                    <textarea rows="8" name="chitiet" class="form-control" ><?php echo $row_sua_sanpham['sanpham_chitiet']  ?></textarea>
                    <label for="">Mô tả</label>
                    <textarea rows="8" name="mota" class="form-control" ><?php echo $row_sua_sanpham['sanpham_mota']  ?></textarea>
                    
                    
                    <label for="">Danh mục</label>
                    <select name="danhmuc" class="form-control">
                        <option value="">----Chọn danh mục sản phẩm-----</option>
                        <?php
                            $sql_select_danhmuc=mysqli_query($con,"SELECT * from tbl_category order by category_id");
                            while($row_select_danhmuc=mysqli_fetch_array($sql_select_danhmuc)){
                                if($row_select_danhmuc['category_id']==$row_sua_sanpham['category_id'])
                                {
                        ?>
                        <option selected value="<?php echo $row_select_danhmuc['category_id'] ?>"><?php echo $row_select_danhmuc['category_name'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option  value="<?php echo $row_select_danhmuc['category_id'] ?>"><?php echo $row_select_danhmuc['category_name'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select><br>
                    <center><input  type="submit" class="btn btn-success" name="suasanpham" value="Sửa sản phẩm"></center>
                </form>
                <?php
                    }
                    else
                    {
                ?>
                <h4 style="text-align: center;font-size:30px">Thêm sản phẩm</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                   
                    <input type="text" placeholder="Tên sản phẩm" class="form-control" name="tensanpham">
                    
                    <input type="text" placeholder="Số lượng" class="form-control" name="soluong">
                    
                    <textarea name="chitiet" class="form-control" placeholder="Chi tiết"></textarea>
                    
                    <textarea name="mota" class="form-control" placeholder="Mô tả"></textarea>
                    
                    <input type="file" placeholder="Thêm hình ảnh" name="hinhanh" class="form-control">
                    
                    <input type="text" placeholder="Giá sản phẩm" class="form-control" name="giasanpham">
                    
                    <input type="text" placeholder="Giá khuyến mãi" class="form-control" name="giakhuyenmai">
                    
                    <select name="danhmuc" class="form-control">
                        <option value="">----Chọn danh mục----</option>
                        <?php
                            $sql_select_danhmuc=mysqli_query($con,"SELECT * from tbl_category order by category_id desc");
                            while($row_select_danhmuc=mysqli_fetch_array($sql_select_danhmuc)){
                        ?>
                        <option value="<?php echo $row_select_danhmuc['category_id'] ?>"><?php echo $row_select_danhmuc['category_name'] ?></option>
                        <?php
                            }
                        ?>
                    </select><br>
                    <center><input  type="submit" class="btn btn-success" name="themsanpham" value="Thêm sản phẩm"></center>
                </form>
                <?php
                    }
                ?>
                
                
            </div>
            <div class="col-md-9">
                <h4 style="text-align:center;font-size:30px">Liệt kê danh mục</h4>
                <table style="text-align:center" class="table table-bordered align-middle ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên sản phẩm </th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá khuyến mãi</th>
                        <th>Danh mục</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    $sql_view=mysqli_query($con,"SELECT * from tbl_sanpham as sp,tbl_category as cate where sp.category_id=cate.category_id order by sp.category_id desc");
                    while($row_view=mysqli_fetch_array($sql_view)){
                        $i++;
                    ?>
                    <tr
                    <?php 
                            if(isset($_GET['sua'])){
                            if($_GET['sua']==$row_view['sanpham_id'])
                            {
                                
                                $a='style="background-color: antiquewhite;"';
                                echo $a;
                            } }
                        ?>
                    >
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_view['sanpham_name'] ?></td>
                        <td><img style="max-width: 154px; max-height:95px;" src="../images/products/<?php echo $row_view['sanpham_image'] ?>" alt="chưa load"> </td>
                        <td><?php echo $row_view['sanpham_soluong'] ?></td>
                        <td><?php echo number_format($row_view['sanpham_gia'])." $" ?></td>
                        <td><?php echo number_format($row_view['sp_khuyenmai'])." $" ?></td>
                        <td><?php echo $row_view['category_name'] ?></td>
                        <td>
                            <a class="btn btn-danger" role="button" href="?quanly=sanpham&xoa=<?php echo $row_view['sanpham_id'] ?>" >Xóa</a>
                            <a class="btn btn-primary" role="button" href="?quanly=sanpham&sua=<?php echo $row_view['sanpham_id'] ?>" >Sửa</a>
                        </td>

                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
