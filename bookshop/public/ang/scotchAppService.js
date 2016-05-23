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