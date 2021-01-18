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
<footer class="h3footer wf100">
   <div class="container">
      <div class="row">
         <!--Footer Widget Start-->
         <div class="col-md-4 col-sm-6">
            <div class="footer-widget">
               <h3>{{ $site_config->namaweb }}</h3>
               <p>{{ $site_config->deskripsi }}</p>
               <hr style="border-top: solid thin #EEE;padding:0; margin: 5px 0;">
               <p>
                  <?php echo nl2br($site_config->alamat) ?>
                  <br><strong>Phone / Fax:</strong> {{ $site_config->telepon }} <strong>/</strong> {{ $site_config->fax }}
                  <br><strong>Email:</strong> {{ $site_config->email }}
                  <br><strong>Website:</strong> {{ $site_config->website }}</p>
                    <div class="footer-social">
                    <a href="{{ $site_config->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
            </div>
         </div>
         <!--Footer Widget End-->
         <!--Footer Widget Start-->
         <div class="col-md-5 col-sm-6">
            <div class"container"> </div>
         </div>
         <!--Footer Widget End-->
         <!--Footer Widget Start-->
         <div class="col-md-6">

         </div>
         <!--Footer Widget End-->
      </div>
      <div class="container">
      <div class="row footer-copyr">
         <div class="col-md-10 col-sm-10"> <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="" style="max-height: 50px; width: auto;"> Copyright © 2021. {{ $site_config->namaweb }} All Rights Reserved. </div>
      </div>
   </div>
</footer>
<!--Footer End-->
</div>
<!--   JS Files Start  -->
<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>
</body>
</html>
