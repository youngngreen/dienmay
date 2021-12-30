<?php
        include_once('../db/connect.php');
        if(isset($_POST['id_sp']))
        $id_sp=$_POST['id_sp'];
        $sl=$_POST['sl'];
        $update_sl=mysqli_query($con,"UPDATE tbl_giohang
        SET soluong=$sl
        WHERE sanpham_id=$id_sp");
?>