<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetz/modules/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css')}}">


        <!-- Datatable -->
        <link rel="stylesheet" href="{{asset('assetz/datatable/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetz/datatable/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assetz/datatable/buttons.bootstrap4.min.css')}}">

        <!-- iziToast -->
        <link rel="stylesheet" href="{{asset('assetz/izitoast/iziToast.min.css')}}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetz/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assetz/css/components.css')}}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('template.navbar')
            @include('template.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                    @yield('content')
                    <!-- <div class="section-header">
                        <h1>Blank Page</h1>
                    </div>

                    <div class="section-body">
                    </div> -->
            </div>
            @include('template.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assetz/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assetz/modules/popper.js')}}"></script>
    <script src="{{ asset('assetz/modules/tooltip.js')}}"></script>
    <script src="{{ asset('assetz/modules/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assetz/modules/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assetz/modules/moment.min.js')}}"></script>
    <script src="{{ asset('assetz/js/stisla.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('/assetz/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assetz/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assetz/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/assetz/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- iziToast -->
    <script src="{{asset('/assetz/izitoast/iziToast.min.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assetz/js/scripts.js')}}"></script>
    <script src="{{ asset('assetz/js/custom.js')}}"></script>

    @stack('script')
</body>

</html>
