<?php
include_once('../db/connect.php');
?>
<?php
    if(isset($_POST['themdanhmuc']) )
    {
        if(!empty($_POST['danhmuc']))
        {$tendanhmuc=$_POST['danhmuc'];
        $sql_insert=mysqli_query($con,"INSERT INTO tbl_category(category_name) values ('$tendanhmuc')");} 
    }
    if(isset($_GET['xoa']))
    {   
        $xoa_danhmuc_id=$_GET['xoa'];
        $sql_delete_danhmuc=mysqli_query($con,"DELETE from tbl_category where category_id='$xoa_danhmuc_id' ");
        header('Location: dashboard.php?quanly=danhmuc');
    }
    elseif(isset($_POST['suadanhmuc']))
    {
        $id_sua=$_GET['sua'];
        $tendanhmuc=$_POST['danhmuc'];
        $sql_insert_sua=mysqli_query($con,"UPDATE tbl_category set category_name='$tendanhmuc' where category_id='$id_sua'");
        header('Location: dashboard.php?quanly=danhmuc');
    }
?>
    <div style="max-width: 95%;" class="container">
        <div style="margin-top: 10px;" class="row">
            <div class="col-md-4">
                <?php
                 if (isset($_GET['sua'])){
                ?>
               <h4 style="font-size: 30px;text-align:center">Sửa danh mục</h4>
                <label for="">Tên danh mục</label>
                <form action="" method="post">
                    
                    <input type="text" value="<?php
                    $name_sua=$_GET['sua'];
                    $sql_name_sua=mysqli_query($con,"SELECT * from tbl_category where category_id='$name_sua'"); 
                    $row_name_sua=mysqli_fetch_array($sql_name_sua);
                    echo $row_name_sua['category_name'];
                    ?>" class="form-control" name="danhmuc">
                   <center><input type="submit" value="Sửa danh mục" name="suadanhmuc" style="margin-top: 10px;" class="btn btn-success"></center> 

                </form>
                
                <?php
                 }
                 
                 else{
                ?>
                <h4 style="font-size: 30px;text-align:center">Thêm danh mục</h4>
                
                <form action="" method="post">
                    <input type="text" placeholder="Tên danh mục" class="form-control" name="danhmuc" value =''>
                  <center><input type="submit" value="Thêm danh mục" name="themdanhmuc" style="margin-top: 10px;" class="btn btn-success"></center>  

                </form>
                <?php
                 }
                 
                ?>
                
            </div>
            <div class="col-md-8">
                <h4 style="font-size: 30px;text-align:center">Liệt kê danh mục</h4>
                <table style="text-align: center;" class="table table-bordered align-middle ">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Tên danh mục </th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    $sql_select_danhmuc=mysqli_query($con,"SELECT * from tbl_category order by category_id desc");
                    while($row_select_danhmuc=mysqli_fetch_array($sql_select_danhmuc)){
                        $i++;
                    ?>
                    <tr <?php 
                            if(isset($_GET['sua'])){
                            if($_GET['sua']==$row_select_danhmuc['category_id'])
                            {
                                
                                $a='style="background-color: antiquewhite;"';
                                echo $a;
                            } }
                        ?>>
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_select_danhmuc['category_name'] ?></td>
                        <td >
                            <a class="btn btn-danger" role="button" href="?quanly=danhmuc&xoa=<?php echo $row_select_danhmuc['category_id'] ?>" >Xoá</a>
                            <a class="btn btn-primary" role="button" href="?quanly=danhmuc&sua=<?php echo $row_select_danhmuc['category_id'] ?>" >Sửa</a>

                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
