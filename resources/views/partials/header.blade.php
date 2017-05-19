<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dept Manager</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- full calendar css-->
    <link href="assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link href="assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
    <!-- easy pie chart-->
    <link href="assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link href="assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/fullcalendar.css">
    <link href="assets/css/widgets.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="assets/css/xcharts.min.css" rel=" stylesheet">
    <link href="assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="assets/js/lte-ie7.js"></script>
    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{!! asset('home') !!}" class="logo">Dept <span class="lite">Manager</span></a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                        <span class="username">Jenifer Smith</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="{!! asset('logout') !!}"><i class="icon_key_alt"></i> Log Out</a>
                        </li>


                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li>
                    <a class="" href="{!! asset('debtor') !!}">
                        <i class="icon_document_alt"></i>
                        {{--<i class="icon_piechart"></i>--}}
                        <span>Add Debtor</span>

                    </a>
                </li>

                <li>
                    <a class="" href="{!! asset('debtors') !!}">
                        <i class="icon_table"></i>
                        {{--<i class="icon_piechart"></i>--}}
                        <span>Due Listing</span>
                    </a>
                </li>

                <li>
                    <a class="" href="{!! asset('profiles') !!}">
                        <i class="icon_documents_alt"></i>
                        {{--<i class="icon_piechart"></i>--}}
                        <span>Profiles</span>
                    </a>
                </li>

                <li>
                    <a class="" href="{!! asset('manage') !!}">
                        <i class="fa fa-cogs"></i>

                        {{--<i class="icon_piechart"></i>--}}
                        <span>Manage Users</span>
                    </a>
                </li>

                <li>
                    <a class="" href="{!! asset('logout') !!}">
                        <i class="icon_key_alt"></i>
                        {{--<i class="icon_piechart"></i>--}}
                        <span>Logout</span>
                    </a>
                </li>


                {{--<li class="sub-menu">--}}
                    {{--<a href="javascript:;" class="">--}}
                        {{--<i class="icon_document_alt"></i>--}}
                        {{--<span>Forms</span>--}}
                        {{--<span class="menu-arrow arrow_carrot-right"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub">--}}
                        {{--<li><a class="" href="form_component.html">Form Elements</a></li>--}}
                        {{--<li><a class="" href="form_validation.html">Form Validation</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
