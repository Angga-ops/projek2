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
                            <img class="img-profile img-circle img-responsive center-block" src="{{asset('img/ela.jpg')}}" alt="">
                            <ul class="meta list list-unstyled">
                                <li class="name" style="font-size: 15px;"><b>Nurlaela Khasannah</b></li>
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
                        <form class="form-horizontal">
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group avatar">
                                    <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                        <img class="img-rounded img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                    </figure>
                                    <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                        <input type="file" class="file-uploader pull-left">
                                        <button type="submit" style="font-size: 13px;" class="btn btn-primary btn-default-alt pull-left">Update Image</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Rebecca">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Nama</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" style="font-size: 13px;" class="form-control" value="Rebecca">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Laki-Laki</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label" for="tanggal">Tanggal Lahir</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input class="form-control" style="font-size: 13px;" type="date" value="2011-08-19T13:45:00" id="tanggal">
                                    </div>
                                </div>
                            </fieldset>
                            <br><hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Contact Info</h3>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" style="font-size: 13px;" class="form-control" value="Rebecca@website.com">
                                        <p class="help-block">This is the email </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">No. HP</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" style="font-size: 13px;" class="form-control" value="Rebecca@website.com">
                                        <p class="help-block">This is the no. hp </p>
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Alamat</h3>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Provinsi</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <select name="provinsi" style="font-size: 13px;" id="provinsi" class="form-control">
                                            <option value="0" disable="true" selected="true">--Pilih Provinsi--</option>
                                            @foreach($provinsi as $prov)
                                            <option value="{{$prov->id_provinsi}}">{{$prov->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Kabupaten/Kota</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <select name="kabkot" style="font-size: 13px;" id="kabkot" class="form-control">
                                        <option value="0" disable="true" selected="true">--Pilih Kabupaten/Kota--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Kecamatan</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <select name="kecamatan" style="font-size: 13px;" id="kecamatan" class="form-control">
                                        <option value="0" disable="true" selected="true">--Pilih Kecamatan--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Alamat Lengkap</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <textarea name="kecamatan" style="font-size: 13px;" id="kecamatan" class="form-control"></textarea>
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
    <script type="text/javascript">
      $('#provinsi').on('change', function(e){
        console.log(e);
        var province_id = e.target.value;
        $.get('/kabkot?id_provinsi=' + id_provinsi,function(data) {
          console.log(data);
          $('#kabkot').empty();
          $('#kabkot').append('<option value="0" disable="true" selected="true">=== Select Kabupaten/Kota ===</option>');

          $('#kecamatan').empty();
          $('#kecamatan').append('<option value="0" disable="true" selected="true">=== Select Kecamatan ===</option>');

          $.each(data, function(index, kabkotObj){
            $('#kabkot').append('<option value="'+ kabkotObj.id_kabkot +'">'+ kabkotObj.nama_kabkot +'</option>');
          })
        });
      });

      $('#kabkot').on('change', function(e){
        console.log(e);
        var id_kabkot = e.target.value;
        $.get('/kecamatan?id_kabkot=' + id_kabkot,function(data) {
          console.log(data);
          $('#kecamatan').empty();
          $('#kecamatan').append('<option value="0" disable="true" selected="true">=== Select Kecamatan ===</option>');

          $.each(data, function(index, kecamatanObj){
            $('#kecamatan').append('<option value="'+ kecamatanObj.id_kec +'">'+ kecamatanObj.nama_kec +'</option>');
          })
        });
      });


    </script>

@endsection