$(document).ready(function(){
    showData();
    showDataGioHang();
    customerShow()
    function showData(){
        $.ajax({
            url:'include/view_minicart.php',
            type:'POST',
            data:{
                test:1
            },
            success:function(res){
                
                $('#view_minicart').html(res);
                
            }
        })
    }
    
    
    
        $(document).on('click','#themmon_ngon',function(){
        var id= $(this).attr('id_mon');
        var img=$('#img_mini').val();
        var name=$('#sp_id').val();
        var giakm=$('#gia_km').val();
        $.ajax({
            url:'include/insert_minicart.php',
            type:'POST',
            data:{
                id:id
            },
            success:function(res){
                
                showData();
                
            }
        })
})	
$(document).on('click','#search_them',function(){
    var id= $(this).attr('id_search');
    
    $.ajax({
        url:'include/insert_minicart.php',
        type:'POST',
        data:{
            id:id
        },
        success:function(res){
            
            showData();
            
        }
    })
})
$(document).on('input','#change_ql',function(){
    var id_sp=$(this).attr('id_sp');
    var sl=$(this).val();
    $.ajax({
            url:'include/update_sl.php',
            type:'POST',
            data:{
                id_sp:id_sp,
                sl:sl
            },
            success:function(res){
                
                showData();
                
            }
        })
})
$(document).on('click','.delete_minicart_item',function(){
    var id_sp_de=$(this).attr('id_delete');
    $.ajax({
            url:'include/delete_minicart.php',
            type:'POST',
            data:{
                id_sp_de:id_sp_de
            },
            success:function(res){
                
                showData();
                
            }
        })
    })
    function customerShow(){
        var id_cuss=$('#choose_id_cus').val();
        $.ajax({
            url:'include/customer_show.php',
            type:'POST',
            data:{
                tes213:1,
                id_cuss:id_cuss
            },
            success:function(res){
                
                $('#fo_customer_id_show').html(res);
                
            }
        })
    };
        
 
    $(document).on('click','.info_cus',function(){
    var id_cus_info=$(this).attr('id_cus');
    $.ajax({
        url:'include/info_customer.php',
        type:'POST',
        data:{
            id_cus_info:id_cus_info
        },
        success:function(res){
            
            $('#fo_customer_id').html(res);
            
        }
    })
    
    })
    $(document).on('click','.capnhat_btn_cus',function(){
    var id_customer_=$(this).attr('id_customer');
    var name_cus=$('#name_cus').val();
    var phone_cus=$('#phone_cus').val();
    var address_cus=$('#address_cus').val();
    var pay_cus=$('#pay_cus').val();
    $.ajax({
        url:'include/datacus_update.php',
        type:'POST',
        data:{
            id_customer_:id_customer_,
            name_cus:name_cus,
            phone_cus:phone_cus,
            address_cus:address_cus,
            pay_cus:pay_cus
        },
        success:function(res){
            
            customerShow();
            $.ajax({
                url:'include/info_customer.php',
                type:'POST',
                data:{
            
                },success:function(res){
                    $('#fo_customer_id').html(res);
                }
            })
            
            }
    })
    
})
		function showDataGioHang(){
			$.ajax({
				url:'include/giohang_show.php',
				type:'POST',
				data:{
					test1:1
				},
				success:function(res){

					$('#cart_id').html(res);
					
				
				
				}
			})
		}
		$(document).on('input','#soluong_item_giohang',function(){
		var id_giohang=$(this).attr('id_slgh');
		var sl_gh=$(this).val();
		$.ajax({
				url:'include/giohang_sl.php',
				type:'POST',
				data:{
					id_giohang:id_giohang,
					sl_gh:sl_gh
				},
				success:function(res){
					
					showDataGioHang();
					
				}
			})
	})
	$(document).on('click','.xoa_item_giohang',function(){
		var id_giohang_de=$(this).attr('id_xoa');
		$.ajax({
				url:'include/giohang_delete.php',
				type:'POST',
				data:{
					id_giohang_de:id_giohang_de
				},
				success:function(res){
					
					showDataGioHang();
					
				}
			})
	})
    $(document).on('click','.show_donhang',function(){
		var id_donhang_de=$(this).attr('id_donhang1');
		var id_khachhang_de=$('#id_ma_khach_hang').val();

        
        $.ajax({
            url:'include/donhang_show.php',
            type:'POST',
            data:{
                id_donhang_de:id_donhang_de,
                id_khachhang_de:id_khachhang_de
            },
            success:function(res){
                $('#donhang_id_chitiet').html(res);
                
                
            }
        })
	})
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    
        
});

function dropMenu(){
    if(document.getElementsByClassName('menu_nav')[0].getAttribute("style")==null ||document.getElementsByClassName('menu_nav')[0].getAttribute("style")=="display:none")
   {document.getElementsByClassName('menu_nav')[0].setAttribute("style","display:block");}
else{
   document.getElementsByClassName('menu_nav')[0].setAttribute("style","display:none");

}
}

function topBarBtn(){
    if(document.getElementsByClassName('btn_top_bar')[0].getAttribute("style")==null ||document.getElementsByClassName('btn_top_bar')[0].getAttribute("style")=="display:none")
   {
       
       document.getElementsByClassName('btn_top_bar')[0].setAttribute("style","display:block");
       if(document.getElementsByClassName('user_name')[0])
        document.getElementsByClassName('user_name')[0].classList.add('max-width');
        if(document.getElementsByClassName('app_')[0])
        document.getElementsByClassName('app_')[0].classList.add('max-width');
        if(document.getElementsByClassName('connect_')[0])
        document.getElementsByClassName('connect_')[0].classList.add('max-width');
        if(document.getElementsByClassName('contact_')[0])
        document.getElementsByClassName('contact_')[0].classList.add('max-width');
        if(document.getElementsByClassName('login_')[0])
        document.getElementsByClassName('login_')[0].classList.add('max-width');
        if(document.getElementsByClassName('regis_')[0])
        document.getElementsByClassName('regis_')[0].classList.add('max-width');
        if(document.getElementsByClassName('donhang_view_')[0])
        document.getElementsByClassName('donhang_view_')[0].classList.add('max-width');
        if(document.getElementsByClassName('log_out')[0])
        document.getElementsByClassName('log_out')[0].classList.add('max-width');




}
else{
   document.getElementsByClassName('btn_top_bar')[0].setAttribute("style","display:none");


}
}



    function minicart(){
        document.getElementById('test').setAttribute("style","display:block")
    }
    function modal_open(){
        document.getElementById('cart_icon').setAttribute("style","display:none");
        document.getElementById('modal_open').setAttribute("style","z-index:2;display:block;");

    }
    function openLoginForm(){
        document.getElementById('id01')[0].setAttribute("style","display:block");
    }
    function close_modal(){

        
        document.getElementById('cart_icon').setAttribute("style","display:block");

        document.getElementById('modal_open').setAttribute("style","display:none");
    }
    function closeCart(){
        if(document.getElementById('check_login_payment').getAttribute('id_checklogin')==0)
        {
            
            
            alert("Đăng nhập trước khi thanh toán");
            document.getElementById('cart_icon').setAttribute("style","display:block");
            document.getElementById('modal_open').setAttribute("style","display:none");
        }
        else{
            setTimeout(window.location="http://localhost:8080/web/index.php?quanly=giohang", 10000)
            
        }
    }
    function checkPayment(a,b){
        if(a==0)
        {alert("Hãy chọn thêm đơn hàng");
        return false;
        }
        else if(window.confirm("Bạn sẽ thanh toán đơn hàng này?")==false)
        {
            return false;
        }else{
            alert ("Thanh toán thànhh công !!" ); 
            
            return  true;
            
        }
    }
    
    
    