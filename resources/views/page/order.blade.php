@extends('master')

@section('slide')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
		<div id="content">
			
			<form action="{{route('addOrder')}}" method="post" class="beta-form-checkout">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-group row">
						    <label for="name" class="col-sm-3 col-form-label">Họ tên</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="name" name="name" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3">Giới tính</label>
						    <div class="col-sm-9 ">
							    	<input type="radio" name="gender" id="inlineRadio1" value="nam" required>
	  								<label for="inlineRadio1" style="margin-right: 40px">Nam</label>
							    	<input type="radio" name="gender" id="inlineRadio1" value="nữ">
	  								<label for="inlineRadio1">Nữ</label>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="email" class="col-sm-3 col-form-label">Email</label>
						    <div class="col-sm-9">
						      <input type="email" class="form-control" id="email" name="email" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="address" name="address" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="phone" class="col-sm-3 col-form-label">Điện thoại</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="phone" name="phone" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="notes" class="col-sm-3 col-form-label">Ghi chú</label>
						    <div class="col-sm-9">
						      <textarea id="notes" name="note" style="width: 100%" required></textarea>
						    </div>
						</div>						
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<?php foreach ($carts->items as $key => $val): ?>
										<div class="media items">
											<img width="25%" src="public/image/product/{{$val['item']['image']}}" alt="" class="pull-left">
											<div class="media-body" style="margin-left: 20px">
												<p class="font-large">{{$val['item']['name']}}</p><br>
												<span class="color-gray your-order-info">Số lượng: {{$val['qty']}}</span>
											</div>
										</div><div class="space20">&nbsp;</div>
									<?php endforeach ?>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">{{number_format($carts->totalPrice)}} vnđ</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="COD"data-order_button_text="" checked="checked">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button class="beta-btn primary" type="submit">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection