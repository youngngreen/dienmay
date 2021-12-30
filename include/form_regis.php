<?php

	include_once('./db/connect.php');
	if(isset($_POST['dangky_form']))
	{
		
	$name=$_POST['uname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	
	$address=$_POST['address'];
	$password=md5($_POST['psw']);
    
	$sql_khachhang=mysqli_query($con,"INSERT INTO tbl_khachhang(name,phone,address,email,password) values ('$name','$phone','$address','$email','$password')");
	$sql_khachang_id=mysqli_query($con,"SELECT * from tbl_khachhang order by khachhang_id desc limit 1 ");
	$row_khachhang_id=mysqli_fetch_array($sql_khachang_id);
	$_SESSION["login_success"]=$name;
    $_SESSION["cusomer_id"]=$row_khachhang_id['khachhang_id'];
    echo "
        <script>
            location.reload();
        </script>
        ";
    }
?>


<button onclick="document.getElementById('id01').setAttribute('style','display:block;z-index:2')"
    style="width:auto; font-weight:600">Register</button>

<div id="id01" class="modal">

    <form class="modal-content animate" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <h3>Form đăng ký</h3>
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter phone" name="phone">

            <label for="email"><b>Email</b></label>
            <input class="email_form_input" style="border: 1px solid #ccc;" type="email" placeholder="Enter email"
                name="email" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter address" name="address" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>


            <button style="width: 100%;" name="dangky_form" type="submit" class="btn btn-success">Register</button>

        </div>


    </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>