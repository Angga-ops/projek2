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
                            <p>Home / Daftar</p>
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
                            <h2>Sudah Punya Akun?</h2>
                          
                            <a href="{{route('login')}}" class="btn_3">Masuk</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Selamat Datang ! <br>
                                Silahkan Daftar Akun</h3>
                                <form class="row contact_form" action="{{route('postdaftar')}}" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="nama" name="nama" value=""
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="nohp" name="nohp" value=""
                                        placeholder="Nomor HP">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value=""
                                        placeholder="Alamat">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="username" name="username" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password_konfirm" name="password_konfirm" value=""
                                        placeholder="Masukan Password Lagi">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Daftar
                                    </button>
                                    <p style="text-align:center;">Sudah punya Akun ?<a href="{{route('login')}}"> Masuk</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

@endsection