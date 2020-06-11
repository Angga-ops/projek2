@extends('master')
@section('content')
    
<body class="bg-white">

   {{-- @yield('content') --}}
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Konfirmasi Bayar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- breadcrumb start-->

    <section class="konfir_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="konfir_part_form">
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('flash_message_error') }}</strong>
                    </div>
                    @endif
                        <div class="konfir_part_form_iner">
                            <h3>Konfirmasi Pembayaran</h3>
                            <form class="row contact_form" action="{{route('konfirmasi_bayar')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <label>Invoice</label>
                                    <input type="text" class="form-control" id="idorder" name="idorder" value="{{$pesanan->invoice}}"
                                        readonly>
                                </div>
                                {{-- <div class="col-md-12 form-group p_star">
                                    <label>Waktu Pembayaran</label>
                                    <input type="date" class="form-control" id="waktu_bayar" name="waktu_bayar" value=""
                                        placeholder="Waktu Pembayaran">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="tfke" name="tfke" value=""
                                        placeholder="Di Transfer Ke">
                                </div> --}}
                                
                                <div class="col-md-12 form-group p_star">
                                    <label>BANK Asal</label>
                                    <select type="text" class="form-control" id="bank" name="bank" required>
                                        <option selected>Pilih...</option>
                                        <option value="BRI"{{(old('status') == 'BRI') ? ' selected' : ''}}>BRI</option>
                                        <option value="BCA"{{(old('status') == 'BCA') ? ' selected' : ''}}>BCA</option>
                                        <option value="BNI"{{(old('status') == 'BNI') ? ' selected' : ''}}>BNI</option>
                                        <option value="MANDIRI"{{(old('status') == 'MANDIRI') ? ' selected' : ''}}>MANDIRI</option>
                                        <option value="BRIS"{{(old('status') == 'BRIS') ? ' selected' : ''}}>BRI SYARIAH</option>
                                        <option value="BCAS"{{(old('status') == 'BCAS') ? ' selected' : ''}}>BCA SYARIAH</option>
                                        <option value="BNIS"{{(old('status') == 'BNIS') ? ' selected' : ''}}>BNI SYARIAH</option>
                                        <option value="MANDIRIS"{{(old('status') == 'BNIS') ? ' selected' : ''}}>MANDIRI SYARIAH</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    {{-- <label>Nama Pemilik Rekening</label> --}}
                                    <input type="text" class="form-control" id="namarek" name="namarek" value=""
                                        placeholder="Nama Pemilik Rekening" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control" id="jumlahbayar" name="jumlahbayar" value="Rp. {{$pesanan->jumlah_bayar}}"
                                        readonly>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label>Bukti Transfer</label>
                                    <input type="file" name="bukti_bayar" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Konfirmasi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
@endsection