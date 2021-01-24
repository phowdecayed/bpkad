<?php
$site_config = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="{{ $deskripsi }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $site_config->namaweb }}">
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}">
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php echo $site_config->metatext ?>
    <!-- Document Title
    ============================================= -->
    <title>{{ $title }}</title>

</head>

<body class="sticky-footer stretched page-transition adaptive-color-scheme" data-loader="1" data-animation-in="fadeIn" data-speed-in="1500" data-animation-out="fadeOut" data-speed-out="800">
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
