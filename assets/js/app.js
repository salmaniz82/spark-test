angular.module('todoSPA', []);


angular.module('todoSPA').controller('testController', function($scope, $http){




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
             if(response.data.status == 'Succeess')
             {
                    $scope.todos.todos.push(formdata);

             }

        });     
        

        

        //console.log(formdata);

  


    }









});