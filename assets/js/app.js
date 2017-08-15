angular.module('todoSPA', ['ui.router']);


angular.module('todoSPA').config(function($stateProvider, $urlRouterProvider, $locationProvider){

    $urlRouterProvider.otherwise('/');

    //$locationProvider.hashPrefix('');

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
        
    }



});


angular.module('todoSPA').controller('booksController', function($scope, $http){

    $scope.books;


    $http.get("/bookapi")
        
        .then(function(response) {
        $scope.books =  response.data;

    });




});
