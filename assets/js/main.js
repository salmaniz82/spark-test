$(function() {

	
	console.log('JQuery is working!');


	var Cart = {

		items : {},

		init : function(){

			this.add();
			this.render();


			
		},
		add : function(){

			$('a#add-to-cart').on('click', function(e) {
				e.preventDefault();
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'POST',
					success : function(response){

						Cart.items = response;
						Cart.render();
						
					},
					error : function(xhr, ajaxOptions, thrownError){

						
					}
				});

			});

		},
		clear : function(){

			$('a#clear-cart-button').on('click', function(e) {
				e.preventDefault();
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'GET',
					success : function(response){


						Cart.render();
						
					},
					error : function(xhr, ajaxOptions, thrownError){
					}
				});

			});

		},

		more : function(){
			console.log('I will do increment');
		},

		less : function(){
			console.log('I will do decrease');
		},

		render : function()
		{
			
			elem = $('#header-cart');
			var count = Object.keys(Cart.items).length;

			elem.find('span.count').text(count);

			if(count < 1)
			{
				elem.addClass('hide');
			}
			else {
				if(elem.hasClass('hide'))
				{
					elem.removeClass('hide');
				}
			}


		}

		

		


	};


	Cart.init();
	Cart.render();




});