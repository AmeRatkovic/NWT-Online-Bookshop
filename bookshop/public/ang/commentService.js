angular.module('commentService', [])

.factory('Comment', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('http://localhost:8000/api/comments');
        },
        save : function(commentData) {
            return $http({
                method: 'POST',
                url: 'http://localhost:8000/api/comments',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: 'username='+commentData.username+'&komentar='+commentData.komentar
            });
        },

        destroy : function(id) {
            return $http.delete('http://localhost:8000/api/comments/' + id);
        }
    }

});
