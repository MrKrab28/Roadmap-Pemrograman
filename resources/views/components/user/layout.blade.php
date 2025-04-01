<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@{{ Artisan.Compass }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/testingcopy.ico') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    @stack('style')
    @stack('script')
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,700');

        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');

        $gr-1: linear-gradient(170deg, #01E4F8 0%, #1D3EDE 100%);
        $gr-2: linear-gradient(170deg, #B4EC51 0%, #429321 100%);
        $gr-3: linear-gradient(170deg, #C86DD7 0%, #3023AE 100%);

        .gr-1 {
            background: $gr-1;
        }

        .gr-2 {
            background: $gr-2;
        }

        .gr-3 {
            background: $gr-3;
        }

        * {
            transition: .5s;
        }

        .h-100 {
            height: 100vh !important;
        }

        .align-middle {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .column {
            margin-top: 3rem;
            padding-left: 3rem;

            &:hover {
                padding-left: 0;

                .card .txt {
                    margin-left: 1rem;

                    h1,
                    p {
                        color: rgba(255, 255, 255, 1);
                        opacity: 1;
                    }
                }

                a {
                    color: rgba(255, 255, 255, 1);

                    &:after {
                        width: 10%;
                    }
                }
            }
        }

        .card {
            min-height: 170px;
            margin: 0;
            padding: 1.7rem 1.2rem;
            border: none;
            border-radius: 0;
            color: rgba(0, 0, 0, 1);
            letter-spacing: .05rem;
            font-family: 'Oswald', sans-serif;
            box-shadow: 0 0 21px rgba(0, 0, 0, .27);

            .txt {
                margin-left: -3rem;
                z-index: 1;

                h1 {
                    font-size: 1.5rem;
                    font-weight: 300;
                    text-transform: uppercase;
                }

                p {
                    font-size: .7rem;
                    font-family: 'Open Sans', sans-serif;
                    letter-spacing: 0rem;
                    margin-top: 33px;
                    opacity: 0;
                    color: rgba(255, 255, 255, 1);
                }
            }

            a {
                z-index: 3;
                font-size: .7rem;
                color: rgba(0, 0, 0, 1);
                margin-left: 1rem;
                position: relative;
                bottom: -.5rem;
                text-transform: uppercase;

                &:after {
                    content: "";
                    display: inline-block;
                    height: 0.5em;
                    width: 0;
                    margin-right: -100%;
                    margin-left: 10px;
                    border-top: 1px solid rgba(255, 255, 255, 1);
                    transition: .5s;
                }
            }

            .ico-card {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            i {
                position: relative;
                right: -50%;
                top: 60%;
                font-size: 12rem;
                line-height: 0;
                opacity: .2;
                color: rgba(255, 255, 255, 1);
                z-index: 0;
            }
        }
    </style>
</head>

<body>
    @stack('scripts')
    <!-- <header class="header"> -->
    {{-- <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a href="#" style="font-family: Cascadia Code; font-weight: 1000;" class="logo">
                @{{ Artisan < span > . < /span><span>Compass</span > }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="navbar-nav"> -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto " style="font-family: Cascadia Code; font-weight: 500;font-size: 15px;">

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
                            <li>
                                <form action="{{ route('user.logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"> <i data-feather="log-out"
                                            class="me-2">
                                        </i><span> LOGOUT</span></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </div>
    </nav> --}}
    <x-user.header />


    <!-- </header> -->

    <!-- Konten lainnya di sini -->
    <!-- content -->
    <div class="container mt-3 mb-5">
        {{ $slot }}
    </div>
    <div class="wave py-3" data-aos="zoom-in" data-aos-duration="1000" style="background-color: #29b6f6">
        <hr class="navbar bg-dark">
    </div>
    <section class=" mt-5 mb-5 ">
        <header>
            <div class="container" id="about" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <h1 class="text-center text-light mb-4">About</h1>
                    <h3 class="text-center mb-0"><a href="#"
                            style="font-family: Cascadia Code; font-weight: 1000;" class="logo text-light">
                            @{{ Artisan <span>.</span><span style="color: #29b6f6;">Compass</span> }}</a></h3>
                    <p class="text-justify text-center mt-0">Selamat datang di Artisan.Compass - Rumah bagi para calon
                        developer web masa depan!</p>
                    <div class="col-md-6">

                        <h2 class="mt-4">Siapa Kami</h2>
                        <p class="text-justify">Artisan Compass adalah platform komprehensif yang dirancang untuk
                            memberikan roadmap pemrograman yang jelas dan terstruktur bagi para pemrogram, baik pemula
                            maupun yang berpengalaman. Misi kami adalah memberdayakan para pengembang dengan membimbing
                            mereka melalui perjalanan pemrograman mereka, membantu mereka memperoleh keterampilan dan
                            pengetahuan yang diperlukan untuk sukses di industri teknologi yang terus berkembang.</p>


                        <p class="text-justify mt-5">Di Artisan Compass, kami membayangkan dunia di mana setiap
                            pemrogram
                            memiliki akses ke jalur pembelajaran yang terdefinisi dengan baik, memungkinkan mereka untuk
                            membangun keahlian mereka dengan cara yang sesuai dengan tujuan mereka. Kami percaya pada
                            kekuatan belajar melalui praktik dan bertujuan untuk mendukung para pengembang di setiap
                            langkah perjalanan mereka, baik yang baru memulai maupun yang ingin memperdalam pengetahuan
                            di bidang spesifik.</p>
                        <p class="text-justify mt-5">Kami menyediakan roadmap untuk membantu Anda memahami jalur
                            pembelajaran terbaik untuk bahasa pemrograman atau teknologi tertentu. Baik Anda seorang
                            pemula atau pemrogram berpengalaman, panduan terperinci kami mencakup semua yang Anda
                            butuhkan, dari dasar-dasar hingga konsep lanjutan.</p>


                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mt-0">
                        <img src="{{ asset('assets/images/artisan.compas.png') }}" style="height: 650px;width: 650px"
                            alt="">
                        <!-- Di sini Anda bisa menambahkan gambar yang cocok -->
                        <!-- Contoh: <img src="path/to/about-us-image.jpg" alt="Tim Artisan.Compass" class="img-fluid rounded shadow"> -->
                    </div>
                </div>


            </div>
        </header>

        <div class="bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark"
            data-aos="zoom-in" data-aos-duration="1000">
            <hr class="py-1" style="background-color: rgb(255, 255, 255)">
        </div>


        <hr data-aos="zoom-in" data-aos-duration="1000">
        <div class="container mt-5 mb-3" data-aos="zoom-in" data-aos-duration="1000">

            <div class="row">

                <!-- Logo dan Tentang Singkat -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-white">@{{ Artisan.Compass }}</h5>
                    <p class="text-light small">Platform belajar pemrograman web terlengkap dengan roadmap yang
                        terstruktur untuk membantu Anda memulai karier sebagai developer.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <!-- Link-link Penting -->
                <div class="col-md-2 mb-4">

                </div>

                <!-- Kategori Pembelajaran -->
                <div class="col-md-2 mb-4">

                </div>

                <!-- Kontak dan Newsletter -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-white">Newsletter</h5>
                    <p class="text-light small">Dapatkan update materi dan tips pemrograman terbaru dari kami.</p>

                    <p class="text-light small mt-3">
                        <i class="fas fa-envelope me-2"></i> info@artisancompass.id<br>
                        <i class="fas fa-phone me-2"></i> +62 812 3456 7890
                    </p>
                </div>
            </div>

            <hr class="border-secondary">

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-6">
                    <p class="text-light small mb-0">&copy; 2025 Artisan.Compass. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light text-decoration-none small me-3">Privacy Policy</a>
                    <a href="#" class="text-light text-decoration-none small me-3">Terms of Service</a>
                    <a href="#" class="text-light text-decoration-none small">Sitemap</a>
                </div>
            </div>


        </div>

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
