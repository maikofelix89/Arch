var app = angular.module('app');


app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
  });

   

  app.controller('housectr', function($scope) {

  	$scope.houselist = {!! $housejson !!};
   
});
  angular.module('projectAnimations', ['ngAnimate']);











  

