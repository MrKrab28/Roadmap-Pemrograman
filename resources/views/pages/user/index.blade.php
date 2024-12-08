<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        /* Reset CSS */
        @font-face {
            font-family: 'Fira Code';
            src: url('file:///D:/Fira_Code_v6.2/FiraCode-Regular.woff2') format('woff2'),
                url('file:///D:/Fira_Code_v6.2/FiraCode-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* font-family: Arial, sans-serif; */
            font-family: 'Fira Code', monospace;
            background-color: #121212;
            /* Warna latar belakang untuk dark mode */
            color: #ffffff;
            /* Warna teks untuk dark mode */
        }

        /* code {
    font-family: 'Fira Code', monospace;
}

pre {
    font-family: 'Fira Code', monospace;
} */

        .container {
            width: 100% !important;
            margin: 0 auto !important;
            max-width: 1200px !important;
        }

        .header {
            background-color: #121212 !important;
            /* Warna latar belakang header */
            padding: 20px 0 !important;
            margin-bottom: 20px !important;
            /* Ubah jarak antara header dan hero */
        }

        .navbar {
            display: flex !important;
            justify-content: space-between !important;
            justify-content: end;
            align-items: center !important;
            padding: 10px 0 !important;
        }

        .navbar .logo {
            font-size: 1.8rem !important;
            color: #ffffff !important;
            text-decoration: none !important;
        }

        .navbar .logo span {
            color: #29b6f6;
            /* Warna aksen untuk span */
        }

        .nav-links {
            list-style: none !important;
            display: flex !important;
            gap: 20px !important;
        }

        .nav-links .nav-link {
            text-decoration: none !important;
            color: #ffffff !important;
            font-size: 1rem !important;
            transition: all 0.3s ease !important;
        }

        .nav-links .nav-link:hover {
            color: #29b6f6 !important;
            /* Warna aksen saat hover */
        }

        .hero {
            background-color: #121212;
            /* Warna latar belakang hero */
            padding: 0px 0;
            /* Sesuaikan padding sesuai kebutuhan */
            margin-top: 0px;
            /* Ubah jarak antara header dan hero */
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-text {
            flex: 1;
            padding: 0 0px;
            /* Sesuaikan padding sesuai kebutuhan */
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .main-title {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .sub-title {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-main {
            display: inline-block;
            padding: 12px 24px;
            background-color: #29b6f6;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-main:hover {
            background-color: #0277bd;
            /* Warna aksen saat hover */
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .navbar {
                /* flex-direction: column !important;
                align-items: flex-start !important; */
            }

            .nav-links {
                /* margin-top: 20px !important;
                flex-direction: column !important; */
            }

            .hero {
                padding: 100px 0;
                /* Padding untuk layar mobile */
                margin-top: 10px;
                /* Ubah jarak antara header dan hero di layar mobile */
            }

            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text,
            .hero-image {
                width: 100%;
            }

            .main-title {
                font-size: 2.5rem;
            }

            .sub-title {
                font-size: 1rem;
            }

            .btn-main {
                font-size: 1rem;
            }

            roadmap {
                padding: 50px 0;
            }

            .roadmap-title {
                font-size: 2rem;
                margin-bottom: 30px;
                text-align: center;
            }

            .roadmap-steps {
                display: flex;
                justify-content: space-around;
                align-items: flex-start;
                gap: 20px;
            }

            .roadmap-step {
                flex: 1;
                background-color: #1f1f1f;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
            }

            .step-title {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }

            .step-description {
                font-size: 1rem;
                color: #cccccc;
            }
        }
    </style>
</head>

<body>






    <!-- <header class="header"> -->
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a href="#" style="font-family: Arial, sans-serif; font-weight: 1000;" class="logo">{{
                Artisan<span>.</span><span>Compass</span> }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="navbar-nav"> -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item"><a href="#" class="nav-link active"><b>Beranda</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Kursus</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Tentang Kami</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Blog</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Kontak</b></a></li>
                </ul>
            </div>
            <!-- </div> -->
        </div>
    </nav>
    <div class="hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-in" data-aos-duration="1000">
                <div class="hero-text">
                    <h1 class="main-title">Join & Learn Website Programming with Us!</h1>
                    <p class="sub-title">Temukan Roadmap Pemrograman dan sumber belajar yang komprehensif untuk
                        memulai karier sebagai Web Developer.</p>
                    <a href="#course" class="btn-main">Mulai Belajar Sekarang</a>
                </div>
                <div class="hero-image">
                    <img src="testingcopy.png" alt="Gambar Hero"> <!-- Ganti dengan URL gambar sesuai kebutuhan -->
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

    <section >
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
                                    <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
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




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></s >
</body >

</html >
