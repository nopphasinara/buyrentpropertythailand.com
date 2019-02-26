<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>Dashboard | Stream - Dashboard UI Kit</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
    <meta name="description" content="Stream - Dashboard UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="./assets/css/theme.css">

    <!-- Custom Charts -->
    <style>
    .js-doughnut-chart {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>
<!-- End Head -->

<body>
    <!-- Header (Topbar) -->
    <header class="u-header">
        <div class="u-header-left">
            <a class="u-header-logo" href="index.html">
                <img class="u-logo-desktop" src="./assets/img/logo.png" width="160" alt="Stream Dashboard">
                <img class="img-fluid u-logo-mobile" src="./assets/img/logo-mobile.png" width="50" alt="Stream Dashboard">
            </a>
        </div>

        <div class="u-header-middle">
            <a class="js-sidebar-invoker u-sidebar-invoker" href="#!"
            data-is-close-all-except-this="true"
            data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

        <div class="u-header-search"
        data-search-mobile-invoker="#headerSearchMobileInvoker"
        data-search-target="#headerSearch">
        <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
            <i class="fa fa-search"></i>
        </a>

        <div id="headerSearch" class="u-header-search-form">
            <form>
                <div class="input-group">
                    <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input class="form-control u-header-search__field" type="search" placeholder="Type to search…">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="u-header-right">
    <!-- Activities -->
    <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
            <span class="h3">
                <i class="far fa-envelope"></i>
            </span>
            <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-secondary"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
            <div class="card">
                <div class="card-header d-flex align-items-center py-3">
                    <h2 class="h4 card-header-title">Activities</h2>
                    <a class="ml-auto" href="#">Clear all</a>
                </div>

                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <!-- Activity -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Chad Cannon</h4>
                                        <small class="text-muted ml-auto">23 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        We've just done the project.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Activity -->

                        <!-- Activity -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Jane Ortega</h4>
                                        <small class="text-muted ml-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        <span class="text-primary">@Bruce</span> advertising your project is not good idea.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Activity -->

                        <!-- Activity -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Stella Hoffman</h4>
                                        <small class="text-muted ml-auto">15 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        When the release date is expexted for the advacned settings?
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Activity -->

                        <!-- Activity -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Htmlstream</h4>
                                        <small class="text-muted ml-auto">05 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        Adwords Keyword research for beginners
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Activity -->
                    </div>
                </div>

                <div class="card-footer py-3">
                    <a class="btn btn-block btn-outline-primary" href="#">View all activities</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Activities -->

    <!-- Notifications -->
    <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
            <span class="h3">
                <i class="far fa-bell"></i>
            </span>
            <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
            <div class="card">
                <div class="card-header d-flex align-items-center py-3">
                    <h2 class="h4 card-header-title">Notifications</h2>
                    <a class="ml-auto" href="#">Clear all</a>
                </div>

                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                    <i class="fab fa-dribbble"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Dribbble</h4>
                                        <small class="text-muted ml-auto">23 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        <span class="text-primary">@htmlstream</span> just liked your post!
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                    <i class="fab fa-twitter"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Twitter</h4>
                                        <small class="text-muted ml-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        Someone mentioned you on the tweet.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
                                    <i class="fab fa-spotify"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Spotify</h4>
                                        <small class="text-muted ml-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        You've just recived $25 free gift card.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                    <i class="fab fa-facebook-f"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1">Facebook</h4>
                                        <small class="text-muted ml-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        <span class="text-primary">@htmlstream</span> commented in your post.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->
                    </div>
                </div>

                <div class="card-footer py-3">
                    <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Notifications -->

    <!-- Apps -->
    <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
            <span class="h3">
                <i class="far fa-circle"></i>
            </span>
            <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-warning"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
            <div class="card">
                <div class="card-header d-flex align-items-center py-3">
                    <h2 class="h4 card-header-title">Apps</h2>
                    <a class="ml-auto" href="#">Learn more</a>
                </div>

                <div class="card-body py-3">
                    <div class="row">
                        <!-- App -->
                        <div class="col-4 px-2 mb-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img1.png" alt="">
                                <span class="text-center">Assana</span>
                            </a>
                        </div>
                        <!-- End App -->

                        <!-- App -->
                        <div class="col-4 px-2 mb-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img2.png" alt="">
                                <span class="text-center">Slack</span>
                            </a>
                        </div>
                        <!-- End App -->

                        <!-- App -->
                        <div class="col-4 px-2 mb-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img3.png" alt="">
                                <span class="text-center">Cloud</span>
                            </a>
                        </div>
                        <!-- End App -->

                        <!-- App -->
                        <div class="col-4 px-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img5.png" alt="">
                                <span class="text-center">Facebook</span>
                            </a>
                        </div>
                        <!-- End App -->

                        <!-- App -->
                        <div class="col-4 px-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img4.png" alt="">
                                <span class="text-center">Spotify</span>
                            </a>
                        </div>
                        <!-- End App -->

                        <!-- App -->
                        <div class="col-4 px-2">
                            <a class="u-apps d-flex flex-column rounded" href="#!">
                                <img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img6.png" alt="">
                                <span class="text-center">Twitter</span>
                            </a>
                        </div>
                        <!-- End App -->
                    </div>
                </div>

                <div class="card-footer py-3">
                    <a class="btn btn-block btn-outline-primary" href="#">View all apps</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Apps -->

    <!-- User Profile -->
    <div class="dropdown ml-2">
        <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
            <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="./assets/img/avatars/img1.jpg" alt="User Profile">
            <span class="text-dark d-none d-sm-inline-block">
                Bruce Goodman <small class="fa fa-angle-down text-muted ml-1"></small>
            </span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
            <div class="card">
                <div class="card-header py-3">
                    <!-- Storage -->
                    <div class="d-flex align-items-center mb-3">
                        <span class="h6 text-muted text-uppercase mb-0">Storage</span>

                        <div class="ml-auto text-muted">
                            <strong class="text-dark">60gb</strong> / 100gb
                        </div>
                    </div>

                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Storage -->
                </div>

                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> View Profile
                            </a>
                        </li>
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Settings
                            </a>
                        </li>
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-3"></i></span> Invite your friends
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Profile -->
</div>
</header>
<!-- End Header (Topbar) -->

<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="index.html">
                    <img class="img-fluid" src="./assets/img/logo.png" width="124" alt="Stream Dashboard">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="./index.html">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- Base UI -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!"
                        data-target="#baseUI">
                        <i class="far fa-gem u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">Base UI</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="./ui-typography.html">
                                <span class="u-sidebar-nav-menu__item-icon">T</span>
                                <span class="u-sidebar-nav-menu__item-title">Typography</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="./ui-colors.html">
                                <span class="u-sidebar-nav-menu__item-icon">C</span>
                                <span class="u-sidebar-nav-menu__item-title">Colors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Base UI -->

                <!-- UI Components -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!"
                    data-target="#subMenu1">
                    <i class="far fa-paper-plane u-sidebar-nav-menu__item-icon"></i>
                    <span class="u-sidebar-nav-menu__item-title">UI Components</span>
                    <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                    <span class="u-sidebar-nav-menu__indicator"></span>
                </a>

                <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                    <!-- Components -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-alerts.html">
                            <span class="u-sidebar-nav-menu__item-icon">A</span>
                            <span class="u-sidebar-nav-menu__item-title">Alerts</span>
                        </a>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-buttons.html">
                            <span class="u-sidebar-nav-menu__item-icon">B</span>
                            <span class="u-sidebar-nav-menu__item-title">Buttons</span>
                        </a>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-cards.html">
                            <span class="u-sidebar-nav-menu__item-icon">C</span>
                            <span class="u-sidebar-nav-menu__item-title">Cards</span>
                        </a>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-modals.html">
                            <span class="u-sidebar-nav-menu__item-icon">M</span>
                            <span class="u-sidebar-nav-menu__item-title">Modals</span>
                        </a>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-tooltips-and-popovers.html">
                            <span class="u-sidebar-nav-menu__item-icon">T</span>
                            <span class="u-sidebar-nav-menu__item-title">Tooltips & Popovers</span>
                        </a>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./ui-others.html">
                            <span class="u-sidebar-nav-menu__item-icon">O</span>
                            <span class="u-sidebar-nav-menu__item-title">Other Components</span>
                        </a>
                    </li>
                    <!-- End Components -->
                </ul>
            </li>
            <!-- End UI Components -->

            <!-- Forms -->
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="./forms.html">
                    <i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
                    <span class="u-sidebar-nav-menu__item-title">Forms</span>
                </a>
            </li>
            <!-- End Forms -->

            <!-- Tables -->
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="./tables.html">
                    <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
                    <span class="u-sidebar-nav-menu__item-title">Tables</span>
                </a>
            </li>
            <!-- End Tables -->

            <!-- Account Pages -->
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="#!"
                data-target="#subMenu2">
                <i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
                <span class="u-sidebar-nav-menu__item-title">Account Pages</span>
                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                <span class="u-sidebar-nav-menu__indicator"></span>
            </a>

            <ul id="subMenu2" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="./account-profile.html">
                        <span class="u-sidebar-nav-menu__item-icon">P</span>
                        <span class="u-sidebar-nav-menu__item-title">Profile</span>
                    </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="./account-sign-up.html">
                        <span class="u-sidebar-nav-menu__item-icon">C</span>
                        <span class="u-sidebar-nav-menu__item-title">Sign Up</span>
                    </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="./account-sign-in.html">
                        <span class="u-sidebar-nav-menu__item-icon">S</span>
                        <span class="u-sidebar-nav-menu__item-title">Sign In</span>
                    </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="./account-password-recover.html">
                        <span class="u-sidebar-nav-menu__item-icon">R</span>
                        <span class="u-sidebar-nav-menu__item-title">Recover Password</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Account Pages -->

        <!-- Other Pages -->
        <li class="u-sidebar-nav-menu__item">
            <a class="u-sidebar-nav-menu__link" href="#!"
            data-target="#subMenu3">
            <i class="far fa-folder-open u-sidebar-nav-menu__item-icon"></i>
            <span class="u-sidebar-nav-menu__item-title">Other Pages</span>
            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
            <span class="u-sidebar-nav-menu__indicator"></span>
        </a>

        <ul id="subMenu3" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="./blank.html">
                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                    <span class="u-sidebar-nav-menu__item-title">Blank Page</span>
                </a>
            </li>
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="./404.html">
                    <span class="u-sidebar-nav-menu__item-icon">E</span>
                    <span class="u-sidebar-nav-menu__item-title">Error 404</span>
                </a>
            </li>
            <li class="u-sidebar-nav-menu__item">
                <a class="u-sidebar-nav-menu__link" href="./500.html">
                    <span class="u-sidebar-nav-menu__item-icon">E</span>
                    <span class="u-sidebar-nav-menu__item-title">Error 500</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Other Pages -->

    <hr>

    <!-- Documentation -->
    <li class="u-sidebar-nav-menu__item">
        <a class="u-sidebar-nav-menu__link" href="./docs.html">
            <i class="far fa-newspaper u-sidebar-nav-menu__item-icon"></i>
            <span class="u-sidebar-nav-menu__item-title">Documentation</span>
        </a>
    </li>
    <!-- End Documentation -->

    <!-- Free Download -->
    <li class="u-sidebar-nav-menu__item">
        <a class="u-sidebar-nav-menu__link" href="https://htmlstream.com/templates/stream-dashboard-ui-kit">
            <i class="fab fa-html5 u-sidebar-nav-menu__item-icon"></i>
            <span class="u-sidebar-nav-menu__item-title">Free Download</span>
        </a>
    </li>
    <!-- End Free Download -->
</ul>
</nav>
</div>
</aside>
<!-- End Sidebar -->

<div class="u-content">
    <div class="u-body">
        <!-- Doughnut Chart -->
        <div class="row">
            <div class="col-sm-6 col-xl-3 mb-4">
                <div class="card">
                    <div class="card-body media align-items-center px-xl-3">
                        <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                            <canvas class="js-doughnut-chart" width="70" height="70"
                            data-set="[65, 35]"
                            data-colors='[
                            "#2972fa",
                            "#f6f9fc"
                            ]'></canvas>

                            <div class="u-doughnut__label text-info">65</div>
                        </div>

                        <div class="media-body">
                            <h5 class="h6 text-muted text-uppercase mb-2">
                                Total Sales <i class="fa fa-arrow-up text-success ml-1"></i>
                            </h5>
                            <span class="h2 mb-0">$56,400</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-4">
                <div class="card">
                    <div class="card-body media align-items-center px-xl-3">
                        <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                            <canvas class="js-doughnut-chart" width="70" height="70"
                            data-set="[35, 65]"
                            data-colors='[
                            "#fab633",
                            "#f6f9fc"
                            ]'></canvas>

                            <div class="u-doughnut__label text-warning">35</div>
                        </div>

                        <div class="media-body">
                            <h5 class="h6 text-muted text-uppercase mb-2">
                                Spendings <i class="fa fa-arrow-down text-danger ml-1"></i>
                            </h5>
                            <span class="h2 mb-0">$6,700</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-4">
                <div class="card">
                    <div class="card-body media align-items-center px-xl-3">
                        <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                            <canvas class="js-doughnut-chart" width="70" height="70"
                            data-set="[60, 40]"
                            data-colors='[
                            "#0dd157",
                            "#f6f9fc"
                            ]'></canvas>

                            <div class="u-doughnut__label text-success">60</div>
                        </div>

                        <div class="media-body">
                            <h5 class="h6 text-muted text-uppercase mb-2">
                                Income <i class="fa fa-arrow-up text-success ml-1"></i>
                            </h5>
                            <span class="h2 mb-0">$38,200</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-4">
                <div class="card">
                    <div class="card-body media align-items-center px-xl-3">
                        <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                            <canvas class="js-doughnut-chart" width="70" height="70"
                            data-set="[25, 85]"
                            data-colors='[
                            "#fb4143",
                            "#f6f9fc"
                            ]'></canvas>

                            <div class="u-doughnut__label text-danger">25</div>
                        </div>

                        <div class="media-body">
                            <h5 class="h6 text-muted text-uppercase mb-2">
                                Cancels <i class="fa fa-arrow-up text-danger ml-1"></i>
                            </h5>
                            <span class="h2 mb-0">$3,400</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Doughnut Chart -->

        <!-- Overall Income -->
        <div class="card mb-4">
            <!-- Card Header -->
            <header class="card-header d-md-flex align-items-center">
                <h2 class="h3 card-header-title">Overall Income</h2>

                <!-- Nav Tabs -->
                <ul id="overallIncomeTabsControl" class="nav nav-tabs card-header-tabs ml-md-auto mt-3 mt-md-0">
                    <li class="nav-item mr-4">
                        <a class="nav-link active" href="#overallIncomeTab1" role="tab" aria-selected="true" data-toggle="tab">
                            <span class="d-none d-md-inline">Last</span>
                            7 days
                        </a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#overallIncomeTab2" role="tab" aria-selected="false" data-toggle="tab">
                            <span class="d-none d-md-inline">Last</span>
                            30 days
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#overallIncomeTab3" role="tab" aria-selected="false" data-toggle="tab">
                            <span class="d-none d-md-inline">Last</span>
                            90 days
                        </a>
                    </li>
                </ul>
                <!-- End Nav Tabs -->
            </header>
            <!-- End Card Header -->

            <!-- Card Body -->
            <div class="card-body">
                <div class="tab-content" id="overallIncomeTabs">
                    <!-- Tab Content -->
                    <div class="tab-pane fade show active" id="overallIncomeTab1" role="tabpanel">
                        <div class="row">
                            <!-- Chart -->
                            <div class="col-md-9 mb-4 mb-md-0" style="min-height: 300px;">
                                <canvas class="js-overall-income-chart" width="1000" height="300"></canvas>
                            </div>
                            <!-- End Chart -->

                            <div class="col-md-3">
                                <!-- Total Income -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-primary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Income</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+9.5%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="h3 mb-0">$6,400</span>
                                </div>
                                <!-- End Total Income -->

                                <hr>

                                <!-- Total Installs -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-secondary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Installs</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+7.5%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">1,346,600</span>
                                </div>
                                <!-- End Total Installs -->

                                <hr>

                                <!-- Active Users -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-info mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Active Users</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-danger">
                                            <span>-3.5%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-down ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">896,200</span>
                                </div>
                                <!-- End Active Users -->

                                <hr>

                                <a class="btn btn-block btn-outline-primary" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->

                    <!-- Tab Content -->
                    <div class="tab-pane fade" id="overallIncomeTab2" role="tabpanel">
                        <div class="row">
                            <!-- Chart -->
                            <div class="col-md-9 mb-4 mb-md-0" style="min-height: 300px;">
                                <canvas class="js-overall-income-chart" width="1000" height="300"></canvas>
                            </div>
                            <!-- End Chart -->

                            <div class="col-md-3">
                                <!-- Total Income -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-primary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Income</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+10.4%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="h3 mb-0">$48,650</span>
                                </div>
                                <!-- End Total Income -->

                                <hr>

                                <!-- Total Installs -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-secondary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Installs</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+7.9%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">5,169,854</span>
                                </div>
                                <!-- End Total Installs -->

                                <hr>

                                <!-- Active Users -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-info mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Active Users</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-danger">
                                            <span>-2.5%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-down ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">389,545</span>
                                </div>
                                <!-- End Active Users -->

                                <hr>

                                <a class="btn btn-block btn-outline-primary" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->

                    <!-- Tab Content -->
                    <div class="tab-pane fade" id="overallIncomeTab3" role="tabpanel">
                        <div class="row">
                            <!-- Chart -->
                            <div class="col-md-9 mb-4 mb-md-0" style="min-height: 300px;">
                                <canvas class="js-overall-income-chart" width="1000" height="300"></canvas>
                            </div>
                            <!-- End Chart -->

                            <div class="col-md-3">
                                <!-- Total Income -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-primary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Income</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+12.8%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="h3 mb-0">$112,800</span>
                                </div>
                                <!-- End Total Income -->

                                <hr>

                                <!-- Total Installs -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-secondary mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Total Installs</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-success">
                                            <span>+8.1%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-up ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">9,151,304</span>
                                </div>
                                <!-- End Total Installs -->

                                <hr>

                                <!-- Active Users -->
                                <div>
                                    <div class="media align-items-center">
                                        <div class="media-body d-flex align-items-baseline">
                                            <span class="u-indicator u-indicator--xxs bg-info mr-2"></span>
                                            <h5 class="h6 text-muted text-uppercase mb-1">Active Users</h5>
                                        </div>

                                        <div class="d-flex align-items-center h4 text-danger">
                                            <span>-1.5%</span>
                                            <span class="small">
                                                <i class="fa fa-arrow-down ml-2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <span class="h3 mb-0">3252,191</span>
                                </div>
                                <!-- End Active Users -->

                                <hr>

                                <a class="btn btn-block btn-outline-primary" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
            <!-- End Card Body -->
        </div>
        <!-- End Overall Income -->

        <!-- Current Projects -->
        <div class="row">
            <!-- Current Projects -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100">
                    <header class="card-header d-flex align-items-center">
                        <h2 class="h3 card-header-title">Current Projects</h2>

                        <!-- Card Header Icon -->
                        <ul class="list-inline ml-auto mb-0">
                            <li class="list-inline-item mr-3">
                                <a class="link-muted h3" href="#!">
                                    <i class="far fa-bell"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-muted h3" href="#!">
                                    <i class="far fa-edit"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Card Header Icon -->
                    </header>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total Project</span>
                                <span class="h4 text-primary">56</span>
                            </div>

                            <div class="divider divider-vertical mx-2"></div>

                            <div>
                                <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Tasks</span>
                                <span class="h4 text-info">2,800</span>
                            </div>

                            <div class="divider divider-vertical mx-2"></div>

                            <div>
                                <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Complete</span>
                                <span class="h4 text-success">1,050</span>
                            </div>

                            <div class="divider divider-vertical mx-2"></div>

                            <div>
                                <span class="d-none d-lg-block text-muted small text-uppercase mb-1">In Progress</span>
                                <span class="h4 text-warning">1,750</span>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-active text-muted">
                                    <tr class="small text-muted text-uppercase">
                                        <th>Project Name</th>
                                        <th>Tasks</th>
                                        <th>Budget</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-success text-white rounded-circle mr-3">
                                                    <i class="fab fa-spotify"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">Spotify</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">124 /
                                            <span class="text-muted">56</span>
                                        </td>
                                        <td class="align-middle font-weight-semibold">$13,250</td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 6px; border-radius: 3px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-info text-white rounded-circle mr-3">
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">Facebook</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">680 /
                                            <span class="text-muted">86</span>
                                        </td>
                                        <td class="align-middle font-weight-semibold">$28,100</td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 6px; border-radius: 3px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-danger text-white rounded-circle mr-3">
                                                    <i class="fab fa-google"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">Google</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">110 /
                                            <span class="text-muted">35</span>
                                        </td>
                                        <td class="align-middle font-weight-semibold">$98,900</td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 6px; border-radius: 3px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-info text-white rounded-circle mr-3">
                                                    <i class="fab fa-twitter"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">Twitter</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">450 /
                                            <span class="text-muted">190</span>
                                        </td>
                                        <td class="align-middle font-weight-semibold">$19,000</td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 6px; border-radius: 3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <footer class="card-footer">
                        <a class="u-link u-link--primary" href="#!">All projects</a>
                    </footer>
                </div>
            </div>
            <!-- End Current Projects -->

            <!-- Comments -->
            <div class="col-md-6">
                <div class="card h-100">
                    <header class="card-header d-md-flex align-items-center">
                        <h2 class="h3 card-header-title">Comments</h2>

                        <!-- Nav Tabs -->
                        <ul id="commentsTabsControl" class="nav nav-tabs card-header-tabs ml-md-auto mt-4 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#commentsTab1" role="tab" aria-selected="true"
                                data-toggle="tab">Pending
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#commentsTab2" role="tab" aria-selected="false"
                            data-toggle="tab">Approved
                        </a>
                    </li>
                </ul>
                <!-- End Nav Tabs -->
            </header>

            <div class="card-body p-0 m-0">
                <div class="tab-content" id="commentsTabs">
                    <!-- Tabs Content -->
                    <div class="tab-pane fade show active" id="commentsTab1" role="tabpanel">
                        <div class="list-group list-lg-group list-group-flush">
                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Chad Cannon <span class="badge badge-soft-secondary mx-1">Pro</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">We've just done the project. What's gonna be next?</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Jane Ortega <span class="badge badge-soft-warning mx-1">Light</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img3.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Brandon Baldwin <span class="badge badge-soft-info mx-1">Basic</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">15 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">I wanna discuss about two things that are quite important to me</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Stella Hoffman <span class="badge badge-soft-danger mx-1">Start</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">15 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">When the release date is expexted for the advacned settings?</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Htmlstream <span class="badge badge-soft-secondary mx-1">Pro</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">05 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">Adwords Keyword research for beginners</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->
                        </div>
                    </div>
                    <!-- End Tabs Content -->

                    <!-- Tabs Content -->
                    <div class="tab-pane fade" id="commentsTab2" role="tabpanel">
                        <div class="list-group list-lg-group list-group-flush">
                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Jane Ortega <span class="badge badge-soft-warning mx-1">Light</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img3.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Brandon Baldwin <span class="badge badge-soft-info mx-1">Basic</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">15 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">I wanna discuss about two things that are quite important to me</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Chad Cannon <span class="badge badge-soft-secondary mx-1">Pro</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">15 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">We've just done the project. What's gonna be next?</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Htmlstream <span class="badge badge-soft-secondary mx-1">Pro</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">12 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">Adwords Keyword research for beginners</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->

                            <!-- Comment -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">
                                                Stella Hoffman <span class="badge badge-soft-danger mx-1">Start</span>
                                            </h4>
                                            <small class="text-muted ml-md-auto">05 Jan 2018</small>
                                        </div>

                                        <p class="mb-0">When the release date is expexted for the advacned settings?</p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Comment -->
                        </div>
                    </div>
                    <!-- End Tabs Content -->
                </div>
            </div>

            <footer class="card-footer">
                <a class="u-link u-link--primary" href="#!">All comments</a>
            </footer>
        </div>
    </div>
    <!-- End Comments -->
</div>
<!-- End Current Projects -->
</div>

<!-- Footer -->
<footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted text-muted">
    <p class="h5 mb-2 mb-md-0">More freebies on <a class="link-muted" href="https://htmlstream.com/" target="_blank">Htmlstream</a></p>

    <p class="h5 mb-0 ml-auto">
        &copy; 2018 <a class="link-muted" href="https://htmlstream.com/" target="_blank">Htmlstream</a>. All Rights Reserved.
    </p>
</footer>
<!-- End Footer -->
</div>
</main>

<!-- Global Vendor -->
<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="./assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>

<!-- Initialization  -->
<script src="./assets/js/sidebar-nav.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/dashboard-page-scripts.js"></script>
</body>
</html>
