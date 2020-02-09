<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('template-front/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template-front/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- App Css-->
    <link href="{{ asset('template-front/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        
        .logo {
            margin-top: 25px;
        }
        .logo h2 {
            color: #fff;
        }
        .pesquisa {
            display: flex;
        }
        input.search {
            border-top-right-radius: 0!important;
            border-bottom-right-radius: 0!important;

        }
        .bt-search {
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

    </style>

</head>

<body data-sidebar="dark">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="#" class="logo logo-light">
                        <span class="logo-lg">
                            <h2><img src="{{ asset('images/logo_branco_home.png') }}" alt="logo houpa!"></h2>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-backburger"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block" action="{{ route('produtos.search') }} " method="GET">
                    <div class="position-relative pesquisa">
                        <input type="text" class="form-control search" placeholder="pesquisar..." name="search" required="" />
                        <button type="submit" class="btn btn-primary btn-sm bt-search"><i class="material-icons">youtube_searched_for</i></button>                        
                    </div>
                </form>
            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">
            
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('images/avatar02.png') }}" alt="user image" />
                        <span class="d-none d-sm-inline-block ml-1">Janaina</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Perfil</a>
                       
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>