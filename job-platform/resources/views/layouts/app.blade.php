
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Job portal</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset("../assets/img/favicon/favicon.ico")}}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="{{ URL::asset("https://fonts.googleapis.com")}}" />
    <link rel="preconnect" href="{{ URL::asset("https://fonts.gstatic.com")}}" crossorigin />
    <link
      href="{{ URL::asset("https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap")}}"
      rel="stylesheet"
    />
    <script href="{{ URL::asset("//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js")}}"></script>
    <script href="{{ URL::asset("//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset("//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css")}}">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet"  href="{{ URL::asset("../assets/vendor/fonts/boxicons.css")}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset("../assets/vendor/css/core.css")}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ URL::asset("../assets/vendor/css/theme-default.css")}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::asset("../assets/css/demo.css")}}"  />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ URL::asset("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}" />

    <!-- Page CSS -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ URL::asset("//fonts.bunny.net")}}">
    <link href="{{ URL::asset("https://fonts.bunny.net/css?family=Nunito")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script href="{{ URL::asset("../assets/js/config.js")}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link" style="text-decoration: none">
                
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Job Portal</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('dashbord') }}" class="menu-link" style="text-decoration: none">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
        
          <li class="menu-item">
            <a href="{{ route('home') }}" class="menu-link" style="text-decoration: none">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Analytics">Jobs</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('userApplication') }}" class="menu-link" style="text-decoration: none">
              <i class="menu-icon tf-icons bx bx-copy"></i>
              <div data-i18n="Analytics">My Acpplications</div>
            </a>
          </li>
        </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" 
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">{{Auth::user()->name }}</span>
                              @if ( Auth::user()->role == 1)
                              <small class="text-muted">Admin</small>
                              @else
                              <small class="text-muted">Candidate</small>
                              @endif
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('profile') }}" style="text-decoration: none">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" {{ __('Logout') }}>
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <main>
                    @yield('content')
                  </main>
            </div>
          </div>
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made by
                  <a href="" target="_blank" class="footer-link fw-bolder"><h6>ThemeSelection</h6></a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script href="{{ URL::asset("../assets/vendor/libs/jquery/jquery.js")}}"></script>
    <script href="{{ URL::asset("../assets/vendor/libs/popper/popper.js")}}"></script>
    <script href="{{ URL::asset("../assets/vendor/js/bootstrap.js")}}"></script>
    <script href="{{ URL::asset("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>
    <script href="{{ URL::asset("../assets/vendor/js/menu.js")}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script href="{{ URL::asset("../assets/js/main.js")}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer href="{{ URL::asset("https://buttons.github.io/buttons.js")}}"></script>
  </body>
</html>