<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profilf  = $myprofil->nav_profil();
$nav_layananf = $myprofil->nav_layanan();
?>
<!--Footer Start-->
<footer id="footer" class="h3footer wf100">
    <div class="container">
        <div class="row">
            <!--Footer Widget Start-->
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h3>{{ $site_config->namaweb }}</h3>
                    <p align=”justify”>Motto {{ $site_config->singkatan }} : {{ $site_config->tagline }}</p>
                    <p align=”justify”>Motto Pemerintah Provinsi Jawa Barat : {{ $site_config->tagline2 }}</p>
                    <hr style="border-top: solid thin #EEE;padding:10; margin: 15px 0;">
                    <p>
                        <?php echo nl2br($site_config->alamat) ?>
                        <br><strong>Phone / Fax:</strong> {{ $site_config->telepon }} <strong>/</strong>
                        {{ $site_config->fax }}
                        <br><strong>Email:</strong> {{ $site_config->email }}
                        <br><strong>Website:</strong> {{ $site_config->website }}</p>
                    <div class="footer-social" align=”justify”>
                        <a href={{ $site_config->facebook }} target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href={{ $site_config->instagram }} target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href={{ $site_config->twitter }} target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href={{ $site_config->youtube }} target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--Footer Widget End-->
            <!--Footer Widget Start-->
            <div class="col-md-4 col-sm-6">
                <div class="facebook-plugin">

                </div>
                <br>
                <br>
            </div>
            <div class="container">
                <div class="row footer-copyr">
                    <div class="logo-wrapper">
                        <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                            alt="" style="max-height: 25px; width: auto;">
                        <strong>Copyright © <?php echo date("Y"); ?>. {{ $site_config->namaweb }} All Rights
                            Reserved.</strong>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!--Footer End-->
</div>
<!--   JS Files Start  -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
