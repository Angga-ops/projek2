@extends('master')
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
    <!-- breadcrumb start-->

    <!--================Profile Area =================-->
    
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{url('img/blog/c2.png')}}" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Nurlaela Khasannah
                        </h5>
                        <h6>
                            Web Developer and Designer
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Akun Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pesanan Saya</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <a href="#">Akun Saya</a><br/>
                                <a href="#">Pesanan Saya</a><br>
                                <a href="#">Logout</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Nurlaela Khasannah</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>nurlaelakhsnnh12@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Profession</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Web Developer and Designer</p>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </form>           
            </div>

@endsection