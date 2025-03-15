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
                    <a href="{{ route('admin.user-index') }}" >
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">Users</span>
                    </a>

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


                <li class="menu-title" data-key="t-pages">Pages</li>



                <li class="menu-title mt-2" data-key="t-components">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1-1">Level 1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Level 1.2</a>
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
