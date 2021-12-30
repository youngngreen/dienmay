<?php
                                if(isset($_POST['id_donhang_de']))
                                {
                                    include_once('../db/connect.php');
                                $i=0;
                                $id_khachhang=$_POST['id_khachhang_de'];
                                $magiaodich_khachhang=$_POST['id_donhang_de'];
                                $sql_select_giaodich=mysqli_query($con,"SELECT * from tbl_donhang as dh,tbl_sanpham as sp where sp.sanpham_id=dh.sanpham_id and dh.khachhang_id='$id_khachhang' and dh.mahang='$magiaodich_khachhang' order by dh.donhang_id desc");
                                while($row_select_giaodich=mysqli_fetch_array($sql_select_giaodich)){
                                    $i++;

                                
                               echo "
                               <tr>
                               <td>".$i."</td>
                               <td>".$row_select_giaodich['mahang']."</td>
                               <td>".$row_select_giaodich['sanpham_name']."</td>
                               <td>".$row_select_giaodich['soluong']."</td>

                               <td>".$row_select_giaodich['ngaythang']."</td>
                               </tr>
                               ";
                                    
                                   
                                
                                
                                }}
                                ?>