@extends('master')
@section('slide')
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Kết quả</h4><hr>
							<div class="beta-products-details">
								<p class="pull-left">{{count($products)}} Sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php foreach ($products as $key => $val): ?>
									<div class="col-sm-3">
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
												<a class="add-to-cart pull-left" href="{{route('addCart',$val->id)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('product',$val->id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</div>
							<div class="space40">&nbsp;</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection