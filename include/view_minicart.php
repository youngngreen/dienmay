<?php
			session_start();
           include_once('../db/connect.php');
                        if(isset($_POST['test']))
                        {
                        
                            $sql_minicart=mysqli_query($con,"SELECT * from tbl_giohang as gh, tbl_sanpham as sp where gh.sanpham_id=sp.sanpham_id ");
                            $i=0;
                            $sum=0;
                            while($row_minicart=mysqli_fetch_array($sql_minicart)){
                                
                        echo "
                        <tr>
							<td class='item'>
								<div class='d-flex'>
									
									<div class='pl-2' style='font-family:arial'>".$row_minicart['tensanpham']. "</div>
										
									</div>
							</td>
							<td ><input id='change_ql' style='width: 100%;' id_sp=".$row_minicart['sanpham_id']." min='1' max=".$row_minicart['sanpham_soluong']." value=".$row_minicart['soluong']." type='number' value=".$row_minicart['soluong']."></td>
							<td class='d-flex flex-column'>". $row_minicart['soluong']*$row_minicart['giasanpham']."$
							</td>
							<td class='delete_item' >
								<input type='button' id_delete=".$row_minicart['sanpham_id']." class='btn btn-danger delete_minicart_item' value='Delete'>
							</td>
						
						</tr>
                        ";
                                
                                $sum=$sum+$row_minicart['soluong']*$row_minicart['giasanpham'];
                    }   echo "
                        <tr>
							<td class='item'>
								<div class='d-flex'>
									
									<div class='pl-2' style='font-family:arial'>Tổng</div>
										
									</div>
							</td>
							<td><input style='width: 40px;' type='hidden' value=''></td>
							<td class='d-flex flex-column'>".$sum."$
							</td>
							<td class='thanh_toan_minicart' >
							
							<input onclick='closeCart()' id='check_login_payment' type='button' ";
							if(isset($_SESSION['login_success'])){
								echo "id_checkLogin=".$_SESSION['cusomer_id'];}
							else{echo "id_checkLogin=0";}
							echo" name='themgiohang' class='btn btn-success minicart_btn_pay' value='Thanh toán'>
							
							</td>
						
						</tr>";
						
                            }?>