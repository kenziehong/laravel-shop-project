@extends('layout')
@section('title',"{$thuong_hieu->ten_thuong_hieu}")
@section('content')
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3>{{$thuong_hieu->ten_thuong_hieu}}</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
                    @foreach($thuong_hieu->SanPham as $th)
						<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block" >
											<div class="snipcart-thumb">
												<a href="{{route('chi_tiet',$th->id)}}"><img title=" " alt=" " src="{{ asset('images/san_pham/' . $th->hinh) }}" class="hinh_anh" /></a>		
												<a href="{{route('chi_tiet',$th->id)}}"><p class="tieu_de">{{$th->ten_san_pham}}</p></a>
												<h4>{{number_format($th->don_gia_khuyen_mai)}} đ<span>{{number_format($th->don_gia)}} đ</span></h4>
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
		<div class="clearfix"></div>
    </div>
@endsection