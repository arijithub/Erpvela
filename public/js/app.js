/**
 *
 * Responsive website using AngularJS
 * http://www.script-tutorials.com/responsive-website-using-angularjs/
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Script Tutorials
 * http://www.script-tutorials.com/
 */

'use strict';

// angular.js main app initialization
var app = angular.module('bikash1981', []).
    config(['$routeProvider', function ($routeProvider) {
      $routeProvider.
        when('/', { templateUrl: 'pages/index.html', activetab: 'home', controller: HomeCtrl }).
        
		
		when('/about', {
          templateUrl: 'pages/about.html',
          controller: AboutCtrl,
          activetab: 'about'
        }).
        when('/doctor', {
          templateUrl: 'pages/doctor.html',
          controller: DoctorCtrl,
          activetab: 'doctor'
        }).
		when('/appo', {
          templateUrl: 'pages/appo.html',
          controller: AppoCtrl,
          activetab: 'appo'
        }).
		when('/blog', {
          templateUrl: 'pages/blog.html',
          controller: BlogCtrl,
          activetab: 'blog'
        }).
		when('/contact', {
          templateUrl: 'pages/contact.html',
          controller: ContactCtrl,
          activetab: 'contact'
        }).
		when('/terms', {
          templateUrl: 'pages/terms.html',
          controller: TermsCtrl,
          activetab: 'terms'
        }).
		when('/privacy', {
          templateUrl: 'pages/privacy.html',
          controller: PrivacyCtrl,
          activetab: 'privacy'
        }).
        
        otherwise({ redirectTo: '/' });
    }]).run(['$rootScope', '$http', '$browser', '$timeout', "$route", function ($scope, $http, $browser, $timeout, $route) {

        $scope.$on("$routeChangeSuccess", function (scope, next, current) {
          $scope.part = $route.current.activetab;
        });

        // onclick event handlers
        $scope.showForm = function () {
          $('.contactRow').slideToggle();
        };
        $scope.closeForm = function () {
          $('.contactRow').slideUp();
        };

        // save the 'Contact Us' form
        $scope.save = function () {
          $scope.loaded = true;
          $scope.process = true;
          $http.post('sendemail.php', $scope.message).success(function () {
              $scope.success = true;
              $scope.process = false;
          });
        };
  }]);

app.config(['$locationProvider', function($locationProvider) {
	 if(window.history && window.history.pushState){
    $locationProvider.html5Mode(true);
  }
    $location.hashPrefix('');
}]);

