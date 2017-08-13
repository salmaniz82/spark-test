angular.module('todoSPA', []);


angular.module('todoSPA').controller('testController', function($scope, $http){

	$scope.message = 'TODO SPA';

	$scope.todos;

	
	$http.get("/todospa/listapi")
    .then(function(response) {
	     $scope.todos =  response.data;   
    });

    $scope.changeStatus = function()
    {
    	console.log('hello say');
    }



});