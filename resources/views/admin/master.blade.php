<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hieu Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Main CSS-->
    <link href="/css/app.css" rel="stylesheet" media="all">
    <link href="/css/admin/theme.css" rel="stylesheet" media="all">
    <link href="/fonts/font-awesome.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="/images/admin/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fa fa-tachometer"></i>Dashboard</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fa fa-bar-chart"></i>Charts</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fa fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="fa fa-check-square"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fa fa-map-marker"></i>Maps</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="fa fa-comment"></i>
                                    <span class="quantity">1</span>
                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="/images/admin/icon/avatar-06.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="/images/admin/icon/avatar-04.jpg" alt="Diane Myers">
                                            </div>
                                            <div class="content">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="fa fa-mail-reply"></i>
                                    <span class="quantity">1</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="/images/admin/icon/avatar-06.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="/images/admin/icon/avatar-05.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="/images/admin/icon/avatar-04.jpg" alt="Cynthia Harvey">
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <?php
                $session = new \Illuminate\Support\Facades\Session();
            ?>
            <div class="section__content section__content--p30">
                @if($session::has('flash_message'))
                    <div class="alert alert-{!! $session::get('flash_level') !!}">
                        {!! $session::get('flash_message') !!}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>
<!-- Main JS-->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/animsition.min.js"></script>
<script src="/js/admin/main.js"></script>
<script src="/js/admin/myscript.js"></script>

</body>

</html>
<!-- end document-->
