$(document).ready(function() {


	$(".btn-add").click(function(){
		var id = $(this).attr('id');
		console.log(id);
		$.post('/add',{'id' : id}).done(function(data){
			console.log(data);
		});
	});
});
