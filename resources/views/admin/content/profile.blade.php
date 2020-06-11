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
                    
            <div class="login">
                <div class="avatar">
                    <i class="fa fa-user"></i>
                </div>
                    <form action="" method="post">
                        <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="Admin">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="Admin">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>No.Handphone</label>
                            <input type="text" name="no_hp" class="form-control" value="">
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                </div>
                    </form>

            </div>
                 </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
