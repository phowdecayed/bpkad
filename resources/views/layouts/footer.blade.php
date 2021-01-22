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
<footer id="footer" class="dark">
        <div class="container">
                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row col-mb-50">
                        <div class="col-md-6">

                            <div class="widget clearfix">
                                <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                                    alt="Footer Logo" class="footer-logo">
                                <p align=”justify”>Motto {{ $site_config->singkatan }} : {{ $site_config->tagline }}
                                </p>
                                <p align=”justify”>Motto Pemerintah Provinsi Jawa Barat : {{ $site_config->tagline2 }}
                                </p>

                                <div class="py-2"
                                    style="background: url('images/world-map.png') no-repeat center center;">
                                    <div class="row col-mb-30">
                                        <div class="col-6">
                                            <address class="mb-0">
                                                <abbr title="Address"
                                                    style="display: inline-block;margin-bottom: 7px;">
                                                    <strong>Alamat :</strong></abbr><br>
                                                <?php echo nl2br($site_config->alamat) ?>
                                            </address>
                                        </div>
                                        <div class="col-6">
                                            <abbr title="Phone Number"><strong>Phone :</strong></abbr>
                                            {{ $site_config->telepon }}<br>
                                            <abbr title="Fax"><strong>Fax :</strong></abbr> {{ $site_config->fax }}<br>
                                            <abbr title="Email Address"><strong>Email :</strong></abbr>
                                            {{ $site_config->email }}
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ $site_config->facebook }}" target="_blank" class="social-icon si-small si-rounded topmargin-sm si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
                                </a>

                                <a href="{{ $site_config->twitter }}" target="_blank" class="social-icon si-small si-rounded topmargin-sm si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
                                </a>

                                <a href="{{ $site_config->instagram }}" target="_blank" class="social-icon si-small si-rounded topmargin-sm si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
                                </a>

                                <a href="{{ $site_config->youtube }}" target="_blank" class="social-icon si-small si-rounded topmargin-sm si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
</div>
<!-- External JavaScripts
	============================================= -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Footer Scripts
	============================================= -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
