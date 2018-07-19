$(function() {

	
	console.log('JQuery is working!');


	var Cart = {

		init : function(){

			this.add();
			this.clear();

		},
		add : function(){

			$('a#add-to-cart').on('click', function(e) {
				e.preventDefault();
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					method : 'POST',
					success : function(response){
						console.log('I am success function');
					},
					error : function(xhr, ajaxOptions, thrownError){

						console.log('I am the error functions');
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
						console.log('I am success function');
					},
					error : function(xhr, ajaxOptions, thrownError){

						console.log('I am the error functions');
					}
				});

			});


			
		},

		more : function(){
			console.log('I will do increment');
		},

		less : function(){
			console.log('I will do decrease');
		}


	};


	Cart.init();




});