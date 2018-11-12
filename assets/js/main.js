$(function() {

	
	console.log('JQuery is working!');
	var addToCartBtn = $('a#add-to-cart');
	var clearCartBtn = $('a#clear-cart-button');
	var elem = $('#header-cart');
	var cartIndicator = $('span.count');






	$('a#add-to-cart').on('click', function(e) {
				e.preventDefault();
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'POST',
					success : function(response){

						cartIndicator.text(response.total);
						
					},
					error : function(xhr, ajaxOptions, thrownError){

					
					}
				});
	});


	$("a#clear-cart-button").on('click', function(event) {

		event.preventDefault();


		var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'GET',
					success : function(response){

						cartIndicator.text(response.total);
						
					},
					error : function(response, xhr, ajaxOptions, thrownError){

						cartIndicator.text(response.total);
						
					}
				});



	});



	function showCartItems(url)
	{
			$.ajax({
					url : url,
					method : 'GET',
					success : function(response){
						cartIndicator.text(response.total);
						console.log(response.total);					
						
					},

					error : function(xhr, ajaxOptions, thrownError){
					
					}
				});

			console.log('I ran');
	}


	// on load
	// showCartItems('/cart');


	$(window).on('load', function() {

		console.log('on load is caleed');
		showCartItems('/cart');

	});



	

});