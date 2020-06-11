<!doctype html>
<html lang="zxx">

@include('partials.head')

<body>
@include('partials.header')

   @yield('content')

    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                | <i class="ti-heart" aria-hidden="true"></i>
                by <a href="https://denisyashop.com" target="_blank">Denisya</a>
            </p> 
        </div> 
    </footer>

    <!-- jquery plugins here-->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="{{asset('js/jquery-1.7.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.8.17.custom.min.js')}}"></script> -->
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
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script> 
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/easyzoom.js')}}"></script>
    <script src="{{asset('js/passtrength.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>