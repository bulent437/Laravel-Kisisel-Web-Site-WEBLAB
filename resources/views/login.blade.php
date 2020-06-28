<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş yap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin-temp') }}/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('admin-temp') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('giris-yap') }}">
                    
                    {{ csrf_field() }}
                    <div class="login-form-head">
                        <h4>Giriş Yap</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-group">
                            <label>Kullanıcı Adı veya E-Posta</label>
                            <input class="au-input au-input--full" type="text" name="email" placeholder="Kullanıcı Adı veya E-Posta" value="{{ Cookie::get('email') !== null ? Cookie::get('email') : '' }}">
                        </div>
                        <div class="form-group">
                            <label>Şifre</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Şifre" value="{{ Cookie::get('password') !== null ? Cookie::get('password') : '' }}">
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember">
                                    <label class="custom-control-label" for="customControlAutosizing">Beni Hatırla</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Gir <i class="ti-arrow-right"></i></button>                           
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Hesabın yok mu?<a href="{{ route('register.show') }}">Kayıt Ol</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('admin-temp') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('admin-temp') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('admin-temp') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/scripts.js"></script>
</body>

</html>