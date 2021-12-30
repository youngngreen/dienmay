<?php
    if(isset($_POST['name_cus']))
    {
        include('../db/connect.php');
        $id_customer_=$_POST['id_customer_'];
        $name_cus=$_POST['name_cus'];
        $phone_cus=$_POST['phone_cus'];
        $address_cus=$_POST['address_cus'];
        $pay_cus=$_POST['pay_cus'];
        mysqli_query($con,"UPDATE tbl_khachhang SET name='$name_cus',phone='$phone_cus',address='$address_cus',giaohang='$pay_cus' where khachhang_id='$id_customer_' ");

    }
?>