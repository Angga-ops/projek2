@extends('master')
<head>
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .form-group{
        font-size: 13px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
@section('content')

<!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->

    <!--================Profile Area =================-->
    <div class="container">
        <div class="view-account">
            <section class="module">
                <div class="module-inner">
                    <div class="side-bar">
                        <div class="user-info">
                            <img class="img-profile img-circle img-responsive center-block" src="{{asset('img/ela.jpg')}}" alt="">
                            <ul class="meta list list-unstyled">
                                <li class="name" style="font-size: 15px;"><b>Nurlaela Khasannah</b></li>
                            </ul>
                        </div>
                        <nav class="side-menu">
                            <ul class="nav">
                                <li class="active"><a href="{{route('profile')}}"><span class="fas fa-user"></span>&nbsp;&nbsp;Profile</a></li>
                                <li><a href="{{route('edit_profile')}}"><span class="fas fa-user-edit"></span>&nbsp;Edit Profile</a></li>
                                <li><a href="{{route('edit_password')}}"><span class="fas fa-lock"></span>&nbsp;&nbsp;Ubah Password</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="content-panel"><hr>
                        <form class="form-horizontal">
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Nama</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Nurlaela Khasannah" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="elaaa___" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Password</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="password" style="font-size: 13px;" class="form-control" value="kepo" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Perempuan" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label" for="tanggal">Tanggal Lahir</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input class="form-control" style="font-size: 13px;" type="date" value="12/03/2000" id="tanggal" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Contact Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" style="font-size: 13px;" class="form-control" value="denisya.shop@gmail.com" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">No. HP</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="087687955436" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Alamat</h3>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Provinsi</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Jawa Barat" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Kabupaten/Kota</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Cirebon" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Kecamatan</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Klangenan" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--================ End Profile Area =================-->

@endsection