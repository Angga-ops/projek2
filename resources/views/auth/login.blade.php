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
                            <p>Home / Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Belum Punya Akun?</h2>
                            <a href="{{route('register')}}" class="btn_3">Buat Akun</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Selamat Datang ! <br>
                                Silahkan Masuk</h3>
                            <form class="row contact_form" action="{{ route('login') }}" method="post" novalidate="novalidate">
                            @csrf

                                <!-- TAMPILKAN NOTIF JIKA GAGAL LOGIN  -->
                                @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}"
                                        placeholder="Email / Username" required autocomplete="username" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value=""
                                        placeholder="Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="f-option">{{ __('Remember Me') }}</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                    {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <p style="text-align:right; font-size:12;"><a href="{{ route('password.request') }}">Lupa Password?</a></p>
                                    @endif

                                   <br><p style="text-align:center;">Belum punya Akun ?<a href="{{ route('register') }}"> Daftar</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!--================login_part end =================-->

@endsection