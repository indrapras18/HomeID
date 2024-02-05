<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="frontend_dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="frontend_dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="frontend_dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="frontend_dashboard/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="frontend_dashboard/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="frontend_dashboard/images/home.png" alt="logo">
                            </div>
                            <h4>Selamat Datang di Home.Id</h4>
                            <h6 class="font-weight-light">Silahkan Login !!!!</h6>
                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                @csrf

                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Keep me signed in
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a style="text-decoration: none; font-size: 13px; color:#A599B2;"
                                        class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                    @endif
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Belum Memiliki Akun? <a href="register" class="text-primary">Daftar</a>
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
    <script src="frontend_dashboard/vendors/js/vendor.bundle.base.js"></script>
    <script src="frontend_dashboard/js/off-canvas.js"></script>
    <script src="frontend_dashboard/js/hoverable-collapse.js"></script>
    <script src="frontend_dashboard/js/template.js"></script>
    <script src="frontend_dashboard/js/settings.js"></script>
    <script src="frontend_dashboard/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>