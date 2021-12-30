<?php
    include_once('../db/connect.php');
    if(isset($_POST['id']))
    {

        $id = $_POST['id'];
        $check_id=mysqli_query($con,"SELECT * FROM tbl_giohang where sanpham_id=$id ");
        $row_sp=mysqli_fetch_array($check_id);
        if(!$row_sp)
        {
         
        $sp_minicart=mysqli_query($con,"SELECT * FROM tbl_sanpham where sanpham_id=$id ");
        $row_sp=mysqli_fetch_array($sp_minicart);
        if($row_sp['sanpham_soluong']>0){
            $id_sp=$row_sp['sanpham_id'];
            $name_sp=$row_sp['sanpham_name'];
            $gia_sp=$row_sp['sp_khuyenmai'];
            $img_sp=$row_sp['sanpham_image'];
            $sp_insert=mysqli_query($con,"INSERT INTO tbl_giohang (tensanpham, sanpham_id, giasanpham,hinhanh,soluong)
            VALUES ('$name_sp','$id_sp','$gia_sp','$img_sp',1)");
        }
       
        }
        else{
            
            $sl_sp=$row_sp['soluong'];
            $check_sl_all=mysqli_query($con,"SELECT * FROM tbl_sanpham where sanpham_id=$id ");
            $row_check_sl_all=mysqli_fetch_array($check_sl_all);
            if($sl_sp<$row_check_sl_all['sanpham_soluong'])
            $sl_sp++;
            $update_sp=mysqli_query($con,"UPDATE tbl_giohang
            SET soluong=$sl_sp
            WHERE sanpham_id=$id ");
        }
    }
?>