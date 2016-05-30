var module=angular.module('scotchApp.services', [])

module.factory('Knjiga', function($http) {

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
                data:  'Naslov='+commentData.Naslov+'&Izdavac='+commentData.Izdavac+'&Kategorija='+commentData.Kategorija+
                '&ISBN='+commentData.ISBN+'&Opis='+commentData.Opis+'&Slika='+commentData.Slika+'&Cijena='+commentData.Cijena+
                '&BrojStrana='+commentData.BrojStrana+'&autorid='+commentData.autorid+'&Datum='+commentData.Datum
            });

        },

        destroy : function(id) {
            return $http.delete('http://localhost:8000/api/knjiga/' + id);
        }
    }

});

module.factory('Comment', function($http) {

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
                data: 'username='+commentData.username+'&idKnjiga='+commentData.idKnjiga+'&komentar='+commentData.komentar
            });
        },

        destroy : function(id) {
            return $http.delete('http://localhost:8000/api/comments/' + id);
        }
    }

});