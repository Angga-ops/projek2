    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('img/logofix.png')}}" style="width: 150px; height: 25px;" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('produk')}}">
                                        Produk
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kontak')}}">Kontak</a>
                                </li>
                                @if(empty(Auth::check()))
                                    <li>
                                        <a class="nav-link" href="{{route('login')}}">Login</a>
                                    </li>
                                @else
                                    <li>
                                        <a class="nav-link" href="{{route('pesanan_saya')}}">Pesanan Saya</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            @if(Auth::check())
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="{{route('keranjang')}}">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>

                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                    <a  href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                            
                                <div class="dropdown saya">
                                    <a href="{{route('profile')}}" >
                                        <i class="ti-user"></i>
                                    </a>
                                </div>

                            @else
                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                    <a  href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
            <form class="d-flex justify-content-between search-inner" action="{{ url('/')}}" method="get">
                    <input type="text" class="form-control" name="s" id="search_input" placeholder="Search Here" value="{{isset($s) ? $s : ''}}">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->