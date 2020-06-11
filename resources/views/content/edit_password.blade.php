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
                            <p>Home / Ubah Password</p>
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
                                <li class="name" style="font-size: 15px;"><b>Nurlaela Khasannah</b></li>
                            </ul>
                        </div>
                        <nav class="side-menu">
                            <ul class="nav">
                                <li><a href="{{route('profile')}}"><span class="fas fa-user"></span>&nbsp;&nbsp;Profile</a></li>
                                <li><a href="{{route('edit_profile')}}"><span class="fas fa-user-edit"></span>&nbsp;Edit Profile</a></li>
                                <li class="active"><a href="{{route('edit_password')}}"><span class="fas fa-lock"></span>&nbsp;&nbsp;Ubah Password</a></li>
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
                        <form class="form-horizontal" action="{{route('edit_password')}}" method="POST"> @csrf
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Password Lama</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="password" style="font-size: 13px;" name="current_password" id="current_password" class="form-control" placeholder="Masukkan password lama Anda" autocomplete="current-password" required="required">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Password Baru</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="password" style="font-size: 13px;" name="new_password" id="new_password" class="form-control" placeholder="Masukkan password baru Anda" autocomplete="current-password" required="required">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Konfirmasi Password Baru</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="password" style="font-size: 13px;" name="new_confirm_password" id="new_confirm_password" class="form-control" placeholder="Masukkan password baru Anda lagi" autocomplete="current-password" required="required">
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr><br>
                            <div class="form-group">
                                <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                    <input class="btn btn-primary" style="font-size: 13px;" type="submit" value="Ubah Password">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--================ End Profile Area =================-->

@endsection