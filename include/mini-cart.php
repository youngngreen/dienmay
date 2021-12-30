<div class="notification_cart">
									
			<button id="cart_icon" class="btn w3view-cart" onclick="modal_open()" type="button" name="submit" value="">
				
			<i class="fas fa-cart-arrow-down"></i>
			
			</button>
</div>
<div  id="modal_open" class="wrapper1" >
		<div id="table" class="bg-white rounded">
				<span class="times_" onclick="close_modal()"><i class="fas fa-times"></i></span>
				<div class="d-md-flex align-items-md-center px-3 pt-3">
					<div class="d-flex flex-column">
						<div class="h4 font-weight-bold">Giỏ hàng</div>
						
					</div>
					
				</div>
				<hr>
				<div class="table-responsive">
					
					<table class="table">
						<thead>
							<tr>
								<th  class="text-uppercase">Tên sản phẩm</th>
								<th scope="col" class="text-uppercase">Số lượng</th>
								<th scope="col" class="text-uppercase">Giá ($)</th>
								<th scope="col" class="text-uppercase"></th>
							</tr>
						</thead>
						<tbody id="view_minicart">
							
							
						</tbody>
					</table>
					
					
				</div> 
				
		</div>
	</div>



 
    
    