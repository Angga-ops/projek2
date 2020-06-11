    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('img/Logo_Denisya.png')}}" width="90" height="52" alt="logo"> </a>
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
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html"> 
                                            login
                                            
                                        </a>
                                        <a class="dropdown-item" href="tracking.html">tracking</a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li> --}}
                                
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
                            
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-inner" action="{{ url('/')}}" method="get">
                    <input type="text" class="form-control" name="s" id="search_input" placeholder="Search Here" value="{{isset($s) ? $s : ''}}">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search" style="margin-right: 30px;"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->