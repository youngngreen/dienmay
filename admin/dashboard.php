<?php
    session_start();
?>
<?php
    
    if(!isset($_SESSION['dangnhap']))
    {
        header('Location: index.php' );
    }
?>
<?php
    if(isset($_GET['login']))
    {
        $dangxuat=$_GET['login'];

    }else
    {
        $dangxuat='';
    }
    if($dangxuat=='dangxuat')
    {
        unset($_SESSION['dangnhap']);
        header('Location: index.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="?quanly=donhang">Đơn hàng</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?quanly=danhmuc">Danh mục sản phẩm</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="?quanly=sanpham">Sản phẩm</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?quanly=khachhang">Khách hàng</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?quanly=tin">Danh mục tin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?quanly=baiviet">Bài viết</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?login=dangxuat">Đăng xuất</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <?php 
    if (isset($_GET['quanly']))
        { $temp = $_GET['quanly'];}
    else 
        {$temp = '';}
    if ($temp == 'donhang') { include('./donhang.php');}
    elseif ($temp == 'danhmuc') {include ('./danhmuc.php');}
    elseif ($temp == 'sanpham') {include ('./sanpham.php');}
    elseif ($temp == 'khachhang') {include ('./khachhang.php');}
    elseif ($temp == 'tin') {include ('./muctin.php');}
    elseif ($temp == 'baiviet') {include ('./baiviet.php');}
    else {include ('./donhang.php');}
    ?>
</body>
</html>