/**
 * Created by lenovo on 7/19/2017.
 */
angular.module('studioService', [])
    .config(function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    })
    .factory('studio', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('api/studio');
            }
        }

    });