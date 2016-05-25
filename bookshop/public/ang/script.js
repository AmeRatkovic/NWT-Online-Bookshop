    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['scotchApp.services','ngRoute','pascalprecht.translate']);
 
    // configure our routes
    scotchApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : 'pages/home.html',
                controller  : 'mainController',
                service : 'scotchApp.services'
            })

            // route for the about page
            .when('/about', {
                templateUrl : 'pages/about.html',
                controller  : 'aboutController',
                service : 'scotchApp.services'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'pages/contact.html',
                //controller  : 'RadarCtrl'
            })

            .when('/book/:idKnjiga', {
        templateUrl: 'pages/book-detail.html',
        controller  : 'BookController',
        service : 'scotchApp.services'
        });
    });



      

scotchApp.config(function($translateProvider) {
  $translateProvider.translations('en', {
    HEADLINE: 'Hello there, This is my awesome app!',
    INTRO_TEXT: 'And it has i18n support!',
     BUTTON_TEXT_EN: 'English',
    BUTTON_TEXT_BA: 'Bosnian',
    NAME: 'Name',
    AUTOR: 'Author',
    PUBLISHER: 'Publisher',
     GENRE: 'Genre',
      ISBN: 'ISBN',
       PRICE: 'Price',
       NUMBER: 'Number of pages',
       DATE: 'Date',
       PICTURE: 'Picture URL',
       ABOUT: 'About',
       ADDBOOK: 'Add Book',
       CONTACT: 'Contact',
       REGISTER: 'Register'
  })
  .translations('ba', {
    HEADLINE: 'neki naslov nesto',
    INTRO_TEXT: 'Sta ima ba kod tebe!',
    BUTTON_TEXT_EN: 'Engleski',
    BUTTON_TEXT_BA: 'Bosanski',
    NAME: 'Ime',
    AUTOR: 'Autor',
    PUBLISHER: 'Izdavac',
    GENRE: 'Zanr',
      ISBN: 'ISBN',
       PRICE: 'Cijena',
       NUMBER: 'Broj stranica',
       DATE: 'Datum',
       PICTURE: 'URL slike',
       ABOUT: 'O knjizi',
       ADDBOOK: 'Dodaj knjigu',
       CONTACT: 'Kontakt',
       REGISTER: 'Registracija'
  });
  $translateProvider.preferredLanguage('en');
});




 scotchApp.controller('BookController', function($scope, $http, $routeParams) {
    $scope.idKnjiga = $routeParams.idKnjiga;
    $scope.knjiga = {};

    $http({
        method: 'GET',
        url: 'http://localhost:8000/api/knjiga/' + $scope.idKnjiga
       
    }).success(function(data) {
            $scope.knjiga = data;
        
    }).error(function (data, status) {
        console.log("Request Failed");
    });

    //Get our helper methods
   // $scope.GetRatingImage = GetRatingImage;
   // $scope.GetActualPrice = GetActualPrice;
   // $scope.HasDiscount = HasDiscount;
    });




scotchApp.controller('TranslateController', function($translate, $scope) {
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };
});


    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope, $http, Knjiga) {
    // object to hold all the data for the new comment form
    $scope.commentData = {};

     

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    $scope.knjigas = [];
            $scope.lastpage=1;
 
            $scope.init = function() {
                $scope.lastpage=1;
                $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.lastpage}
                }).success(function(data, status, headers, config) {
                    $scope.knjigas = data.data;
                    $scope.currentpage = data.current_page;
                });
            };
 
            $scope.init();

         // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
        $scope.loading = true;

        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Knjiga.save($scope.commentData)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Knjiga.get()
                    .success(function(getData) {
                        $scope.knjigas = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };
   
    $scope.deleteComment = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        Knjiga.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Knjiga.get()
                    .success(function(getData) {
                        $scope.knjigas = getData;
                        $scope.loading = false;
                    });

            });
    };
$scope.loadMore = function() {
                $scope.lastpage +=1;
                $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.lastpage}
                }).success(function (data, status, headers, config) {
 $scope.knjigas = data.data;
                    $scope.currentpage = data.current_page;
                  //  $scope.events = $scope.knjigas.concat(data.data);
 
                });
            };

});

    scotchApp.controller('aboutController', function($scope, $http, Knjiga) {

    // object to hold all the data for the new comment form
    $scope.commentData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Knjiga.get()
        .success(function(data) {
            $scope.knjigas = data;
            $scope.loading = false;
        });

         // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
        $scope.loading = true;


   
    Knjiga.save($scope.commentData)
            .success(function(data) {
                console.log("aaaaaa");

                // if successful, we'll need to refresh the comment list
                Knjiga.get()
                    .success(function(getData) {
                        $scope.knjigas = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                    console.log($scope.commentData);
                console.log(data);
            });
    };
   
    $scope.deleteComment = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        Knjiga.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Knjiga.get()
                    .success(function(getData) {
                        $scope.knjigas = getData;
                        $scope.loading = false;
                    });

            });
    };

});

    scotchApp.controller('contactController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });

