$(document).ready(function() {

	//button for scrolling to top

	$(".btn-up").css({
	    'display':'none',
	    'position': 'fixed',
	    'bottom': '0px',
	    'opacity': '0.5',
	    'z-index': '10'
	    
	});

	console.log($('btn-up').width());
	$(window).scroll(function(){
		var top = $(this).scrollTop();
		if(top > 200){
			$(".btn-up").fadeIn();
		}else{
			$(".btn-up").fadeOut();
		}
	});

	$(".btn-up").click(function(){
		$('body, html').animate({scrollTop: 0},'slow');
	});

	$(".btn-add").click(function(){
		var btn = $(this),
			id = $(this).attr('id');
		$.post('/add',{'id' : id}).done(function(data){
			btn.html('Товар в корзине').attr('disabled' , 'disabled').removeClass('btn-add');
			updateCartInformer();
		});
	});

	$(".btn-remove").click(function(){
		var id = $(this).attr('id');
		$.post('/remove',{'id' : id}).done(function(data){
			reload();
		});
	});

	$(".btn-search").click(function(){
		var query = $(".search-input").val();
		window.location = "/search/" + query;
	});

	$(".btn-order").click(function(){
		var requireCount = [];
		$(".cart-require").each(function(){
			$(this).val() == "" ? requireCount.push(1) : false;
		});

		if(requireCount.length == 0){
			$(".btn-order").html("Подождите").removeClass(".btn-order");
			var userData = {
				'method' : $(".cart-method").val(),
				'delivery' : $(".cart-delivery").val(),
				'name' : $(".cart-name").val(),
				'email' : $(".cart-email").val(),
				'phone' : $(".cart-phone").val(),
				'city' : $(".cart-city").val(),
				'comment' : $(".cart-comment").val()
			}
			var userDataJson = JSON.stringify(userData);
			$.post('/site/addorder',{'userData' : userDataJson}).done(function(data){
				if(data !== 'false'){
					window.location = data;
				}else{
					alert('Ошибка при оформлении заказа');
				}
			});
		}else{
			alert('Чтобы оформить заказ, необходимо указать телефон и email');
		}
	});

	$(".search-input").keyup(function(e){
		var query = $(this).val();
		if(e.keyCode == 13){
        	window.location = "/search/" + query;
    	}
	});

	function updateCartInformer(){
		$.post('/site/cartcount').done(function(res){
			if(res>0){
			$(".cartMenuItem > a").append("<span class='cartInformer'>"+res+"</span>");
			}
		});
	}

	function reload(){
		window.location = window.location;
	}

	updateCartInformer();

	// Mobile Filter
	$(".filter-category").change(function(data){
		window.location = $(this).val();
	});

	$(".filter-vendor").change(function(data){
		window.location = $(this).val();
	});
});

