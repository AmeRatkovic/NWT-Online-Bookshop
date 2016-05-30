    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['ngAnimate', 'commentService','ui.bootstrap','scotchApp.services','chart.js','ngCart','ngRoute','pascalprecht.translate']);
 
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
            .when('/cart', {
                templateUrl : 'pages/korpa.html',
                controller  : 'KorpaCtrl',
              //  service : 'scotchApp.services'
            })
            // route for the contact page
            .when('/contact', {
                templateUrl : 'pages/contact.html',
                controller  : 'BarCtrl'
            })

            .when('/book/:idKnjiga', {
        templateUrl: 'pages/book-detail.html',
        controller  : 'BookController',
        service : 'scotchApp.services'
        })
            .when('/comment', {
        templateUrl: 'pages/comment.html',
        controller  : 'CommentController',
        service : 'commentService'
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





scotchApp.controller('CommentController', function($scope, $http, Comment,$location) {
    // object to hold all the data for the new comment form
    $scope.commentData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Comment.get()
        .success(function(data) {
            $scope.comments = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
        $scope.loading = true;

        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Comment.save($scope.commentData)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle deleting a comment
    // DELETE A COMMENT ====================================================
    $scope.deleteComment = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        Comment.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                         $location.path( "/comment" );
                    });

            });

    };


});















scotchApp.controller ('KorpaCtrl', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
    ngCart.setTaxRate(0);
    ngCart.setShipping(0);    
}]);
scotchApp.controller("BarCtrl", function ($scope) {
  $scope.labels = ['2006', '2007', '2008', '2009', '2010', '2011', '2012'];
  $scope.series = ['Series A', 'Series B'];

  $scope.data = [
    [65, 59, 80, 81, 56, 55, 40],
    [28, 48, 40, 19, 86, 27, 90]
  ];
});


 scotchApp.controller('BookController', function($scope, $http, $routeParams, Comment,$location) {
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

$scope.commentData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Comment.get()
        .success(function(data) {
            $scope.comments = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
        $scope.loading = true;
        $scope.commentData.idKnjiga=$routeParams.idKnjiga;
    console.log($scope.commentData.idKnjiga);
        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Comment.save($scope.commentData)
            .success(function(data) {
                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle deleting a comment
    // DELETE A COMMENT ====================================================
    $scope.deleteComment = function(id,knjiga) {
        $scope.loading = true; 
//console.log(knjiga);
        // use the function we created in our service
        Comment.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                         $location.path( 'book/'+knjiga );
                    });

            });

    };


    });




scotchApp.controller('TranslateController', function($translate, $scope) {
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };
});


    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope, $http, Knjiga,$log,$route) {
    // object to hold all the data for the new comment form
    $scope.commentData = {};

    

$scope.totalItems = 0;
  $scope.currentPage = 1;


$scope.pageChanged = function() {
   $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.currentPage}
                }).success(function(data, status, headers, config) { 
                    $scope.knjigas = data.data;
                    $scope.currentpage = data.current_page;
                    $scope.nextpage = Math.round((data.total-1)/10)+1;
                     $scope.totalItems=data.total;
                });
  };

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    $scope.knjigas = [];
            $scope.lastpage=1;
            $scope.nextpage=1;
            $scope.init = function() {
                $scope.lastpage=1;
                $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.lastpage}
                }).success(function(data, status, headers, config) {
                    $scope.knjigas = data.data;
                    $scope.currentpage = data.current_page;
                    $scope.nextpage = Math.round((data.total-1)/10)+1;
                     $scope.totalItems=data.total;
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
$route.reload();
            });
    };
$scope.loadMore = function() {

     if( $scope.nextpage>$scope.currentpage){
       if( $scope.lastpage ==0)
         $scope.lastpage +=1;
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

            }

            };



    $scope.loadLess = function() {
        if( $scope.lastpage > 0){
                $scope.lastpage -=1;
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

