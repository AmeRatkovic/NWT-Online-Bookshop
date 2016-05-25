<!DOCTYPE html>

<!-- define angular app -->
<html ng-app="scotchApp">

<head>
  <!-- SCROLLS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

  <!-- SPELLS -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-resource.min.js"></script>
<script src="bower-angular-translate-2.9.0.1/angular-translate.js"></script>
  <script src="ang/script.js"></script>
<script src="ang/scotchAppService.js"></script>
<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/commentService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->


</head>

<!-- define angular controller -->
<body ng-app="commentApp" ng-controller="mainController">

  <nav class="navbar navbar-default">
    <div class="container"  ng-controller="TranslateController">

      <div class="navbar-header">
        

      </div>

      <ul class="nav navbar-nav navbar-left">
        <li><a href="{{ url('/#/') }}"<i class="fa fa-home"></i> Bookshop</a></li>
        <li><a href="{{ url('/#/about') }}"><i class="fa fa-shield"></i> @{{ 'ADDBOOK' | translate }}</a></li>
        <li><a href="{{ url('/#/contact') }}"><i class="fa fa-comment"></i> @{{ 'CONTACT' | translate }}</a></li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="{{ url('/prijava') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">@{{ 'REGISTER' | translate }}</a></li>
                    <li>    
  <a ng-click="changeLanguage('ba')" translate="BUTTON_TEXT_BA"></a></li>
   <li> <a ng-click="changeLanguage('en')" translate="BUTTON_TEXT_EN"></a>


 @if (Auth::guest())
                         <li><a href="{{ url('/prijava') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             @if (Auth::user()->Tip=='Admin')
                                {{ Auth::user()->Tip }} <span class="caret"></span>
                               @else
                                {{ Auth::user()->Ime }} <span class="caret"></span>
                                @endif
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/odjava') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                         <li><a href="{{ url('/cart') }}">Cart</a></li>
                    @endif
   </li>
      </ul>
    </div>
  </nav>

  <div id="main">
  
    <!-- angular templating -->
    <!-- this is where content will be injected -->
   @yield('content')
    
  </div>
  
  <footer class="text-center">
   
  
    <p> <a href="www.bookshop.ba"> Copyright 2016</a></p>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
