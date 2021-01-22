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
    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS Base -->
    <link id="theme" href="{{ asset('assets/css/themes/theme-classic.css') }}" rel="stylesheet">
    <?php echo $site_config->metatext ?>
</head>

<body class="stretched">
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
