var myApp = angular.module("myApp",[]);

myApp.controller("myController", function($scope)
{
$scope.users = [

{ username: 'Shourya', fullname: 'Shourya Chowdjhury',email: 'shourya@uniterrene.com'},
{ username: 'Shourya', fullname: 'Shourya Chowdjhury',email: 'shourya@uniterrene.com'},
{ username: 'Shourya', fullname: 'Shourya Chowdjhury',email: 'shourya@uniterrene.com'}];

$scope.newUser={};

$scope.clickedUser={};

$scope.saveUser = function()
{
	$scope.users.push($scope.newUser);
	
};

$scope.selectUser = function(user)
{
	$scope.clickedUser = user;
	
};

$scope.updateUser = function()
{
	
};

$scope.deleteUser = function()
{
	$scope.users.splice($scope.users.indexOf($scope.clickedUser),1);
};

});
