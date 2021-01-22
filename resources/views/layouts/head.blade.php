<?php
$site_config = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $deskripsi }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $site_config->namaweb }}">
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}">
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
    <!-- CSS FILES START -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/please-wait.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/all.min.css') }}" rel="stylesheet">
    <!-- CSS Base -->
    <link id="theme" href="{{ asset('assets/css/themes/theme-classic.css') }}" rel="stylesheet">
    <?php echo $site_config->metatext ?>
</head>

<body class="header-absolute">
    <!-- Loader -->
    <div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66"
            xmlns="http://www.w3.org/2000/svg">
            <circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
        </svg></div>
    <!-- Loader / End -->
