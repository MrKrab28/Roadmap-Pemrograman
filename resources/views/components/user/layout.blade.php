<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@{{ Artisan.Compass }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
</head>

<body>
    <!-- <header class="header"> -->
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a href="#" style="font-family: Fira Code; font-weight: 1000;" class="logo">
                @{{ Artisan <span> . </span><span>Compass</span > }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="navbar-nav"> -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto " style="font-family: Fira Code; font-weight: 500;font-size: 15px;">

                    <li class="nav-item "><a href="#" class="nav-link active"><b>Beranda</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Kursus</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Tentang Kami</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Blog</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Kontak</b></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="user" class=""> </i><span>User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"> <i data-feather="save" class="me-2">
                                    </i><span> PROFILE</span></a></li>
                            <li><a class="dropdown-item" href="#"> <i data-feather="log-in" class="me-2">
                                    </i><span> LOGIN</span></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"> <i data-feather="log-out" class="me-2">
                                    </i><span> LOGOUT</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </div>
    </nav>
    <div class="hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-in" data-aos-duration="1000">
                <div class="hero-text">
                    <h1 class="main-title text-light">Join & Learn Website Programming with Us!</h1>
                    <p class="sub-title">Temukan Roadmap Pemrograman dan sumber belajar yang komprehensif untuk
                        memulai karier sebagai Web Developer.</p>
                    <a href="#course" class="btn-main"><i data-feather="mail"></i><span data-key="t-email">Mulai Belajar
                            Sekarang</span></a>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('assets/images/testingcopy.png') }}" alt="Gambar Hero">
                    <!-- Ganti dengan URL gambar sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
    <!-- </header> -->

    <!-- Konten lainnya di sini -->
    <!-- content -->
    <section class="container mt-3" id="course">
        <h2 class="mb-4">Pilihan Kursus</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white">
                    <img src="css.png" class="card-img-top" alt="CSS">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Kuasai CSS untuk mendesain tampilan halaman web dengan kreatif.</p>
                        <a href="#" class="btn btn-primary">Pilih Kursus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white">
                    <img src="css.png" class="card-img-top" alt="CSS">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Kuasai CSS untuk mendesain tampilan halaman web dengan kreatif.</p>
                        <a href="#" class="btn btn-primary">Pilih Kursus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white">
                    <img src="css.png" class="card-img-top" alt="CSS">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Kuasai CSS untuk mendesain tampilan halaman web dengan kreatif.</p>
                        <a href="#" class="btn btn-primary">Pilih Kursus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white">
                    <img src="css.png" class="card-img-top" alt="CSS">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Kuasai CSS untuk mendesain tampilan halaman web dengan kreatif.</p>
                        <a href="#" class="btn btn-primary">Pilih Kursus</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <header>
            <div class="container">
                <h1 class="text-center">Can I use...this service?</h1>
            </div>
        </header>
        <div class="container">
            <h2 class="page-header">Step 1: Where is the data?</h2>
            <div class="row">
                <div class="col-xs-12">
                    <p class="lead text-center bg-info btn text-info center-block">Is the data in the system?</p>
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
                        </div>
                        <div class="col-xs-6 text-center">
                            <p class="btn">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-center">
                    <p class="center-block"><span class="btn btn-success btn-lg">Yes</span></p>
                    <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>

                    <p class="bg-success text-success btn">Okay! Proceed to step 2.</p>
                </div>
                <div class="col-xs-6 text-center">
                    <p class="center-block"><span class="btn btn-danger btn-lg">No</span></p>
                    <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
                    <p class="bg-info text-info btn">Are you willing to put the data into the system?</p>
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
                        </div>
                        <div class="col-xs-6 text-center">
                            <p class="btn">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="center-block"><span class="btn btn-success btn-lg">Yes</span></p>
                            <p class="btn">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </p>
                            <p class="bg-success text-success btn text-wrap">Okay! After the data is in the system,
                                proceed to step 2.</p>

                        </div>
                        <div class="col-xs-6 text-center">
                            <p class="center-block"><span class="btn btn-danger btn-lg">No</span></p>
                            <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
                            <p class="btn bg-danger text-danger text-wrap">The data must be in the system to use this
                                service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="page-header">Step 2: What type of email is it?</h2>
            <div class="row">
                <div class="col-xs-12">
                    <p class="lead text-center bg-info btn text-info center-block">What type of email do you want to
                        send?</p>
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
                        </div>
                        <div class="col-xs-6 text-center">
                            <p class="btn">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <p class="center-block"><span class="btn btn-warning btn-lg">Newsletter</span></p>
                            <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
                            <p class="center-block bg-info text-info btn">Is it directly related to fundraising?</p>
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <p class="btn">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="center-block"><span class="btn btn-success btn-lg">Yes</span></p>
                                    <p class="btn">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </p>
                                    <p class="bg-success text-success btn text-wrap">Okay! You can proceed to step 3.
                                    </p>

                                </div>
                                <div class="col-xs-6 text-center">
                                    <p class="center-block"><span class="btn btn-danger btn-lg">No</span></p>
                                    <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span>
                                    </p>
                                    <p class="btn bg-danger text-danger text-wrap">Content must be directly related to
                                        fundraising to use this service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 text-center">
                            <p class="center-block"><span class="btn btn-success btn-lg">Solicitation</span></p>
                            <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>

                            <p class="bg-success text-success btn">Okay! Proceed to step 3.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <hr>
                <p>Footer information here. For more questions please call the person that you know to call with your
                    questions. </p>
            </div>
        </footer>
    </section>

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>

    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>


    <script src="{{ asset('assets/js/app.js') }}"></script>





    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></s > --}}
</body>

</html>
