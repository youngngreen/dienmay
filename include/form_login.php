<?php
	include_once('./db/connect.php');
    if(isset($_POST['login_form']))
    {
        $taikhoan=$_POST['uname_login'];
        $matkhau=md5($_POST['psw_login']);
        $sql_select_admin=mysqli_query($con,"SELECT * from tbl_khachhang where email='$taikhoan' AND password = '$matkhau' limit 1");
        $row_dangnhap=mysqli_fetch_array($sql_select_admin);
        $count=mysqli_num_rows($sql_select_admin);  
        if($row_dangnhap){
            $_SESSION["login_success"]=$row_dangnhap['name'];
            $_SESSION["cusomer_id"]=$row_dangnhap['khachhang_id'];
            echo "
        <script>
            location.reload();
        </script>
        ";
        }else{
            echo "<script>alert('Mật khẩu hoặc tên đăng nhập không dúng')</script>";
        }
        
    }
?>
<style>


/* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
    background: none;
    color: #999999;
    
    border: none;
    cursor: pointer;
    width: 100%;
    }

    button:hover {
    opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
    }

    img.avatar {
    width: 40%;
    border-radius: 50%;
    }

    .container {
    padding: 16px;
    }

    span.psw {
    float: right;
    padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    }
    .modal-content.animate {
        width: 27%;
    }
    /* Modal Content/Box */
    .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: red;
    cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
    }
    
    @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
    }
</style>



<button onclick="document.getElementById('id02').setAttribute('style','display:block;z-index:2')" style="width:auto;font-weight:600;z-index:2">Login</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./images/img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname_login"><b>Email</b></label>
      <input class="email_form_input" type="email" style="border: 1px solid #ccc;" placeholder="Enter mail" name="uname_login" required>

      <label for="psw_login"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw_login" required>
        
      <button style="width: 100%;"  name="login_form" type="submit" class="btn btn-success">Login</button>
      
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
function reload(){
    location.reload();
};
</script>




