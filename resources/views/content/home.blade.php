@extends('master')
@section('content')
    

<!-- banner part start-->
 <section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_slider">
                    <div class="single_banner_slider">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1 style="color: white">Fashion Collection</h1>
                                <a href="#" class="btn_1">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part pt-4">
    <div class="container-fluid p-lg-0 overflow-hidden">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_1.png" alt="#">
                    <div class="hover_text">
                        <a href="single-product.html" class="btn_2">Produk Pria</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_2.png" alt="#">
                    <div class="hover_text">
                        <a href="single-product.html" class="btn_2">Produk Wanita</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_3.png" alt="#">
                    <div class="hover_text">
                        <a href="single-product.html" class="btn_2">Produk Anak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

{{-- <!-- new arrival part here -->
<section class="new_arrival section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="arrival_tittle">
                    <h2>new arrival</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="arrival_filter_item filters">
                    <ul>
                        <li class="active controls" data-filter="*">all</li>
                        <li class="controls" data-toggle=".men">men</li>
                        <li class="controls" data-toggle=".women">women</li>
                        <li class="controls" data-toggle=".shoes">shoes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="new_arrival_iner filter-container">
                    <div class="single_arrivel_item weidth_1 mix shoes">
                        <img src="img/arrivel/arrivel_5.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_arrivel_item weidth_2 mix women">
                        <img src="img/arrivel/arrivel_2.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_arrivel_item weidth_3 mix shoes women" >
                        <img src="img/arrivel/arrivel_3.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_arrivel_item weidth_3 mix women men">
                        <img src="img/arrivel/arrivel_4.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_arrivel_item weidth_2 mix men women">
                        <img src="img/arrivel/arrivel_1.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_arrivel_item weidth_1 mix shoes men">
                        <img src="img/arrivel/arrivel_6.png" alt="#">
                        <div class="hover_text">
                            <p>Canvas</p>
                            <a href="single-product.html"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                            <div class="rate_icon">
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                                <a href="#"> <i class="fas fa-star"></i> </a>
                            </div>
                            <h5>$150</h5>
                            <div class="social_icon">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- new arrival part end --> --}}

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