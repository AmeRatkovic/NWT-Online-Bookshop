    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['ngAnimate','ui.bootstrap','scotchApp.services','chart.js','ngCart','ngRoute','pascalprecht.translate'])
    .constant('API_URL', 'http://localhost:8000/api/');
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
        .when('/top10', {
        templateUrl: 'pages/top10.html',
        controller  : 'BookController'
       // service : 'scotchApp.services'
        })
.when('/justpublished', {
        templateUrl: 'pages/justpublished.html',
        controller  : 'mainController',
       service : 'scotchApp.services'
        })
            .when('/comment', {
        templateUrl: 'pages/comment.html',
        controller  : 'CommentController',
        service : 'commentService'
        })
     .when('/search', {
        templateUrl: 'pages/search.html',
        controller  : 'mainController'
       // service : 'commentService'
        })
   .when('/administracija', {
            templateUrl: 'pages/administracija/index.html',
            controller: 'knjigaController',

        })
            //ruta za knjigu
            .when('/knjiga', {
                templateUrl: 'pages/knjiga/index.html',
                controller: 'knjigaController',
            })
            //ruta za kategoriju
            .when('/autor', {
                templateUrl: 'pages/autor/index.html',
                controller: 'autorController',
            })
        //ruta za kategoriju
            .when('/izdavac', {
                templateUrl: 'pages/izdavac/index.html',
                controller: 'izdavacController',
            })
            //ruta za usera

            //Prijava i Registracija
            .when('/prijava',{
                templateUrl:'pages/administracija/login.html',
                controller:'LoginController'
            })
            .when('/registracija',{
                templateUrl:'pages/administracija/register.html',
                controller:'UserController'
            })
            .when('/user', {
                templateUrl : 'pages/1.html',
                controller  : 'userController',
            })

   .otherwise({ redirectTo: '/' });


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





 scotchApp.controller('userController', ['$scope', '$http', function ($scope, $http) {
        angular.extend($scope,{
            dologin: function(loginForm){
                $http({
                    headers: {'Content-Type': 'application/json'},
                    url:baseUrl + 'auth',
                    method: "POST",
                    data: {
                        email: $scope.users.username,
                        password: $scope.users.password
                    }
                    }).success(function(response){
                        console.log(response);
                    });
                }
        });

    }]);

 scotchApp.controller('auserController', function($scope, $http, API_URL) {
        //retrieve employees listing from API
        $http.get(API_URL + "user")
            .success(function(response) {
                $scope.users = response;
            });

        //show modal form
        $scope.toggle = function(modalstate, id) {
            $scope.modalstate = modalstate;

            switch (modalstate) {
                case 'add':
                    $scope.form_title = 'Dodaj novog usera';
                    break;
                case 'edit':
                    $scope.form_title = "Izmjeni usera";
                    $scope.id = id;
                    $http.get(API_URL + 'user/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.user = response;
                        });
                    break;
                default:
                    break;
            }
            console.log(id);
            $('#myModal').modal('show');
        }

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "user";

            //append employee id to the URL if the form is in edit mode
            if (modalstate === 'edit') {
                url += "/" + id;
                $http({
                    method: 'PUT',
                    url: url,
                    data: $.param($scope.user),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();
                }).error(function (response) {
                    console.log(response);
                    alert('This is embarassing. An error has occured. Please check the log for details');
                });


            }
            //ovo ispraviti
            else (modalstate === 'add')
            {
                url += "/" + id;
                $http({
                    method: 'POST',
                    url: url,
                    data: $.param($scope.user),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();

                });
            }
        }


        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                $http({
                    method: 'DELETE',
                    url: API_URL + 'knjiga/' + id
                }).
                success(function(data) {
                    console.log(data);
                    location.reload();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
            } else {
                return false;
            }
        }
    });


    /////////////////////////////////////////////KNJIGA KONTROLER////////////////////////////////////////////////
scotchApp.controller('knjigaController', function($scope, $http, API_URL, Knjiga) {
        //retrieve employees listing from API
         $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.currentpage}
                }).success(function(data, status, headers, config) {
                    $scope.knjigas = data.data;
                    });

        //show modal form
        $scope.toggle = function(modalstate, id) {
            $scope.modalstate = modalstate;

            switch (modalstate) {
                case 'add':
                    $scope.form_title = 'Dodaj novu knjigu';
                    break;
                case 'edit':
                    $scope.form_title = "Izmjeni knjigu";
                    $scope.id = id;
                    $http.get(API_URL + 'knjiga/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.knjiga = response;
                        });
                    break;
                default:
                    break;
            }
            console.log(id);
            $('#myModal').modal('show');
        }

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "knjiga";

            //append employee id to the URL if the form is in edit mode
            if (modalstate === 'edit') {
                url += "/" + id;
                $http({
                    method: 'PUT',
                    url: url,
                    data: $.param($scope.knjiga),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();
                }).error(function (response) {
                    console.log(response);
                    alert('This is embarassing. An error has occured. Please check the log for details');
                });


            }
                //ovo ispraviti
            else (modalstate === 'add')
            {
                url += "/" + id;
                $http({
                    method: 'POST',
                    url: url,
                    data: $.param($scope.knjiga),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();

                });
            }
        }


        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                $http({
                    method: 'DELETE',
                    url: API_URL + 'knjiga/' + id
                }).
                success(function(data) {
                    console.log(data);
                    location.reload();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
            } else {
                return false;
            }
        }
    });
    ///////////////////////////////////////////AUTOR KONTROLER ////////////////////////////////////////////////
    scotchApp.controller('autorController', function($scope, $http, API_URL) {
        //retrieve employees listing from API
        $http.get(API_URL + "autor")
            .success(function(response) {
                $scope.autors = response;
            });

        //show modal form
        $scope.toggle = function(modalstate, id) {
            $scope.modalstate = modalstate;

            switch (modalstate) {
                case 'add':
                    $scope.form_title = 'Dodaj noovg izdavaca';
                    break;
                case 'edit':
                    $scope.form_title = "Izmjeni izdavaca";
                    $scope.id = id;
                    $http.get(API_URL + 'autor/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.autor = response;
                        });
                    break;
                default:
                    break;
            }
            console.log(id);
            $('#myModal').modal('show');
        }

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "autor";

            //append employee id to the URL if the form is in edit mode
            if (modalstate === 'edit') {
                url += "/" + id;
                $http({
                    method: 'PUT',
                    url: url,
                    data: $.param($scope.autor),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();
                }).error(function (response) {
                    console.log(response);
                    alert('This is embarassing. An error has occured. Please check the log for details');
                });


            }
            //ovo ispraviti
            else (modalstate === 'add')
            {
                url += "/" + id;
                $http({
                    method: 'POST',
                    url: url,
                    data: $.param($scope.autor),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();

                });
            }
        }


        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                $http({
                    method: 'DELETE',
                    url: API_URL + 'autor/' + id
                }).
                success(function(data) {
                    console.log(data);
                    location.reload();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
            } else {
                return false;
            }
        }
    });

    /////////////////////////////////////////////IZDAVAC KONTROLER////////////////////////////////////////////////
    scotchApp.controller('izdavacController', function($scope, $http, API_URL) {
        //retrieve employees listing from API
        $http.get(API_URL + "izdavac")
            .success(function(response) {
                $scope.izdavacs = response;
            });

        //show modal form
        $scope.toggle = function(modalstate, id) {
            $scope.modalstate = modalstate;

            switch (modalstate) {
                case 'add':
                    $scope.form_title = 'Dodaj noovg izdavaca';
                    break;
                case 'edit':
                    $scope.form_title = "Izmjeni izdavaca";
                    $scope.id = id;
                    $http.get(API_URL + 'izdavac/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.izdavac = response;
                        });
                    break;
                default:
                    break;
            }
            console.log(id);
            $('#myModal').modal('show');
        }

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "izdavac";

            //append employee id to the URL if the form is in edit mode
            if (modalstate === 'edit') {
                url += "/" + id;
                $http({
                    method: 'PUT',
                    url: url,
                    data: $.param($scope.izdavac),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();
                }).error(function (response) {
                    console.log(response);
                    alert('This is embarassing. An error has occured. Please check the log for details');
                });


            }
            //ovo ispraviti
            else (modalstate === 'add')
            {
                url += "/" + id;
                $http({
                    method: 'POST',
                    url: url,
                    data: $.param($scope.izdavac),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                }).success(function (response) {
                    console.log(response);
                    location.reload();

                });
            }
        }


        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                $http({
                    method: 'DELETE',
                    url: API_URL + 'izdavac/' + id
                }).
                success(function(data) {
                    console.log(data);
                    location.reload();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
            } else {
                return false;
            }
        }
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
scotchApp.controller("BarCtrl", function ($scope,$http) {
  
var x14 =0;
var x15 =0;
var x16 =0;
var x17 =0;
var x18 =0;

$scope.users = {};

 

    $http({
        method: 'GET',
        url: 'http://localhost:8000/api/user'
       
    }).success(function(data) {
            $scope.users = data;
            
for(var i=0; i<data.length; i++) {    
if($scope.users[i].created_at.substring(0,4)=="2014")
x14++;
if($scope.users[i].created_at.substring(0,4)=="2015")
x15++;
if($scope.users[i].created_at.substring(0,4)=="2016")
x16++;
if($scope.users[i].created_at.substring(0,4)=="2017")
x17++;
if($scope.users[i].created_at.substring(0,4)=="2018")
x18++;
}

$scope.labels = ['2014','2015', '2016', '2017', '2018'];
  $scope.series = ['Series A'];  
 $scope.data = [
    [x14, x15,x16,x17,x18] ];


    }).error(function (data, status) {
        console.log("Request Failed");
            
    });
     

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

    
   $scope.query = {}
    $scope.queryBy = '$'
    $scope.orderProp="Naslov";    
$scope.totalItems = 0;
  $scope.currentPage = 1;

$scope.pageChanged = function( ) {
     console.log("aaa");
   $http({
                    url: 'http://localhost:8000/api/knjiga',
                    method: "GET",
                    params: {page:  $scope.currentPage}
                }).success(function(data, status, headers, config) { 
                    $scope.knjigas = data.data;
                    $scope.currentpage = data.current_page;
                    $scope.nextpage = Math.round((data.total-1)/10)+1;
                     $scope.totalItems=data.total;
                          console.log("bbb");

                });
  };


    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    $scope.knjigas = [];
    $scope.justp = [];
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
                     $scope.lastpage=data.last_page;
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

  