/**
 * Created by lenovo on 7/16/2017.
 */

angular.module('bioskopService', [])

    .factory('Bioskop', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('/api/api/bioskop');
            },

            // save a comment (pass in comment data)
            save : function(commentData) {
                return $http({
                    method: 'POST',
                    url: '/api/api/bioskop',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(commentData)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('/api/api/bioskop' + id);
            }
        }

    });
