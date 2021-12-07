
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
      
                
              <!-- BEGIN DROPDOWN MENU -->
              @include('home.layout..menu')
            <!-- BEGIN TOP SEARCH -->
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Cool green dress with red bell</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          
          <div class="sidebar col-md-2 col-sm-5">

            <div class="sidebar-products clearfix">
              
              <h2>Sản Phẩm Bán Chạy</h2>
              <div class="item">
                <a href="shop-item.html"><img src="/assets/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$31.00</div>
              </div>
            </div>
          </div>
          <!-- END SIDEBAR -->
@if (session('message'))
    <div>{{session('message')}}</div>
@endif
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="/img/cancau/{{$product->UrlP}}" name="UrlP" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="/img/cancau/{{$product->UrlP}}">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1 >{{$product->NameP}}</h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong >{{ number_format($product->Price, 0, ',', '.') }} <em> VND</em></strong>

                    </div>
                    <div class="availability">
                 
                    </div>
                  </div>
                  <div class="description">
                    <p>  {!!$product->Des !!}</p>
                  </div>
                  <form action="/home/cart/cartlist/addtocart" method="post">
                    @csrf 
                    <input type="hidden" name="idp" value="{{$product->idp}}">
                    <input type="hidden" name="NameP" value="{{$product->NameP}}">
                    <input type="hidden" name="Price" value="{{$product->Price}}">
                    <input type="hidden" name ="UrlP" value="{{$product->UrlP}}">
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm">
                    </div>     
                    <button type="submit" class="btn btn-primary" >Thêm Vào Giỏ Hàng </button>
                  </div>
                </form>
                  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                  </ul>
                </div>

                <div class="product-page-content">
                  <ul id="" class="nav nav-tabs">
                    <li>Mô Tả</li>
                  </ul>

                    <div >
                      <p>{!! $product->Des !!} </p>
                    </div>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </form>
              </div>
            </div>
          </div>

          <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
              <h2>Sản Phẩm Phổ Biến</h2>
              <div class="owl-carousel owl-carousel4">
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="/assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                      <div>
                        <a href="/assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                      </div>
                    </div>
                    <h3><a href="shop-item.html"></a></h3>
                    <div class="pi-price">$29.00</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                    <div class="sticker sticker-new"></div>
                  </div>
                </div>
               </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>

   
     
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>

  

    <!-- BEGIN FOOTER -->
 @include('home.layout.footer')
</body>
<!-- END BODY -->
</html>