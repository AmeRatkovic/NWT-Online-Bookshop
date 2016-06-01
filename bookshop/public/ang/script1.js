    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['scotchApp.services','ngRoute','pascalprecht.translate'])
        .constant('API_URL', 'http://localhost:8000/api/');

    // configure our routes
    scotchApp.config(function($routeProvider, $locationProvider) {
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
                controller  : 'knjigaController',
                service : 'scotchApp.services'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'pages/contact.html',
                controller  : 'contactController'
            })
        // route for the administracija page
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

            /*

             .when('/user', {
             templateUrl : 'pages/user.html',
             controller  : 'userController',
             service : 'scotchApp.services'
             })

             .when('/knjiga-izmjena/:id', {
            templateUrl: 'pages/knjiga-izmjena.html',
            controller: 'EditNoteCtrl',
            service : 'scotchApp.services'
        })

         .when('/knjiga/nova', {
         templateUrl : 'pages/create.html',
         controller  : 'CreateNoteCtrl',

         })
         .when('/about/:idKnjiga', {
         templateUrl : 'pages/knjiga-detalj.html',
         controller  : 'aboutController',
         service : 'scotchApp.services'
         })
         */
        .otherwise({ redirectTo: '/' });

    });

    /*JEZIK*/
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
      BOOK: 'Book',
          BOOKID: 'BookID',
       CONTACT: 'Contact',
       REGISTER: 'Register',
      ADMIN: 'Administrator',
      DETAIL: 'More',
      CATEGORIES: 'Categories',
      COMPUTERS: 'Computers',
      SPORTS: 'Sports',
      MAGAZINES: 'Magazines',
      FOOD: 'Food & Drink',
      BESTSELLERS: 'Bestsellers',
      ADDUSER: 'Add user',
      PREZIME: 'Surname',
      EMAIL:'email',
      PASSWORD: 'Password',
      TIP: 'Type',
          CREATE:'Create',
          EDIT:'Edit',
          DELETE:'Delete',
          SURNAME:'Surname',
          SAVE:'Save',
          IZDAVAC:'Publisher',
          LOCATION:'Location',
          PHONE: 'Phone',
          NEWSLETTER: 'NEWSLETTER SIGN UP',
          MYACC: 'My Account',
          STAYCON: 'Stay Connected',
          ABOUTUS: 'About Us',
          LOGIN: ' Login',
          CREAATEACC: 'Crete an account',
            THESERVICE: 'THE SERVICE',
          FACEBOOK: 'LIKE US ON FACEBOOK',
          INFORMATION: 'INFORMATION',
             CONTACTUS: 'Contact us',
          SHIPPING: 'Free shipping',
          LOREM: 'Lorem Ipsum is simply dummy',
          SALE: 'Crazy sale!',
          SHOPNOW: 'Shop now',
      MORE:'more',
          SUBMIT:'Submit',
      MODAY: 'Monday',
      SATURDAY: 'Saturday',
      DASHBOARD: 'Dashboard',
          FUNCTIONS: 'Functions',
          HOME: 'Home',
          CART: 'View cart',
          BIH: 'Bosnia and Herzegovina',
          LOREM1: 'Lorem ipsum 1',
          LOREM2: 'Lorem ipsum 2',
          LOREM3: 'Lorem ipsum 3',
          LOREM4: 'Lorem ipsum 4',
          LOREM5: 'Lorem ipsum 5',
          LOREM6: 'Lorem ipsum 6',
          LOREM7: 'Lorem ipsum 7',




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
      BOOK: 'Knjiga',
      BOOKID: 'Knjiga ID',
       CONTACT: 'Kontakt',
       REGISTER: 'Registracija',
      ADMIN: 'Krtica',
      DETAIL: 'Detaljnije',
      CATEGORIES: 'Kategorije',
      COMPUTERS: 'Računari',
      SPORTS: 'Sport',
      MAGAZINES: 'Časopisi',
      FOOD: 'Hrana i piće',
      BESTSELLERS: 'Bestesleri',
      ADDUSER: 'Dodaj korisnika',
      PREZIME: 'Prezime',
      EMAIL:'e-mail',
      PASSWORD: 'Lozinka',
      TIP: 'Tip',
      CREATE:'Dodaj',
     EDIT:'Izmjeni',
      DELETE:'Briši',
      SURNAME:'Prezime',
      SAVE:'Spasi',
      IZDAVAC:'Izdavac',
      LOCATION:'Lokacija',
      PHONE: 'Telefon',
      NEWSLETTER: 'PRETPLATITE SE',
      MYACC: 'Moj račun',
      STAYCON: 'Budite u toku',
      ABOUTUS: 'O nama',
      LOGIN: 'Prijava',
      CREAATEACC: 'Kreiraj račun',
      THESERVICE: 'Usluge',
      FACEBOOK: 'Lajkajte na facebooku',
      INFORMATION: 'Informacije',
      CONTACTUS: 'Kontaktirajte nas',
      SHIPPING: 'Besplatna dostava',
      LOREM: 'Lorem Ipsum je jednostavno probni',
      SALE: 'Lude cijene!',
      SHOPNOW: 'Kupi sada',
      MORE:'Vise',
      SUBMIT:'Podnesi',
      MODAY: 'Pondjeljak',
      SATURDAY: 'Subota',
      BIH: 'Bosna i hercegovina',
      HOME: 'Početna',
      DASHBOARD: 'Admin ploča',
      FUNCTIONS: 'Funkcionalnosti',
      CART: 'Vidi korpu',
      LOREM1: 'Što je Lorem 1',
      LOREM2: 'Što je Lorem 2',
      LOREM3: 'Što je Lorem 3',
      LOREM4: 'Što je Lorem 4',
      LOREM5: 'Što je Lorem 5',
      LOREM6: 'Što je Lorem 6',
      LOREM7: 'Što je Lorem 7',
  });
  $translateProvider.preferredLanguage('en');
});

    //KONTROLERI
scotchApp.controller('TranslateController', function($translate, $scope) {
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };
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

    /*scotchApp.controller('LoginController',function($scope,Login){

        $scope.loginSubmit = function(){
            var auth = Login.auth($scope.loginData);
            service call
            auth.success(function(response){
                console.log(response);
            });
        }
    });
*/
    /////////////////////////////////////////////USER KONTROLER////////////////////////////////////////////////
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
        $http.get(API_URL + "knjiga")
            .success(function(response) {
                $scope.knjigas = response;
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

    //###########################Frontpage kontroler###################################

    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope, $http, Knjiga) {
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

});
/*
    scotchApp.controller('EditNoteCtrl',[
        '$scope','$http','$location','$routeParams',
        function ($scope, $http, $location, $routeParams) {
            var id = $routeParams.id;
            $scope.activePath = null;

            $http.get('api/knjiga/'+id).success(function(data) {
                $scope.knjigas = data;
            });

            $scope.Update_Customer = function(knjiga) {
                $http.put('api/Customers/'+id, knjiga).success(function(data) {
                    $scope.CustomerDetail = data;
                    $scope.activePath = $location.path('/');
                });
            };

        }
    ]);

    scotchApp.controller('EditNoteCtrl', function($scope, Knjiga, $location, $timeout, $routeParams) {
            $scope.knjiga = Knjiga.get({
                id: $routeParams.id
            });

            $scope.saveNote = function() {
                Knjiga.update($scope.Knjiga);
                Materialize.toast('Nota Actualizada.', 5000, 'green accent-4');
                $timeout(function() {
                    $location.path('/about');
                }, 1000);
            };
        });

*/

//########################## Knjiga kontroler##############################################
    /*
    scotchApp.controller('aboutController', function($scope, $http, Knjiga, $location) {
        // object to hold all the data for the new comment form
        $scope.commentData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;
        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Knjiga.get()
            .success(function (data) {
                $scope.knjigas = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitComment = function () {
            $scope.loading = true;

            Knjiga.save($scope.commentData)
                .success(function (data) {
                    console.log("aaaaaa");

                    // if successful, we'll need to refresh the comment list
                    Knjiga.get()
                        .success(function (getData) {
                            $scope.knjigas = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log($scope.commentData);
                    console.log(data);
                });
        };

        $scope.deleteComment = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Knjiga.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the comment list
                    Knjiga.get()
                        .success(function (getData) {
                            $scope.knjigas = getData;
                            $scope.loading = false;
                        });

                });
        };
        //Edit knjige
        $scope.updateComment = function(id) {
        $location.path('/knjiga-izmjena/' + id);



            // use the function we created in our service
           Knjiga.update(id)
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

/*
    scotchApp.controller('aboutController', ['$scope', '$routeParams', 'Knjiga', '$location',
        function ($scope, $routeParams, Knjiga, $location) {

            // callback for ng-click 'updateUser':
            $scope.updateKnjiga = function () {
                Knjiga.update($scope.knjigas);
                $location.path('/knjiga-detalj');
            };

            // callback for ng-click 'cancel':
            $scope.cancel = function () {
                $location.path('/knjiga-detalj');
            };

            $scope.user = Knjiga.show({id: $routeParams.id});
        }]);

    scotchApp.controller('aboutController', ['$scope', 'KnjigaFactory', '$location',
        function ($scope, Knjiga, $location) {

            // callback for ng-click 'createNewUser':
            $scope.createNewUser = function () {
                Knjiga.create($scope.knjigas);
                $location.path('/knjiga-detalj');
            }
        }]);
        */
    //#################USER Kontroler################
    /*
    scotchApp.controller('userController', function($scope, $http, User) {
        // object to hold all the data for the new comment form
        $scope.commentData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;
        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        User.get()
            .success(function(data) {
                $scope.user = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitComment = function() {
            $scope.loading = true;

            User.save($scope.commentData)
                .success(function(data) {
                    console.log("aaaaaa");

                    // if successful, we'll need to refresh the comment list
                    User.get()
                        .success(function(getData) {
                            $scope.user = getData;
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
            User.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    User.get()
                        .success(function(getData) {
                            $scope.user = getData;
                            $scope.loading = false;
                        });

                });
        };

    });

    //#################Autor Kontroler################
    scotchApp.controller('autorController', function($scope, $http, Autor) {
        // object to hold all the data for the new comment form
        $scope.commentData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;
        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Autor.get()
            .success(function(data) {
                $scope.autors = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitComment = function() {
            $scope.loading = true;

            Autor.save($scope.commentData)
                .success(function(data) {
                    console.log("aaaaaa");

                    // if successful, we'll need to refresh the comment list
                    Autor.get()
                        .success(function(getData) {
                            $scope.autors = getData;
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
            Autor.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Autor.get()
                        .success(function(getData) {
                            $scope.autors = getData;
                            $scope.loading = false;
                        });

                });
        };

    });
*/
    //############################################### Kontakt #################################
    scotchApp.controller('contactController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });

    //############################################## Administracija kontroler ##############################
    scotchApp.controller('adminController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });

