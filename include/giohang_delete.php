<?php
include_once('../db/connect.php');
    if(isset($_POST['id_giohang_de']))
    {
        $id_giohang_de=$_POST['id_giohang_de'];
        $del_giohang_=mysqli_query($con,"DELETE FROM tbl_giohang
        WHERE sanpham_id = $id_giohang_de");
    }
?>