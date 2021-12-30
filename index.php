<?php
	session_start();
	include_once('db/connect.php');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>web điện máy</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <script src="./js/owl.carousel.min.js"></script>
	
</head>

<body>
    <?php
	
	include_once('include/topbar.php');
	include_once('include/menu.php');
	if(isset($_GET['quanly']))
	{
		$tam=$_GET['quanly'];
	}
	else{
		
		$tam='';
	}

	include_once('include/slider.php');
	if($tam=='danhmuc'){
		include_once('include/danhmuc.php');
	}elseif($tam=='chitietsp'){
		include_once('include/chitietsp.php');
	}elseif($tam=='giohang'){
		include_once('include/giohang.php');
	}elseif($tam=='timkiem')
	{
		include_once('include/timkiem.php');
	}
	elseif($tam=='tintuc')
	{
		include_once('include/tintuc.php');
	}
	elseif($tam=='chitiettin')
	{
		include_once('include/chitiettin.php');

	}elseif($tam=='xemdonhang')
	{
		include_once('include/xemdonhang.php');
	}elseif($tam=='lienhe')
	{
		include_once('include/contact.php');
	}
	else
	{
		include_once('include/home.php');
	}
	include_once('include/footer.php');
	
	?>


</body>

</html>