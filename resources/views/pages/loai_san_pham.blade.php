@extends('layout')
@section('title',"{$loai_sp->ten_loai}")
@section('content')
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3>{{$loai_sp->ten_loai}}</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
                    @foreach($loai_sp->SanPham as $loai)
						<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block" >
											<div class="snipcart-thumb">
												<a href="{{route('chi_tiet',$loai->id)}}"><img title=" " alt=" " src="{{ asset('images/san_pham/' . $loai->hinh) }}" class="hinh_anh" /></a>		
												<a href="{{route('chi_tiet',$loai->id)}}"><p class="tieu_de">{{$loai->ten_san_pham}}</p></a>
												<h4>{{number_format($loai->don_gia_khuyen_mai)}} đ<span>{{number_format($loai->don_gia)}} đ</span></h4>
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