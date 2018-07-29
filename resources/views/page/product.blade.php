@extends('master')
@section('slide')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="public/image/product/{{$product->image}}" alt="" style="border: 1px solid #777;width: 100%;height: 230px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title" style="font-size: 30px;margin-top: 5px; overflow:inherit;">{{$product->name}}</p>
								<div class="space20">&nbsp;</div>
								<p class="single-item-price">
									<span style="font-size: 25px">{{number_format($product->unit_price)}} vnđ</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space70">&nbsp;</div>
							<p>Options:</p><br>
							<div class="single-item-options">
								<a class="add-to-cart" href="{{route('addCart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>						</ul>
						<div class="panel" id="tab-description">
							<p>{{$product->description}}</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4><hr>
						<div class="row">
							<?php foreach ($productWithType as $key => $val): ?>
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
											<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product',$val->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div> <!-- .beta-products-list -->
						<div class="space40">&nbsp;</div>
							<div class="row">{{$productWithType->links()}}</div>
						</div>
				</div>
				
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection