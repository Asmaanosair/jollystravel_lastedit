<!DOCTYPE html>
<html lang="en">

<head>
       <title>Jolleys travel World |Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>





    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    
    <!-- flag icon framework css -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">--}}
{{--    <!-- Menu-Search css -->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/menu-search/css/component.css')}}">--}}
{{--    <!-- Horizontal-Timeline css -->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/dashboard/horizontal-timeline/css/style.css')}}">--}}
    <!-- amchart css -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/dashboard/amchart/css/amchart.css')}}">--}}
{{--    <!-- flag icon framework css -->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">--}}
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <!--color css-->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/linearicons.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/simple-line-icons.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/ionicons.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>
<!-- Pre-loader end -->
<!-- Menu header start -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>

                    <a href="{{url('/Home')}}">
                        Jolleys Travell
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>

                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>

                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification lng-dropdown">
                                <a href="#" id="dropdown-active-item">
                                    <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <a href="#" data-lng="en">
                                            <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="es">
                                            <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="pt">
                                            <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="fr">
                                            <i class="flag-icon flag-icon-fr m-r-5"></i> French
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="user-profile header-notification">
                                <a href="#!">
                                    
                                    
                                      @if(Auth::user()->image==!null)
                                                    <img src="{{asset('img/'.Auth::user()->image)}}" alt="User-Profile-Image">
                                                        @else
                                                        <img src="{{asset('admin/assets/images/user.png')}}" alt="User-Profile-Image">
                                                        @endif
                                   
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Change Password 
                                        </a>
                                    </li>
                                    <!--
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="{{url('/logout')}}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="card-block">
                            <div class="right-icon-control">
                                <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                <div class="form-icon">
                                    <i class="icofont icofont-search"></i>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">{{Auth::user()->name}}</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-2.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-3.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Michael Scofield</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-4.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Irina Shayk</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-5.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Sara Tancredi</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Samon</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Daizy Mendize</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-3.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Loren Scofield</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-4.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Shayk</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Sara</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="{{asset('admin/assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary</div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> {{Auth::user()->name}}
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="{{asset('admin/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="{{asset('admin/assets/images/avatar-2.png')}}" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="icofont icofont-paper-plane"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" pcoded-header-position="relative">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                    @if(Auth::user()->image==!null)
                                                    <img src="{{asset('img/'.Auth::user()->image)}}" alt="User-Profile-Image" class="img-40"  alt="User-Profile-Image">
                                                        @else
                                                           <img class="img-40" src="{{asset('/admin/assets/images/user.png')}}" alt="User-Profile-Image">
                                                        @endif
                              
                                <div class="user-details">
                                    <span>{{Auth::user()->name}}</span>
                                    <span id="more-details">Manager<i class="ti-angle-down"></i></span>
                                </div>
                            </div>

                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="{{url('/gs_admin/change_pass')}}"><i class="ti-user"></i>Change Password </a>
                                      <!--  <a href="#!"><i class="ti-settings"></i>Settings</a>-->
                                        <a href="{{url('/logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Admins</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Admins</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f72f3c;">Admins </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/admins')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f72f3c;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Home</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Home</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f72f3c;">Slider </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/slider')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f72f3c;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Testimonials </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/test')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #24f900;">Why Choose Us</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/why')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Our Partner</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/partner')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">History</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> History</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f72f3c;">About Us </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/about/1')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f72f3c;" data-i18n="nav.page_layout.vertical.static-layout">Show About Us  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Testimonials </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/test')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>


                                </ul>
                            </li>

                        </ul>
                        
                           <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Messages</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Messages</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Messages </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/messages')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>


                                </ul>
                            </li>

                        </ul>
                        
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Booking</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Booking</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f72f3c;">Booking</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/booking')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f72f3c;" data-i18n="nav.page_layout.vertical.static-layout">Show Booking  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                            


                                </ul>
                            </li>

                        </ul>
                        

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Programs</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Programs</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Maim Programs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/main_program')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #24f900;"> Children</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/child')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Sub Programs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/program')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <!--<li class=" ">-->
                                            <!--    <a href="{{url('/gs_admin/active_program')}}" >-->
                                            <!--        <span class="pcoded-micon"><i class="icon-chart"></i></span>-->
                                            <!--        <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  Active Program </span>-->
                                            <!--        <span class="pcoded-mcaret"></span>-->
                                            <!--    </a>-->
                                            <!--</li>-->
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/c_program')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New Program  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            
                                               <li class=" ">
                                                <a href="{{url('/gs_admin/service')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All services of Program </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/c_service')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New services  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>

                        
                        
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Sightseeing Place</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Sightseeing Places</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Sightseeing Places</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/place')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/c_place')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New   </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                        
                        
                        
                        
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Hotel</div>
                            
                             <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Hotel</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Amenities</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/show_icon')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <!--<li class=" ">-->
                                            <!--    <a href="{{url('/gs_admin/icon')}}" >-->
                                            <!--        <span class="pcoded-micon"><i class="icon-chart"></i></span>-->
                                            <!--        <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New   </span>-->
                                            <!--        <span class="pcoded-mcaret"></span>-->
                                            <!--    </a>-->
                                            <!--</li>-->

                                        </ul>
                                    </li>

                                </ul>
                                
                                  <ul class="pcoded-submenu">

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Hotel</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/hotel')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/c_hotel')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New   </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                                
                                 <ul class="pcoded-submenu">

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color:#08ffce;">Rooms</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/room')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/c_room')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New   </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                          
                        
                        
                        <!--  <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Hotel</div>-->
                        <!--<ul class="pcoded-item pcoded-left-item">-->
                        <!--    <li class="pcoded-hasmenu active pcoded-trigger">-->
                        <!--        <a href="javascript:void(0)">-->
                        <!--            <span class="pcoded-micon"><i class="ti-home"></i></span>-->
                        <!--            <span class="pcoded-mtext" data-i18n="nav.dash.main"> Sightseeing Places</span>-->
                        <!--            <span class="pcoded-mcaret"></span>-->
                        <!--        </a>-->
                        <!--        <ul class="pcoded-submenu">-->

                        <!--            <li class=" pcoded-hasmenu">-->
                        <!--                <a href="javascript:void(0)">-->
                        <!--                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>-->
                        <!--                    <span class="pcoded-mtext" style="    color:#08ffce;">Booking</span>-->
                        <!--                    <span class="pcoded-mcaret"></span>-->
                        <!--                </a>-->
                        <!--                <ul class="pcoded-submenu">-->
                        <!--                    <li class=" ">-->
                        <!--                        <a href="{{url('/gs_admin/hotel')}}" >-->
                        <!--                            <span class="pcoded-micon"><i class="icon-chart"></i></span>-->
                        <!--                            <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>-->
                        <!--                            <span class="pcoded-mcaret"></span>-->
                        <!--                        </a>-->
                        <!--                    </li>-->
                                            <!--<li class=" ">-->
                                            <!--    <a href="{{url('/gs_admin/c_hotel')}}" >-->
                                            <!--        <span class="pcoded-micon"><i class="icon-chart"></i></span>-->
                                            <!--        <span class="pcoded-mtext " style="color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout"> Add New   </span>-->
                                            <!--        <span class="pcoded-mcaret"></span>-->
                                            <!--    </a>-->
                                            <!--</li>-->

                        <!--                </ul>-->
                        <!--            </li>-->

                        <!--        </ul>-->
                        <!--    </li>-->

                        <!--</ul>-->


                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Galleries</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Galleries</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Galleries</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/gallery')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>





                                </ul>
                            </li>

                        </ul>

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">FAQ</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> FAQ</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">FAQ</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/faq/1')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    
                                        <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">AGB</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/agb/1')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    
                                      <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Privacy Policy</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/policy/1')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Helpful information</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/help')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/team')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our video</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/vidoe')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>





                                </ul>
                            </li>

                        </ul>

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Contact</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Contact</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Contact</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/contact')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                   <!-- <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Helpful information</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/help')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/team')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our video</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/vidoe')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>-->





                                </ul>
                            </li>

                        </ul>
                        
                         <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Translation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main"> Translation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Home</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/home_trans')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>


                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #f7f10a;">Other Pages</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/page_trans')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #f7f10a;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                <!-- <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Helpful information</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/help')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/team')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" style="    color: #08ffce;">Our video</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{url('/gs_admin/vidoe')}}" >
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext " style="    color: #08ffce;" data-i18n="nav.page_layout.vertical.static-layout">Show All  </span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>-->





                                </ul>
                            </li>

                        </ul>





                    </div>
                </nav>
                <div class="pcoded-content">


@yield("content")
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <style>
                        .sweet-alert h2{
                            color: red;
                        }
                        .sweet-alert p{
                            color: #000;
                            font-weight: bold;
                            font-size: 15px;
                        }
                    </style>
                    @if(Session::has('success'))
                        <script>
                            swal({
                                title: "{{Session::get('success')}}",
                                text: "",
                                timer: 4000,
                                showConfirmButton:false,
                                animation: true,
                                icon: "success",
                            });
                            <?php if(isset($_SESSION['danger'])){ unset($_SESSION['danger']); } ?>
                        </script>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if lt IE 9]>

<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script type="text/javascript" src="{{asset('admin/bower_components/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->

<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- classie js -->
<script type="text/javascript" src="{{asset('admin/bower_components/classie/js/classie.js')}}"></script>

<!-- sweet alert js -->
<script type="text/javascript" src="{{asset('admin/bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/modal.js')}}"></script>
<!-- Rickshow Chart js -->

<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/horizontal-timeline/js/main.js')}}"></script>
<!-- amchart js -->

<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('admin/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/pages/icon-modal.js')}}"></script>
<!-- pcmenu js -->
<script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('admin/assets/js/demo-12.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.mousewheel.min.js')}}"></script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor1', {
        // contentsLangDirection: "rtl"
        language: 'fr',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor2', {
        // contentsLangDirection: "rtl"
        language: 'es',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor3', {
        // contentsLangDirection: "rtl"
        language: 'it',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor4', {
        // contentsLangDirection: "rtl"
        language: 'de',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor5', {
        // contentsLangDirection: "rtl"
        language: 'en',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>





<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor11', {
        // contentsLangDirection: "rtl"
        language: 'fr',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor12', {
        // contentsLangDirection: "rtl"
        language: 'es',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor13', {
        // contentsLangDirection: "rtl"
        language: 'it',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor14', {
        // contentsLangDirection: "rtl"
        language: 'de',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('editor15', {
        // contentsLangDirection: "rtl"
        language: 'en',
            filebrowserBrowseUrl : '{{url('gs_admin/article_img')}}',
        filebrowserUploadUrl : '{{url('gs_admin/upload/article_img')}}',
        filebrowserImageBrowseUrl : '{{url('gs_admin/article_img')}}'

    });
</script>




</body>

</html>
