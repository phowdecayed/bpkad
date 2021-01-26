<?php
$site_config = DB::table('konfigurasi')->first();
?>

<div id="top-bar" class="transparent-topbar dark">
    <div class="container">

        <div class="row justify-content-between">

            <div class="col-12 col-md-auto">

                <!-- Top Social
                ============================================= -->
                <ul id="top-social">
                    <li><a href="{{ $site_config->facebook }}" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="{{ $site_config->twitter }}" target="_blank" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li><a href="{{ $site_config->instagram }}" target="_blank" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="{{ $site_config->youtube }}" target="_blank" class="si-youtube"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>

                </ul><!-- #top-social end -->

            </div>

        </div>

    </div>
</div><!-- #top-bar end -->
<!-- Header ============================================= -->
<header id="header" class="transparent-header floating-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo ============================================= -->
                <div id="logo">
                    <!-- Logo -->
                    <a href="{{ asset('/') }}" class="standard-logo"
                        data-dark-logo="{{ asset('assets/upload/image/'.$site_config->logo) }}">
                        <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                            alt="{{ $site_config->namaweb }}"></a>
                    <a href="{{ asset('/') }}" class="retina-logo"
                        data-dark-logo="{{ asset('assets/upload/image/'.$site_config->logo) }}">
                        <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                            alt="{{ $site_config->namaweb }}"></a>
                </div><!-- #logo end -->
