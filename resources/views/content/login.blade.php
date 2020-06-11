@extends('master_login')
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
    <section class="login_part" style="background: #555555;">
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
                <div class="col-lg-6 col-md-6"><br><br>
                    <div class="login_part_form" style="border:1px solid #A9A9A9;">
                        <div class="login_part_form_iner">
                            <h3 style="color: white;">Admin Area <br>
                                Login Admin</h3>
                            <form class="row contact_form" action="" method="get" novalidate="novalidate">
                            @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Username" required autocomplete="email" autofocus>

                                        @error('email')
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
                                    <button style="background-color: #808080; border: none;" type="submit" value="submit" class="btn_3">
                                    {{ __('Login') }}
                                    </button>
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