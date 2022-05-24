<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Primary Meta Tags -->
      <title>Volt Free Bootstrap Dashboard - Transactions</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
      <!-- Notyf -->
      <link type="text/css" href="{{asset('./vendor/notyf/notyf.min.css')}}" rel="stylesheet">
      <!-- Volt CSS -->
      <link type="text/css" href="{{asset('./css_/volt.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   </head>
   <body>
      <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
      <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
         <a class="navbar-brand me-lg-5" href="../index.html">
         <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
         </a>
         <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         </div>
      </nav>
      <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
         <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
               <div class="d-flex align-items-center">
                  <div class="avatar-lg me-2">
                     <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                        alt="Bonnie Green">
                  </div>
                  <div class="d-block">
                     <h2 class="h5 mb-0">{{ Auth::user()->name }}</h2>
                  </div>
               </div>
               <div class="collapse-close d-md-none">
                  <a href="#sidebarMenu" data-bs-toggle="collapse"
                     data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                     aria-label="Toggle navigation">
                     <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
               <li class="nav-item"></li>
               <li class="nav-item  ">
                  <a 
                     @if(Auth::user()->hasRole('user'))
                     href="{{route('landing_view')}}"
                     @elseif(Auth::user()->hasRole('creator'))
                     href="{{route('dashboard')}}"
                     @elseif(Auth::user()->hasRole('admin'))
                     href="{{route('dashboard')}}"
                     @endif
                   class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                           <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                        </svg>
                     </span>
                     @if(Auth::user()->hasRole('user'))
                     <span class="sidebar-text">View</span>
                     @elseif(Auth::user()->hasRole('creator'))
                     <span class="sidebar-text">Dashboard</span>
                     @elseif(Auth::user()->hasRole('admin'))
                     <span class="sidebar-text">Dashboard</span>
                     @endif
                  </a>
               </li>

            @if(Auth::user()->hasRole('user'))
               <li class="nav-item  ">
                  <a href="{{route('rooms')}}" class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                           <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                        </svg>
                     </span>
                     <span class="sidebar-text"> Room </span>
                  </a>
               </li>
               <li class="nav-item ">
                  <a href="{{route('lands')}}" class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                     </span>
                     <span class="sidebar-text"> Land</span>
                  </a>
               </li>
               <li class="nav-item ">
                  <a href="{{route('houses')}}" class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                     </span>
                     <span class="sidebar-text"> House</span>
                  </a>
               </li>
               <li class="nav-item ">
                  <a href="{{route('my_cart')}}" class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                     </span>
                     <span class="sidebar-text"> My Cart</span> 
                  </a>
               </li>
            @elseif(Auth::user()->hasRole('creator'))
            <li class="nav-item  ">
               <a href="{{route('my-uploads')}}" class="nav-link">
                  <span class="sidebar-icon">
                     <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                     </svg>
                  </span>
                  <span class="sidebar-text"> My Uploads </span>
               </a>
            </li>
            <li class="nav-item">
               <span
                 class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                 data-bs-toggle="collapse" data-bs-target="#submenu-pages">
                 <span>
                   <span class="sidebar-icon">
                     <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                   </span> 
                   <span class="sidebar-text">Upload New</span>
                 </span>
                 <span class="link-arrow">
                   <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                 </span>
               </span>
               <div class="multi-level collapse " role="list"
                 id="submenu-pages" aria-expanded="false">
                 <ul class="flex-column nav">
                   <li class="nav-item">
                     <a class="nav-link" href="{{route('create_room')}}">
                       <span class="sidebar-text"> Upload Room </span>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="{{route('create_land')}}">
                       <span class="sidebar-text"> Upload land</span>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="{{route('create_house')}}">
                       <span class="sidebar-text">Upload House</span>
                     </a>
                   </li>
                 </ul>
               </div>
             </li>
             @endif
            </ul>
       
         </div>
      </nav>
      <main class="content">
      <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
         <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
               <div class="d-flex align-items-center">
                  <!-- Search form -->
                  {{-- <form class="navbar-search form-inline" id="navbar-search-main">
                     <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                           <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                           </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                     </div>
                  </form> --}}
                  <!-- / Search form -->
               </div>
               <!-- Navbar links -->
               <ul class="navbar-nav align-items-center">
                  <li class="nav-item dropdown">
                     <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                     </a>
                  </li>
                  <li class="nav-item dropdown ms-lg-3">
                     <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                           <img class="avatar rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg">
                           <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                              <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}
                              </span>
                           </div>
                        </div>
                     </a>
                     <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                           </svg>
                           My Profile
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                           <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                           </svg>
                           <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <div href="route('logout')"
                                 onclick="event.preventDefault();
                                 this.closest('form').submit();">        
                                 {{ __('Log Out') }}
                              </div>
                           </form>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>