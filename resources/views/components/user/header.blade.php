<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a href="#" style="font-family: Fira Code; font-weight: 1000;" class="logo">
            @{{ Artisan <span>.</span><span>Compass</span > }}</a>
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
