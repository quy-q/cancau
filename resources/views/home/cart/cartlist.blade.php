
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
  
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
     @include('home.layout.head')
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.html"><img src="assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
      
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
              <!-- BEGIN DROPDOWN MENU -->
           @include('home.layout.menu')
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
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Shopping cart</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                  <table>
                  <tr>
                    <th class="goods-page-image">Ảnh</th>
                    <th class="goods-page-description">Sản Phẩm</th>
                    <th class="goods-page-total" >Giá Tiền</th>
                    <th class="goods-page-quantity">Số Lượng</th>
                    <th class="goods-page-total" >Tổng Giá Tiền</th>
                  </tr>
                  <tbody>
                    @foreach ($cart as $item)
                  <tr>
                    <td class="goods-page-image">
                      <img name="UrlP" src="/img/cancau/{{$item->conditions[0]}}">
                    </td>
                    <td class="goods-page-description">
                     {{$item->name}}                  
                    </td>
                    <td class="goods-page-total">
                      <strong>{{ number_format($item->price, 0, ',', '.') }}<em>VND</em></strong>
                    </td>
                    
                        <form action="/home/cart/cartlist/updateCart" method="POST">    
                          @csrf            
                          <td class="goods-page-quantity">
                            <div class="product-quantity">
                                <input type="hidden" name="idp" value="{{$item->idp}}">
                                
                                <input data-max="120" size="10" class="quantity" pattern="[0-9]"  name="quantity" value="{{$item->quantity}}" min="1" type="text">
                                {{-- <button type="submit">Sửa</button> --}}
                              </div>
                            </td>
                        </form>
                      
                    <td class="goods-page-total">
                     
                    <strong>{{ number_format($subTotal=($item->price*$item->quantity), 0, ',', '.') }}<em>VND</em></strong>     
                    </td>
                    <form action="/home/cart/cartlist/deleteCart" method="POST" role="form">
                      @csrf
                    <td class="del-goods-col">
                      <input class="del-goods" value="{{ $item->idp }}" name="idp" type="hidden" />
                      <button class="del-goods" type="submit">x</button>
                    </td>
                  </form>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                  
      
                </div>

                <div class="shopping-total">
                  <ul>
                    <em>Tiền ship</em>
                    <strong>30.000 VND</strong>
                  </li>
                    <li>
                      <em>Tổng Tiền Sản Phẩm</em>
                      <strong class="price">{{$subTotal=($item->price*$item->quantity+30000)}} VND</strong>
                    </li>
                    <li>
                    
                  </ul>
                </div>
              </div>
              <a href="/home/product/productList" class="btn btn-default" type="submit">Tiếp tục mua hàng <i class="fa fa-shopping-cart"></i></a>
              <a class="btn btn-primary" href="/home/order" type="submit">Thanh Toán <i class="fa fa-check"></i></a>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Sản Phẩm Nổi Bật</h2>
            <div class="owl-carousel owl-carousel4">
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Thêm Vào Giỏ Hàng</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>

  
    <!-- END PRE-FOOTER -->
    @include('home.layout.footer')
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>