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


<link rel="stylesheet" href="bower-angular-translate-2.9.0.1/bower_components/angular-chart.js/dist/angular-chart.css" >

<script src="bower-angular-translate-2.9.0.1/bower_components/Chart.js/Chart.js"></script>
<script src="bower-angular-translate-2.9.0.1/bower_components/angular-chart.js/angular-chart.js"></script>


</head>

<!-- define angular controller -->
<body ng-controller="mainController">

  <nav class="navbar navbar-default">
    <div class="container"  ng-controller="TranslateController">

      <div class="navbar-header">
        

      </div>

      <ul class="nav navbar-nav navbar-left">
        <li><a href="#"><i class="fa fa-home"></i> Bookshop</a></li>
        <li><a href="#about"><i class="fa fa-shield"></i> @{{ 'ADDBOOK' | translate }}</a></li>
        <li><a href="#contact"><i class="fa fa-comment"></i> @{{ 'CONTACT' | translate }}</a></li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="{{ url('/prijava') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">@{{ 'REGISTER' | translate }}</a></li>
                    <li>    
  <a ng-click="changeLanguage('ba')" translate="BUTTON_TEXT_BA"></a></li>
   <li> <a ng-click="changeLanguage('en')" translate="BUTTON_TEXT_EN"></a></li>
      </ul>
    </div>
  </nav>

  <div id="main">
  
    <!-- angular templating -->
    <!-- this is where content will be injected -->
    <div ng-view></div>
    
  </div>
  
  <footer class="text-center">
   
  
    <p> <a href="www.bookshop.ba"> Copyright 2016</a></p>
  </footer>
  
</body>

</html>
