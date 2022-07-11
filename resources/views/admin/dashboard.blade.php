<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template"
            name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('logo-polri.png') }}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ url('admin-template/assets/css/preloader.min.css') }}"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ url('admin-template/assets/css/bootstrap.min.css') }}" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('admin-template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="{{ url('admin-template/assets/css/app.min.css') }}" id="app-style" rel="stylesheet"
            type="text/css" />

        <!-- Custom Css -->
        <link href="{{ url('admin-template/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    </head>


    <body>

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3
                            font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control"
                                    placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i
                                        class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item"
                                id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search ..."
                                                aria-label="Search Result">
                                            <button class="btn btn-primary"
                                                type="submit"><i class="mdi
                                                    mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img id="header-lang-img"
                                    src="assets/images/flags/us.jpg" alt="Header
                                    Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="en">
                                    <img src="assets/images/flags/us.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="it">
                                    <img src="assets/images/flags/italy.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                                id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg
                                    layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg
                                    layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/github.png"
                                                    alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/bitbucket.png"
                                                    alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/dribbble.png"
                                                    alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/dropbox.png"
                                                    alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/mail_chimp.png"
                                                    alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/slack.png"
                                                    alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                noti-icon position-relative"
                                id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset
                                                text-decoration-underline">
                                                Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img
                                                    src="assets/images/users/avatar-3.jpg"
                                                    class="rounded-circle
                                                    avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">It will seem
                                                        like simplified English.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm
                                                me-3">
                                                <span class="avatar-title
                                                    bg-primary rounded-circle
                                                    font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is
                                                    placed</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">If several
                                                        languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm
                                                me-3">
                                                <span class="avatar-title
                                                    bg-success rounded-circle
                                                    font-size-16">
                                                    <i class="bx
                                                        bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is
                                                    shipped</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">If several
                                                        languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img
                                                    src="assets/images/users/avatar-6.jpg"
                                                    class="rounded-circle
                                                    avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">As a
                                                        skeptical Cambridge
                                                        friend of mine
                                                        occidental.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14
                                        text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle
                                            me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                bg-soft-light border-start border-end"
                                id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                    src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1
                                    fw-medium">Shawn L.</span>
                                <i class="mdi mdi-chevron-down d-none
                                    d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-face-profile font-size-16
                                        align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-credit-card-outline font-size-16
                                        align-middle me-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-account-settings font-size-16
                                        align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-lock font-size-16 align-middle
                                        me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-logout font-size-16 align-middle
                                        me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
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
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Apps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="calendar.html">
                                            <span data-key="t-calendar">Calendar</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="chat.html">
                                            <span data-key="t-chat">Chat</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);"
                                            class="has-arrow">
                                            <span data-key="t-email">Email</span>
                                        </a>
                                        <ul class="sub-menu"
                                            aria-expanded="false">
                                            <li><a href="inbox.html"
                                                    data-key="t-inbox">Inbox</a></li>
                                            <li><a href="read-email.html"
                                                    data-key="t-read-email">Read
                                                    Email</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"
                                            class="has-arrow">
                                            <span data-key="t-invoices">Invoices</span>
                                        </a>
                                        <ul class="sub-menu"
                                            aria-expanded="false">
                                            <li><a
                                                    href="invoice-list.html"
                                                    data-key="t-invoice-list">Invoice
                                                    List</a></li>
                                            <li><a
                                                    href="invoice-detail.html"
                                                    data-key="t-invoice-detail">Invoice
                                                    Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"
                                            class="has-arrow">
                                            <span data-key="t-contacts">Contacts</span>
                                        </a>
                                        <ul class="sub-menu"
                                            aria-expanded="false">
                                            <li><a
                                                    href="user-grid.html"
                                                    data-key="t-user-grid">User
                                                    Grid</a></li>
                                            <li><a
                                                    href="user-list.html"
                                                    data-key="t-user-list">User
                                                    List</a></li>
                                            <li><a
                                                    href="profile.html"
                                                    data-key="t-profile">Profile</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a target="_self" href="login.html"
                                            data-key="t-login">Login</a></li>
                                    <li><a target="_self"
                                            href="register.html"
                                            data-key="t-register">Register</a></li>
                                    <li><a target="_self"
                                            href="recover-password.html"
                                            data-key="t-recover-password">Recover
                                            Password</a></li>
                                    <li><a target="_self"
                                            href="lock-screen.html"
                                            data-key="t-lock-screen">Lock Screen</a></li>
                                    <li><a target="_self"
                                            href="confirm-mail.html"
                                            data-key="t-confirm-mail">Confirm
                                            Mail</a></li>
                                    <li><a target="_self"
                                            href="email-verification.html"
                                            data-key="t-email-verification">Email
                                            Verification</a></li>
                                    <li><a target="_self"
                                            href="two-step-verification.html"
                                            data-key="t-two-step-verification">Two
                                            Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="file-text"></i>
                                    <span data-key="t-pages">Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="starter-page.html"
                                            data-key="t-starter-page">Starter
                                            Page</a></li>
                                    <li><a target="_self" href="maintenance.html"
                                            data-key="t-maintenance">Maintenance</a></li>
                                    <li><a target="_self" href="coming-soon.html"
                                            data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="timeline.html"
                                            data-key="t-timeline">Timeline</a></li>
                                    <li><a href="faqs.html"
                                            data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pricing.html"
                                            data-key="t-pricing">Pricing</a></li>
                                    <li><a target="_self" href="404.html"
                                            data-key="t-error-404">Error 404</a></li>
                                    <li><a target="_self" href="500.html"
                                            data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a target="_self"
                                    href="layouts-horizontal.html">
                                    <i data-feather="layout"></i>
                                    <span data-key="t-horizontal">Horizontal</span>
                                </a>
                            </li>

                            <li class="menu-title mt-2" data-key="t-components">Elements</li>
                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="briefcase"></i>
                                    <span data-key="t-components">Components</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="alerts.html"
                                            data-key="t-alerts">Alerts</a></li>
                                    <li><a href="buttons.html"
                                            data-key="t-buttons">Buttons</a></li>
                                    <li><a href="cards.html"
                                            data-key="t-cards">Cards</a></li>
                                    <li><a href="carousel.html"
                                            data-key="t-carousel">Carousel</a></li>
                                    <li><a href="dropdowns.html"
                                            data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="grid.html"
                                            data-key="t-grid">Grid</a></li>
                                    <li><a href="images.html"
                                            data-key="t-images">Images</a></li>
                                    <li><a href="modals.html"
                                            data-key="t-modals">Modals</a></li>
                                    <li><a href="offcanvas.html"
                                            data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="progress-Bars.html"
                                            data-key="t-progress-bars">Progress
                                            Bars</a></li>
                                    <li><a href="tabs-accordions.html"
                                            data-key="t-tabs-accordions">Tabs &
                                            Accordions</a></li>
                                    <li><a href="typography.html"
                                            data-key="t-typography">Typography</a></li>
                                    <li><a href="video.html"
                                            data-key="t-video">Video</a></li>
                                    <li><a href="general.html"
                                            data-key="t-general">General</a></li>
                                    <li><a href="colors.html"
                                            data-key="t-colors">Colors</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-ui-elements">Extended</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="lightbox.html"
                                            data-key="t-lightbox">Lightbox</a></li>
                                    <li><a href="range-Slider.html"
                                            data-key="t-range-slider">Range
                                            Slider</a></li>
                                    <li><a href="sweet-Alert-2.html"
                                            data-key="t-sweet-alert">SweetAlert
                                            2</a></li>
                                    <li><a href="session-Timeout.html"
                                            data-key="t-session-timeout">Session
                                            Timeout</a></li>
                                    <li><a href="rating.html"
                                            data-key="t-rating">Rating</a></li>
                                    <li><a href="notifications.html"
                                            data-key="t-notifications">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="box"></i>
                                    <span class="badge rounded-pill
                                        bg-soft-danger text-danger float-end">7</span>
                                    <span data-key="t-forms">Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="basic-Elements.html"
                                            data-key="t-form-elements">Basic
                                            Elements</a></li>
                                    <li><a href="validation.html"
                                            data-key="t-form-validation">Validation</a></li>
                                    <li><a href="advanced-Plugins.html"
                                            data-key="t-form-advanced">Advanced
                                            Plugins</a></li>
                                    <li><a href="editors.html"
                                            data-key="t-form-editors">Editors</a></li>
                                    <li><a href="form-upload.html"
                                            data-key="t-form-upload">File Upload</a></li>
                                    <li><a href="wizard.html"
                                            data-key="t-form-wizard">Wizard</a></li>
                                    <li><a href="mask.html"
                                            data-key="t-form-mask">Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="sliders"></i>
                                    <span data-key="t-tables">Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="bootstrap-Basic.html"
                                            data-key="t-basic-tables">Bootstrap
                                            Basic</a></li>
                                    <li><a href="datatables.html"
                                            data-key="t-data-tables">DataTables</a></li>
                                    <li><a href="responsive.html"
                                            data-key="t-responsive-table">Responsive</a></li>
                                    <li><a href="editable.html"
                                            data-key="t-editable-table">Editable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="pie-chart"></i>
                                    <span data-key="t-charts">Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="apexcharts.html"
                                            data-key="t-apex-charts">Apexcharts</a></li>
                                    <li><a href="echarts.html"
                                            data-key="t-e-charts">Echarts</a></li>
                                    <li><a href="chartjs.html"
                                            data-key="t-chartjs-charts">Chartjs</a></li>
                                    <li><a href="jquery-Knob.html"
                                            data-key="t-knob-charts">Jquery Knob</a></li>
                                    <li><a href="sparkline.html"
                                            data-key="t-sparkline-charts">Sparkline</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="cpu"></i>
                                    <span data-key="t-icons">Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="boxicons.html"
                                            data-key="t-boxicons">Boxicons</a></li>
                                    <li><a href="material-Design.html"
                                            data-key="t-material-design">Material
                                            Design</a></li>
                                    <li><a href="dripicons.html"
                                            data-key="t-dripicons">Dripicons</a></li>
                                    <li><a href="font-Awesome-5.html"
                                            data-key="t-font-awesome">Font
                                            Awesome 5</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="map"></i>
                                    <span data-key="t-maps">Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="google.html"
                                            data-key="t-g-maps">Google</a></li>
                                    <li><a href="vector.html"
                                            data-key="t-v-maps">Vector</a></li>
                                    <li><a href="leaflet.html"
                                            data-key="t-l-maps">Leaflet</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"
                                    class="has-arrow">
                                    <i data-feather="share-2"></i>
                                    <span data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);"
                                            data-key="t-level-1-1">Level 1.1</a></li>
                                    <li>
                                        <a href="javascript: void(0);"
                                            class="has-arrow"
                                            data-key="t-level-1-2">Level 1.2</a>
                                        <ul class="sub-menu"
                                            aria-expanded="true">
                                            <li><a href="javascript: void(0);"
                                                    data-key="t-level-2-1">Level
                                                    2.1</a></li>
                                            <li><a href="javascript: void(0);"
                                                    data-key="t-level-2-2">Level
                                                    2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="card sidebar-alert border-0 text-center mx-4
                            mb-0 mt-5">
                            <div class="card-body">
                                <img src="assets/images/giftbox.png" alt="">
                                <div class="mt-4">
                                    <h5 class="alertcard-title font-size-16">Unlimited
                                        Access</h5>
                                    <p class="font-size-13">Upgrade your plan
                                        from a Free trial, to select ‘Business
                                        Plan’.</p>
                                    <a href="#!" class="btn btn-primary mt-2">Upgrade
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" id="miniaresult"></div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            ©
                            Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!"
                                    class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark
                    p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle
                        ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-width"
                            id="layout-width-fuild" value="fuild"
                            onchange="document.body.setAttribute('data-layout-size',
                            'fluid')">
                        <label class="form-check-label"
                            for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-width"
                            id="layout-width-boxed" value="boxed"
                            onchange="document.body.setAttribute('data-layout-size',
                            'boxed')">
                        <label class="form-check-label"
                            for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onchange="document.body.setAttribute('data-layout-scrollable',
                            'false')">
                        <label class="form-check-label"
                            for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onchange="document.body.setAttribute('data-layout-scrollable',
                            'true')">
                        <label class="form-check-label"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="topbar-color"
                            id="topbar-color-light" value="light"
                            onchange="document.body.setAttribute('data-topbar',
                            'light')">
                        <label class="form-check-label"
                            for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="topbar-color"
                            id="topbar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-topbar',
                            'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'lg')">
                        <label class="form-check-label"
                            for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-compact" value="compact"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'md')">
                        <label class="form-check-label"
                            for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-small" value="small"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'sm')">
                        <label class="form-check-label"
                            for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar',
                            'light')">
                        <label class="form-check-label"
                            for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-sidebar',
                            'dark')">
                        <label class="form-check-label"
                            for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-brand" value="brand"
                            onchange="document.body.setAttribute('data-sidebar',
                            'brand')">
                        <label class="form-check-label"
                            for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label"
                            for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label"
                            for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ url('admin-template/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('admin-template/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('admin-template/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{url('admin-template/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('admin-template/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{url('admin-template/assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{url('admin-template/assets/libs/pace-js/pace.min.js')}}"></script>

        <script
    src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

        <script src="{{url('admin-template/assets/js/app.js')}}"></script>

        <script src="{{url('admin-template/assets/js/ajax.js')}}"></script>

    </body>

</html>