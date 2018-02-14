@section('title',"{$chi_tiet->ten_san_pham}")
@section('content')
<div class="agileinfo_single">
		<div class="col-md-4 agileinfo_single_left">
			<img id="example" src="{{ asset('images/san_pham/' . $chi_tiet->hinh) }}" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-8 agileinfo_single_right">
			<div class="w3agile_description">
				<h5>{{$chi_tiet->ten_san_pham}}</h5>
			</div>
			<div class="rating1">
				<span class="starRating">
					<input id="rating5" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3" checked>
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
			</div>
			<div class="w3agile_description">
				<h4>Thương Hiệu: {{$chi_tiet->ThuongHieu->ten_thuong_hieu}}</h4>
			</div>
			<div class="snipcart-item block">
				<div class="snipcart-thumb agileinfo_single_right_snipcart">
					<h4>{{number_format($chi_tiet->don_gia_khuyen_mai)}} đ<span>{{number_format($chi_tiet->don_gia)}} đ</span></h4>
				</div>
				<div class="snipcart-details top_brand_home_details">
					<input type="button" name="submit" value="Thêm vào giỏ hàng" class="button" />
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="panel panel-product-detail">
	        <div class="col-sm-12 detail__info">
				<div class="panel-heading">Mô tả sản phẩm</div>	
				<div class="panel-body">
					<div class="product-detail__description">
						{!!$chi_tiet->noi_dung_chi_tiet!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="clearfix"></div>
	</div>
@endsection