<?php

namespace App\Http\Controllers\Admin\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;

class orderController extends Controller
{
    public function orderList(){
        $orders=order::all();
        return view('admin.order.orderList',['orders'=>$orders]);
    }
    public function editOrder($ido){
        $order=order::find($ido);
        return view('admin.order.editOrder.',["order"=>$order]);
    }
    public function update($ido){

    }
}
