@extends('admin.master')
@section('content')

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('admin-dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('admin-pembeli')}}"><i class="fa fa-fw fa-user"></i> Data Pengguna</a>
                    </li>
                    <li>
                        <a href="{{route('admin-produk')}}"><i class="fa fa-fw fa-edit"></i> Produk</a>
                    </li>
                        <li class="active">
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
                            Data Pesanan
                        </h1>
                    </div>
                </div>
                
                    <div class="card-body">
                    
                        <table class="table table-borderd table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Produk</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Total</th>
                                    <th>Tanggal</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0; ?>
                                @foreach ($pesanan as $q)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$q->nama}}</td>
                                    <td>{{$q->nama_produk}}</td>
                                    <td>{{$q->alamat}}, {{$q->kabkot}}, {{$q->provinsi}}</td>
                                    <td>{{$q->jumlah_bayar}}</td>
                                    <td>{{$q->date_time}}</td>
                                    <td><img width="100px" src="{{url('img/Foto Bukti Transfer/',$q->bukti_bayar)}}"></td>
                                    <td>{{$q->status}}</td>
                                    <td>
                                    @if($q->status=="Menunggu Konfirmasi")
                                    <a href="{{url('/admin/pesanan/konfirmasi/'.$q->id_pesanan)}}" class="btn btn-success">Konfirmasi</a>
                                    @elseif($q->status=="Pesanan Dikemas")
                                    <a href="{{url('/admin/pesanan/dikirim/'.$q->id_pesanan)}}" class="btn btn-success">Kirim Pesanan</a>
                                    @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
                </div>
                

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
