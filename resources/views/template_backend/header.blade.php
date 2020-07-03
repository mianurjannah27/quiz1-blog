 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blog &mdash; Mia</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('public/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/css/components.css')}}">
  <!-- Start GA -->
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

 <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">          
                        <div class="search-result">           
                          <div class="search-header">
                            Projects
                          </div>
                          <div class="search-item">
                            <a href="#">
                              <div class="search-icon bg-danger text-white mr-3">
                                <i class="fas fa-code"></i>
                              </div>
                              Stisla Admin Template
                            </a>
                          </div>
                          <div class="search-item">
                            <a href="#">
                              <div class="search-icon bg-primary text-white mr-3">
                                <i class="fas fa-laptop"></i>
                              </div>
                              Create a new Homepage Design
                            </a>
                          </div>
                        </div>
                    </div>
                </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{asset('public/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                         <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>    
                    </div>
                </li>
            </ul>
            </nav>
