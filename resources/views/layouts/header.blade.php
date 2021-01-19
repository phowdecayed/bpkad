<?php
$site_config = DB::table('konfigurasi')->first();
?>

<header id="header" class="absolute fullwidth light">
    <!--Header Start-->
    <!-- Navigation Bar -->
    <div id="nav-bar">
        <!-- Logo -->
        <a class="logo-wrapper" href="{{ asset('/') }}">
            <img class="logo logo-dark"
                src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                alt="{{ $site_config->namaweb }}">
        </a>
        <a class="logo-wrapper" href="">
            <p>{{ $site_config->namaweb }}</p>
        </a>
        <nav class="module-group right">
