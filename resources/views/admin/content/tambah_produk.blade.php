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

        <div id="page-wrapper" style="height: 800px">

            <div class="container-fluid">
             <!-- Page Heading -->
             <div class="row">
                    <div class="card mt-5">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            TAMBAH DATA PRODUK
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
                        <a href="{{route('admin-produk')}}" class="btn btn-primary">Kembali</a>
                        <br>
                        <br>
                        <form action="{{url('/admin/produk/tambah')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control" required>
                                    <?php echo $kategori_dropdown; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="image" class="form-control" placeholder="Gambar" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" placeholder="Harga" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" name="stok" class="form-control" placeholder="Stok" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </form>
                    <br><br><br></div>
                    <!-- Card body -->
                </div>
                

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
