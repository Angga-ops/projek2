@extends('admin.master')
@section('content')
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('admin-dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
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
                    <div class="card mt-5">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            EDIT DATA PENGGUNA
                        </h1>
                    </div>
                </div>
                
                    <div class="card-body">
                        <a href="/pembeli" class="btn btn-primary">Kembali</a>
                        <br>
                        <br>
                        <form action="/pembeli/update{{ $pembeli->id_pembeli}}" method="post">
                            {{csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama pengguna .." value="{{$pembeli->nama}}">
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{$errors->first('nama')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>No.Handphone</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="Masukan nomor .." value="{{$pembeli->no_hp}}">
                                @if($errors->has('no_hp'))
                                    <div class="text-danger">
                                        {{$errors->first('no_hp')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pengguna .."> {{ $pembeli->alamat }} </textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                    <!-- Card body -->
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection