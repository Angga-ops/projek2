@extends('master')
@section('title','Kategori Produk')
@section('content')

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area  border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.menu_kategori')
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>{{$categoryDetails->nama_kategori}}</h2>
                                </div>
                            </div>
                        </div>

                        @foreach($produk as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img" style="width: 100%;">
                                    <img src="{{url('img/produk/',$product->image)}}" style="height: 250px;" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="{{route('detail_produk',$product->id_produk)}}"><i class="ti-eye"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="{{route('detail_produk',$product->id_produk)}}"><h5>{{$product->nama_produk}}</h5></a>
                                        <p>Rp. {{$product->harga}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn_2">More Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

<!-- free shipping here -->
<section class="shipping_details section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/login.png" alt="">
                    <h4>Masuk/Daftar Akun</h4>
                    <p>Untuk Melanjutkan Transaksi anda harus Masuk atau Daftar akun terlebih dahulu</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/checklist.png" alt="">
                    <h4>Pilih Produk</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/icon_3.png" alt="">
                    <h4>Lakukan pembayaran</h4>
                    <p>Pembayaran bisa melalui Transfer Bank, Kemudian Upload bukti pembayaran.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/product.png" alt="">
                    <h4>Produk dikirim</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- free shipping end -->
    
    @endsection