@extends('admin.master')
@section('content')

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{route('admin-dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('admin-pembeli')}}"><i class="fa fa-fw fa-user"></i> Data Pengguna</a>
                    </li>
                    <li>
                        <a href="{{route('admin-produk')}}"><i class="fa fa-fw fa-edit"></i> Produk</a>
                    </li>
                    <li>
                        <a href="{{route('admin-pesanan')}}"><i class="fa fa-shopping-cart"></i> Pesanan</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-sign-out fa-fw"></i> Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="height: 550px">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Denisya Shop</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->              

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$data_pengguna}}</div>
                                        <div>Data Pengguna</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin-pembeli')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Selengkapnya</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$data_produk}}</div>
                                        <div>Produk</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin-produk')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Selengkapnya</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$data_pesanan}}</div>
                                        <div>Pesanan</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin-pesanan')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Selengkapnya</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
