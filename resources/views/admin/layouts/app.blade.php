<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BNW ESPORTS</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('../../../../global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('../../../../global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('../../../../global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('../../../../global_assets/js/demo_pages/dashboard.js') }}"></script>

    <!-- /theme JS files -->
    @yield('head')
    <style>
        .sidebar-dark .nav-sidebar>.nav-item-open>.nav-link:not(.disabled),
        .sidebar-dark .nav-sidebar>.nav-item>.nav-link.active,
        .sidebar-light .card[class*=bg-]:not(.bg-light):not(.bg-white):not(.bg-transparent) .nav-sidebar>.nav-item-open>.nav-link:not(.disabled),
        .sidebar-light .card[class*=bg-]:not(.bg-light):not(.bg-white):not(.bg-transparent) .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #FFAD1F;
            color: #fff;
        }

    </style>
</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <img src="global_assets/images/logo_light.png" alt="" width="100px">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>


            </ul>

            <span class="navbar-text ml-md-3 mr-md-auto">
            </span>

            <ul class="navbar-nav">


                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                        <span>Admin</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        {{-- <div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a> --}}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">

                                <span class="dropdown-item"><i class="icon-switch2"></i> Logout</span>
                            </x-jet-responsive-nav-link>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- /main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- User menu -->
                        <div class="sidebar-user">
                            <div class="card-body d-flex justify-content-center">
                                <div class="media">
                                    <div class="">
                                        @if ($logo)
                                            <a href="#"><img src="{{ asset('storage/' . $logo->logo) }}" width="50"
                                                    height="50" alt=""></a>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /user menu -->

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                                title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('main.edit') }}" class="nav-link">
                                <i class="icon-color-sampler"></i>
                                <span>Main</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-library2"></i> <span>Home</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="{{ route('home.create') }}"
                                        class="nav-link ">Create</a></li>
                                <li class="nav-item"><a href="{{ route('home.index') }}"
                                        class="nav-link ">View All</a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-library2"></i> <span>News</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="{{ route('news.create') }}"
                                        class="nav-link ">Create</a></li>
                                <li class="nav-item"><a href="{{ route('news.index') }}"
                                        class="nav-link ">View All</a></li>
                            </ul>
                        </li>

                        {{-- <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-library2"></i> <span>Products</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="{{ route('product.create') }}"
                                        class="nav-link ">Create</a></li>
                                <li class="nav-item"><a href="{{ route('product.index') }}"
                                        class="nav-link ">View All</a></li>
                            </ul>
                        </li> --}}

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-library2"></i> <span>Team</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="{{ route('team.create') }}" class="nav-link ">Create</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('team.index') }}" class="nav-link ">View All</a>
                                </li>
                                {{-- <li class="nav-item"><a href="#" class="nav-link ">Team Overview</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Player Information</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('management-team-members.index') }}" class="nav-link ">Staff Page</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Staff Member</a>
                                </li> --}}
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-library2"></i> <span>Matches</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="#" class="nav-link ">Match Scores</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Upcoming Matches</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Standings</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Match Stats</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Math Lineups</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Match Overview</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link ">Match Replay</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about.edit') }}" class="nav-link">
                                <i class="icon-users4"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-bubbles3"></i> <span>Faqs</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="{{ route('faqs.create') }}"
                                        class="nav-link ">Create</a></li>
                                <li class="nav-item"><a href="{{ route('faqs.index') }}"
                                        class="nav-link ">View All</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.edit') }}" class="nav-link">
                                <i class="icon-phone-wave"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>


        <!-- Main content -->
        <div class="content-wrapper">

            @yield('content')

            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse " id="navbar-footer">
                    <span class="navbar-text text-center">
                        &copy; 2015 - 2018 All Right Reserved
                    </span>


                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
