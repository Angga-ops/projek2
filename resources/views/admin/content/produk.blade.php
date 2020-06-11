@extends('admin.master')
@section('content')
<script src="{{asset('admin/js1/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('admin-dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('admin-pembeli')}}"><i class="fa fa-fw fa-user"></i> Data Pengguna</a>
                    </li>
                    <li class="active"> 
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

        <div id="page-wrapper" >

            <div class="container-fluid">
             <!-- Page Heading -->
                <div class="row">
                    <div class="card mt-5">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            Data Produk
                        </h1>
                        @if(Session::has('flash_message_error'))
                        <div class="alert alert-error alert-block">
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
                    </div>
                </div>
                 <div class="card-body">
                 <a href="/admin/produk/tambah" class="btn btn-primary">Tambah Produk Baru</a>
                    <br/>
                    <br/>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Nama produk</th>
                            <th>Kode produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($produk as $g)
						<tr>
							<td><img width="100px" src="{{url('img/produk/',$g->image)}}"></td>
                            <td>{{$g->nama_produk}}</td>
                            <td>{{$g->kode_produk}}</td>
                            <td>{{$g->harga}}</td>
                            <td>{{$g->stok}}</td>
							<td width="300px">{{$g->deskripsi}}</td>
							<td>
                            <a class="btn btn-warning" width="10px" href="{{url('/admin/produk/edit/'.$g->id_produk)}}">EDIT</a>
                            |
                            <a class="btn btn-danger delete" width="10px" href="#" id-produk="{{$g->id_produk}}" nama-produk="{{$g->nama_produk}}">HAPUS</a>
                            </td>
						</tr>
						@endforeach
                        <script>
                         $('.delete').click(function(){
                             var id_produk = $(this).attr('id-produk');
                             var nama_produk = $(this).attr('nama-produk');
                             Swal.fire({
                                title: 'Yakin?',
                                text: "Mau hapus produk dengan nama "+nama_produk+ "?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Iya, hapus produk!'
                                })
                                .then((result) => {
                                    console.log(result);
                                if (result.value) {
                                    window.location = "/admin/produk/hapus/"+id_produk+"";
                                }
                                })
                         });
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