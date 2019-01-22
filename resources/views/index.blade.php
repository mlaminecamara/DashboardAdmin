<?php use Carbon\Carbon;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,>
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <meta http-equiv="refresh" content="300" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ url('/index') }}">
                            <img src="images/icon/logo_heyliot.png" alt="Heyliot" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/index') }}">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/chart') }}">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.blade.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.blade.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.blade.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.blade.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.blade.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.blade.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.blade.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.blade.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.blade.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.blade.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.blade.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.blade.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.blade.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.blade.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.blade.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.blade.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.blade.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav> -->
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
           
            <!--
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/home') }}">Dashboard </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/mesures') }}">
                                <i class="fas fa-chart-bar"></i>Mesures</a>
                        </li>
                        <li>
                            <a href="{{ url('/clients') }}">
                                <i class="fas fa-table"></i>Clients</a>
                        </li>
                        <li>
                            <a href="{{ url('/capteurs-inactifs') }}">
                                <i class="far fa-check-square"></i>Capteurs inactifs</a>
                        </li>
                        <li>
                            <a href="{{ url('/capteurs') }}">
                                <i class="fas fa-calendar-alt"></i>Capteurs</a>
                        </li>
                        <li>
                            <a href="map.blade.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.blade.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.blade.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.blade.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.blade.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.blade.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.blade.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.blade.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.blade.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.blade.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.blade.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.blade.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.blade.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.blade.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.blade.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            -->
        </aside> 
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <div class="logo1">
                    <a href="#">
                        <img src="images/icon/logo_heyliot.png" alt="Heyliot" />
                    </a>
            </div>
            <!-- HEADER DESKTOP-->
           
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-25 ">
                            <a href="{{ url('/home') }}"><div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-device-hub"></i>
                                            </div>
                                            <div class="text">
                                                <?php
                                                foreach($total_device as $k=>$v)
                                                {
                                                    $sort['date_device'][$k] = $v['date_device'];
                                                }
                                                array_multisort($sort['date_device'], SORT_ASC, $total_device);
                                                ?>
                                                <h2> 
                                                @foreach($total_device as $device)
                                                @if($loop->last)
                                                    {{ $device['nombre_device'] }}
                                                @endif
                                                @endforeach
                                                </h2>
                                                <span> Capteurs</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                            <a href="{{ url('/capteurs-inactifs') }}"><div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-devices-off"></i>
                                            </div>
                                            <div class="text">
                                            <?php
                                               foreach($total_capteurs_inactifs as $k=>$v)
                                               {
                                                   $sort['date_inactive'][$k] = $v['date_inactive'];
                                               }
                                               array_multisort($sort['date_inactive'], SORT_ASC, $total_capteurs_inactifs);
                                                //var_dump($total_clients);
                                            ?>

                                                <h2>
                                                @foreach($total_capteurs_inactifs as $inactifs)
                                                    @if($loop->last)
                                                        {{ $inactifs['nombre_inactive'] }}
                                                    @endif
                                                @endforeach
                                                </h2>
                                                <span>Capteurs inactifs</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                            
                            <a href="{{ url('/chart') }}"><div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-chart"></i>
                                            </div>
                                            <div class="text">
                                                @if( $total_payloads[0]['nombre_payloads'] > 99000)
                                                <h2>{{ number_format(($total_payloads[0]['nombre_payloads'] /1000), 1) }}K</h2>
                                                @elseif( $total_payloads[0]['nombre_payloads'] > 999999)
                                                <h2>{{ number_format(($total_payloads[0]['nombre_payloads'] / 1000000), 1) }}M</h2>
                                                @else
                                                <h2>{{ $total_payloads[0]['nombre_payloads'] }}</h2>
                                                @endif
                                                <span>  Mesures</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1" ></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                            <a href="{{ url('/home') }}"><div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                            <?php
                                               foreach($total_clients as $k=>$v)
                                               {
                                                   $sort['date_client'][$k] = $v['date_client'];
                                               }
                                               array_multisort($sort['date_client'], SORT_ASC, $total_clients);
                                                //var_dump($total_clients);
                                            ?>
                                                
                                                <h2>
                                                @foreach($total_clients as $total)
                                                    <?php
                                                    $date_g = date_parse($total['date_client'])
                                                    ?>
                                                    @if($loop->last)
                                                        {{ $total['nombre_client'] }}
                                                    @endif
                                                @endforeach
                                                </h2>
                                                <span>Clients</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2" ></canvas>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">char by %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>products</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top countries</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$5,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                        <td class="text-right">$1639.32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
        <footer class="footer">
        @foreach($total_capteurs_inactifs as $inactifs)
            @if($loop->first)
            <?php
            $date = Carbon::parse($inactifs['updated_at'])->timezone('Europe/Paris');
            $day = ((string)$date->day);
            $month = ((string)$date->month);
            $hour = ((string)$date->hour);
            $minute = ((string)$date->minute);
            if(strlen($day) == 1)
                $day= str_pad($day, 2, "0", STR_PAD_LEFT);

            if(strlen($month) == 1)
                $month= str_pad($month, 2, "0", STR_PAD_LEFT);
                                                            
            if(strlen($hour) == 1)
                $hour= str_pad($hour, 2, "0", STR_PAD_LEFT);
                                                            
            if(strlen($minute) == 1)
                $minute= str_pad($minute, 2, "0", STR_PAD_LEFT);
            ?>
            Dernière actualisation: {{ $day }}/{{ $month}}/{{ $date->year}} à {{ $hour }}h{{ $minute }}
            @endif
        @endforeach
        </footer>
    </div>

<?php
    $sort = array();
    foreach($total_by_date as $k=>$v)
    {
        $sort['date'][$k] = $v['date'];
    }
    array_multisort($sort['date'], SORT_ASC, $total_by_date);
   //dd($total_by_date);
?>
<script type="text/javascript">
    // Graph Mesures
    let field_dates = [];
    let field_val = [];

    @foreach($total_by_date as $d)
        <?php
            $date_g = date_parse($d["date"]);

            if(strlen($date_g['day']) == 1)
                $date_g['day'] = '0'.$date_g['day']; 

            if(strlen($date_g['month']) == 1)
                $date_g['month'] = '0'.$date_g['month'];
        ?>
        field_dates.push("{{ $date_g['day'] }}/{{$date_g['month']}}/{{$date_g['year'] }} ");
    @endforeach
    
    @foreach($total_by_date as $d)
        field_val.push("{{ $d["nombre"] }}");
    @endforeach
    
    //console.log(field_dates);
    //console.log(field_val);

    //Grpah clients

    let field_dates_clients = [];
    let field_val_clients = [];

     @foreach($total_clients as $client)
        <?php
            $date_g = date_parse($client["date_client"]);
            if(strlen($date_g['day']) == 1)
                $date_g['day'] = '0'.$date_g['day']; 

            if(strlen($date_g['month']) == 1)
                $date_g['month'] = '0'.$date_g['month'];
        ?>
        field_dates_clients.push("{{ $date_g['day'] }}/{{$date_g['month']}}/{{$date_g['year'] }} ");
    @endforeach
    
    @foreach($total_clients as $client)
        field_val_clients.push("{{ $client["nombre_client"] }}");
    @endforeach

    //Grpah capteurs inactifs

    let field_dates_capteurs_inactifs = [];
    let field_val_capteurs_inactifs = [];

     @foreach($total_capteurs_inactifs as $inactifs)
        <?php
            $date_g = date_parse($inactifs["date_inactive"]);
            if(strlen($date_g['day']) == 1)
                $date_g['day'] = '0'.$date_g['day']; 

            if(strlen($date_g['month']) == 1)
                $date_g['month'] = '0'.$date_g['month'];
        ?>
        field_dates_capteurs_inactifs.push("{{ $date_g['day'] }}/{{$date_g['month']}}/{{$date_g['year'] }} ");
    @endforeach
    
    @foreach($total_capteurs_inactifs as $inactifs)
        field_val_capteurs_inactifs.push("{{ $inactifs["nombre_inactive"] }}");
    @endforeach



    //Graph Capteurs totaux

    let field_dates_capteurs = [];
    let field_val_capteurs = [];

     @foreach($total_device as $device)
        <?php
            $date_g = date_parse($device["date_device"]);
            if(strlen($date_g['day']) == 1)
                $date_g['day'] = '0'.$date_g['day']; 

            if(strlen($date_g['month']) == 1)
                $date_g['month'] = '0'.$date_g['month'];
        ?>
        field_dates_capteurs.push("{{ $date_g['day'] }}/{{$date_g['month']}}/{{$date_g['year'] }} ");
    @endforeach
    
    @foreach($total_device as $device)
        field_val_capteurs.push("{{ $device["nombre_device"] }}");
    @endforeach

   
</script>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
