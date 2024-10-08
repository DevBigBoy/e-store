<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard @yield('page-title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/jqvmap/dist/jqvmap.min.css') }}">

    <!--plugins-->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/izitoast/css/iziToast.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">

    @stack('styles')

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layouts.header')

            @include('admin.layouts.sidebar')



            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            @include('admin.layouts.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/index.js') }}"></script>

    <!--notification js -->
    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/izitoast/js/iziToast.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/modules-toastr.js') }}"></script>


    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                round_error_noti("{{ $error }}")
            @endforeach
        @endif

        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    round_info_noti(" {{ Session::get('message') }} ")
                    break;

                case 'success':
                    round_success_noti(" {{ Session::get('message') }} ")
                    break;

                case 'warning':
                    round_warning_noti(" {{ Session::get('message') }} ")
                    break;

                case 'error':
                    round_error_noti(" {{ Session::get('message') }} ")
                    break;
            }
        @endif
    </script>
    @stack('scripts')
</body>

</html>
