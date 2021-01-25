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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ url('/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h2 class="text-center mb-4">Register</h2>
              <div class="auto-form-wrapper">
                <form action="{{ route('register') }}" method="post">
                  @csrf
                  @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                  <div class="form-group">
                    <div class="input-group">
                      <input name="username" type="text" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input name="password" type="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                    <a href="{{ route('login') }}" class="text-black text-small">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ url('/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ url('/assets/js/shared/hoverable-collapse.js') }}"></script>
    <script src="{{ url('/assets/js/shared/misc.js') }}"></script>
    <script src="{{ url('/assets/js/shared/settings.js') }}"></script>
    <script src="{{ url('/assets/js/shared/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>