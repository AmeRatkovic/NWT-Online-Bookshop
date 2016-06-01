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
 <!--
  <script src="ang/services/crudService.js"></script>
  <script src="ang/services/app.js"></script>
  <script src="ang/js/Controller.js"></script>
  <script src="ang/js/postController.js"></script>

  <script src="ang/knjigaController.js"></script>

-->
  <!--<script src="ang/controllers.js"></script>-->
  <script src="pages/administracija/ng-admin/build/ng-admin.min.js" type="text/javascript"></script>
  <!--CSS-->
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
              <li class="purple"><a href="{{ url('/prijava') }}"><i class="icons icon-user-3"></i>@{{ 'LOGIN' | translate }}</a>
                <!--
                <ul id="login-dropdown" class="box-dropdown">
                  <li>
                    <div class="box-wrapper">
                      <h4>Login</h4>
                      <div class="iconic-input">
                        <input type="text" placeholder="Username">
                        <i class="icons icon-user-3"></i>
                      </div>
                      <div class="iconic-input">
                        <input type="text" placeholder="Password">
                        <i class="icons icon-lock"></i>
                      </div>
                      <input type="checkbox" id="loginremember"> <label for="loginremember">Remember me</label>
                      <br>
                      <br>
                      <div class="pull-left">
                        <input type="submit" class="orange" value="Login">
                      </div>
                      <div class="pull-right">
                        <a href="#">Forgot your password?</a>
                        <br>
                        <a href="#">Forgot your username?</a>
                        <br>
                      </div>
                      <br class="clearfix">
                    </div>
                    <div class="footer">
                      <h4 class="pull-left">NEW CUSTOMER?</h4>
                      <a class="button pull-right" href="Registar"</a>
                    </div>
                  </li>
                </ul>
              </li>
              -->
              <li><a href="{{ url('/register') }}"><i class="icons icon-lock"></i>@{{ 'REGISTER' | translate }}</a></li>
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
              <li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>17 Items</a>
                <ul id="cart-dropdown" class="box-dropdown parent-arrow">
                  <li>
                    <div class="box-wrapper parent-border">
                      <p>Recently added item(s)</p>

                      <table class="cart-table">
                        <tr>
                          <td><img src="assets/slike/products/sample1.jpg" alt="product"></td>
                          <td>
                            <h6>Lorem ipsum dolor</h6>
                            <p>Product code PSBJ3</p>
                          </td>
                          <td>
                            <span class="quantity"><span class="light">1 x</span> $79.00</span>
                            <a href="#" class="parent-color">Remove</a>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="assets/slike/products/sample1.jpg" alt="product"></td>
                          <td>
                            <h6>Lorem ipsum dolor</h6>
                            <p>Product code PSBJ3</p>
                          </td>
                          <td>
                            <span class="quantity"><span class="light">1 x</span> $79.00</span>
                            <a href="#" class="parent-color">Remove</a>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="assets/slike/products/sample1.jpg" alt="product"></td>
                          <td>
                            <h6>Lorem ipsum dolor</h6>
                            <p>Product code PSBJ3</p>
                          </td>
                          <td>
                            <span class="quantity"><span class="light">1 x</span> $79.00</span>
                            <a href="#" class="parent-color">Remove</a>
                          </td>
                        </tr>
                      </table>

                      <br class="clearfix">
                    </div>

                    <div class="footer">
                      <table class="checkout-table pull-right">
                        <tr>
                          <td class="align-right">Tax:</td>
                          <td>$0.00</td>
                        </tr>
                        <tr>
                          <td class="align-right">Discount:</td>
                          <td>$37.00</td>
                        </tr>
                        <tr>
                          <td class="align-right"><strong>Total:</strong></td>
                          <td><strong class="parent-color">$999.00</strong></td>
                        </tr>
                      </table>
                    </div>

                    <div class="box-wrapper no-border">
                      <a class="button pull-right parent-background" href="#">Checkout</a>
                      <a class="button pull-right" href="order_info.html">@{{ 'CART' | translate }}</a>
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

        <li class="home-green current-item">
          <a href="#">

            <span class="nav-caption">@{{ 'HOME' | translate }}</span>
            <!-- <span class="nav-description">Variety of Layouts</span>-->
          </a>
        </li>


        <li class="red">
          <a href="#about">

            <span class="nav-caption">@{{ 'ADDBOOK' | translate }}</span>
          </a>
        </li>

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

        <li class="red">
          <a href="contact.html">

            <span class="nav-caption">Contact</span>
          </a>
        </li>

        <li class="nav-search">
          <i class="icons icon-search-1"></i>
        </li>

      </ul>

      <div id="search-bar">

        <div class="col-lg-12 col-md-12 col-sm-12">
          <table id="search-bar-table">
            <tr>
              <td class="search-column-1">
                <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                <input type="text" placeholder="Enter your keyword">
              </td>
              <td class="search-column-2">
                <p class="align-right"><a href="#">Advanced Search</a></p>
              </td>
            </tr>
          </table>
        </div>
        <div id="search-button">
          <input type="submit" value="">
          <i class="icons icon-search-1"></i>
        </div>
      </div>

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
</html>
