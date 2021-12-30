<?php
include_once('../db/connect.php');
    if(isset($_POST['id_sp_de']))
    {
        $id_sp_de=$_POST['id_sp_de'];
        $del_sp_mini=mysqli_query($con,"DELETE FROM tbl_giohang
        WHERE sanpham_id = $id_sp_de");
    }
?>