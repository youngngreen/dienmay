<?php 
include_once('./db/connect.php');

$sl_item_minicart=mysqli_query($con,"SELECT COUNT(*) FROM tbl_giohang");


echo $sl_item_minicart;

?>