<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.layout.header')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng Nhập</p>
      <input type="hidden" name="role">
      @if (session('message')) <div class="alert alert-danger"> {{ session('message') }} </div> @endif
       <form action="users/login/store" method="POST">
        @csrf
        <div for="">Email</div>
        <div class="input-group mb-3">        
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       
        <div for="">Mật Khẩu</div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" value="remember" id="remember">
              <label for="remember">
                Nhớ Mật Khẩu
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
          </div>
          <!-- /.col -->
        </div>
       
      </form>
      <ul class="alert text-danger">
        @foreach ($errors ->all()  as $message)  
        <li>{{ $message }}</li>
        @endforeach
      </ul>
      
      <div class="social-auth-links text-center mb-3">

        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Đăng Nhập Với Google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Quên Mật Khẩu</a>
      </p>
      <p class="mb-0">
        <a href="/admin/users/formdangky" class="text-center">Đăng Ký</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@include('admin.layout.footer')

</body>
</html>
