@extends('master')
<?php if (Session::has('alert')): ?>
	<div class="alert alert-success notification">
        <p id="alert">{{ session('alert') }}</p>
    </div>
<?php endif ?>
<?php if (Session::has('alert1')): ?>
	<div class="alert alert-danger notification">
        <p id="alert">{{ session('alert1') }}</p>
    </div>
<?php endif ?>
<?php if (Session::has('alert2')): ?>
	<div class="alert alert-danger notification">
        <p id="alert">{{ session('alert2') }}</p>
    </div>
<?php endif ?>
<?php if (Session::has('aler3t')): ?>
	<div class="alert alert-daner notification">
        <p id="alert">{{ session('alert3') }}</p>
    </div>
<?php endif ?>
@section('slide')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									<?php foreach ($slide as $key => $val): ?>
										
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="public/image/slide/{{$val->image}}" data-src="public/image/slide/{{$val->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('public/image/slide/{{$val->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        	</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
</div>
				<!--slider-->
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4><hr>
							<div class="beta-products-details">
								<p class="pull-left">{{count($newProduct)}} Sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php foreach ($newProduct as $key => $val): ?>
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
												<a class="add-to-cart pull-left" href="{{route('addCart',$val->id,'null')}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('product',$val->id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">{{$newProduct->appends(array_except(Request::query(), 'page_a'))->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4><hr>
							<div class="beta-products-details">
								<p class="pull-left">{{count($topProduct)}} Sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php foreach ($topProduct as $key => $val): ?>
									<div class="col-sm-3">
										<div class="single-item">
											<div class="single-item-header">
												<a href="{{route('product',$val->id)}}"><img src="public/image/product/{{$val->image}}" alt="no-image"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$val->name}}</p>
												<p class="single-item-price">
													<span>{{number_format($val->unit_price)}} vnđ</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="{{route('addCart',$val->id,'null')}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{route('product',$val->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach ?>
							</div>
							<div class="space40">&nbsp;</div>
						</div> <!-- .beta-products-list -->
						<div class="row">{{$topProduct->appends(array_except(Request::query(), 'page_b'))->links()}}</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection