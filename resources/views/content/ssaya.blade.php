<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Denisya-Shop</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
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
                                <li>
                                    <a class="nav-link" href="{{route('pesanan_saya')}}">Pesanan Saya</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="{{route('keranjang')}}" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a  href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown saya">
                            <a href="{{route('saya')}}" >
                                <i class="ti-user"></i>
                            </a>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

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
    <div class="container emp-profile">
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

    <!--::footer_part start::-->
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                | <i class="ti-heart" aria-hidden="true"></i>
                by <a href="https://denisyashop.com" target="_blank">Denisya</a>
            </p> 
        </div> 
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>
