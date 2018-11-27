@extends('layouts.layout')

@section('content')
<!-- Grid -->
<div class="content">
	<div class="sidebar-content" style="float: left; width: 190px">
		<div style="margin-bottom: 30px;">
			<h5><i class="icon-filter4"></i> SARING FILTER</h5>
			<h6><b>Berdasarkan Kategori</b></h6>
		</div>
		<div class="list-kat">
			<a href="" class="text-info">Kategori 1</a><hr>
			<a href="" class="text-info">Kategori 2</a><hr>
			<a href="" class="text-info">Kategori 3</a><hr>
			<a href="" class="text-info">Kategori 4</a><hr>
		</div>
	</div>

	<div class="produk-content">
		<div class="bar-action">
			<h6>Urutkan</h6>
			<a href="">Terbaru</a>
			<a href="">Terlaris</a>
			<select class="dropdown-harga">
				<option>Harga</option>
				<option>Harga Tertinggi</option>
				<option>Harga Terendah</option>
			</select>

			<div class="clear"></div>
		</div>
		@foreach($products as $product)
		<a href="/product/{{ $product->id }}" class="panel-produk">
			<div class="panel-img">
				@if(App\Picture::find($product->id))
				<img src="{{ base64_decode(App\Picture::find($product->id)) }}" alt="">
				@else
				<img src="assets/images/1.jpg" alt="">
				@endif
			</div>
			<div class="body-panel-produk">
				<p class="p-produk">{{ $product->name }} </p>
				<p class="p-harga">{{ $product->price }}</p>
				<div style="float: right;">
					<div class="text-nowrap" style="float:left;">
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<p class="text-muted text-star">(30)</p>
					</div>
				</div>
			</div>
		</a>
		@endforeach
	</div>
	<div class="clear"></div>
</div>
@endsection