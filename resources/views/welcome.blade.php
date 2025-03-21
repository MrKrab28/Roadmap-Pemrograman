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
    <link rel="shortcut icon" href="{{ asset('assets/testingcopy.ico') }}">
    <!-- plugin css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" /> --}}

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.svg" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                                    class="logo-txt">Dason</span>
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.svg" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                                    class="logo-txt">Dason</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="button"><i
                                    class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Paul K.</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.html"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i
                                    class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="auth-logout.html"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>

                        <li>
                            <a href="index.html">
                                <i data-feather="home"></i>
                                {{-- <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span> --}}
                                <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-apps">Apps</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="shopping-cart"></i>
                                <span data-key="t-ecommerce">Ecommerce</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                                <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product
                                        Detail</a></li>
                                <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                                <li><a href="ecommerce-seller.html" data-key="t-seller">Seller <span
                                            class="badge rounded-pill bg-soft-danger text-danger float-end">New</span></a>
                                </li>
                                <li><a href="ecommerce-sale-details.html" data-key="t-sale-details">Sale details <span
                                            class="badge rounded-pill bg-soft-danger text-danger float-end">New</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <i data-feather="message-square"></i>
                                <span data-key="t-chat">Chat</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="mail"></i>
                                <span data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="apps-calendar.html">
                                <i data-feather="calendar"></i>
                                <span data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="trello"></i>
                                <span data-key="t-tasks">Tasks</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-pages">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="layers"></i>
                                <span data-key="t-authentication">Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a>
                                </li>
                                <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                <li><a href="auth-email-verification.html" data-key="t-email-verification">Email
                                        Verification</a></li>
                                <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two
                                        Step Verification</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages">Pages</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="layouts-horizontal.html">
                                <i data-feather="layout"></i>
                                <span data-key="t-horizontal">Horizontal</span>
                            </a>
                        </li>

                        <li class="menu-title mt-2" data-key="t-components">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-components">Bootstrap</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                <li><a href="ui-placeholders.html" data-key="t-progress-bars">Placeholders</a></li>
                                <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs &
                                        Accordions</a></li>
                                <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                <li><a href="ui-utilities.html" data-key="t-utility">Utilities <span
                                            class="badge rounded-pill bg-soft-danger text-danger float-end">New</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="gift"></i>
                                <span data-key="t-ui-elements">Extended</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a>
                                </li>
                                <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                                <li><a href="extended-session-timeout.html" data-key="t-session-timeout">Session
                                        Timeout</a></li>
                                <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="box"></i>
                                <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                                <span data-key="t-forms">Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" data-key="t-form-elements">Basic Elements</a></li>
                                <li><a href="form-validation.html" data-key="t-form-validation">Validation</a></li>
                                <li><a href="form-advanced.html" data-key="t-form-advanced">Advanced Plugins</a></li>
                                <li><a href="form-editors.html" data-key="t-form-editors">Editors</a></li>
                                <li><a href="form-uploads.html" data-key="t-form-upload">File Upload</a></li>
                                <li><a href="form-wizard.html" data-key="t-form-wizard">Wizard</a></li>
                                <li><a href="form-mask.html" data-key="t-form-mask">Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="sliders"></i>
                                <span data-key="t-tables">Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" data-key="t-basic-tables">Bootstrap Basic</a></li>
                                <li><a href="tables-datatable.html" data-key="t-data-tables">DataTables</a></li>
                                <li><a href="tables-responsive.html" data-key="t-responsive-table">Responsive</a></li>
                                <li><a href="tables-editable.html" data-key="t-editable-table">Editable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="pie-chart"></i>
                                <span data-key="t-charts">Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.html" data-key="t-apex-charts">Apexcharts</a></li>
                                <li><a href="charts-echart.html" data-key="t-e-charts">Echarts</a></li>
                                <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                                <li><a href="charts-knob.html" data-key="t-knob-charts">Jquery Knob</a></li>
                                <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">Sparkline</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="cpu"></i>
                                <span data-key="t-icons">Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-feather.html" data-key="t-feather">Feather</a></li>
                                <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html" data-key="t-material-design">Material
                                        Design</a></li>
                                <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="map"></i>
                                <span data-key="t-maps">Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html" data-key="t-g-maps">Google</a></li>
                                <li><a href="maps-vector.html" data-key="t-v-maps">Vector</a></li>
                                <li><a href="maps-leaflet.html" data-key="t-l-maps">Leaflet</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="share-2"></i>
                                <span data-key="t-multi-level">Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-1-1">Level 1.1</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Level
                                        1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" data-key="t-level-2-1">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);" data-key="t-level-2-2">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                        ARTISAN COMPASS
                    </div>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Welcome !</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Sales</span>
                                            <h4 class="mb-3">
                                                $<span class="counter-value" data-target="354.5">0</span>k
                                            </h4>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+$20.9k</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div>

                                        <div class="flex-shrink-0 text-end dash-widget">
                                            <div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]'
                                                class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Items</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="1256">0</span>
                                            </h4>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 text-end dash-widget">
                                            <div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]'
                                                class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Average
                                                Sales</span>
                                            <h4 class="mb-3">
                                                $<span class="counter-value" data-target="7.54">0</span>M
                                            </h4>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 text-end dash-widget">
                                            <div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]'
                                                class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Order
                                                Delivery</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="18.34">0</span>%
                                            </h4>
                                            <div class="text-nowrap">
                                                <span class="badge bg-soft-success text-success">+5.32%</span>
                                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 text-end dash-widget">
                                            <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]'
                                                class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-4">
                                        <h5 class="card-title me-2">Market Overview</h5>
                                        <div class="ms-auto">
                                            <div>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-xl-8">
                                            <div>
                                                <div id="market-overview"
                                                    data-colors='["--bs-primary", "--bs-success"]'
                                                    class="apex-charts"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="p-4">
                                                <div class="mt-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                1
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-14">Mobile Phones</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+5.4%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                2
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-14">Smart Watch</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+6.8%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                3
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-14">Protable Acoustics</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-4.9%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                4
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-14">Smart Speakers</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+3.5%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                5
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-14">Camcorders</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.3%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <a href="" class="btn btn-primary w-100">See All Balances
                                                        <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="col-xl-4">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-4">
                                        <h5 class="card-title me-2">Sales by Locations</h5>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted font-size-12">Sort By:</span> <span
                                                        class="fw-medium">World<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#">USA</a>
                                                    <a class="dropdown-item" href="#">Russia</a>
                                                    <a class="dropdown-item" href="#">Australia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sales-by-locations" data-colors='["--bs-success"]'
                                        style="height: 253px"></div>

                                    <div class="px-2 py-2">
                                        <p class="mb-1">USA <span class="float-end">75%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 55%" aria-valuenow="55"
                                                aria-valuemin="0" aria-valuemax="55">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 85%" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="85">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Customer List</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">All Members<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#">Members</a>
                                                <a class="dropdown-item" href="#">New Members</a>
                                                <a class="dropdown-item" href="#">Old Members</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3" data-simplebar style="max-height: 386px;">
                                        <div class="d-flex align-items-center pb-4">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-2.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Randy Matthews</a></h5>
                                                <span class="text-muted">Randy@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-4.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Vernon Wood</a></h5>
                                                <span class="text-muted">Vernon@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-5.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Howard Rhoades</a></h5>
                                                <span class="text-muted">Howard@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-6.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Arthur Zurcher</a></h5>
                                                <span class="text-muted">Arthur@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-4">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-8.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Angela Palmer</a></h5>
                                                <span class="text-muted">Angela@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center pb-3">
                                            <div class="avatar-md me-4">
                                                <img src="./assets/images/users/avatar-9.jpg"
                                                    class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1"><a href=""
                                                        class="text-dark">Dorothy Wimson</a></h5>
                                                <span class="text-muted">Dorothy@gmail.com</span>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Selling Products</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown align-self-start">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card header -->

                                <div class="card-body px-0 pt-2">
                                    <div class="table-responsive px-3" data-simplebar style="max-height: 395px;">
                                        <table class="table align-middle table-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-1.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark">Half sleeve T-shirt</a></h5>
                                                            <span class="text-muted">$240.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href=""
                                                                class="text-dark">Available</a></p>
                                                        <span class="text-muted">243K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">145 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-2.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark">Light blue T-shirt</a></h5>
                                                            <span class="text-muted">$650.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href="" class="text-dark">Out Of
                                                                Stock</a></p>
                                                        <span class="text-muted">1,253K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bx-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">260 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-3.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark">Black Color T-shirt</a></h5>
                                                            <span class="text-muted">$325.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href=""
                                                                class="text-dark">Available</a></p>
                                                        <span class="text-muted">2,586K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">220 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-4.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark"></a>Hoodie (Blue)</h5>
                                                            <span class="text-muted">$170.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href=""
                                                                class="text-dark">Available</a></p>
                                                        <span class="text-muted">4,565K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">165 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-5.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark"></a>Half sleeve T-Shirt</h5>
                                                            <span class="text-muted">$150.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href="" class="text-dark">Out Of
                                                                Stock</a></p>
                                                        <span class="text-muted">5,265K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bx-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">165 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="avatar-md me-4">
                                                            <img src="./assets/images/product/img-6.png"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div>
                                                            <h5 class="font-size-15"><a href=""
                                                                    class="text-dark"></a>Green color T-shirt</h5>
                                                            <span class="text-muted">$120.00</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="mb-1"><a href=""
                                                                class="text-dark">Available</a></p>
                                                        <span class="text-muted">125K</span>
                                                    </td>

                                                    <td>
                                                        <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bxs-star text-warning"></li>
                                                                <li class="bx bx-star text-warning"></li>
                                                            </ul>
                                                            <span class="text-muted mt-1">165 Sales</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Chat</h4>
                                    <div class="flex-shrink-0">
                                        <select class="form-select form-select-sm mb-0 my-n1">
                                            <option value="Today" selected="">Today</option>
                                            <option value="Yesterday">Yesterday</option>
                                            <option value="Week">Last Week</option>
                                            <option value="Month">Last Month</option>
                                        </select>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3 chat-conversation" data-simplebar style="max-height: 350px;">
                                        <ul class="list-unstyled mb-0">
                                            <li class="chat-day-title">
                                                <span class="title">Today</span>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:00 AM</span></div>
                                                                    <p class="mb-0">Good Morning</p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:02 AM</span></div>
                                                                    <p class="mb-0">Good morning</p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="assets/images/users/avatar-6.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                    </div>

                                                </div>

                                            </li>

                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:04 AM</span></div>
                                                                    <p class="mb-0">
                                                                        Hi there, How are you?
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:04 AM</span></div>
                                                                    <p class="mb-0">
                                                                        Waiting for your reply.As I heve to go back
                                                                        soon. i have to travel long distance.
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:08 AM</span></div>
                                                                    <p class="mb-0">
                                                                        Hi, I am coming there in few minutes. Please
                                                                        wait!! I am in taxi right now.
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="assets/images/users/avatar-6.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                    </div>
                                                </div>

                                            </li>

                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:06 AM</span></div>
                                                                    <p class="mb-0">
                                                                        Thank You very much, I am waiting here at
                                                                        StarBuck cafe.
                                                                    </p>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>


                                            <li>
                                                <div class="conversation-list">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="rounded-circle avatar-sm" alt="">
                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <div class="conversation-name"><span
                                                                            class="time">10:09 AM</span></div>
                                                                    <p class="mb-0">
                                                                        img-1.jpg & img-2.jpg images for a New Projects
                                                                    </p>

                                                                    <ul class="list-inline message-img mt-3  mb-0">
                                                                        <li class="list-inline-item message-img-list">
                                                                            <a class="d-inline-block m-1"
                                                                                href="">
                                                                                <img src="assets/images/small/img-1.jpg"
                                                                                    alt=""
                                                                                    class="rounded img-thumbnail">
                                                                            </a>
                                                                        </li>

                                                                        <li class="list-inline-item message-img-list">
                                                                            <a class="d-inline-block m-1"
                                                                                href="">
                                                                                <img src="assets/images/small/img-2.jpg"
                                                                                    alt=""
                                                                                    class="rounded img-thumbnail">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="dropdown align-self-start">
                                                                    <a class="dropdown-toggle" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Save</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="px-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control border bg-soft-light"
                                                        placeholder="Enter Message...">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit"
                                                    class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                                        class="d-none d-sm-inline-block me-2">Send</span> <i
                                                        class="mdi mdi-send float-end"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Dason.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!"
                                    class="text-decoration-underline">Themesbrand</a>
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


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>


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

</body>

</html>
