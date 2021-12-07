<?php

use Illuminate\Support\Facades\Route;
//Home
use \App\Http\Controllers\Home\homeController;
use \App\Http\Controllers\Home\product\productController;
use \App\Http\Controllers\Home\contact\contactController;
use \App\Http\Controllers\Home\faq\faqController;
use \App\Http\Controllers\Home\introduce\introduceController;
use \App\Http\Controllers\Home\order\orderhomeController;
//Admin
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\dashboard\dashboardController;
use \App\Http\Controllers\Admin\product\productAdminController;
use \App\Http\Controllers\Admin\Users\userController;
use \App\Http\Controllers\Admin\customer\customerController;
use \App\Http\Controllers\Admin\order\orderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Phần Home
Route::GET('admin/login',[LoginController::class,'login']);
Route::POST('admin/users/login/store',[LoginController::class,'store']);
Route::GET('home/index',[homeController::class,'index']);
// Phần product
Route::GET('home/product/productList',[productController::class,'productList']);
Route::GET('home/product/productDetail/{idp}',[productController::class,'productDetail']);
// Phần Contact
Route::GET('home/contact/contactHome',[contactController::class,'contact']);
// Giỏ Hàng
Route::GET('home/cart/cartlist',[productController::class,'cartlist']);
Route::POST('home/cart/cartlist/addtocart',[productController::class,'addtocart']);
Route::POST('home/cart/cartlist/updateCart',[productController::class,'updateCart']);
Route::POST('home/cart/cartlist/deleteCart',[productController::class,'deleteCart']);
// Phần Hỏi Đáp
Route::GET('home/faq/faqHome',[faqController::class,'faq']);
// Phần Giới Thiếu
Route::GET('home/introduce/introduceHome',[introduceController::class,'introduce']);
//phần checkout
Route::GET('home/order',[orderhomeController::class,'order']);
Route::POST('home/order/addorder',[orderhomeController::class,'addorder']);

// Phần Admin
Route::GET('admin/index',[dashboardController::class,'dashboard']);
// Phần Product
Route::GET('admin/productAdmin/productList',[productAdminController::class,'productList']);
Route::GET('admin/productAdmin/createProduct',[productAdminController::class,'createProduct']);
Route::POST('admin/productAdmin/create',[productAdminController::class,'create']);
Route::GET('admin/productAdmin/editProduct/{idp}',[productAdminController::class,'editProduct']);
Route::POST('admin/productAdmin/update/{idp}',[productAdminController::class,'update']);
Route::GET('admin/product/productAdmin/deleteP/{idp}',[productAdminController::class,'deleteP']);
// Phần Cate
Route::GET('admin/cateAdmin/cateList',[productAdminController::class,'cateList']);
Route::GET('admin/cateAdmin/createCate',[productAdminController::class,'createCate']);
Route::POST('admin/cateAdmin/createC',[productAdminController::class,'createC']);
Route::GET('admin/cateAdmin/editCate/{idc}',[productAdminController::class,'editCate']);
Route::POST('admin/cateAdmin/updateC/{idc}',[productAdminController::class,'updateC']);
Route::GET('admin/cateAdmin/deleteC/{idc}',[productAdminController::class,'deleteC']);



Route::GET('admin/cateAdmin/editCate',[productAdminController::class,'editCate']);
// Phần Users
Route::GET('admin/users/userList',[userController::class,'userList']);
Route::GET('admin/users/createUser',[userController::class,'createUser']);
Route::POST('admin/users/create',[userController::class,'create']);
Route::GET('admin/users/editUser/{idu}',[userController::class,'editUser']);
Route::POST('admin/users/update/{idu}',[userController::class,'update']);
Route::GET('admin/users/delete/{idu}',[userController::class,'delete']);
Route::GET('admin/users/formdangky',[userController::class,'formdangky']);
Route::POST('admin/users/dangky',[userController::class,'dangky']);
// Phần customer
Route::GET('admin/customer/customer',[customerController::class,'customer']);
//Phần order
Route::GET('admin/order/orderList',[orderController::class,'orderList']);
Route::GET('admin/order/editOrder',[orderController::class,'editOrder']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::POST('home/mailcontact',[contactController::class,'postmail']);
Route::POST('home/mailorder',[contactController::class,'mailorder']);