$(document).ready(function(){
	$("#ex2").slider({}).on('slideStop',function(data){
		
		urlData = {
			'price' : data.value,
			'vendor' : $(".vendor").attr('data-vendorid'),
			'url' : $(".category").attr('data-url')
		}

		urlDataJson = JSON.stringify(urlData);
		$.post('/site/createurl',{'data' : urlDataJson}).done(function(res){
			window.location = res;
		});
	});
});