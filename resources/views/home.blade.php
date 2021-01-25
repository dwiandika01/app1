<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/vendors/iconfonts/puse-icons-feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ url('/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('/assets/css/shared/style.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ url('/assets/css/demo_10/style.css') }}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="{{ url('/assets/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{{ url('/assets/images/logo_10.svg') }}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="{{ url('/assets/images/logo-mini_10.svg') }}" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="wrapper d-md-flex d-none">
          <p class="page-title">Finance</p>
          <i class="search-icon mdi mdi-magnify text-gray"></i>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown languageDropdown d-sm-flex d-none">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="img-xs rounded-circle flag-icon flag-icon-gb"></i> English </a>
            <div class="dropdown-menu dropdown-menu-left navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item">ENGLISH<i class="flag-icon ml-auto flag-icon-us"></i></a>
              <a class="dropdown-item">FRENCH<i class="flag-icon ml-auto flag-icon-fr"></i></a>
              <a class="dropdown-item">ARABIC<i class="flag-icon ml-auto flag-icon-ae"></i></a>
              <a class="dropdown-item">RUSSIAN<i class="flag-icon ml-auto flag-icon-ru"></i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="pulseDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-resistor"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown dropdown-h-style-1" aria-labelledby="pulseDropdown">
              <a class="dropdown-item">Print Invoice<i class="dropdown-item-icon ti-printer"></i></a>
              <a class="dropdown-item">Copy<i class="dropdown-item-icon ti-files"></i></a>
              <a class="dropdown-item">CSV<i class="dropdown-item-icon ti-write"></i></a>
              <a class="dropdown-item">Share<i class="dropdown-item-icon ti-share"></i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="agendaDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-calendar-blank-outline"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list py-0" aria-labelledby="agendaDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ url('/assets/images/faces/face10.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ url('/assets/images/faces/face12.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ url('/assets/images/faces/face1.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown ml-4">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list py-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                  <p class="font-weight-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                  <p class="font-weight-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                  <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown user-dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Ricardo</span>
              <img class="profile-img img-xs img-curved img-raised" src="{{ url('/assets/images/faces/face1.jpg') }}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ url('/assets/images/faces/face1.jpg') }}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Ricardo</p>
                <p class="font-weight-light text-muted mb-0">ricardomoreno@gmail.com</p>
              </div>
              <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
              <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
              <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
              <a class="dropdown-item" href="{{ route('logout') }}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile-section">
            <div class="profile-info d-flex align-items-center">
              <div class="notification-indicator-wrapper">
                <img class="profile-img img-sm img-curved" src="{{ url('/assets/images/faces/face1.jpg') }}" alt="profile image">
                <div class="notification-indicator bg-success"></div>
              </div>
              <div class="profile-info-user wrapper d-flex flex-column">
                <p class="profile-name">Ricardo Taylor</p>
                <small class="profile-type">Premium Member</small>
              </div>
            </div>
            <div class="progress-details">
              <div class="col-section">
                <p class="font-weight-bold mb-0">456</p>
                <small>Sales</small>
              </div>
              <div class="col-section">
                <p class="font-weight-bold mb-0">$5900</p>
                <small>Revenue</small>
              </div>
              <div class="col-section">
                <p class="font-weight-bold mb-0">1350</p>
                <small>Order</small>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="menu-icon icon-monitor"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products-dropdown" aria-expanded="false" aria-controls="products-dropdown">
              <i class="menu-icon icon-stack"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products-dropdown">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Revenue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Bills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">IPO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Tax Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Invoice</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#finance-dropdown" aria-expanded="false" aria-controls="products-dropdown">
              <i class="menu-icon icon-archive"></i>
              <span class="menu-title">Finance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="finance-dropdown">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Payments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.html">Statistics</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="blank-page.html" class="nav-link">
              <i class="menu-icon icon-briefcase"></i>
              <span class="menu-title">Investment</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="blank-page.html" class="nav-link">
              <i class="menu-icon icon-head"></i>
              <span class="menu-title">Members</span>
            </a>
          </li>
          <li class="nav-item nav-category">Settings</li>
          <li class="nav-item">
            <a href="blank-page.html" class="nav-link">
              <i class="menu-icon icon-content-right"></i>
              <span class="menu-title">Secuirty</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="blank-page.html" class="nav-link">
              <i class="menu-icon icon-lock"></i>
              <span class="menu-title">Privacy</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <h1>INI KONTEN</h1>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/"
                target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ url('/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ url('/assets/js/shared/off-canvas.js') }}"></script>
  <script src="{{ url('/assets/js/shared/hoverable-collapse.js') }}"></script>
  <script src="{{ url('/assets/js/shared/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>