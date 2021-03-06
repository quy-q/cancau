
<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
 @include('home.layout.header')
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
   @include('home.layout.head')
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.html"><img src="/assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <i class="fa fa-shopping-cart"></i>
                        
        
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        @include('home.layout.menu')
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang Ch???</a></li>
            <li><a href="">Trang</a></li>
            <li class="active">Li??n H???</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
      
          <div class="sidebar col-md-3 col-sm-3">
           

            <h2>Li??n H???</h2>
            <address>
              388 Quang Trung<br>
             Qu???n 12, HCM<br>
              <abbr title="Phone">P:</abbr> 0865657540<br>
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="mailto:info@metronic.com">quyndps14345@fpt.edu.vn</a><br>
              <a href="mailto:support@metronic.com">nguyenquy290500@gmail.com</a>
            </address>
            <ul class="social-icons margin-bottom-10">
              <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
              <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
              <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
              <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
              <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Li??n H???</h1>
            <div class="content-page">
              <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>

              <h2>Form Li??n H???</h2>          
              <!-- BEGIN FORM-->
              <form action="/home/mailcontact" method="POST" class="default-form" role="form">
                @csrf
                <div class="form-group">
                  <label for="email">Email <span class="require">*</span></label>
                  <input type="text" value="" name="email" class="form-control" id="email">
                </div>
     
                <div class="form-group">
                  <label for="name">T??n</label>
                  <input type="text" value="" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="message">N???i dung</label>
                  <textarea class="form-control" name="body" rows="8" id="message"></textarea>
                </div>
                <div class="padding-top-20">                  
                  <button type="submit" class="btn btn-primary">G???i</button>
                </div>
              </form>
              <!-- END FORM-->          
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

   @include('home.layout.footer')
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html> 