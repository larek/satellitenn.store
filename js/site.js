$(document).ready(function() {

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
			var userData = {
				'name' : $(".cart-name").val(),
				'contact' : $(".cart-contact").val()
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
			alert('Чтобы оформить заказ, необходимо указать имя и контактные данные');
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
});
