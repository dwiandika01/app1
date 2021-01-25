<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item profile-section">
      <div class="profile-info d-flex align-items-center">
        <div class="notification-indicator-wrapper">
          <img class="profile-img img-sm img-curved" src="{{ url('assets/images/faces/face1.jpg') }}" alt="profile image">
          <div class="notification-indicator bg-success"></div>
        </div>
        <div class="profile-info-user wrapper d-flex flex-column">
          <p class="profile-name">Admin</p>
          <small class="profile-type">
            Super User
          </small>
        </div>
      </div>
    </li>
    {{-- <li class="nav-item active"> --}}
    <li class="nav-item {{ Request::is('beranda') ? 'active' : '' }}">
      <a href="{{ url('/') }}" class="nav-link">
        <i class="menu-icon icon-monitor"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    {{-- <li class="nav-item">
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
    </li> --}}
    <li class="nav-item {{ Request::is('admin/kandidat') ? 'active' : '' }}">
      <a href="{{ url('/admin/kandidat') }}" class="nav-link">
        <i class="menu-icon fa fa-users"></i>
        <span class="menu-title">Kandidat</span>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/voters') ? 'active' : '' }}">
      <a href="{{ url('/admin/voters') }}" class="nav-link">
        <i class="menu-icon fa fa-users"></i>
        <span class="menu-title">Pemilih</span>
      </a>
    </li>
  </ul>
</nav>