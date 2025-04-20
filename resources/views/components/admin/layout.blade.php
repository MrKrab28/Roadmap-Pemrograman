    @props(['title'])
    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@{{ Artisan.Compass }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"> --}}
        <title>
            @if (isset($title))
                {{ $title }} | {{ config('app.name') }}
            @else
                {{ config('app.name') }}
            @endif
        </title>
        <link rel="shortcut icon" href="{{ asset('assets/testingcopy.ico') }}">
        <!-- plugin css -->
        <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
            rel="stylesheet" type="text/css" />
        {{-- @vite('resources/css/app.css') --}}
        <!-- preloader css -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" /> --}}
        <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        {{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script> --}}


        <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
        <x-rich-text::styles />
        @stack('style')
        @livewireStyles
    </head>

    <body data-topbar="dark">

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <x-admin.header />

            <!-- ========== Left Sidebar Start ========== -->
            <x-admin.sidebar />
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        {{ $slot }}

                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    <a href="#" style="font-family: Cascadia Code; font-weight: 1000;">
                                        @{{ Artisan<span>.</span><span>Compass</span> }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        @vite('resources/js/app.js')

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>


        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
        </script>

        <script src="{{ asset('assets/js/pages/allchart.js') }}"></script>
        <!-- dashboard init -->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script> --}}
        {{-- <script src="{{ asset('js/mermaid-helper.js') }}"></script> --}}





        @stack('scripts')

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ Session::get('success') }}",

                    background: '#212529',


                })
            </script>
        @endif
        @if (Session::has('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: '{{ Session::get('error') }}',
                    background: '#212529',
                })
            </script>
        @endif

        @livewireScripts
    </body>

    </html>
