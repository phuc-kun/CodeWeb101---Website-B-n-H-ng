	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
						<li><a><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
						<li><a>Chào bạn {{Auth::user()->name}}</a></li>
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
						@else
						<li><a href="{{route('signup')}}">Đăng kí</a></li>
						<li><a href="{{route('signin')}}">Đăng nhập</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('Home')}}" id="logo"><img src="public/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (<?php if (Session::has('cart')): ?>
								{{$totalQty}}
							<?php else: ?>
								Trống
							<?php endif ?>) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@if(Session::has('cart'))
								<?php foreach ($cart->items as $key => $val): ?>
									<div class="cart-item">
										<a class="cart-item-delete" href="{{route('deleteCart',$val['item']['id'])}}"><i class="fa fa-times"></i></a>
										<div class="media">
											<a class="pull-left items" href="{{route('product',$val['item']['id'])}}"><img src="public/image/product/{{$val['item']['image']}}" alt=""></a>
											<div class="media-body" style="margin-left: 70px">
												<span class="cart-item-title">{{$val['item']['name']}}</span>
												<span class="cart-item-amount">{{$val['qty']}}*<span>{{$val['item']['unit_price']}}</span></span>
											</div>
										</div>
									</div>
								<?php endforeach ?>
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format($totalPrice)}} vnđ</span></div>
									<div class="clearfix"></div>
								@endif
									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('addOrder')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('Home')}}">Trang chủ</a></li>
						<li><a href="{{route('producttype')}}">Loại Sản phẩm</a>
							<ul class="sub-menu">
								@foreach ($product_type as $val)
									<li><a href="{{route('producttype',$val->id)}}">{{$val->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="">Giới thiệu</a></li>
						<li><a href="{{route('contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->