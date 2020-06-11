@extends('pembeli.master')
@section('content')
    
<body class="bg-white">

   @yield('content')
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Verifikasi Alamat Email Anda') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                                </div>
                            @endif

                            {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                            {{ __('Jika Anda tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk meminta tautan lain') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!--================login_part end =================-->

@endsection