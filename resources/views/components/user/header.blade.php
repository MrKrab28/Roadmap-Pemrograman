<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a href="#" style="font-family: Cascadia Code; font-weight: 1000;" class="logo">
            @{{ Artisan<span>.</span><span>Compass</span> }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="navbar-nav"> -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto " style="font-family: Cascadia Code; font-weight: 500;font-size: 15px;">

                <li class="nav-item "><a href="{{ route('user.index') }}"
                        class="nav-link @if (request()->segment(2) == 'index') active @endif "><b>Home</b></a></li>
                <li class="nav-item"><a href="{{ route('user.index') }}#category"
                        class="nav-link @if (request()->segment(2) == 'index#category') active @endif"><b>Category</b></a></li>
                <li class="nav-item"><a href="{{ route('user.course-index') }}"
                        class="nav-link @if (request()->segment(2) == 'course') active @endif"><b>Course</b></a></li>
                <li class="nav-item"><a href="{{ route('user.materi-index') }}"
                        class="nav-link @if (request()->segment(2) == 'materi') active @endif"><b>Modul</b></a>
                </li>
                {{-- <li class="nav-item"><a href="#" class="nav-link"><b>Blog</b></a></li> --}}
                <li class="nav-item"><a href="{{ route('user.index') }}#about" class="nav-link"><b>About</b></a></li>
                {{-- <li class="nav-item"><a href="#" class="nav-link"><b>Kontak</b></a></li> --}}
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <img class="rounded-circle header-profile-user"
                            src="{{ asset('assets/images/testingcopy222.png') }}" alt="Header Avatar">

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="apps-contacts-profile.html"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a></li>

                        <li>
                            <form action="{{ route('user.logout') }}" method="POST">
                                @csrf
                                {{-- <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a> --}}
                                <button class="dropdown-item" type="submit"><i
                                        class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- </div> -->
    </div>
</nav>
