<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Type_product;
use Illuminate\Pagination;
use Session;
use App\Cart;
use App\Customer;
use App\Bill;
use App\Bill_detail;
use App\User;
use App\Http\Requests\SignUpFormRequest;
use App\Http\Requests\SignInFormRequest;
use Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	$newProduct = Product::where('new',1)->paginate(4, ['*'], 'page_a');
    	$topProduct = Product::where('new',0)->paginate(8, ['*'], 'page_b');
    	return view('page.home',compact('slide','newProduct','topProduct'));
    }
    public function getProductType($type=null){
    	$newProductByTypes = Product::where([['id_type',$type],['new',1]])->paginate(3,['*'],'page_c');
    	$topProductByTypes = Product::where([['id_type',$type],['new',0]])->paginate(3,['*'],'page_d');
        // Lấy toàn bộ danh sách các loại sản phẩm
    	$productTypes = Type_product::all();
        // Lấy Loại sản phẩm hiện tại được hiển thị
    	$productType = Type_product::where('id',$type)->first();
    	return view('page.type_product',compact('newProductByTypes','topProductByTypes','productTypes','productType'));
    }
    public function getProduct($id=null){
    	$product = Product::where('id',$id)->first();
        // Lấy các sản phẩm cùng loại liên quan
    	$productWithType = Product::where([['id','!=',$id],['id_type',$product->id_type]])->paginate(3);
    	return view('page.product',compact('product','productWithType'));
    }
    public function getContact(){
    	return view('page.contact');
    }
 	public function getAddToCart(Request $req, $id=null){
 		$product = Product::find($id);
        // Lấy cart đã có
 		$oldCart = Session('cart')?Session::get('cart'):null;
        // Tạo cart mới thông qua cart cũ
 		$cart = new Cart($oldCart);
        // Thêm sản phẩm đã được chọn vào cart mới
 		$cart->add($product,$id);
        // gắn cart mới vào session cart
 		$req->Session()->put('cart',$cart);
 		return redirect()->back();
    }
    public function getDelCart(request $req, $id=null){
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        // xóa một item trên danh sách giỏ hàng
        $cart->removeItem($id);
        if(count($cart->items)>0){
            $req->Session()->put('cart',$cart);
        }else{
            // nếu không còn item nào thì lập tức đưa giỏ hàng về trạng thái trống
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getAddOrder(){
        $oldCart = Session('cart')?Session::get('cart'):null;
        $carts = new Cart($oldCart);
        // kiểm tra giỏ hàng để chuyển đến trang lấy thông tin khách hàng và hóa đơn
        if(count($carts->items)>0){
            return view('page.order',compact('carts'));
        }else{
            return redirect()->back();
        }
    }   
    public function postAddOrder(request $req){
        $cart = Session::get('cart');
        // Khởi tạo customer model và lưu thông tin vào database
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->note;
        // Báo về trang chủ nếu lưu thông tin khách hàng bị lỗi
        if(!$customer->save()) return redirect()->intended('index')->with('alert1','Lưu thông tin khách hàng không thành công');
        // Khởi tạo bill model và lưu thông tin vào database
        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('y-m-d');
        $bill->total = $cart->totalPrice;
        if($req->payment == "COD") $bill->note = $req->note."Thanh toán khi nhận hàng";
        else $bill->note = $req->note."Thanh toán chuyển khoản";
        // Báo về trang chủ nếu lưu bill bị lỗi
        if(!$bill->save()) return redirect()->intended('index')->with('alert2','Lưu Bill không thành công');
        // Khởi tạo bill_detail model và lưu thông tin vào database
        foreach ($cart->items as $key => $val) {
            $billDetail = new Bill_detail;
            $billDetail->id_bill  = $bill->id;
            $billDetail->id_product = $key;
            $billDetail->quantity = $val['qty'];
            $billDetail->unit_price = $val['item']['unit_price'];
            // Báo về trang chủ nếu lưu bill_detail bị lỗi
            if(!$billDetail->save()) return redirect()->intended('index')->with('alert3','Lưu BillDetail không thành công');
        }
        Session::forget('cart');
        return redirect()->intended('index')->with('alert','Đặt hàng thành Công');
    }
    public function getSignUp(){
        return view('page.signup');
    }
    public function postSignUp(SignUpFormRequest $req){
        // khởi tạo user model và lưu thông tin 
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->phone = $req->input('phone');
        $user->address = $req->input('address');
        // kiểm tra việc lưu tài khoản user mới
        if(!$user->save()) return redirect()->back()->with('err','Tạo tài khoản không thành công');
        else return redirect()->back()->with('success','Tạo tài khoản thành công');
    }
    public function getSignIn(){
        return view('page.login');
    }
    public function postSignIn(SignInFormRequest $req){
        $authentication = array('email' => $req->input('email') , 'password' => $req->input('password'));
        // xác thực tài khoản được post lên từ form đăng nhập
        if(Auth::attempt($authentication)){
            return redirect()->back();
        }
        else return redirect()->back()->with('err','Đăng nhập không thành công');
    }
    public function getLogOut(){
        // logout tài khoản user hiện tại
        Auth::logout();
        return redirect()->route('Home');
    }
    public function getSearchProduct(request $req){
        // Tìm kiếm sản phẩm theo tên và giá
        $products = Product::where('name','like','%'.$req->key.'%')
                            ->orWhere('unit_price','like','%'.$req->key.'%')
                            ->get();
        return view('page.productSearch',compact('products'));
    }
}
