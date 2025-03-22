<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="/admin_assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/admin_assets/images/favicon.png" type="image/x-icon" />
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
        rel="stylesheet" />
    <!-- Flag icon css -->
    <link rel="stylesheet" href="/admin_assets/css/vendors/flag-icon.css" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="/admin_assets/css/iconly-icon.css" />
    <link rel="stylesheet" href="/admin_assets/css/bulk-style.css" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="/admin_assets/css/themify.css" />
    <!--fontawesome-->
    <link rel="stylesheet" href="/admin_assets/css/fontawesome-min.css" />
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="/admin_assets/css/vendors/weather-icons/weather-icons.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin_assets/css/vendors/scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="/admin_assets/css/vendors/slick.css" />
    <link rel="stylesheet" type="text/css" href="/admin_assets/css/vendors/slick-theme.css" />
    <!-- App css -->
    <link rel="stylesheet" href="/admin_assets/css/style.css" />
    <link id="color" rel="stylesheet" href="/admin_assets/css/color-1.css" media="screen" />
</head>

<body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <header class="page-header row">
            <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img
                        class="light-logo img-fluid" src="/admin_assets/images/logo/logo1.png" alt="logo" /><img
                        class="dark-logo img-fluid" src="/admin_assets/images/logo/logo-dark.png"
                        alt="logo" /></a><a class="close-btn toggle-sidebar" href="javascript:void(0)">
                    <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Category"></use>
                    </svg></a></div>
            <div class="page-main-header col">
                <div class="header-left">
                    <form class="form-inline search-full col" action="#" method="get">
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="demo-input Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="Search Admiro .." name="q" title=""
                                        autofocus="autofocus" />
                                    <div class="spinner-border Typeahead-spinner" role="status"><span
                                            class="sr-only">Loading...</span></div><i class="close-search"
                                        data-feather="x"></i>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form-group-header d-lg-block d-none">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative d-flex align-items-center">
                                <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                    type="text" placeholder="Type to Search..." name="q" title="" /><i
                                    class="search-bg iconly-Search icli"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page sidebar start-->
            <aside class="page-sidebar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div class="main-sidebar" id="main-sidebar">
                    <ul class="sidebar-menu" id="simple-bar">

                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <h6>Dashboard</h6>
                            </a>
                        </li>


                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                            href="javascript:void(0)">
                            <h6>Registered Users</h6>
                        </a>
                       </li>

                       <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                        href="{{ route('admin.transactions') }}">
                        <h6>View All Transactions</h6>
                        </a>
                       </li>

                       <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                        href="{{ route('admin.users') }}">
                        <h6>Manage Users</h6>
                        </a>
                       </li>


                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </aside>
            <!-- Page sidebar end-->
            {{ $slot }}
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="float-end mb-0">Hand crafted &amp; made with
                                <svg class="svg-color footer-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#heart">
                                    </use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- jquery-->
    <script src="/admin_assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="/admin_assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="/admin_assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="/admin_assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- feather-->
    <script src="/admin_assets/js/vendors/feather-icon/feather.min.js"></script>
    <script src="/admin_assets/js/vendors/feather-icon/custom-script.js"></script>
    <!-- sidebar -->
    <script src="/admin_assets/js/sidebar.js"></script>
    <!-- height_equal-->
    <script src="/admin_assets/js/height-equal.js"></script>
    <!-- config-->
    <script src="/admin_assets/js/config.js"></script>
    <!-- apex-->
    <script src="/admin_assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/admin_assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- scrollbar-->
    <script src="/admin_assets/js/scrollbar/simplebar.js"></script>
    <script src="/admin_assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="/admin_assets/js/slick/slick.min.js"></script>
    <script src="/admin_assets/js/slick/slick.js"></script>
    <!-- data_table-->
    <script src="/admin_assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="/admin_assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable1-->
    <script src="/admin_assets/js/js-datatables/datatables/datatable.custom1.js"></script>
    <!-- page_datatable-->
    <script src="/admin_assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- theme_customizer-->
    <script src="/admin_assets/js/theme-customizer/customizer.js"></script>
    <!-- tilt-->
    <script src="/admin_assets/js/animation/tilt/tilt.jquery.js"></script>
    <!-- page_tilt-->
    <script src="/admin_assets/js/animation/tilt/tilt-custom.js"></script>
    <!-- dashboard_1-->
    <script src="/admin_assets/js/dashboard/dashboard_1.js"></script>
    <!-- custom script -->
    <script src="/admin_assets/js/script.js"></script>
</body>

</html>
