/**
 * Created by lenovo on 7/19/2017.
 */
var app = angular.module('studioApp', []);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
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
        })
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
        $scope.getBasedOnName = function(nama) {
            // use the function we created in our service
            temp = $http({
                method: 'GET',
                url: "api/studios/" + nama
            }).then(function (response) {
                console.log(response);
                $scope.studio = response.data.list;
                $scope.loading = false;
            });
        };
    });