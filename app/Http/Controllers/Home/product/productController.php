<?php


namespace App\Http\Controllers\Home\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Mail;
use Illuminate\Support\Collection;
use Darryldecode\Cart\Cart;
use App\Models\CategoryP;
use App\Models\order;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        $NameC= categoryP::all();
        $products=product::paginate(2);
        $cartItems=\Cart::getContent()->count();
      return view('home.product.productList',['products'=>$products],['cartItems'=> $cartItems])->with('NameC',$NameC);
    }
    public function productDetail($idp)
    {  
        $cartItems=\Cart::getContent()->count();
        $product=product::find($idp);
      return view('home.product.productDetail',['product'=>$product],['cartItems'=> $cartItems]);

    }
    public function category($idc){
        $category= categoryP::find($idc);
        return view('home.product.productDetail',['category'=>$category]);
    }
    
    public function cartlist()
    {
        $ship=30000;
        $cart  = \Cart::getContent();
        return view('home.cart.cartList',['cart'=>$cart]);
    }
public function addtocart(Request $request){
     
        \Cart::add($request->idp,$request->NameP,$request->Price,$request->quantity,$request->Price,[$request->UrlP]);
        session()->flash('success', 'Sản Phẩm Được Thêm Thành Công !');
      return redirect('home/cart/cartlist');
      }

      public function updateCart(Request $request)
      {
       
        \Cart::update(
            $request->idp,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Sửa thành công!');
       
          return redirect('home/cart/cartlist');
      }

      public function deleteCart(Request $request)
      {
          \Cart::remove($request->idp);
          session()->flash('success', 'Xóa thành công !');
  
          return redirect('home/cart/cartlist');
      }
  
      public function clearAllCart()
      {
          \Cart::clear();
  
          session()->flash('success', 'All Item Cart Clear Successfully !');
  
          return redirect()->route('cart.list');
      }
  
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

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
