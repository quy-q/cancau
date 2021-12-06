
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
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Danh Sách Sản Phẩm</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    <th>Mô Tả</th>
                    <th>Số Lượng</th>
                    <th>Trạng Thái</th>
                    <th>Lựa Chọn</th>
                  </tr>
                  </thead>
                  @foreach ($products as $productitem)     
                  <tbody>
                  <tr>
                    <td>{{$productitem->idp}}</td>
                    <td> <img src="/img/cancau/{{$productitem->UrlP}}" width="60px" alt="sd"/></td>
                    <td>{{$productitem->NameP}}</td>
                    <td>{{$productitem->Price}}</td>
                    <td>{{$productitem->idc}}</td>
                    <td>{!! $productitem->Des !!}</td>
                    <td>{{$productitem->quantity}}</td>
                    <td>
                          @if ($productitem->AnHien == 1)
                            <span class="badge badge-success">Hoạt Động</span>
                        @else
                            <span class="badge badge-danger">Không Hoạt Động</span>
                        @endif
               
                   </td>
                    <td><a class="btn btn-success" href="/admin/productAdmin/editProduct/{{$productitem->idp}}">Sửa</a><a class="btn btn-danger"  href="/admin/product/productAdmin/deleteP/{{$productitem->idp}}">Xóa</a></td>
                  </tr>
                  @endforeach             
                  </tbody>
                </table>
              </div>
            </div>
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
