$(document).ready(function() {

	$(".btn-add").click(function(){
		var btn = $(this);
		var id = $(this).attr('id');
		$.post('/add',{'id' : id}).done(function(data){
			btn.html('Товар в корзине');
			btn.attr('disabled' , 'disabled');
			btn.removeClass('btn-add');
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
