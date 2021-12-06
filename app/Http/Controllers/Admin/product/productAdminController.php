<?php

namespace App\Http\Controllers\Admin\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryP;
class productAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Product
    public function productList()
    {  
        $NameC= categoryP::all();
        $products=product::all();
        
        return view('admin.productAdmin.productList',["products"=>$products])->with('NameC',$NameC);
    }
    public function createProduct()
    {
        $NameC= categoryP::all();
        $products=product::all();
        return view('admin.productAdmin.createProduct')->with('NameC',$NameC);
    }
    public function editProduct($idp)
    {
        $NameC= categoryP::all();
        $product=product::find($idp);
        return view('admin.productAdmin.editProduct',["product"=>$product])->with('NameC',$NameC);
    }
    public function create(Request $req){


        if($req ->has('UrlPs')){
         $file =$req ->UrlPs;
           $exp = $req ->UrlPs->extension();
           $file_name = time() . '-' . 'product' . '.' . $exp;
           $file -> move(public_path('img/cancau'),$file_name);
        }
        $req->merge(['UrlP' => $file_name]);

        $UrlP=$req->UrlP;
        $NameP=$req->NameP;
        $Price=$req->Price;
        $Des=$req->Des;
        $NameC=$req->NameC;
        $quantity = $req->quantity;
        $AnHien=$req->AnHien;
        //tạo product mới
        $product = new product;      
        $product->UrlP=$UrlP;
        $product->NameP=$NameP;
        $product->Price=$Price;
        $product->Des=$Des;
        $product->idc=$NameC;
        $product->quantity=$quantity;
        $product->AnHien=$AnHien;

        $product ->save();
       
        return redirect()->away('http://localhost:8000/admin/productAdmin/productList');

    }
    public function update(Request $req,$idp){

        
        $idp=Product::find($idp);
        if($req ->has('UrlPs')){
         $file =$req ->UrlPs;
           $exp = $req ->UrlPs->extension();
           $file_name = time() . '-' . 'product' . '.' . $exp;
           $file -> move(public_path('img/cancau'),$file_name);
           $req->merge(['UrlP' => $file_name]);
           $input=$req->all();
        $idp->UrlP=$input['UrlP'];
        $idp->NameP=$input['NameP'];
        $idp->Price=$input['Price'];
        $idp->Des=$input['Des'];
        $idp->IdC=$input['NameC'];
        $idp->quantity=$input['quantity'];
        $idp->AnHien=$input['AnHien'];
        $idp->save();  
        return redirect()->away('http://localhost:8000/admin/productAdmin/productList');
        }
        else{
            $file_name=$idp->UrlP;
            $req->merge(['UrlP' => $file_name]);
            $input=$req->all();
            
            $idp->UrlP=$input['UrlP'];
            $idp->NameP=$input['NameP'];
            $idp->Price=$input['Price'];
            $idp->Des=$input['Des'];
            $idp->IdC=$input['NameC'];
            $idp->quantity=$input['quantity'];
            $idp->AnHien=$input['AnHien'];
            $idp->save();  
            return redirect('admin/productAdmin/productList');
    
        }
       
    }
    public function deleteP($idp){
        Product::find($idp)->delete();
        return redirect()->away('http://localhost:8000/admin/productAdmin/productList');
    
    }
    // Category
    public function cateList()
    {
        $categoryp=categoryp::all();
        return view('admin.cateAdmin.cateList',["categoryp"=>$categoryp]);
    }
    public function createCate()
    {
        $categoryp= categoryp::all();
        return view('admin.cateAdmin.createCate',['categoryp'=>$categoryp]);
    }
    public function editCate($idc)
    {
        $categoryp= categoryp::all();
        $categoryp=categoryp::find($idc);
        return view('admin.cateAdmin.editCate',['categoryp'=>$categoryp]);
    }
    public function createC(Request $req){ 
           $NameC=$req->NameC;
           $DesC=$req->DesC;
           //tạo cate mới
           $categoryp = new categoryP;      
           $categoryp->NameC=$NameC;
           $categoryp->DesC=$DesC;
           $categoryp ->save();
           return redirect()->away('http://localhost:8000/admin/cateAdmin/cateList');
    }
    public function updateC(Request $req,$idc){
        $input=$req->all();
        $idc=categoryp::find($idc);
        $idc->NameC=$input['NameC'];
        $idc->DesC=$input['DesC'];
        $idc->save(); 
        return redirect()->away('http://localhost:8000/admin/cateAdmin/cateList');
    }
    public function deleteC($idc){
        categoryp::find($idc)->delete();
        return redirect()->away('http://localhost:8000/admin/cateAdmin/cateList');
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
