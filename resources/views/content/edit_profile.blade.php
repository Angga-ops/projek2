@extends('master')
<head>
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .form-group{
        font-size: 13px;
    }
</style>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                            <p>Home / Edit Profile</p>
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
                            <img class="img-profile img-circle img-responsive center-block" src="@if($detail_user->image==null) {{asset('img/user.png')}} @else {{asset('/img/users/'.$detail_user->image)}} @endif" alt="">
                            <ul class="meta list list-unstyled">
                                <li class="name" style="font-size: 15px;"><b>{{ $detail_user->nama }}</b></li>
                            </ul>
                        </div>
                        <nav class="side-menu">
                            <ul class="nav">
                                <li><a href="{{route('profile')}}"><span class="fas fa-user"></span>&nbsp;&nbsp;Profile</a></li>
                                <li class="active"><a href="{{route('edit_profile')}}"><span class="fas fa-user-edit"></span>&nbsp;Edit Profile</a></li>
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
                        <form class="form-horizontal" action="{{route('edit_profile')}}" method="post" enctype="multipart/form-data"> @csrf
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group avatar">
                                    <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                        <img class="img-rounded img-responsive" src="@if($detail_user->image==null) {{asset('img/user.png')}} @else {{asset('/img/users/'.$detail_user->image)}} @endif" alt="">
                                    </figure>
                                    <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                        <input type="file" name="image" class="file-uploader pull-left">
                                        <input type="hidden" name="current_image" value="{{$detail_user->imagdeleteKeranjangProduke}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Nama</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="nama" class="form-control" value="{{ $detail_user->nama }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="username" class="form-control" value="{{ $detail_user->username }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <div class="radio">
                                            <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" {{ $detail_user->jenis_kelamin == 'Laki-Laki' ? 'checked' : ''}} >Laki-Laki</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{ $detail_user->jenis_kelamin == 'Perempuan' ? 'checked' : ''}} >Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label" for="tanggal">Tanggal Lahir</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input class="form-control" style="font-size: 13px;" type="date" name="tanggal_lahir" value="{{ $detail_user->tanggal_lahir }}" id="tanggal">
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Contact Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" style="font-size: 13px;" name="email" class="form-control" value="{{ $detail_user->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">No. HP</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="no_hp" class="form-control" value="{{ $detail_user->no_hp }}">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Alamat</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Provinsi</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="provinsi" class="form-control" value="{{ $detail_user->provinsi }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Kabupaten/Kota</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" name="kabkot" class="form-control" value="{{ $detail_user->kabkot }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Alamat Lengkap</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <textarea name="alamat" style="font-size: 13px;" id="alamat" class="form-control">{{ $detail_user->alamat }}</textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <div class="form-group">
                                <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                    <input class="btn btn-primary" style="font-size: 13px;" type="submit" value="Update Profile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--================ End Profile Area =================-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@endsection