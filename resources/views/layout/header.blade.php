<?php
$site_config = DB::table('konfigurasi')->first();
?>
<div class="wrapper home3">
   <!--Header Start-->
      <div class="h3-logo-row">
         <div class="container">
                <div class="row" style=" height:100px; padding-top:2px;">
                    <div class="col-md-2  col-sm-2" style="text-align:center;">
                        <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="{{ $site_config->namaweb }}" style="max-height: 100px; width: auto;">
                    </div>
                    <div class="col-md-10 col-sm-10" style="text-align:left;">
                        <h2>BPKAD JABAR <small>Provinsi Jabar</small> </h2>
                    </div>
                </div>
            </div>
      </div>
      </div><div class="navrow">
<div class="container">
