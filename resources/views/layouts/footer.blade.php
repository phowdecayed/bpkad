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
<footer id="footer" class="light">
    <div class="container">
        <!-- Footer Widgets
				============================================= -->
        <div class="footer-widgets-wrap">
            <div class="row col-mb-50">
                <div class="col-md-6">

                    <div class="widget clearfix">
                        <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}"
                            alt="Footer Logo" class="footer-logo">
                        <p align=”justify”>Motto {{ $site_config->singkatan }} : {{ $site_config->tagline }} ||
                            {{ $site_config->tagline2 }}</p>

                        <div class="py-2" style="background: url('') no-repeat center center;">
                            <div class="row col-mb-30">
                                <div class="col-6">
                                    <address class="mb-0">
                                        <abbr title="Address" style="display: inline-block;margin-bottom: 7px;">
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
                        <a href="{{ $site_config->facebook }}" target="_blank"
                            class="social-icon si-small si-rounded topmargin-sm si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="{{ $site_config->twitter }}" target="_blank"
                            class="social-icon si-small si-rounded topmargin-sm si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="{{ $site_config->instagram }}" target="_blank"
                            class="social-icon si-small si-rounded topmargin-sm si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                        <a href="{{ $site_config->youtube }}" target="_blank"
                            class="social-icon si-small si-rounded topmargin-sm si-youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Copyrights
            ============================================= -->
        <div id="copyrights">
            <div class="container">
                <div class="w-100 text-center">
                    <div class="copyrights-menu copyright-links clearfix">
                        &copy; <?php echo date("Y"); ?> Made with &#10084;&#65039; by {{ $site_config->namaweb }}.
                    </div>
                </div>
            </div>
        </div>
</footer>
</div>

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
	============================================= -->
<script src="{{ asset('/assets/js/jquery.js') }}"></script>
<script src="{{ asset('/assets/js/plugins.js') }}"></script>
<script>
    $.get('https://www.instagram.com/explore/tags/BPKADJUARA/?__a=1', function (data, status) {
        for(var i = 0; i < 8; i++) {
            var imageUrl = data.graphql.hashtag.edge_hashtag_to_top_posts.edges[i].node;
            //membaca id per post
            var id_user = data.graphql.hashtag.edge_hashtag_to_top_posts.edges[i].node.owner.id
            //call api to get username profile
            $.get({
                url:'https://www.instagram.com/graphql/query/?query_hash=c9100bf9110dd6361671f113dd02e7d6&variables={"user_id":"'+id_user+'","include_chaining":false,"include_reel":true,"include_suggested_users":false,"include_logged_out_extras":false,"include_highlight_reels":false,"include_related_profiles":false}',
                async:false
            }, function (result, status) {
                var username = result.data.user.reel.owner.username
                $('#ugc_container').append('' +
                    '<div class="col-6 col-sm-6 col-lg-3 wow fadeIn ig_feed" data-wow-duration="2s" data-wow-delay="0.2s" id="list_ugc"> ' +
                      '<div class="dlab-post-media dlab-img-effect zoom"> ' +
                        '<a target="_blank" href="https://instagram.com/'+username+'"><img src="'+  imageUrl.thumbnail_resources[2].src +'" alt="" class="img-cover"></a>' +
                      '</div>' +
                    '</div>' +
                    '');
            });
        }
    });
    </script>

<!-- Footer Scripts
    ============================================= -->
<script src="{{ asset('/assets/js/functions.js') }}"></script>

</body>

</html>
