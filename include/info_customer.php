             <?php
                if(isset($_POST['id_cus_info']))
                {
                    include_once('../db/connect.php');
                    $khachhang_id=$_POST['id_cus_info'];
                    $cus_info=mysqli_query($con,"SELECT * From tbl_khachhang where khachhang_id= $khachhang_id ");
                    $row_cus=mysqli_fetch_array($cus_info);
                    echo "
                        <form>
                                <div class='form-group'>
                                
                                    <input type='text' class='form-control' id='name_cus' value=".$row_cus['name']." required>
                                    
                                </div>
                                <div class='form-group'>
                                    
                                    <input type='text' class='form-control' id='phone_cus' value=".$row_cus['phone'].">
                                </div>
                                
                                <div class='form-group'>
                                    
                                    <input type='text' class='form-control' id='address_cus' value=".$row_cus['address'].">
                                </div>
                                <div class='form-group'>
                                    
                                    <select class='form-control' id='pay_cus'>
                                    <option value='0' selected>Trưc tiếp</option>
                                    <option value='1'>Ví điện tử</option>
                                    </select>
                                </div>
                                <input type='button' id_customer=".$khachhang_id." class='btn btn-primary d-flex text-center justify-center capnhat_btn_cus' value='Cập nhật'>
                    </form>
                    ";
                
               

                }else{
                    echo "";
                }?>