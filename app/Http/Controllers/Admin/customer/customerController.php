<?php

namespace App\Http\Controllers\Admin\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customer(){
        return view('admin.customer.customer');
    }
   
}
