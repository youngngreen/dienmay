<?php
session_start();
include('../db/connect.php');
?>
<?php
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    if ($matkhau == '' || $taikhoan == '') {
        echo '<p>Xin nhập đủ<p>';
    } else {
        $sql_select_admin = mysqli_query($con, "SELECT * from tbl_admin where email='$taikhoan' AND password = '$matkhau' limit 1");
        $row_dangnhap = mysqli_fetch_array($sql_select_admin);
        $count = mysqli_num_rows($sql_select_admin);
        if ($count > 0) {
            $_SESSION["dangnhap"] = $row_dangnhap['admin_name'];

            $_SESSION["admin_id"] = $row_dangnhap['admin_id'];
            header('Location:  dashboard.php');
        } else {
            echo "Tài khoản mật khẩu sai";
        }
    }
}
?>
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .text-center{
            background-color: white;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="../css/backend/index.css">
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="#" method="post">
            <div class="img_logo">
                <img class="mb-4" src="../images/logo1_.png" alt="" width="100%">
            </div>

            <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

            <div class="form-floating">
                
                <input type="email" class="form-control" id="floatingInput" name="taikhoan" placeholder="name@example.com" required>

            </div>
            <div class="form-floating">
                
                <input type="password" class="form-control" id="floatingPassword" name="matkhau" placeholder="Mật khẩu" required>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit" name="dangnhap">Đăng nhập</button>
            <p class="text-muted mt-2" id="loi_dang_nhap" style="color:red">&nbsp</p>
            <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
        </form>
    </main>
</body>

</html>