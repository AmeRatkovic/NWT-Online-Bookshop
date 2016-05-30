<!DOCTYPE html>

<!-- define angular app -->
<html ng-app="scotchApp">

<head>
  <!-- SCROLLS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

  <!-- SPELLS -->


  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.3.3.js"></script>
   
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">




 <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-resource.min.js"></script>
<script src="bower-angular-translate-2.9.0.1/angular-translate.js"></script>
  <script src="ang/script.js"></script>
<script src="ang/scotchAppService.js"></script>
        <script src="bower_components/ngcart/ngCart.js"></script>
<script src="ang/commentService.js"></script>









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
        <li><a href="#/"><i class="fa fa-home"></i> Bookshop</a></li>
        <li><a href="#about"><i class="fa fa-shield"></i> @{{ 'ADDBOOK' | translate }}</a></li>
        <li><a href="#contact"><i class="fa fa-comment"></i> @{{ 'CONTACT' | translate }}</a></li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
        

 @if (Auth::guest())
                         <li><a href="{{ url('/prijava') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#"   aria-expanded="false">
                             @if (Auth::user()->Tip=='Admin')
                                {{ Auth::user()->Tip }} <span ></span>
                               @else
                                {{ Auth::user()->Ime }} <span ></span>
                                @endif
                            </a>

                            
                                <li><a href="{{ url('/odjava') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                           
                        </li>
                      
                    @endif




 <li> <a ng-click="changeLanguage('ba')" translate="BUTTON_TEXT_BA"></a></li>
   <li> <a ng-click="changeLanguage('en')" translate="BUTTON_TEXT_EN"></a></li>
       <li>

       <a href="#cart">
        <svg version="1.1" class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" xml:space="preserve">
      <path d="M27.715,10.48l-2.938,6.312c-0.082,0.264-0.477,0.968-1.318,0.968H11.831
        c-0.89,0-1.479-0.638-1.602-0.904l-2.048-6.524C7.629,8.514,8.715,7.933,9.462,7.933c0.748,0,14.915,0,16.805,0
        C27.947,7.933,28.17,9.389,27.715,10.48L27.715,10.48z M9.736,9.619c0.01,0.061,0.026,0.137,0.056,0.226l1.742,6.208
        c0.026,0.017,0.058,0.028,0.089,0.028h11.629l2.92-6.27c0.025-0.073,0.045-0.137,0.053-0.192H9.736L9.736,9.619z M13.544,25.534
        c-0.819,0-1.482-0.662-1.482-1.482s0.663-1.484,1.482-1.484c0.824,0,1.486,0.664,1.486,1.484S14.369,25.534,13.544,25.534
        L13.544,25.534z M23.375,25.534c-0.82,0-1.482-0.662-1.482-1.482s0.662-1.484,1.482-1.484c0.822,0,1.486,0.664,1.486,1.484
        S24.197,25.534,23.375,25.534L23.375,25.534z M24.576,21.575H13.965c-2.274,0-3.179-2.151-3.219-2.244
        c-0.012-0.024-0.021-0.053-0.028-0.076c0,0-3.56-12.118-3.834-13.05c-0.26-0.881-0.477-1.007-1.146-1.007H2.9
        c-0.455,0-0.82-0.364-0.82-0.818s0.365-0.82,0.82-0.82h2.841c1.827,0,2.4,1.103,2.715,2.181
        c0.264,0.898,3.569,12.146,3.821,12.999c0.087,0.188,0.611,1.197,1.688,1.197h10.611c0.451,0,0.818,0.368,0.818,0.818
        C25.395,21.21,25.027,21.575,24.576,21.575L24.576,21.575z"></path>
</svg>
    </a></li> 
    <li>
        <ngcart-summary ></ngcart-summary>
       </li>

       </li>

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




<script type="text/ng-template" id="template/ngCart/summary.html">

 
    <div class="col-md-6">@{{ ngCart.getTotalItems() }}
        <ng-pluralize count="ngCart.getTotalItems()" when="{1: 'book', 'other':'books'}"></ng-pluralize>
        @{{ ngCart.totalCost() | currency }}
    </div>

</script>



<script type="text/ng-template" id="template/ngCart/cart.html">
<div class="alert alert-warning" role="alert" ng-show="ngCart.getTotalItems() === 0">
    Your cart is empty
</div>

<div class="table-responsive col-lg-12" ng-show="ngCart.getTotalItems() > 0">

    <table class="table table-striped ngCart cart">

        <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Total</th>
        </tr>
        </thead>
        <tfoot>
        <tr ng-show="ngCart.getTax()">
            <td></td>
            <td></td>
            <td></td>
            <td>Tax (@{{ ngCart.getTaxRate() }}%):</td>
            <td>@{{ ngCart.getTax() | currency }}</td>
        </tr>
        <tr ng-show="ngCart.getShipping()">
            <td></td>
            <td></td>
            <td></td>
            <td>Shipping:</td>
            <td>@{{ ngCart.getShipping() | currency }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td>@{{ ngCart.totalCost() | currency }}</td>
        </tr>
        </tfoot>
        <tbody>
        <tr ng-repeat="item in ngCart.getCart().items track by $index">
            <td><span ng-click="ngCart.removeItemById(item.getId())" class="glyphicon glyphicon-remove"></span></td>

            <td>@{{ item.getName() }}</td>
            <td><span class="glyphicon glyphicon-minus" ng-class="{'disabled':item.getQuantity()==1}"
                      ng-click="item.setQuantity(-1, true)"></span>&nbsp;&nbsp;
                @{{ item.getQuantity() | number }}&nbsp;&nbsp;
                <span class="glyphicon glyphicon-plus" ng-click="item.setQuantity(1, true)"></span></td>
            <td>@{{ item.getPrice() | currency}}</td>
            <td>@{{ item.getTotal() | currency }}</td>
        </tr>
        </tbody>
    </table>
</div>

</script>

<script type="text/ng-template" id="template/ngCart/addtocart.html"><div ng-hide="attrs.id">
    <a class="btn btn-lg btn-primary" ng-disabled="true" ng-transclude></a>

</div>
<div ng-show="attrs.id">
    <div>
        <span ng-show="quantityMax">
            <select name="quantity" id="quantity" ng-model="q"
                    ng-options=" v for v in qtyOpt"></select>
        </span>
        <a class="btn btn-sm btn-primary"
           ng-click="ngCart.addItem(id, name, price, q, data)"
           ng-transclude></a>
    </div>
    <mark  ng-show="inCart()">
        This item is in your cart. <a ng-click="ngCart.removeItemById(id)" style="cursor: pointer;">Remove</a>
    </mark>
</div>
</script>

<script type="text/ng-template" id="template/ngCart/checkout.html">
    
<div ng-if="service=='http' || service == 'log'">
    <button class="btn btn-primary" ng-click="checkout()" ng-disabled="!ngCart.getTotalItems()" ng-transclude>Checkout</button>
</div>


<div ng-if="service=='paypal'">

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" ng-show="ngCart.getTotalItems()">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="@{{ settings.paypal.business }}">
        <input type="hidden" name="lc" value="CA">
        <input type="hidden" name="item_name" value="@{{ settings.paypal.item_name }}">
        <input type="hidden" name="item_number" value="@{{ settings.paypal.item_number }}">
        <input type="hidden" name="amount" value="@{{ ngCart.getSubTotal()}}">
        <input type="hidden" name="currency_code" value="@{{ settings.paypal.currency_code }}">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="tax_rate" value="0">
        <input type="hidden" name="shipping" value="0">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

</div>
    
</script>


</html>
