/**
 * Created by lenovo on 7/19/2017.
 */
var app = angular.module('studioApp', ['ngRoute']);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.config(function($routeProvider) {
    $routeProvider

    // route for the home page
        .when('/', {
            templateUrl : 'home',
            controller  : 'studioController'
        })

        // route for the about page
        .when('/list', {
            templateUrl : 'list',
            controller  : 'listController'

        })
});
// inject the Comment service into our controller
    app.controller('studioController', function($scope, $http) {
        // object to hold all the data for the new comment form
        $scope.commentData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;
        var bio;
        bio = $http({
            method: 'GET',
            url: 'api/bioskop'
        }).then(function (response) {
            console.log(response);
            $scope.bioskop = response.data.list;
        });
        var mov;
        mov = $http({
            method: 'GET',
            url: 'api/movies'
        }).then(function (response) {
            console.log(response);
            $scope.movie = response.data.list;
        });
        var temp;
        //http.ajax($scope.url, {url: $scope.urlInput.valueOf()}
        temp = $http({
            method: 'GET',
            url: "api/studio"
        }).then(function (response) {
            console.log(response);
            $scope.studio = response.data.list;
            $scope.loading = false;
        });
        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        $scope.getBasedOnName = function() {
            // use the function we created in our service
            temp = $http({
                method: 'GET',
                url: "api/studios/" + $scope.selectedBioskop
            }).then(function (response) {
                console.log(response);
                $scope.studio = response.data.list;
                $scope.loading = false;
            });
        };
        $scope.getBasedOnJudul = function() {
            // use the function we created in our service
            temp = $http({
                method: 'GET',
                url: "api/judul/" + $scope.selectedMovie
            }).then(function (response) {
                console.log(response);
                $scope.studio = response.data.list;
                $scope.loading = false;
            });
        };

    });

app.controller('listController', function($scope, $http) {
    var bio;
    bio = $http({
        method: 'GET',
        url: 'api/bioskop'
    }).then(function (response) {
        console.log(response);
        $scope.bioskop = response.data.list;
    });
});