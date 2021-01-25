<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="{{ url('assets/images/logo_10.svg') }}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="{{ url('assets/images/logo-mini_10.svg') }}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="wrapper d-md-flex d-none">
      <p class="page-title">@yield('judul_halaman')</p>
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
              <img src="{{ url('assets/images/faces/face10.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{ url('assets/images/faces/face12.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{ url('assets/images/faces/face1.jpg') }}" alt="image" class="img-sm profile-pic"> </div>
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
          <img class="profile-img img-xs img-curved img-raised" src="{{ url('assets/images/faces/face1.jpg') }}" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ url('assets/images/faces/face1.jpg') }}" alt="Profile image">
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