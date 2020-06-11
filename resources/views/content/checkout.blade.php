@extends('master')
@section('content')
  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <p>Home / Checkout</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area">
    <div class="container">
      @if(Session::has('flash_message_error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('flash_message_error') }}</strong>
      </div>
      @endif
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Alamat Penagihan</h3>
            <form class="row contact_form" action="{{route('checkout')}}" method="post" novalidate="novalidate"> {{ csrf_field() }}
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="billing_nama" placeholder="Nama" name="billing_nama" required @if(!empty($detail_user->nama)) value="{{$detail_user->nama}}" @endif />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="billing_no_hp" placeholder="No. HP" name="billing_no_hp" required @if(!empty($detail_user->no_hp)) value="{{$detail_user->no_hp}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="billing_provinsi" placeholder="Provinsi" name="billing_provinsi" required @if(!empty($detail_user->provinsi)) value="{{$detail_user->provinsi}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="billing_kabkot" placeholder="Kabupaten/Kota" name="billing_kabkot" required @if(!empty($detail_user->kabkot)) value="{{$detail_user->kabkot}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="billing_alamat" placeholder="Alamat" name="billing_alamat" required @if(!empty($detail_user->alamat)) value="{{$detail_user->alamat}}" @endif />
              </div>
              <div class="form-check">
                <input value="{{$detail_user->nama}}" type="checkbox" class="form-check-input" id="billtoship">
                <label class="form-check-label" for="billtoship">&nbsp;&nbsp;&nbsp;&nbsp;Ceklis jika ingin mengirim ke alamat anda sendiri.</label><br><br><br>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Pesanan Anda</h2>
              <ul class="list">
                <li>
                  <p>Produk
                    <span>Total</span>
                  </p>
                </li>
                <?php $jumlah_total=0; ?>
                @foreach($userCart as $list)
                <li>
                  <p>{{$list->nama_produk}}
                    <span class="middle">x {{$list->qty}}</span>
                    <span class="last">Rp{{$list->harga*$list->qty}}</span>
                    <input type="hidden" class="form-control" id="qty" value="{{$list->qty}}" name="qty" />
                  </p>
                </li>
                <?php $jumlah_total = $jumlah_total + ($list->harga*$list->qty); ?>
                @endforeach
              </ul>
              <ul class="list list_2">
              {{--<li>
                  <p>Subtotal
                    <span>$2160.00</span>
                  </p>
                </li>
                <li>
                  <p>Shipping
                    <span>Flat rate: $50.00</span>
                  </p>
                </li>--}}
                <li>
                  <p>Total
                    <span>Rp<?php echo $jumlah_total; ?></span>
                    <input type="hidden" class="form-control" id="jumlah_total" value="{{ $jumlah_total }}" name="jumlah_total" />
                  </p>
                </li>
              </ul>
              <div class="checkout_btn_inner float-right">
                <button type="submit" class="btn_1 checkout_btn_1" id="cartButton">Selesaikan Pesanan</button>
                {{--<a class="btn_1 checkout_btn_1" href="{{route('pesanan_saya')}}">Selesaikan Pesanan</a>--}}
              </div>
            </div>
          </div>
          <div class="col-lg-8" style="border:1px solid #F7F7F5;">
            <h3>Alamat Pengiriman</h3>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="shipping_nama" placeholder="Nama" name="shipping_nama" required @if(!empty($detail_shipping->nama)) value="{{$detail_shipping->nama}}" @endif />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="shipping_no_hp" placeholder="No. HP" name="shipping_no_hp" required @if(!empty($detail_shipping->no_hp)) value="{{$detail_shipping->no_hp}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="shipping_provinsi" placeholder="Provinsi" name="shipping_provinsi" required @if(!empty($detail_shipping->provinsi)) value="{{$detail_shipping->provinsi}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="shipping_kabkot" placeholder="Kabupaten/Kota" name="shipping_kabkot" required @if(!empty($detail_shipping->kabkot)) value="{{$detail_shipping->kabkot}}" @endif />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="shipping_alamat" placeholder="Alamat" name="shipping_alamat" required @if(!empty($detail_shipping->alamat)) value="{{$detail_shipping->alamat}}" @endif />
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="shipping_catatan" id="shipping_catatan" rows="1"
                  placeholder="Catatan">@if(!empty($detail_shipping->catatan)) {{$detail_shipping->catatan}} @endif</textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  <script>
    $().ready(function(){
      //Copy Billing Address to Shipping Address Script
      $("#billtoship").click(function(){
          if(this.checked){
          $("#shipping_nama").val($("#billing_nama").val());
          $("#shipping_no_hp").val($("#billing_no_hp").val());
          $("#shipping_provinsi").val($("#billing_provinsi").val());
          $("#shipping_kabkot").val($("#billing_kabkot").val());
          $("#shipping_alamat").val($("#billing_alamat").val());
          }else{
          $("#shipping_nama").val('');	
          $("#shipping_no_hp").val('');
          $("#shipping_provinsi").val('');
          $("#shipping_kabkot").val('');
          $("#shipping_alamat").val('');
          }
      });
    });
  </script>
@endsection