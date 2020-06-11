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
              <p>Home / checkout</p>
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
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Alamat Pengiriman</h3>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            <strong>{{ session('flash_message_error') }}</strong>
            </div>
            @endif
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="First name" required></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" />
                <span class="placeholder" data-placeholder="Last name" required></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Phone number" required></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Email Address" required></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Alamat Lengkap" required></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="prov" name="prov" />
                <span class="placeholder" data-placeholder="Provinsi" required></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="kab" name="kab" />
                <span class="placeholder" data-placeholder="Kabupaten" required></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="kec" name="kec" />
                <span class="placeholder" data-placeholder="Kecamatan" required></span>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required>
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Catatan"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Pesanan Anda</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Blackberry
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Tomatoes
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Brocoli
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span>$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span>Flat rate: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span>$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1 checkout_btn_1" href="{{route('pesanan_saya')}}">Selesaikan Pesanan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->
@endsection