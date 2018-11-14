$(function() {

	
	console.log('JQuery is working!');
	var addToCartBtn = $('a#add-to-cart');
	var clearCartBtn = $('a#clear-cart-button');
	var elem = $('#header-cart');
	var cartIndicator = $('span.nav-cart-count');






	$('a#add-to-cart').on('click', function(e) {
				e.preventDefault();
				var url = $(this).attr('href');

				cartIndicator.removeClass('bump');


				$.ajax({
					url : url,
					method : 'POST',
					success : function(response){

						cartIndicator.text(response.total);

						cartIndicator.addClass('bump');


						
					},
					error : function(xhr, ajaxOptions, thrownError){

					
					}
				});
	});


	$("a#clear-cart-button").on('click', function(event) {

		event.preventDefault();

		cartIndicator.removeClass('bump');


		var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'GET',
					success : function(response){

						cartIndicator.text(response.total);

						cartIndicator.removeClass('bump');
						
					},
					error : function(response, xhr, ajaxOptions, thrownError){

						cartIndicator.text(response.total);
						
					}
				});



	});



	function showCartItems(url)
	{
			cartIndicator.removeClass('bump');

			$.ajax({
					url : url,
					method : 'GET',
					success : function(response){
						cartIndicator.text(response.total);
						console.log(response.total);					

						cartIndicator.removeClass('bump');
						
					},

					error : function(xhr, ajaxOptions, thrownError){
					
					}
				});

			
	}


	// on load
	// showCartItems('/cart');


	$(window).on('load', function() {

		
		showCartItems('/cart');

	});



	

});
