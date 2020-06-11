@extends('master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <p>Home/ Produk/ Keranjang</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">

        @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Harga</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php $jumlah_total=0; ?>
            @foreach($userCart as $keranjang)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img style="width:80px;" src="{{url('img/produk/',$keranjang->image)}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{$keranjang->nama_produk}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Rp. {{$keranjang->harga}}</h5>
                </td>
                <td>
                  <div class="product_count">
                    @if($keranjang->qty>1)
                      <a class="input-number-decrement" href="{{url('/keranjang/update-quantity/'.$keranjang->id_keranjang.'/-1')}}"><i class="ti-minus"></i></a>
                    @endif
                      <input class="input-number" type="text" name="qty" value="{{$keranjang->qty}}" autocomplete="off">
                      <a class="input-number-increment" href="{{url('/keranjang/update-quantity/'.$keranjang->id_keranjang.'/1')}}"> <i class="ti-plus"></i></a>
                  </div>
                </td>
                <td>
                  <h5>Rp. {{$keranjang->harga*$keranjang->qty}}</h5>
                </td>
                <td>
                  <a href="#" class="btn btn-danger delete" id-keranjang="{{$keranjang->id_keranjang}}"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              <?php $jumlah_total = $jumlah_total + ($keranjang->harga*$keranjang->qty); ?>
              <script>
                  $('.delete').click(function(){
                    var id_keranjang = $(this).attr('id-keranjang');
                    Swal.fire({
                        title: 'Yakin?',
                        text: "Mau hapus pesanan anda?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Iya, hapus pesanan!'
                                })
                        .then((result) => {
                          console.log(result);
                        if (result.value) {
                            window.location = "/keranjang/delete-product/"+id_keranjang+"";
                        }
                        })
                  });
              </script>
              @endforeach
              
              
              @if($countcart>0)
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Total Bayar</h5>
                </td>
                <td>
                  <h5>Rp. <?php echo $jumlah_total; ?></h5>
                </td>
                <td></td>
              </tr>
              @else
              <tr>
                <td colspan="5" style="text-align: center;">Keranjang anda kosong.</td>
              </tr>
              @endif
              
            </tbody>
          </table>
          @if($countcart>0)
          <div class="checkout_btn_inner float-right">
            <a class="btn_1 checkout_btn_1" href="{{route('checkout')}}">Checkout</a>
          </div>
          @endif
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
@endsection