
<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.layout.header')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
     @include('admin.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản Trị</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
              <h4 class="col-2 bg-primary text-center">Sửa Sản Phẩm</h4>
            <form action="/admin/orderController/update/{{$order->ido}}" method="POST" enctype="multipart/form-data">
              @csrf
          
              <input type="hidden" value="{{$order->ido}}" name="idp">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Khách Hàng</label>
                    <input type="text" class="form-control" value="{{$order->NameCus}}" name="NameCus" placeholder="Tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Địa Chỉ</label>
                    <input type="text" class="form-control" value="{{$order->Address}}" name="Address"  placeholder="Giá tiền">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiền Ship</label>
                    <input type="text" class="form-control" value="{{$order->ShipM}}" name="ShipM"  placeholder="Mô Tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                    <input type="text" class="form-control" value="{{$order->TotalIP}}" name="TotaIP"  placeholder="Mô Tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Đặt Hàng</label>
                    <input type="text" class="form-control" value="{{$order->OrderDay}}" name="OrderDay"  placeholder="Mô Tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Giao Hàng</label>
                    <input type="text" class="form-control" value="{{$order->ShipDay}}" name="ShipDay"  placeholder="Mô Tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng Thái</label>
                    <select class="form-control" value="{{$order->statusO}}" name="AnHien" id="exampleFormControlSelect2">
                      <option value="1">Đã Giao</option>
                      <option value="0">Chưa Vận Chuyển</option>
                  </select>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thanh Toán</label>
                    <select class="form-control" value="{{$order->status}}" name="AnHien" id="exampleFormControlSelect2">
                      <option value="1">Đã Thanh Toán</option>
                      <option value="0">Thanh Chưa Thanh Toán</option>
                  </select>    
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
              </form>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/template/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/template/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/template/admin/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/template/admin/dist/js/pages/dashboard3.js"></script>
</body>
</html>
