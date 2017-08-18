angular.module('todoSPA', ['ui.router']);


angular.module('todoSPA').config(function($stateProvider, $urlRouterProvider, $locationProvider){

    
    $locationProvider.hashPrefix('');
    
    /*
    $locationProvider.html5Mode(true);
    */
    
    


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


angular.module('todoSPA').service('getAuthData', function($http) {

    //var this = {};
    /*
        var this = {};
        in services empty object will be created and assigned to this 
    */

        this.prop = 'Prop From Service';


        this.doSomething = function(){
            return 'this is some string return via service';
        }


        this.checkReturnAuthStatus = function(){
            $http.get('/getauthenticateduser').then(function(response){

                this.userAuthLog = response.data;

            });

            return this.userAuthLog
        }


    /*
        return this;
        and this will be 
    */
    

});


angular.module('todoSPA').controller('todoController', function($scope, $http){




	$scope.message = 'TODO SPA';

	$scope.todos;


    

	
	$http.get("/todospa/listapi")
    .then(function(response) {
	     $scope.todos =  response.data;   
    });

    

    $scope.changeStatus = function(todobj)
    {
    	
                
        var id = todobj.id;
        var url = '/todospa/update/'+todobj.id;
        todobj.date_complited = (new Date()).toISOString().substring(0, 10);


        


        $http({

        method: 'POST',
        url:  url,
        data: todobj

        }).then(function(response){

            console.log(response.data);

        });


    }





    $scope.addTodo = function(formdata)
    {
        

     
        formdata.user_id = '1';
        formdata.date_created = (new Date()).toISOString().substring(0, 10);
        formdata.is_complited = '0';

      
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


angular.module('todoSPA').controller('carsController', function($scope, $http, getAuthData){

    $scope.message = 'message is now changed';

    
    $scope.userdata = getAuthData.checkReturnAuthStatus();


    

  /*

    $http({
        method: 'POST',
        url: '/parseheaders',
        data: "message=" + $scope.message,
        
        
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}


    }).then(function(response){

        console.log(response.data);

    });

    */
    


});


angular.module('todoSPA').controller('phonesController', function($scope, $http){

    $scope.message = 'Message from Controller for Phone Page';   
  

        $http.get('getauthenticateduser').then(function(response){

            $scope.userdata = response.data;  

         });

});






