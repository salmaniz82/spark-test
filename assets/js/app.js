angular.module('todoSPA', ['ui.router']);


angular.module('todoSPA').config(function($stateProvider, $urlRouterProvider, $locationProvider){

    
    $locationProvider.hashPrefix('');
    
    


    $urlRouterProvider.otherwise('/');

    

    $stateProvider

    .state('todos', {

        url: '/',
        templateUrl: '/pages/partials/todos.html',
        controller : 'todoController'

    })


    .state('books', {
        url: '/books',
        templateUrl: '/pages/partials/books.html',
        controller : 'booksController'
    })

    .state('cars', {
        url: '/cars',
        templateUrl: '/pages/partials/cars.html',
        controller : 'carsController'
    })

    .state('phones', {
        url: '/phones',
        templateUrl: '/pages/partials/phones.html',
        controller : 'phonesController'
    });


});


angular.module('todoSPA').controller('todoController', function($scope, $http){




	$scope.message = 'TODO SPA';

	$scope.todos;


    $scope.fruits = ['lemon'];

	
	$http.get("/todospa/listapi")
    .then(function(response) {
	     $scope.todos =  response.data;   
    });

    changeStatus = function()
    {
    	console.log('hello say');
    }





    $scope.addTodo = function(formdata)
    {
        

     
        formdata.user_id = '1';
        formdata.date_created = (new Date()).toISOString().substring(0, 10);
        formdata.is_complited = '0';

        console.log('add todo updated function');

     /*
        $http.post("/todospa/add", formdata)
        .then(function(response) {
             
             console.log(response.data);
             formdata.todo = '';
             if(response.data.status == 'Succeess')
             {
                   $http.get("/todospa/listapi")
                .then(function(response) {
                    $scope.todos =  response.data;   
                });

             }

        });
        */

        // $scope.data = formdata;


        $http({
            method: 'POST',
            url: '/todospa/add',
            data: formdata

        }).then(function(response){

           

            if(response.data.status == 'Succeess')
             {
                   $http.get("/todospa/listapi")
                .then(function(response) {
                    $scope.todos =  response.data;
                    formdata.todo = '';  
                });

             }
             

             console.log(response.data);

        });
    


        
    }



});


angular.module('todoSPA').controller('booksController', function($scope, $http){

    $scope.books;


    $http.get("/bookapi")
        
        .then(function(response) {
        $scope.books =  response.data;

    });




});


angular.module('todoSPA').controller('carsController', function($scope, $http){

    $scope.message = 'Message from Controller for Cars Page';

    /*

    $http.post('/parseheaders', {}).then(function(response) {

        console.log(response.data);

    });

    */


    $http({
        method: 'POST',
        url: '/parseheaders',
        data: "message=" + $scope.message,
        
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}

    }).then(function(response){

        console.log(response.data);

    });
    


});


angular.module('todoSPA').controller('phonesController', function($scope){

    $scope.message = 'Message from Controller for Phone Page';

});

