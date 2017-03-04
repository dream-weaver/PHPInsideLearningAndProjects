var app = angular.module("myApp", []);

app.controller("mainCtrl", ['$scope', '$log', function($scope, $log){
    $scope.name="Tanvir";
    console.log($log);
}]);