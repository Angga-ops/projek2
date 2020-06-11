@include('partials.head_login')

<body>
    @include('partials.header')
    
       @yield('content')
    
        <!--::footer_part start::-->
        <footer class="page-footer font-small blue" style="background: #696969;">
            <div class="footer-copyright text-center py-3">
                <p style="color: white;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    | <i class="ti-heart" aria-hidden="true"></i>
                    by <a style="color: #00BFFF;" href="https://denisyashop.com" target="_blank">Denisya</a>
                </p> 
            </div> 
        </footer>
        <!--::footer_part end::-->
    
        <!-- jquery plugins here-->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    </body>
    
    </html>