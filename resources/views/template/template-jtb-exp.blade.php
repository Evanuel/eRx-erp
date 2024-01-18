<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>SAM - ELF SOL ENG</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon"/>

    <!-- Plugins Core Css -->
    <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet"/>
    
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{url('assets/js/bootstrap-icons.css')}}">


    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('assets/css/styles/all-themes.css')}}" rel="stylesheet"/>
 

    <style>
        .total-box-title {
            margin-left: 15px;
            margin-bottom: 0px;
            color: #8898aa;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 2px;
        }
        .total-box-subtitle {
            display: block;
            font-weight: 700;
            font-size: 18px;
            font-size: 20px;
            font-weight: 600;
            margin-left: 15px;
            font-size: 20px;
            word-wrap: break-word;
        }
    </style>

</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{url('assets/images/loading.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Aguarde...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">
                    <img src="{{url('assets/images/logo.png')}}" alt="" />
                    <span class="logo-name">{{$nome_empresa = "ELF SOL ENG"}}</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li>
                        <div class="search-box">
                            <input type="search" id="search" placeholder="Pesquisar..." />
                            <button class="icon">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="label-count bg-orange">{{$qtty_notification=10}}</span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICAÇÕES</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">12 new members joined</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- #START# Message-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-comments"></i>
                            <span class="label-count bg-green">4</span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">MESSAGES</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user1.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user2.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user3.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user4.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user5.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user6.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{url('assets/images/user/user7.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Message-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{url('assets/images/user.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{url('assets/images/usrbig.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> {{$nome_user = "ELF Robot"}} </div>
                            <div class="profile-usertitle-job ">{{$usertile = "robot manager"}} </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="pages/examples/profile.html" data-toggle="tooltip" title="Perfil">
                                <i class="far fa-user sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/email/inbox.html" data-toggle="tooltip" title="e-Mail">
                                <i class="far fa-envelope sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/apps/chat.html" data-toggle="tooltip" title="Chat">
                                <i class="far fa-comment-alt sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="pages/examples/sign-in.html" data-toggle="tooltip" title="Logout">
                                <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                            </a>
                        </div>
                    </li>
                    <li class="header">SISTEMA ELF</li>
                    {{-- Menu Lateral --}}
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="/">HOME</a>
                            </li>
                            {{-- <li>
                                <a href="pages/dashboard/dashboard2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard3.html">Dashboard 3</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>EMPRESAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/pj">Ver Todas</a>
                            </li>
                            <li>
                                <a href="/pj/create">Cadastrar nova</a>
                            </li>
                            <li>
                                <a href="/pj/1/edit">Editar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/apps/calendar.html">
                            <i class="far fa-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="pages/email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="pages/email/view-mail.html">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>Apps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/apps/chat.html">Chat</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="pages/apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/widgets/widget.html">
                            <i class="fas fa-braille"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-drafting-compass"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="pages/ui/modal.html">Modal</a>
                            </li>
                            <li>
                                <a href="pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="pages/ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="pages/ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                            </li>
                            <li>
                                <a href="pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="pages/ui/waves.html">Waves</a>
                            </li>
                            <li>
                                <a href="pages/ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="pages/ui/helper-classes.html">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/group-table.html">Grouping</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-images"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-file-alt"></i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages/examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages/examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-globe-americas"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/jqvmap.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-angle-double-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> {{--Fim do Menu Lateral--}}
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <a href="#settings" data-toggle="tab">SETTINGS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list list-unstyled m-t-20">
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Save History
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Show Status
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Auto Submit Issue
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
	                                        <label class="form-check-label">
	                                            <input class="form-check-input" type="checkbox" value="" checked> Show Status To All
	                                            <span class="form-check-sign">
	                                                <span class="check"></span>
	                                            </span>
	                                        </label>
	                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                            	<li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>Disk Space</p>
                            <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                <small>26% remaining</small>
                            </span>
                        </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                <small>Highly Loaded</small>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item 	bcrumb-1">
                                <a href="/">
                                    <i class="material-icons">home</i>
                                INICIO
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 text-right">
                        <div class="breadcrumb-chart m-l-50">
                            {{-- <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar">
                                        <canvas width="49" height="40" ></canvas>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="float-right m-r-10">
                                <div class="chart-info m-t-5">
                                    <i class="fas fa-dollar-sign m-r-5"></i>
                                    <span>{{$saldo_atual= "R$ 700.000,00"}}</span>
                                    <p>SALDO ATUAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-chart m-l-50">
                            {{-- <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar2">
                                        <canvas width="49" height="40" ></canvas>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="float-right m-r-10">
                                <div class="chart-info m-t-5">
                                    <i class="fas fa-user-tie m-r-5"></i>
                                    <span>{{$faturamento_mensal= "R$ 800.000,00"}}</span>
                                    <p>FATURAMENTO MENSAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-chart m-l-50">
                            {{-- <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar2">
                                        <canvas width="49" height="40" ></canvas>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="float-right m-r-10">
                                <div class="chart-info m-t-5">
                                    <i class="fas fa-user-tie m-r-5"></i>
                                    <span>{{$contas_pagar= "R$ 20.000,00"}}</span>
                                    <p>CONTAS A PAGAR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </section>

    <script src="{{url('assets/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/js/pages/ui/dialogs.js')}}"></script>
    <script src="{{url('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    
    <!-- Plugins Js -->
    <script src="{{url('assets/js/app.min.js')}}"></script>
    <script src="{{url('assets/js/chart.min.js')}}"></script>
    <script src="{{url('assets/js/map.min.js')}}"></script>
    <script src="{{url('assets/js/table.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{url('assets/js/admin.js')}}"></script>
    <script src="{{url('assets/js/pages/index.js')}}"></script>
    <script src="{{url('assets/js/demo.js')}}"></script>
    {{-- <script src="{{url('assets/js/pages/charts/jquery-knob.js')}}"></script> --}}
    <script src="{{url('assets/js/pages/sparkline/sparkline-data.js')}}"></script>
    <script src="{{url('assets/js/pages/medias/carousel.js')}}"></script>

    

    <!-- Export table -->
	<script src="{{url('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
	<script src="{{url('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/js/pages/apps/support.js')}}"></script>

</body>