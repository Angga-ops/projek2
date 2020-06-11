@extends('master')
@section('content')

<body class="bg-white">
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <p>Home/Produk/Detail Produk</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      @if(Session::has('flash_message_error'))
      <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
          </button>
      <strong>{{ session('flash_message_error') }}</strong>
      </div>
      @endif
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
              <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails" data-thumb="{{url('img/produk/',$detail_produk->image)}}" align="center">
                <img src="{{url('img/produk/',$detail_produk->image)}}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
        <form name="addtocartForm" id="addtocartForm" action="{{route('add_keranjang')}}" method="post"> {{ csrf_field() }}
        <input type="hidden" name="id_produk" value="{{$detail_produk->id_produk}}">
        <input type="hidden" name="nama_produk" value="{{$detail_produk->nama_produk}}">
        <input type="hidden" name="kode_produk" value="{{$detail_produk->kode_produk}}">
        <input type="hidden" name="harga" id="harga" value="{{$detail_produk->harga}}">
          <div class="s_product_text">
            <h3>{{$detail_produk->nama_produk}}</h3>
            <h2>Rp. {{$detail_produk->harga}}</h2>
            <ul class="list">
              <li>
                <label><span>Stok</span> : @if($total_stok>0) {{$total_stok}} @else Stok Kosong @endif</label>
              </li>
            </ul>
            <p>
              {{$detail_produk->deskripsi}}
            </p>
            <div class="card_area">
              @if($total_stok>0)
              <div class="product_count d-inline-block">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" name="qty" type="text" value="1" min="1">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              
              <div class="add_to_cart">
                  <!-- <a href="{{route('keranjang')}}" class="btn_3">Tambah ke Keranjang</a> -->
                  <button type="submit" class="btn_3" id="cartButton">Tambah ke Keranjang</button>
              </div>
              @endif
              <div class="social_icon">
                  <a href="#" class="fb"><i class="ti-facebook"></i></a>
                  <a href="#" class="tw"><i class="ti-instagram"></i></a>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
  @endsection