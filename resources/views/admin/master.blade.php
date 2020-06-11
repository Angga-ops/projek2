<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        @include('admin.partials.navbar')

        @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/js1/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/js1/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('admin/js1/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('admin/js1/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('admin/js1/plugins/morris/morris-data.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>