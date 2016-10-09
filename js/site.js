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
