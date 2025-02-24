<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeies.com/roysha-html/admin-new/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 12:39:22 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!--TITLE-->
        <title>Roysha- Money Transfer and Online Payments HTML Template</title>

        <!-- Favicon icon -->
        <link rel="shortcut icon" type="image/png" href="/user_assets/images/favicon.png" />

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/user_assets/css/style.css" />
        <!-- <link rel="stylesheet" type="text/css" href=""/> -->
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>

        <!-- Document Wrapper  -->
        <div id="main-wrapper">
            <!-- Header start -->
            <header class="header02">
                <div class="header-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <div class="d-inline-flex ml-auto">
                                    <a href="#" class="top-text"><i class="fas fa-phone-alt"></i> info@roysha.com</a>
                                    <a href="#" class="top-text"><i class="fas fa-envelope"></i> +21 (0) 332 0000 12</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--header -->
                <div class="header-main">
                    <div class="container d-flex align-items-center">
                        <a class="logo d-inline-flex" href="dashboard.html">
                            <img src="/user_assets/images/logo.png" alt="" />
                        </a>
                        <nav class="primary-menu ml-auto">
                            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
                            <ul>
                                <li class="current-menu-item has-menu-child">
                                    <a href="#">Homme</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route("dashboard") }}">Home 01</a></li>

                                    </ul>
                                </li>
                                <li class="current-menu-item"><a href="dashboard.html">Dashboard</a></li>
                                <li class="has-menu-child">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Send Money</a></li>
                                        <li><a href="#">Receive Money</a></li>
                                        <li><a href="#">How it works - Send</a></li>
                                        <li><a href="#">How it works - Receive</a></li>
                                        <li><a href="#">How it works - Paybills</a></li>
                                        <li><a href="#">Sign up</a></li>
                                    </ul>
                                </li>

                                <li class="has-menu-child">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-menu-child pro-menu-drop">
                                    <a href="#">
                                        <div class="header-pro-thumb">
                                            <img class="rounded-circle" src="/user_assets/images/profile.jpg" alt="" />
                                        </div>
                                        Jhone Due <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu-md sub-menu profile-drop">
                                        <li class="dropdown-header">
                                            <div>
                                                <h5 class="hidden-xs m-b-0 text-primary text-ellipsis">Jhon Due</h5>
                                                <div class="small text-muted"><span>Membership ID P14362606</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="mx-n3 mt-0" />
                                        </li>
                                        <li class="nav__create-new-profile-link">
                                            <a href="profile.html">
                                                <span>View personal profile</span>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="nav__dropdown-menu-items">
                                            <a href="profile-notifications.html">
                                                <i class="icon icon-setting"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li class="nav__dropdown-menu-items">
                                            <a href="#"><i class="icon icon-logout"></i><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end main header-->
            </header>
            <!-- Header end -->
            {{ $slot }}
            <!-- Footer strat -->
            <footer class="footer">
                <div class="foo-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="widget foo-nav">
                                    <h5>Access Us</h5>
                                    <ul>
                                        <li><a href="#">Payment</a></li>
                                        <li><a href="#">Send Money</a></li>
                                        <li><a href="#">Receive Money</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="widget foo-nav">
                                    <h5>Help Center</h5>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Payment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="widget foo-nav">
                                    <h5>Follow Us</h5>
                                    <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Linkedin</a></li>
                                        <li><a href="#">Youtube</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="widget foo-nav">
                                    <h5>Services</h5>
                                    <ul>
                                        <li><a href="#">Transfer Money</a></li>
                                        <li><a href="#">Saving Account</a></li>
                                        <li><a href="#">Online Shopping</a></li>
                                        <li><a href="#">Pay Bills</a></li>
                                        <li><a href="#">Credit Service</a></li>
                                        <li><a href="#">Ecommerce</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="widget foo-address">
                                    <h5>Stay In Touch</h5>
                                    <address>
                                        <a href="malto:ervice@email.com">ervice@email.com</a>
                                        <a href="tel:+12345678921">+123 4567 8921</a>
                                    </address>
                                    <address>Rokaz, Chok Bazar 123 Newyork City United State</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="foo-btm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="foo-navigation">
                                    <ul>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Notice</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright">Copyright &copy; <a href="http://themeies.com/">themeies</a> - 2019</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end -->
        </div>
        <!-- Document Wrapper end -->

        <!-- Script -->
        <script src="/user_assets/js/jquery.min.js"></script>
        <script src="/user_assets/js/bootstrap.bundle.min.js"></script>
        <script src="/user_assets/js/moment.min.js"></script>
        <script src="/user_assets/js/daterangepicker.js"></script>
        <script src="/user_assets/js/bootstrap-select.min.js"></script>
        <script src="/user_assets/js/custom.js"></script>
    </body>

<!-- Mirrored from demo.themeies.com/roysha-html/admin-new/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 12:39:35 GMT -->
</html>
