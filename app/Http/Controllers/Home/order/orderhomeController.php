<?php

namespace App\Http\Controllers\Home\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use Carbon\Carbon;
use Mail;
class orderhomeController extends Controller
{
    public function order(){
        $ship=30000;
        $order=order::all();
        $cart  = \Cart::getContent();
        return view('home.order.order',['cart'=>$cart]);
    }
    public function addorder(Request $request){
      
          $idp=$request->idp;
           $namecus=$request->namecus;
           $email=$request->email;
           $phone=$request->phone;
           $address=$request->address;
           $note = $request->note;
           $status=$request->status;
           $delipay=$request->delipay;
           $totalm=$request->totalm;
           //tạo product mới
           $order = new order;      
           $order->namecus=$namecus;
           $order->email=$email;
           $order->phone=$phone;
           $order->address=$address;
           $order->note=$note;
           $order->status=1;
           $order->delipay=1;
           $order->totalm=1;
          $order->idp=1;
   
           $order ->save();
           Mail::send('home.order.mailorder',[
            'namecus'=>$request->namecus,
            'body'=>$request->body,
            'phone'=>$phone,
            'address'=>$address,
            'note'=>$note,

            ],function($mail)use($request){
                $mail->to('nguyenquy290502@gmail.com',$request->name);
                $mail->from($request->email);
                $mail->subject('Sản phẩm');
            });
           return redirect('home/index');
    }
  
}
