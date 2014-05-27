'use strict';

angular
  .module('appApp', [
    'ngSanitize',
    'ngRoute'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  }).run(function($route){
     window.setTimeout(function(){
          alert(window.post);
     },1000) //sxc
  })
