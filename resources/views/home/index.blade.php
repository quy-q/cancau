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
        <a class="site-logo" href="shop-index.html"><img src="https://bizweb.dktcdn.net/100/416/287/themes/805175/assets/logo.png?1622038281062" alt="NDQ"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
            <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                <li>
                  <a href="shop-item.html"><img src="/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
               
              </ul>
              <div class="text-right">
                <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
      @include('home.layout.menu')
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                Cá Ở <br/><span class="color-red-v2">ĐÂYYYYY</span><br/> Chứ Đâu
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Đồng hành cùng cần thủ trên mọi nẻo sông</p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Thanh Toán Dễ Dàng
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                Sale Nhiệt Tình
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Quà Tặng Hấp Dẫn
                            </p>
                        </div>
                      
                    </div>
                </div>

                <!-- Third slide -->
      

                <!-- Fourth slide -->
         

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        
        <div class="row margin-bottom-40">
          
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Sản Phẩm Mới</h2>
            
            <div class="owl-carousel owl-carousel5">
              @foreach ($products as $item)
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/img/cancau/{{$item->UrlP}}" class="img-responsive" alt="Berry Lace Dress">
             
                      <a href="/img/cancau/{{$item->UrlP}}" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="/home/product/productDetail/{{$item->idp}}" class="btn btn-default fancybox-fast-view">View</a>
                 
                  </div>
                  <h3><a href="shop-item.html">{{$item->NameP}}</a></h3>
                  <div class="pi-price">{{$item->Price}}</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Thêm Vào Giỏ Hàng</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              
              @endforeach
              <div>        
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
       @include('home.layout.categorylist')
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>Sản Phẩm Bán Chạy</h2>
            
                
           
            <div class="owl-carousel owl-carousel3">
              @foreach ($productss as $itemsp)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/img/cancau/{{$itemsp->UrlP}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/img/cancau/{{$itemsp->UrlP}}" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="/home/product/productDetail/{{$item->idp}}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">{{$itemsp->NameP}}</a></h3>
                  <div class="pi-price">{{$itemsp->Price}}</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <h2>Tin Tức Nổi Bật</h2>
            <div class="owl-carousel owl-carousel3">
              @foreach ($productsss as $itemsp)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/img/cancau/{{$itemsp->UrlP}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="/img/cancau/{{$itemsp->UrlP}}" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="/home/product/productDetail/{{$item->idp}}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">{{$itemsp->NameP}}</a></h3>
                  <div class="pi-price">{{$itemsp->Price}}</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Thêm Vào Giỏ Hàng</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              @endforeach
           
            
            
             
               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


    <!-- BEGIN STEPS -->
   

    <!-- BEGIN PRE-FOOTER -->
    


    @include('home.layout.footer')
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>