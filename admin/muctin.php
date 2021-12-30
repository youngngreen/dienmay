<?php
include_once('../db/connect.php');
?>
<?php
    if(isset($_POST['themdanhmuctin']))
    {
        if(!empty($_POST['danhmuctin']))
        {$tendanhmuctin=$_POST['danhmuctin'];
        $sql_insert_muctin=mysqli_query($con,"INSERT INTO tbl_danhmuctin(tendanhmuc) values ('$tendanhmuctin')");}
    }
    if(isset($_GET['xoa']))
    {   
        $xoa_danhmuctin_id=$_GET['xoa'];
        $sql_delete_danhmuctin=mysqli_query($con,"DELETE from tbl_danhmuctin where danhmuctin_id='$xoa_danhmuctin_id' ");
        header('Location: dashboard.php?quanly=tin');
    }
    elseif(isset($_POST['suadanhmuctin']))
    {
        $id_sua_danhmuctin=$_GET['sua'];
        $tendanhmuctin=$_POST['danhmuctin'];
        $sql_insert_sua=mysqli_query($con,"UPDATE tbl_danhmuctin set tendanhmuc='$tendanhmuctin' where danhmuctin_id='$id_sua_danhmuctin'");
        header('Location: dashboard.php?quanly=tin');
    }
?>
    <div style="max-width: 95%;" class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                 if (isset($_GET['sua'])){
                ?>
                <center><h4 style="font-size: 30px;">Sửa danh mục</h4></center>
                <label for="">Tên danh mục tin</label>
                <form action="" method="post">
                    
                    <input type="text" value="<?php
                    $name_danhmuctin=$_GET['sua'];
                    $sql_name_sua_danhmuctin=mysqli_query($con,"SELECT * from tbl_danhmuctin where danhmuctin_id='$name_danhmuctin'"); 
                    $row_name_sua_danhmuctin=mysqli_fetch_array($sql_name_sua_danhmuctin);
                    echo $row_name_sua_danhmuctin['tendanhmuc'];
                    ?>" class="form-control" name="danhmuctin"><br>
                    <center><input type="submit" value="Sửa danh mục tin" name="suadanhmuctin" style="margin-top: 10px;" class="btn btn-success"></center>

                </form>
                
                <?php
                 }
                 
                 else{
                ?>
                <center><h4 style="font-size: 30px;">Thêm danh mục</h4></center>
                <form action="" method="post">
                    <input type="text" placeholder="Tên danh mục tin" class="form-control" name="danhmuctin" value=''>
                    <center><input type="submit" value="Thêm danh mục tin" name="themdanhmuctin" style="margin-top: 10px;" class="btn btn-success"></center>

                </form>
                <?php
                 }
                 
                ?>
                
            </div>
            <div class="col-md-8">
                <center> <h4 style="font-size: 30px;">Liệt kê danh mục tin</h4> </center>
                <table style="text-align:center" class="table table-bordered align-middle">
                    <tr>
                        <th>Thứ tự </th>
                        <th>Tên danh mục tin </th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    $sql_select_danhmuctin=mysqli_query($con,"SELECT * from tbl_danhmuctin order by danhmuctin_id desc");
                    while($row_select_danhmuctin=mysqli_fetch_array($sql_select_danhmuctin)){
                        $i++;
                    ?>
                    <tr <?php 
                            if(isset($_GET['sua'])){
                            if($_GET['sua']==$row_select_danhmuctin['danhmuctin_id'])
                            {
                                
                                $a='style="background-color: antiquewhite;"';
                                echo $a;
                            } }
                        ?>>
                        
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_select_danhmuctin['tendanhmuc'] ?></td>
                        <td >
                            <a class="btn btn-danger" role="button" href="?quanly=tin&xoa=<?php echo $row_select_danhmuctin['danhmuctin_id'] ?>" >Xoá</a>
                            <a class="btn btn-primary" role="button" href="?quanly=tin&sua=<?php echo $row_select_danhmuctin['danhmuctin_id'] ?>" >Sửa</a>

                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
