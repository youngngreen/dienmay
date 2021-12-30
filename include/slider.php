<div class="site-section bg-left-half">

    <div class="owl-carousel owl-2">
        <?php
		include_once('./db/connect.php');
				$i=1;
				$sql_slider=mysqli_query($con,"SELECT * from tbl_slider where slider_active='1' order by slider_id ");
				while($row_slider=mysqli_fetch_array($sql_slider)){
					
			?>
        <div class="media-29101">
            <a href="#"><img src="./images/slider/<?php echo $row_slider['slider_image'] ?>" alt="Image"
                    class="img-fluid"></a>

        </div>
        <?php
				}
			?>

    </div>

</div>