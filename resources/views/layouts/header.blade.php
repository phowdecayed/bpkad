<?php
$site_config = DB::table('konfigurasi')->first();
?>

<!-- Header ============================================= -->
<header id="header" class="full-header transparent-header semi-transparent">
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
