                <?php
                include('../db/connect.php');
                    if(isset($_POST['tes213']))
                    {

                        $id_ct=$_POST['id_cuss'];
                        
;                        $cus=mysqli_query($con,"SELECT * From tbl_khachhang where khachhang_id=$id_ct");
                        $row_cus=mysqli_fetch_array($cus);
                        echo "
                            <h5 class='card-title'>Thông tin khách hàng</h5>
							<h6 class='card-subtitle mt-1 text-muted'>Họ và tên</h6>
							<p class='card-text'>".$row_cus['name']."</p>
							<h6 class='card-subtitle mt-1 text-muted'>Số điện thoại</h6>
							<p class='card-text'>".$row_cus['phone']."</p>
							<h6 class='card-subtitle mt-1 text-muted'>Địa chỉ</h6>
							<p class='card-text'>".$row_cus['address']."</p>
							<h6 class='card-subtitle mt-1 text-muted'>Hình thức thanh toán</h6>
							<p class='card-text'>";if($row_cus['giaohang']==0){echo "Thanh toán trực tiếp";}else{echo "Thanh toán qua ví điện tử";};echo "</p>
							<input class='btn btn-success info_cus' id='test_btn' id_cus=".$id_ct." type='button' value='Chỉnh sửa'>
                        
                        
                        ";
                    }
                ?>
                            
