<?php
			$sql_category='SELECT * FROM tbl_category ORDER BY category_id DESC';
			$fetch_category=mysqli_query($con,$sql_category);
		?>

	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
									
				<div class="dropdown">
					<button class="btn btn-primary">
					<?php
						if(isset($_GET['quanly']))
						{
							if($_GET['quanly']=='danhmuc' && isset($_GET['id']))
							{
								$id_danh_muc=$_GET['id'];
								
								$row_id_danh_muc=mysqli_query($con,"SELECT * FROM tbl_category where category_id=$id_danh_muc");
								$name_id_danh_muc=mysqli_fetch_array($row_id_danh_muc);
								echo $name_id_danh_muc['category_name'];
							}else{
								echo "Danh mục";
							}
							
						}else{
							echo "Danh mục";
						}
					?>
					</button>
					<div class="dropdown-content" style="z-index: 2;">
						<?php
						while($row_fetch_category=mysqli_fetch_array($fetch_category))
						{
						
						?>
					<a href="?quanly=danhmuc&id=<?php echo $row_fetch_category['category_id'] ?>"><?php echo $row_fetch_category['category_name'] ?></a>
					
					<?php
						}
					?>
					</div>
				</div>
				
				
				<button onclick="dropMenu()" style="max-width: 20%;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse menu_nav" id="navbarSupportedContent" >
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php
						$sql_category_danhmuc=mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
						while($row_category_danhmuc=mysqli_fetch_array($sql_category_danhmuc)){
						
						?>

						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id']?>" role="button" aria-haspopup="true" aria-expanded="false">
								<?php
								echo $row_category_danhmuc['category_name'];
								?>
							</a>
							
						</li>
						<?php
						}
						?>
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<div class="dropdown">
								<button class="btn btn-primary new_button">Tin tức</button>
								<div class="dropdown-content" style="z-index: 2;">
									<?php 
										$tintuc=mysqli_query($con,"SELECT * from tbl_danhmuctin");
										while($row_tintuc=mysqli_fetch_array($tintuc)){
									?>
									<a href="?quanly=tintuc&id_tin=<?php echo $row_tintuc['danhmuctin_id'] ?>"><?php echo $row_tintuc['tendanhmuc'] ?></a>
									
									<?php
									}?>
								</div>
							</div>
		
						
								
							

						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
