<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Trang chủ
Route::get('/index',[
	'as'=>'Home',
	'uses'=>'PageController@getIndex'
]);
// Trang danh sách các sản phẩm theo loại
Route::get('/productType/{type?}',[
	'as'=>'producttype',
	'uses'=>'PageController@getProductType'
]);
// Trang Chi tiết sản phẩm
Route::get('/product/{id?}',[
	'as'=>'product',
	'uses'=>'PageController@getProduct'
]);
// Trang liên hệ
Route::get('/contact',[
	'as'=>'contact',
	'uses'=>'PageController@getContact'
]);
// Thêm 1 sản phẩm vào giỏ hàng
Route::get('/addToCart/{id?}',[
	'as'=>'addCart',
	'uses'=>'PageController@getAddToCart'
]);
// Xóa các item trong giỏ hàng
Route::get('/deleteCart/{id?}',[
	'as'=>'deleteCart',
	'uses'=>'PageController@getDelCart'
]);
// Trang lấy thông tin khách hàng và hóa đơn
Route::get('/order',[
	'as'=>'addOrder',
	'uses'=>'PageController@getAddOrder'
]);
// Lưu thông tin khách hàng và hóa đơn
Route::post('/order',[
	'as'=>'addOrder',
	'uses'=>'PageController@postAddOrder'
]);
// Trang tạo tài khoản user
Route::get('/signup',[
	'as'=>'signup',
	'uses'=>'PageController@getSignUp'
]);
// Lưu thông tin user
Route::post('/signup',[
	'as'=>'signup',
	'uses'=>'PageController@postSignUp'
]);
// Trang đăng nhập user
Route::get('/signin',[
	'as'=>'signin',
	'uses'=>'PageController@getSignIn'
]);
// Kiểm tra thông tin và tiến hành đăng nhập
Route::post('/signin',[
	'as'=>'signin',
	'uses'=>'PageController@postSignIn'
]);
// Đăng xuất user
Route::get('/logout',[
	'as'=>'logout',
	'uses'=>'PageController@getLogOut'
]);
// Trang tìm kiếm sản phẩm theo tên và giá
Route::get('/search',[
	'as'=>'search',
	'uses'=>'PageController@getSearchProduct'
]);