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

  <!--CSS
<script src="pages/administracija/ng-admin/build/ng-admin.min.js" type="text/javascript"></script>


  -->
  <link rel="stylesheet" href="pages/administracija/ng-admin/build/ng-admin.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/fontello.css">
  <link rel="stylesheet" type="text/css" href="assets/css/settings.css" media="screen" />
  <link rel="stylesheet" href="assets/css/animation.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">
  <link rel="stylesheet" href="assets/css/chosen.css">

  <!--Admin-->

  <link rel="stylesheet" href="pages/administracija/bower_components/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="pages/administracija/bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="pages/administracija/bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="pages/administracija/css/font.css" type="text/css" />
  <link rel="stylesheet" href="pages/administracija/css/app.css" type="text/css" />
  <script>var baseUrl = "{{url('/')}}/";</script>
</head>
<body ng-controller="mainController">
<!-- Container -->
<div class="container" ng-controller="TranslateController">
  <header class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

      <!-- Top Header -->
      <div id="top-header">

        <div class="row">

          <nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
            <ul class="pull-left">
              <li><a href="#">@{{ 'LOREM1' | translate }}</a></li>
              <li><a href="#">@{{ 'LOREM2' | translate }}</a></li>
              <li><a href="#">@{{ 'LOREM3' | translate }}</a></li>
              <li><a href="#">@{{ 'LOREM4' | translate }}</a></li>
              <li><a href="#">@{{ 'LOREM5' | translate }}</a></li>
            </ul>
          </nav>

          <nav class="col-lg-5 col-md-5 col-sm-5">
            <ul class="pull-right">
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
            </ul>

          </nav>

        </div>

      </div>
      <!-- /Top Header -->



      <!-- Main Header -->
      <div id="main-header">

        <div class="row">

          <div id="logo" class="col-lg-4 col-md-4 col-sm-4">
            <a href="#l"><img src="assets/slike/logo.png" alt="Logo"></a>
          </div>

          <nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
            <ul class="pull-right">
              <li class="orange"><a href="#/cart">
<ngcart-summary ></ngcart-summary>
</a>
                <ul id="cart-dropdown" class="box-dropdown parent-arrow">
                  <li>
                    <div class="box-wrapper parent-border">
                      <p>Recently added item(s)</p>

                      <ngcart-cart></ngcart-cart>

                      <br class="clearfix">
                    </div>


                    <div class="box-wrapper no-border">
                      <a class="button pull-right parent-background" href="#/cart">Checkout</a>
                      <a class="button pull-right" href="#/cart">@{{ 'CART' | translate }}</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a ng-click="changeLanguage('en')" translate="BUTTON_TEXT_EN"></a>
                <ul class="box-dropdown parent-arrow">
                  <li>
                    <div class="box-wrapper no-padding parent-border">
                      <table class="language-table">
                        <tr>
                  <li><a ng-click="changeLanguage('ba')" translate="BUTTON_TEXT_BA"></a></li>
                </ul>
              </li>
            </ul>
            </tr>
            </table>

        </div>
        </li>
        </ul>

        </li>
        </ul>
        </nav>

      </div>

    </div>
    <!-- /Main Header ---------------------------------------------->

    <!-- Main Navigation ------------------------------------------------------------>
    <nav id="main-navigation" class="style1">
      <ul>

        <li class="home-green current-item" style="
    width: 209px;
">
          <a href="#/">

            <span class="nav-caption">@{{ 'HOME' | translate }}</span>
            <!-- <span class="nav-description">Variety of Layouts</span>-->
          </a>
        </li>


      
        @if (Auth::guest())
                   <h6></h6>      
                    @else
                        
                             @if (Auth::user()->Tip=='Admin')
                               <li class="red">
                               <a href="#about">

            <span class="nav-caption">@{{ 'ADDBOOKK' | translate }}</span>
          </a></li>
          <li class="red">
          <a href="#contact">

            <span class="nav-caption">@{{ 'CONTACT' | translate }}</span>
          </a>
        </li>

        <li class="red">
          <a href="#administracija">

            <span class="nav-caption">@{{ 'ADMIN' | translate }}</span>

          </a>
        </li>

        <li class="red">
          <a href="#knjiga">

            <span class="nav-caption">@{{ 'KNJIGA' | translate }}</span>

          </a>
        </li>
                               

                                @endif
                          
                    @endif
        
      

        <li class="nav-search">
         <a href="#search">
          <i class="icons icon-search-1"></i>
          </a>
        </li>

      </ul>

      
    </nav>
  </header>


  <div ng-view> </div>


  <div class="products-row row">
    <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
  <section class="banner">
    <div class="left-side-banner banner-item icon-on-right gray">
      <h4>00387 00 00 00</h4>
      <p>@{{ 'MODAY' | translate }}-@{{ 'SATURDAY' | translate }}: 8h - 16h</p>
      <i class="icons icon-phone-outline"></i>
    </div>

    <a href="#">
      <div class="middle-banner banner-item icon-on-left light-blue">
        <h4>@{{ 'SHIPPING' | translate }}</h4>
        <p>@{{ 'LOREM' | translate }}</p>
        <span class="button">@{{ 'MORE' | translate }}</span>
        <i class="icons icon-truck-1"></i>
      </div>
    </a>

    <a href="#">
      <div class="right-side-banner banner-item orange">
        <h4>@{{ 'SALE' | translate }}</h4>
        <p>@{{ 'LOREM' | translate }}</p>
        <span class="button">@{{ 'SHOPNOW' | translate }}</span>
      </div>
    </a>

  </section>
  <!-- /Banner -->

  <!-- Footer -->
  <footer id="footer" class="row">
    <!-- Upper Footer -->
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div id="upper-footer">
        <div class="row">
          <!-- Newsletter -->
          <div class="col-lg-7 col-md-7 col-sm-7">
            <form id="newsletter" action="php/newsletter.php">
              <h4>@{{ 'NEWSLETTER' | translate }}</h4>
              <input type="text" name="newsletter-email" placeholder="Enter your email address">
              <input type="submit" name="newsletter-submit" value="@{{ 'SUBMIT' | translate }}">
            </form>
          </div>
          <!-- /Newsletter -->


          <!-- Social Media -->
          <div class="col-lg-5 col-md-5 col-sm-5 social-media">
            <h4>@{{ 'STAYCON' | translate }}</h4>
            <ul>
              <li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
              <li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
              <li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
              <li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
              <li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
            </ul>
          </div>
          <!-- /Social Media -->

        </div>

      </div>

    </div>
    <!-- /Upper Footer -->



    <!-- Main Footer -->
    <div class="col-lg-12 col-md-12 col-sm-12">

      <div id="main-footer">

        <div class="row">

          <!-- The Service -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <h4>@{{ 'THESERVICE' | translate }}</h4>
            <ul>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM1' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM2' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM3' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM4' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM5' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM6' | translate }}</a></li>
            </ul>
          </div>
          <!-- /The Service -->


          <!-- Like us on Facebook -->
          <div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
            <h4>@{{ 'FACEBOOK' | translate }}</h4>
            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
          </div>
          <!-- /Like us on Facebook -->


          <!-- Information -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <h4>@{{ 'INFORMATION' | translate }}</h4>
            <ul>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM1' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM2' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM3' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM4' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM5' | translate }}</a></li>
              <li><a href="#"><i class="icons icon-right-dir"></i> @{{ 'LOREM6' | translate }}</a></li>
            </ul>
          </div>
          <!-- /Information -->


          <!-- Contact Us -->
          <div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
            <h4>@{{ 'CONTACTUS' | translate }}</h4>
            <ul>
              <li><i class="icons icon-location"></i>@{{ 'BIH' | translate }} </li>
              <li><i class="icons icon-phone"></i> +387 0 00 00 </li>
              <li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
              <li><i class="icons icon-skype"></i> bookshop</li>
            </ul>
          </div>
          <!-- /Contact Us -->

        </div>

      </div>

    </div>
    <!-- /Main Footer -->



    <!-- Lower Footer -->
    <div class="col-lg-12 col-md-12 col-sm-12">

      <div id="lower-footer">

        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="copyright">Copyright 2016 <a href="#">BookShop</a>. All Rights Reserved.</p>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <ul class="payment-list">
              <li class="payment1"></li>
              <li class="payment2"></li>
              <li class="payment3"></li>
              <li class="payment4"></li>
              <li class="payment5"></li>
            </ul>
          </div>

        </div>

      </div>

    </div>
    <!-- /Lower Footer -->

  </footer>
  <!-- Footer -->


  <div id="back-to-top">
    <i class="icon-up-dir"></i>
  </div>
</div>
</div>
</body>

<!-- JavaScript -->
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.raty.min.js"></script>

<!-- Scroll Bar -->
<script src="assets/js/perfect-scrollbar.min.js"></script>

<!-- Cloud Zoom -->
<script src="assets/js/zoomsl-3.0.min.js"></script>

<!-- FancyBox -->
<script src="assets/js/jquery.fancybox.pack.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="assets/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>

<!-- FlexSlider -->
<script defer src="assets/js/flexslider.min.js"></script>

<!-- IOS Slider -->
<script src = "assets/js/jquery.iosslider.min.js"></script>

<!-- noUi Slider -->
<script src="assets/js/jquery.nouislider.min.js"></script>

<!-- Owl Carousel -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Cloud Zoom -->
<script src="assets/js/zoomsl-3.0.min.js"></script>

<!-- SelectJS -->
<script src="assets/js/chosen.jquery.min.js" type="text/javascript"></script>

<!-- Main JS -->
<script defer src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main-script.js"></script>
<!--Admin-->
<script src="pages/administracija/bower_components/jquery/dist/jquery.min.js"></script>
<script src="pages/administracija/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="pages/administracija/js/ui-load.js"></script>
<script src="pages/administracija/js/ui-jp.config.js"></script>
<script src="pages/administracija/js/ui-jp.js"></script>
<script src="pages/administracija/js/ui-nav.js"></script>
<script src="pages/administracija/js/ui-toggle.js"></script>



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
        <span class="add-to-cart"
          ng-click="ngCart.addItem(id, name, price, q, data)" style="
    width: 60px;
    padding-top: 10px;
    padding-bottom: 13px;
    padding-right: 22px;
    padding-left: 0px;
    border-left-width: 5px;
    border-top-width: 10px;">
  
       <i class="icons icon-basket-2"></i>
       <span class="action-name"> </span>
        </span >
       
    </div>
  
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
