<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Transcrew | Analytics</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/css/app.min.css" rel="stylesheet" />


<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/c64ad24e38.js"></script>
</head>
<body>

<div id="app" class="app">

<header id="header" class="app-header">

<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>
<a href="#" class="brand-logo">
<img src="assets/img/logo1.png" height="20px" />
</a>
</div>


<div class="menu">
<form class="menu-search" method="POST" name="header_search_form">
<div class="menu-search-icon"><i class="fa fa-search"></i></div>
<div class="menu-search-input">
<input type="text" class="form-control" placeholder="Search menu..." />
</div>
</form>
<!-- <div class="menu-item dropdown">
<a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
<div class="menu-label">3</div>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-notification">
<h6 class="dropdown-header text-gray-900 mb-1">Notifications</h6>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
<div class="time">just now</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">3 new customer account is created</div>
<div class="time">2 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/android.svg" width="26px" alt="" />
</div>
<div class="dropdown-notification-info">
<div class="title">Your android application has been approved</div>
<div class="time">5 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/paypal.svg" width="26px" alt="" />
</div>
<div class="dropdown-notification-info">
<div class="title">Paypal payment method has been enabled for your store</div>
<div class="time">10 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<div class="p-2 text-center mb-n1">
<a href="#" class="text-gray-800 text-decoration-none">See all</a>
</div>
</div>
</div> -->
<div class="menu-item dropdown">
<a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/user.jpg" alt="" class="mw-100 mh-100 rounded-circle" />
</div>
<div class="menu-text"><span class="__cf_email__" data-cfemail="d6a5b3b7b8a2beb3bbb396b1bbb7bfbaf8b5b9bb"><?php echo $_SESSION['loginuser']; ?></span></div>
</a>
<div class="dropdown-menu dropdown-menu-right mr-lg-3">
<a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i class="fa fa-user-circle fa-fw ml-auto text-gray-400 f-s-16"></i></a>
<a class="dropdown-item d-flex align-items-center" href="#">Inbox <i class="fa fa-envelope fa-fw ml-auto text-gray-400 f-s-16"></i></a>
<a class="dropdown-item d-flex align-items-center" href="#">Calendar <i class="fa fa-calendar-alt fa-fw ml-auto text-gray-400 f-s-16"></i></a>
<a class="dropdown-item d-flex align-items-center" href="#">Setting <i class="fa fa-wrench fa-fw ml-auto text-gray-400 f-s-16"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="page_login.php">Log Out <i class="fa fa-toggle-off fa-fw ml-auto text-gray-400 f-s-16"></i></a>
</div>
</div>
</div>

</header>


<sidebar id="sidebar" class="app-sidebar">

<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

<div class="menu">
<div class="menu-header">Menu</div>
<div class="menu-item">
<a href="index.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-laptop"></i></span>
<span class="menu-text">Dashboard</span>
</a>
</div>
<div class="menu-item active">
<a href="analytics.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
<span class="menu-text">Analytics</span>
</a>
</div>
<!-- <div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon">
<i class="fa fa-envelope"></i>
<span class="menu-icon-label">6</span>
</span>
<span class="menu-text">Email</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="email_inbox.html" class="menu-link">
<span class="menu-text">Inbox</span>
</a>
</div>
<div class="menu-item">
<a href="email_compose.html" class="menu-link">
<span class="menu-text">Compose</span>
</a>
</div>
<div class="menu-item">
<a href="email_detail.html" class="menu-link">
<span class="menu-text">Detail</span>
</a>
</div>
</div>
</div> -->
<!-- <div class="menu-divider"></div> -->
<!-- <div class="menu-header">Components</div>
<div class="menu-item">
<a href="widgets.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">Widgets</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-heart"></i></span>
<span class="menu-text">UI Kits</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="ui_bootstrap.html" class="menu-link">
<span class="menu-text">Bootstrap</span>
</a>
</div>
<div class="menu-item">
<a href="ui_buttons.html" class="menu-link">
<span class="menu-text">Buttons</span>
</a>
</div>
<div class="menu-item">
<a href="ui_card.html" class="menu-link">
<span class="menu-text">Card</span>
</a>
</div>
<div class="menu-item">
<a href="ui_icons.html" class="menu-link">
<span class="menu-text">Icons</span>
</a>
</div>
<div class="menu-item">
<a href="ui_modal_notification.html" class="menu-link">
<span class="menu-text">Modal & Notification</span>
</a>
</div>
<div class="menu-item">
<a href="ui_typography.html" class="menu-link">
<span class="menu-text">Typography</span>
</a>
</div>
<div class="menu-item">
<a href="ui_tabs_accordions.html" class="menu-link">
<span class="menu-text">Tabs & Accordions</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-file-alt"></i></span>
<span class="menu-text">Forms</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="form_elements.html" class="menu-link">
<span class="menu-text">Form Elements</span>
</a>
</div>
<div class="menu-item">
<a href="form_plugins.html" class="menu-link">
<span class="menu-text">Form Plugins</span>
</a>
</div>
<div class="menu-item">
<a href="form_wizards.html" class="menu-link">
<span class="menu-text">Wizards</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-table"></i></span>
<span class="menu-text">Tables</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="table_elements.html" class="menu-link">
<span class="menu-text">Table Elements</span>
</a>
</div>
<div class="menu-item">
<a href="table_plugins.html" class="menu-link">
<span class="menu-text">Table Plugins</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
<span class="menu-text">Charts</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="chart_js.html" class="menu-link">
<span class="menu-text">Chart.js</span>
</a>
</div>
<div class="menu-item">
<a href="chart_apex.html" class="menu-link">
<span class="menu-text">Apexcharts.js</span>
</a>
</div>
</div>
</div>
<div class="menu-item">
<a href="map.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-map-marker-alt"></i></span>
<span class="menu-text">Map</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-code-branch"></i></span>
<span class="menu-text">Layout</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="layout_starter.html" class="menu-link">
<span class="menu-text">Starter Page</span>
</a>
</div>
<div class="menu-item">
<a href="layout_fixed_footer.html" class="menu-link">
<span class="menu-text">Fixed Footer</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_height.html" class="menu-link">
<span class="menu-text">Full Height</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_width.html" class="menu-link">
<span class="menu-text">Full Width</span>
</a>
</div>
<div class="menu-item">
<a href="layout_boxed_layout.html" class="menu-link">
<span class="menu-text">Boxed Layout</span>
</a>
</div>
<div class="menu-item">
<a href="layout_minified_sidebar.html" class="menu-link">
<span class="menu-text">Minified Sidebar</span>
</a>
</div>
</div>
</div> -->
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-globe"></i></span>
<span class="menu-text">Pages</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
 <div class="menu-submenu">
<!--<div class="menu-item">
<a href="page_gallery.html" class="menu-link">
<span class="menu-text">Gallery</span>
</a>
</div>
<div class="menu-item">
<a href="page_search_results.html" class="menu-link">
<span class="menu-text">Search Results</span>
</a>
</div>
<div class="menu-item">
<a href="page_coming_soon.html" class="menu-link">
<span class="menu-text">Coming Soon Page</span>
</a>
</div> -->
<div class="menu-item">
<a href="index.php" class="menu-link">
<span class="menu-text">Dashboard</span>
</a>
</div> 
<div class="menu-item">
<a href="page_login.php" class="menu-link">
<span class="menu-text">Login</span>
</a>
</div>
<div class="menu-item">
<a href="page_register.php" class="menu-link">
<span class="menu-text">Register</span>
</a>
</div>
</div>
</div>
<div class="menu-divider"></div>
<!-- <div class="menu-header">Users</div>
<div class="menu-item">
<a href="profile.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-user-circle"></i></span>
<span class="menu-text">Profile</span>
</a>
</div>
<div class="menu-item">
<a href="calendar.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-calendar"></i></span>
<span class="menu-text">Calendar</span>
</a>
</div>
<div class="menu-item">
<a href="settings.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-cog"></i></span>
<span class="menu-text">Settings</span>
</a>
</div>
<div class="menu-item">
<a href="helper.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-question-circle"></i></span>
<span class="menu-text">Helper</span>
</a>
</div> -->
<!-- <div class="p-3 px-4 mt-auto hide-on-minified">
<a href="https://seantheme.com/studio/documentation/index.php" class="btn btn-block btn-secondary font-weight-600 rounded-pill">
<i class="fa fa-code-branch mr-1 ml-n1 opacity-5"></i> Documentation
</a>
</div> -->
</div>

</div>


<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

</sidebar>


<div id="content" class="app-content">

<h1 class="page-header">
Analytics <small>stats, overview & performance</small>
</h1>

<div class="d-flex align-items-center mb-3">
<a href="#" class="btn btn-default" id="daterangepicker"><i class="fa fa-fw fa-calendar ml-n1"></i> <span data-id="daterangepicker-date">Today</span> <b class="caret text-muted ml-1"></b></a>
<span class="ml-2">compared to <span data-id="prev-date" id="daterangepicker-compare-date"></span></span>
</div>

<div class="card-columns mb-4">

<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Total sales</div>
<a href="#">View report</a>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>$821.50</div>
<small class="fw-400 ml-auto text-success">+5%</small>
</div>

<div>
<div class="fs-13px font-weight-600 mb-3">SALES OVER TIME</div>
<div class="chart mb-2">
<canvas id="chart1" width="100%" height="190px"></canvas>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-square text-gray-300 mr-2 ml-auto"></i>
<span class="fs-12px mr-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-primary mr-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Online store sessions</div>
<a href="#">View report</a>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>39</div>
<small class="fw-400 ml-auto text-danger">-2.5%</small>
</div>

<div class="row mb-4">
<div class="col-6">Visitors</div>
<div class="col-3 text-center">2</div>
<div class="col-3 text-right">
<span class="text-danger">-</span> 50%
</div>
</div>

<div>
<div class="fs-13px font-weight-600 mb-3">SESSIONS OVER TIME</div>
<div class="chart mb-2">
<canvas id="chart2" width="100%" height="190px"></canvas>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-square text-gray-300 mr-2 ml-auto"></i>
<span class="fs-12px mr-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-blue mr-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill font-weight-600 fs-16px">Top product by units sold</div>
</div>

<div>
<div class="row mb-2">
<div class="col-6">iPhone 11 Pro Max</div>
<div class="col-3 text-center">329</div>
<div class="col-3 text-center"><span class="text-success">+</span> 25%</div>
</div>
<div class="row mb-2">
<div class="col-6">iPad Pro</div>
<div class="col-3 text-center">219</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 5.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">Macbook Pro</div>
<div class="col-3 text-center">125</div>
<div class="col-3 text-center"><span class="text-success">+</span> 2.3%</div>
</div>
<div class="row mb-2">
<div class="col-6">iPhone SE 2</div>
<div class="col-3 text-center">92</div>
<div class="col-3 text-center"><span class="text-success">+</span> 4.9%</div>
</div>
<div class="row mb-2">
<div class="col-6">Apple pencil</div>
<div class="col-3 text-center">52</div>
<div class="col-3 text-center"><span class="text-success">+</span> 25%</div>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Returning customer rate</div>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>52.85%</div>
<small class="fw-400 ml-auto text-danger">-7%</small>
</div>

<div>
<div class="fs-13px font-weight-600 mb-3">CUSTOMERS</div>
<div class="chart mb-2">
<canvas id="chart3" width="100%" height="190px"></canvas>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-square text-indigo mr-2 ml-auto"></i>
<span class="fs-12px mr-4">First-time</span>
<i class="fa fa-square text-teal mr-2"></i>
<span class="fs-12px">Returning</span>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Conversion rate</div>
<a href="#">View report</a>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>5.29%</div>
<small class="fw-400 ml-auto text-success">+83%</small>
</div>

<div>
<div class="fs-13px font-weight-600 mb-3">CONVERSION FUNNEL</div>
<div class="row mb-2">
<div class="col-6">
<div>Added to cart</div>
<div class="text-gray-700 fs-13px">55 session</div>
</div>
<div class="col-3 text-center">25.28%</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 5%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Reached checkout</div>
<div class="text-gray-700 fs-13px">25 session</div>
</div>
<div class="col-3 text-center">15.28%</div>
<div class="col-3 text-center"><span class="text-success">+</span> 82%</div>
</div>
<div class="row">
<div class="col-6">
<div>Sessions converted</div>
<div class="text-gray-700 fs-13px">5 session</div>
</div>
<div class="col-3 text-center">5.28%</div>
<div class="col-3 text-center"><span class="text-success">+</span> 82%</div>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Average order value</div>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>$35.12</div>
<small class="fw-400 ml-auto text-danger">-3.2%</small>
</div>

<div>
<div class="chart mb-2">
<canvas id="chart4" width="100%" height="190px"></canvas>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-square text-gray-300 mr-2 ml-auto"></i>
<span class="fs-12px mr-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-blue mr-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill font-weight-600 fs-16px">Total orders</div>
</div>

<div class="d-flex align-items-center mb-4 h3">
<div>12</div>
<small class="fw-400 ml-auto text-success">+57%</small>
</div>

<div>
<div class="fs-13px font-weight-600 mb-3">ORDERS OVER TIME</div>
<div class="chart mb-2">
<canvas id="chart5" width="100%" height="190px"></canvas>
</div>
<div class="d-flex align-items-center">
<i class="fa fa-square text-gray-300 mr-2 ml-auto"></i>
<span class="fs-12px mr-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-blue mr-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill font-weight-600 fs-16px">Top pages by sessions</div>
</div>

<div class="row mb-2">
<div class="col-6"><div><a href="#">/phone/apple-11-pro-max</a></div></div>
<div class="col-3 text-center">15</div>
<div class="col-3 text-center"><span class="text-success">+</span> 15%</div>
</div>
<div class="row mb-2">
<div class="col-6"><div><a href="#">/tablet/apple-ipad-pro-128gb</a></div></div>
<div class="col-3 text-center">12</div>
<div class="col-3 text-center"><span class="text-success">+</span> 8%</div>
</div>
<div class="row">
<div class="col-6"><div><a href="#">/desktop/apple-mac-pro</a></div></div>
<div class="col-3 text-center">4</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 3%</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill font-weight-600 fs-16px">Sessions by device type</div>
<a href="#">View report</a>
</div>

<div class="row mb-2">
<div class="col-6">
<div>Desktop</div>
</div>
<div class="col-3 text-center">247</div>
<div class="col-3 text-center"><span class="text-success">+</span> 4.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Mobile</div>
</div>
<div class="col-3 text-center">198</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 2.2%</div>
</div>
<div class="row">
<div class="col-6">
<div>Tablet</div>
</div>
<div class="col-3 text-center">35</div>
<div class="col-3 text-center"><span class="text-success">+</span> 8.9%</div>
</div>
</div>
</div>


<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill font-weight-600 fs-16px">Visits from social sources</div>
<a href="#">View report</a>
</div>

<div class="row mb-2">
<div class="col-6">
<div>Facebook</div>
</div>
<div class="col-3 text-center">247</div>
<div class="col-3 text-center"><span class="text-success">+</span> 4.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Twitter</div>
</div>
<div class="col-3 text-center">153</div>
<div class="col-3 text-center"><span class="text-success">+</span> 8.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Instagram</div>
</div>
<div class="col-3 text-center">98</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 3.4%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Pinterest</div>
</div>
<div class="col-3 text-center">75</div>
<div class="col-3 text-center"><span class="text-success">+</span> 1.9%</div>
</div>
<div class="row">
<div class="col-6">
<div>Dribbble</div>
</div>
<div class="col-3 text-center">22</div>
<div class="col-3 text-center"><span class="text-success">+</span> 2.1%</div>
</div>
</div>
</div>

</div>

</div>


<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/app.min.js" type="8292f378473121ba6f57316c-text/javascript"></script>


<script src="assets/plugins/chart.js/dist/Chart.min.js" type="8292f378473121ba6f57316c-text/javascript"></script>
<script src="assets/plugins/moment/min/moment.min.js" type="8292f378473121ba6f57316c-text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="8292f378473121ba6f57316c-text/javascript"></script>
<script src="assets/js/demo/analytics.demo.js" type="8292f378473121ba6f57316c-text/javascript"></script>

<script type="8292f378473121ba6f57316c-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="8292f378473121ba6f57316c-|49" defer=""></script></body>
</html>
