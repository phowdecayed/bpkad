<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>{{ $title }}</title>
    <link rel="shortcut icon"
        href="{{ asset('assets/upload/image/'.website('icon')) }}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css"') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <section id="content">
            <div class="content-wrap py-0">

                <div class="section dark p-0 m-0 h-100 position-absolute"></div>

                <div class="section bg-transparent min-vh-100 p-0 m-0 d-flex">
                    <div class="vertical-middle">
                        <div class="container py-5">
                            <div class="text-center">
                                <a href="{{ '/' }}"><img
                                        src="{{ asset('assets/upload/image/'.website('logo')) }}"
                                        alt="{{ website('namaweb') }}" style="height: 100px;"></a>
                                <h4>{{ website('namaweb') }}</h4>
                                <p>{{ website('tagline') }}</p>
                                <hr>
                            </div>
                            <div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
                                <div class="card-body" style="padding: 40px;">
                                    <form id="login-form" name="login-form" class="mb-0"
                                        action="{{ asset('login/check') }}" method="post">
                                        <h3>Sign in to start your session</h3>
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <label for="login-form-username">Username:</label>
                                                <input type="text" id="login-form-username" name="username" value=""
                                                    class="form-control not-dark" />
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="login-form-password">Password:</label>
                                                <input type="password" id="login-form-password" name="password" value=""
                                                    class="form-control not-dark" />
                                            </div>

                                            <div class="col-12 form-group mb-0">
                                                <button class="button button-3d button-black m-0" id="login-form-submit"
                                                    name="login-form-submit" value="login">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <hr>

    <p class="text-center link-bawah">
        <a href="{{ asset('/') }}">Back to Homepage</a>
    </p>
    </div>
    <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>
    <script>
        < blade
        if |( % 24 message % 20 % 3 D % 20 Session % 3 A % 3 Aget( % 26 % 2339 % 3 Bwarning % 26 % 2339 % 3 B)) >
        // Notifikasi
        swal("Mohon maaf", "<?php echo $message ?>", "warning") <
            /blade endif>

            <
            blade
        if |( % 24 message % 20 % 3 D % 20 Session % 3 A % 3 Aget( % 26 % 2339 % 3 Bsukses % 26 % 2339 % 3 B)) >
        // Notifikasi
        swal("Berhasil", "<?php echo $message ?>", "success") <
            /blade endif>

    </script>
</body>

</html>
