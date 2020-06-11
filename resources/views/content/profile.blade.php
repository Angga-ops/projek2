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
                            <img class="img-profile img-circle img-responsive center-block" src="@if($users->image==null) {{asset('img/user.png')}} @else {{asset('/img/users/'.$users->image)}} @endif" alt="">
                            <ul class="meta list list-unstyled">
                                <li class="name" style="font-size: 15px;"><b>{{ $users->nama }}</b></li>
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
                        <form class="form-horizontal">
                        @csrf
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Nama</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="{{ $users->nama }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="{{ $users->username }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="{{ $users->jenis_kelamin }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label" for="tanggal">Tanggal Lahir</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input class="form-control" style="font-size: 13px;" type="date" value="{{ $users->tanggal_lahir }}" id="tanggal" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Contact Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" style="font-size: 13px;" class="form-control" value="{{ $users->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">No. HP</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="{{ $users->no_hp }}" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Alamat</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Provinsi</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="provinsi" class="form-control" value="{{ $users->provinsi }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Kabupaten/Kota</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="kabkot" class="form-control" value="{{ $users->kabkot }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Alamat Lengkap</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <textarea name="alamat" style="font-size: 13px;" id="alamat" class="form-control" readonly>{{ $users->alamat }}</textarea>
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