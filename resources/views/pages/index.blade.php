@extends('main')
@section('title','Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts')
@section('content')
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Sản Phẩm Mới</h3>
			<div class="agile_top_brands_grids">
				@foreach ($sp_moi as $moi)
					<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block" >
											<div class="snipcart-thumb">
												<a href="{{route('chi_tiet',$moi->id)}}"><img title=" " alt=" " src="{{ asset('images/san_pham/' . $moi->hinh) }}" class="hinh_anh" /></a>		
												<a href="{{route('chi_tiet',$moi->id)}}"><p class="tieu_de">{{$moi->ten_san_pham}}</p></a>
												<h4>{{number_format($moi->don_gia_khuyen_mai)}} đ<span>{{number_format($moi->don_gia)}} đ</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<input type="button" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
@endsection
