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
        <a class="site-logo" href="shop-index.html"><img src="assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
       @include('home.layout.menu')
            <!-- BEGIN TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span>Cần Câu Tay</span> Chính Hãng</h1>
        <em>Đa Dạng Mẫu Mã</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Men category</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
           @include('home.layout.categorylist')
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="row list-view-sorting clearfix">
              <div class="col-md-2 col-sm-2 list-view">
                <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                <a href="javascript:;"><i class="fa fa-th-list"></i></a>
              </div>
              <div class="col-md-10 col-sm-10">
                <div class="pull-right">
                  <label class="control-label">Lọc</label>
                  <select class="form-control input-sm">
                    <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Giá cao đến thấp</option>
                    <option value="#?sort=p.price&amp;order=DESC">Giá từ thấp đến cao</option>
                  </select>
                </div>
              </div>
            </div>
            
            <!-- BEGIN PRODUCT LIST -->
           
            <div class="row product-list" style="display:flex; flex:wrap">
              @foreach ($products as $item)
              <div class="col-md-4 col-sm-6 col-xs-12">
              <!-- PRODUCT ITEM START -->    
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/img/cancau/{{$item->UrlP}}" name="UrlP" width="100px" height="40px" class="img-responsive" alt="{{$item->NameP}}">
                    <div>
                        <a href="/img/cancau/{{$item->UrlP}}" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="/home/product/productDetail/{{$item->idp}}" class="btn btn-default fancybox-fast-view">Xem</a>
                    </div>
                  </div>
                  <h3><a href="/home/product/productDetail/{{$item->idp}}" name="NameP">{{$item->NameP}}</a></h3>
                  <div class="pi-price" name="Price">${{$item->Price}}</div>
                  <button type="submit"  class="btn btn-default add2cart">Thêm vào giỏ hàng</button>
                </div>
              
              <form action="/home/cart/cartlist/addtocart" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $item->idp }}" name="idp">
                <input type="hidden" value="{{ $item->NameP }}" name="NameP">
                <input type="hidden" value="{{ $item->Price }}" name="Price">
                <input type="hidden" value="{{ $item->UrlP }}"  name="UrlP">
                <input type="hidden" value="1" name="quantity">
            </form>
              <!-- PRODUCT ITEM END -->
            </div>
            @endforeach
            </div>
            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            <div class="row">
              <div class="col-md-4 col-sm-4 items-info"></div>
              <div class="col-md-8 col-sm-8">
                <ul class="pagination pull-right">
                 {{ $products->links() }}
                </ul>
              </div>
            </div>
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
    <!-- BEGIN fast view of a product -->
    @include('home.layout.footer')
    <!-- END fast view of a product -->
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>