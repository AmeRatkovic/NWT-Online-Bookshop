angular.module('commentService', [])

.factory('Knjiga', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('http://localhost:8000/api/knjiga');
        },
        save : function(commentData) {
            return $http({
                method: 'POST',
                url: 'http://localhost:8000/api/knjiga',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(commentData)
            });
        },

        destroy : function(id) {
            return $http.delete('http://localhost:8000/api/knjiga/' + id);
        }
    }

});
