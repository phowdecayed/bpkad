<?php
$bg   = DB::table('heading')->where('halaman','Kontak')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 100px 0; background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1 data-animate="fadeInUp">Kontak</h1>
        <span data-animate="fadeInUp" data-delay="300">Badan Pengelolaan Keuangan dan Aset Daerah</span>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kontak</li>
      </ol>
     </div>
</section>
<!--Inner Header End-->
<!--Contact Start-->
<section class="gmap slider-parallax vh-60">
    <?php echo $site_config->google_map ?>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <h3>Send us an Email</h3>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-service">Services</label>
                                    <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                        <option value="">-- Select One --</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div>

<section class="contact-page wf100 p50">
   <div class="container contact-info">
      <div class="row">
         <!--Contact Info Start-->
         <div class="col-md-6">
            <div class="c-info">
               <h6>Alamat:</h6>
               <p>
                <strong><?php echo $site_config->namaweb ?></strong>
                <br><?php echo nl2br($site_config->alamat) ?>
              </p>
            </div>
         </div>
         <!--Contact Info End-->
         <!--Contact Info Start-->
         <div class="col-md-6">
            <div class="c-info">
               <h6>Kontak:</h6>
               <p>Telepon: <?php echo $site_config->telepon ?>
                <br>Email: <?php echo $site_config->email ?>
                <br>Website: <?php echo $site_config->website ?></p>
            </div>
         </div>
         <!--Contact Info End-->

      </div>
      <br><br>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <iframe src="https://www.powr.io/poll/u/5760816a_1611115094#platform=iframe" style="width:100%;" height="471px" frameborder="0"></iframe>
         </div>
            <div class="col-md-6">
            <div class="google-map">
               <?php echo $site_config->google_map ?>
            </div>
         </div>
      </div>
   </div>
   <br><br>
</section>
<!--Contact End-->
