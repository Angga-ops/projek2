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
                            Data Pengguna
                        </h1>
                    </div>
                </div>
                
                    <div class="card-body">
                        <table class="table table-borderd table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No.Handphone</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0; ?>
                                @foreach ($pembeli as $p)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->no_hp}}</td>
                                    <td>{{$p->alamat}}</td>
                                    <td>
                                    
                                    <a href="/admin/pembeli/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
                                    </td>

                                </tr>
                                @endforeach
                                <script>
                                    swal("Hello world!");
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
                

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
