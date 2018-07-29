<?php if (Session::has('success')): ?>
	<div class="alert alert-success notification">
        <p id="alert">{{ session('success') }}</p>
    </div>
<?php else: ?>
	<div class="alert alert-danger notification">
        <p id="alert">{{ session('err') }}</p>
    </div>
<?php endif ?>
@extends('master')
@section('slide')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
						@if ($errors->all())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
			<form action="{{route('signup')}}" method="post" class="beta-form-checkout form-horizontal">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email">
						</div>

						<div class="form-block">
							<label for="your_last_name">Họ và tên*</label>
							<input type="text" id="your_last_name" name="name">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" name="address">
						</div>


						<div class="form-block">
							<label for="phone">Số điện thoại*</label>
							<input type="text" id="phone" name="phone">
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu*</label>
							<input type="text" id="phone" name="password">
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu*</label>
							<input type="text" id="phone" name="rePassword">
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Tạo</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
