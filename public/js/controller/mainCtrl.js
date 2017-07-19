/**
 * Created by lenovo on 7/16/2017.
 */

var app = angular.module('mainCtrl', []);


// inject the Bioskop service into our controller
    app.controller('mainController', function($scope, $http, Bioskop) {
        // object to hold all the data for the new bioskop form
        $scope.bioskopData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the bioskops first and bind it to the $scope.bioskops object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Bioskop.get()
            .success(function(data) {
                $scope.bioskops = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitBioskop = function() {
            $scope.loading = true;

            // save the bioskop. pass in bioskop data from the form
            // use the function we created in our service
            Bioskop.save($scope.bioskopData)
                .success(function(data) {

                    // if successful, we'll need to refresh the bioskop list
                    Bioskop.get()
                        .success(function(getData) {
                            $scope.bioskops = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a bioskop
        // DELETE A COMMENT ====================================================
        $scope.deleteBioskop = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Bioskop.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the bioskop list
                    Bioskop.get()
                        .success(function(getData) {
                            $scope.bioskops = getData;
                            $scope.loading = false;
                        });

                });
        };

    });
