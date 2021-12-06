<?php

namespace App\Http\Controllers\Admin\Users;
use Illuminate\Support\Facades\Auth;
Use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function login()
    {
        return view('admin.users.login',[
        'title'=>'Đăng Nhập Hệ Thống'
    ]);
    }
    public function store(Request $request){
  
      $this->validate($request,[
         'email'=>'required|email:filter',
         'password'=>'required',
      ],[
          'email.required'=>'Bạn phải nhập email',
          'password.required'=>'Bạn phải nhập password',
      ]);
        if (Auth::attempt (['email'=>$request->input('email'),'password'=>$request->input('password')])){
              if(Auth::user()->role==1){
                return redirect('admin/index')->with('message','Đăng nhập thành công');
              }

              else {
                return redirect('home/index')->with('message','Đăng nhập thành công');
              }
          
        }
       else
        return redirect()->back()->with('message','Email hoặc mật khẩu sai');  
    }
}