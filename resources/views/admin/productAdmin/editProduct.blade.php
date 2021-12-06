
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
            <form action="/admin/productAdmin/update/{{$product->idp}}" method="POST" enctype="multipart/form-data">
              @csrf
          
              <input type="hidden" value="{{$product->idp}}" name="idp">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" value="{{$product->NameP}}" name="NameP" placeholder="Tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá Tiền</label>
                    <input type="text" class="form-control" value="{{$product->Price}}" name="Price"  placeholder="Giá tiền">
                  </div>
                  <div class="form-group">
                    <label class=" control-label" for="Des">Mô Tả</label>
                    <div class="">  <textarea name="Des" id="Des"><?Php echo $product['Des'] ; ?></textarea>
                        <script>
                            CKEDITOR.replace('Des');
                        </script>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Loại</label>
                    <select class="form-control" name="NameC" value="{{$product->NameC}}" id="exampleFormControlSelect2">
                     <?php  
                     foreach ($NameC as $value): ?> 
                         <option value="{{$value['idc']}}">{{$value['NameC']}}</option>
                     <?php  endforeach ?>
                    </select>
                  </div>
                 <?php             
                 ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng Thái</label>
                    <select class="form-control" value="{{$product->AnHien}}" name="AnHien" id="exampleFormControlSelect2">
                      <option value="1">Hoạt Động</option>
                      <option value="0">Không Hoạt Động</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Số Lượng</label>
                    <input type="text" class="form-control" value="{{$product->quantity}}"  name="quantity" placeholder="Số lượng Sản Phẩm">
                  </div>          
                  <div class="form-group">
                    <label for="exampleInputFile">Hình Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="UrlPs" style="color:transparent; width:80px;" id="exampleInputFile">
                        <input type="text" value="{{$product->UrlP}}">
                      </div>
                    </div>
                  </div>
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
