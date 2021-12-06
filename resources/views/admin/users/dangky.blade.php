
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.header')
    <style>
        .content{
            width: 80%;
        }
    </style>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
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
      
              <h4 class="col-1 bg-primary text-center">Đăng kí</h4>
            <form method="POST" role="form" action="dangky">
              @csrf
              <input type="hidden" value="1" name="role">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" class="form-control" name="FullName" placeholder="Họ và tên">
                    @error('FullName')
                    <ul class="text-danger" style="width:300px">{{ $message }}</ul>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tài Khoản</label>
                    <input type="text" class="form-control" name="UserName"  placeholder="Tài khoản">
                    @error('UserName')
                    <ul class="text-danger" style="width:300px">{{ $message }}</ul>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    @error('email')
                    <ul class="text-danger" style="width:300px">{{ $message }}</ul>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mật Khẩu</label>
                    <input type="password" class="form-control" name="password"  placeholder="Mật khẩu">
                    @error('password')
                    <ul class="text-danger" style="width:300px">{{ $message }}</ul>
                @enderror
                  </div>
                  <input type="hidden" name="remember_token" value="">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
              </form>
             
            <!-- /.card -->
          </div>
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

</body>
</html>
