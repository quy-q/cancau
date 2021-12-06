<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formdangky()
    {
        $user=users::all();
        return view('admin.users.dangky');
    }
    public function dangky(Request $req){
        $FullName=$req->FullName;
        $UserName=$req->UserName;
        $email=$req->email;
        $role=$req->role;
        $password=bcrypt($req->password);
        $this->validate($req,[
            'FullName' => 'required',
            'UserName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ],[
            'FullName.required'=> 'Bạn phải nhập Tên',
            'UserName.required'=> 'Bạn phải nhập Họ và tên',
            'email.required'=> 'Bạn phải nhập email',
            'password.required'=> 'Bạn phải nhập Mật khẩu',
        ]);
        //tạo user mới
        $user = new users;      
        $user->FullName=$FullName;
        $user->UserName=$UserName;
        $user->email=$email;
        $user->password=$password;
        $user->role=$role;

        $user ->save();
        return redirect('admin/login');
    }
    public function userList()
    {
        $users = users::all();
        
        return view('admin.users.userList',['users'=>$users]);
    }
    public function createUser()
    {
        $user=users::all();
        return view('admin.users.createUser');
    }
    public function editUser($idu)
    {
        $user=users::find($idu);
        return view('admin.users.editUser',['user'=>$user]);
    }
    public function update(Request $req, $idu)
    {
        $input=$req->all();
        $idu=users::find($idu);
        $idu->FullName=$input['FullName'];
        $idu->UserName=$input['UserName'];
        $idu->Email=$input['Email'];
        $idu->Password=$input['Password'];
        $idu->role=$input['role'];
        $idu->save();  
        return redirect('admin/users/userList');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
           $FullName=$req->FullName;
           $UserName=$req->UserName;
           $Email=$req->Email;
           $Password=bcrypt($req->Password);
           $role=$req->role;
           //tạo product mới
           $user = new users;      
           $user->FullName=$FullName;
           $user->UserName=$UserName;
           $user->Email=$Email;
           $user->Password=$Password;
           $user->role=$role;
          
   
           $user ->save();
           return redirect('admin/users/userList');
    }
    public function delete($idu){
        users::find($idu)->delete();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
