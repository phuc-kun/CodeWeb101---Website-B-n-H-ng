	@extends('master')
	@section('slide')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$productType->name}} </h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<?php foreach ($productTypes as $key => $val): ?>
								<li><a href="{{route('producttype',$val->id)}}">{{$val->name}}</a></li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($newProductByTypes)}} Sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php foreach ($newProductByTypes as $key => $val): ?>
									<div class="col-sm-4">
										<div class="single-item">
											<div class="single-item-header">
												<a href="{{route('product',$val->id)}}"><img src="public/image/product/{{$val->image}}" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$val->name}}</p>
												<p class="single-item-price">
													<span>{{number_format($val->unit_price)}}</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">{{$newProductByTypes->appends(array_except(Request::query(), 'page_c'))->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($topProductByTypes)}} Sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php foreach ($topProductByTypes as $key => $val): ?>
									<div class="col-sm-4">
										<div class="single-item">
											<div class="single-item-header">
												<a href="{{route('product',$val->id)}}"><img src="public/image/product/{{$val->image}}" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$val->name}}</p>
												<p class="single-item-price">
													<span>{{number_format($val->unit_price)}} vnđ</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</div>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">{{$topProductByTypes->appends(array_except(Request::query(), 'page_d'))->links()}}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection