<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KonfigurasiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('konfigurasi')->delete();
        
        \DB::table('konfigurasi')->insert(array (
            0 => 
            array (
                'id_konfigurasi' => 1,
                'namaweb' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'nama_singkat' => 'Struktur Organisasi',
                'tagline' => 'Bersama Kita Bisa',
                'tagline2' => 'Jabar Juara Lahir Batin Dengan Kolaborasi dan Inovasi',
                'tentang' => '<p style="text-align:center"><img alt="" src="http://bpkad.jabarprov.go.id/nr_image/berita/0796323c1ee617ecf38ddf8e0692c4cc.png" style="height:612px; width:712px" /></p>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a justo rutrum, suscipit dolor nec, accumsan orci. Maecenas leo mi, mollis ac velit vitae, eleifend feugiat tortor. Integer libero ante, ultrices ac hendrerit ac, ultricies ac nibh. Integer aliquet, tellus non semper aliquet, magna lacus suscipit tortor, a varius nisl libero in massa. In at suscipit ipsum. Ut ut tincidunt risus. Ut vitae maximus ligula, in dapibus metus. Fusce quis ligula ac eros molestie dictum. Sed justo leo, dignissim ut purus ultricies, tristique aliquet urna.</p>

<p style="text-align:justify">Mauris sed ultrices diam. Morbi luctus laoreet ullamcorper. Suspendisse aliquet libero et auctor interdum. Aenean mattis odio eget lacus fermentum, eget semper diam semper. Sed pretium scelerisque enim in efficitur. Quisque pretium lorem quis leo ullamcorper placerat. Nam aliquet lectus id fermentum varius. Donec ut turpis eget ligula suscipit ornare quis a nisl. Mauris facilisis ipsum dolor, eu dignissim tortor molestie ac. Aliquam nec enim in arcu sollicitudin consectetur. Duis aliquet, arcu ut rutrum luctus, enim eros bibendum tellus, ac dapibus odio sem eu purus.</p>

<p style="text-align:justify">Donec maximus neque lacus, sit amet lacinia felis semper at. Vestibulum at lacus vitae enim ultrices condimentum. Integer eget dui metus. Nunc purus enim, accumsan ac dui vitae, rhoncus tristique dui. Proin a imperdiet ante. Donec sed dapibus urna, non mollis urna. Integer tincidunt, nibh vel congue finibus, ligula neque semper leo, a bibendum felis eros ac est. Sed interdum arcu vel dapibus pharetra. Nullam efficitur nisl nunc, eu venenatis magna accumsan sagittis. Quisque non accumsan mauris.</p>

<p style="text-align:justify">Vestibulum eu quam nec urna ullamcorper dictum ut at nibh. Curabitur ut porta lacus. Donec congue convallis purus, in vulputate urna luctus ut. Vestibulum massa risus, accumsan eget porttitor semper, pulvinar nec orci. Integer ac accumsan turpis. Curabitur pharetra lorem eu felis interdum, et rhoncus nisi blandit. Praesent vestibulum ornare metus nec bibendum. Ut dictum turpis quis sagittis elementum. Vivamus venenatis est ut risus dignissim, in viverra ligula auctor. Sed pretium erat vel luctus tempus. Praesent nec purus at augue eleifend condimentum. Morbi id accumsan ipsum, quis varius arcu. Mauris nec nisi ac libero egestas dignissim sit amet ut ante. Vivamus egestas arcu a ligula sodales venenatis.</p>

<p style="text-align:justify">Nullam a fringilla velit. Integer ullamcorper nunc faucibus efficitur hendrerit. Sed ut feugiat lectus. Praesent a egestas tortor. In ac metus sit amet velit semper rhoncus. Proin et erat tristique magna venenatis consequat fringilla id ex. Quisque feugiat enim in mollis ornare. Nullam lacus orci, elementum ut sem et, accumsan dignissim metus. Phasellus metus turpis, tristique id ligula ac, bibendum fermentum quam. Nam orci mi, condimentum at dapibus eget, pulvinar eget mauris. Pellentesque sollicitudin nunc est, sed hendrerit libero iaculis ut. Sed accumsan mauris enim, sit amet faucibus velit pellentesque nec. Maecenas porta dictum elit quis molestie. Nunc dignissim tortor vel maximus malesuada.</p>',
                'deskripsi' => 'Website Resmi Badan Pengelolaan Keuangan dan Aset Daerah',
                'website' => 'https://bpkad.jabarprov.go.id',
                'email' => 'bpkad@jabarprov.go.id',
                'email_cadangan' => NULL,
                'alamat' => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
                'telepon' => '022 - 4233347',
                'hp' => NULL,
                'fax' => '022 - 4233347',
                'logo' => 'logo-bpkad.png',
                'icon' => 'favicon.png',
                'keywords' => NULL,
                'metatext' => NULL,
                'facebook' => 'https://web.facebook.com/BpkadJabar',
                'twitter' => 'https://twitter.com/bpkadjabarprov',
                'instagram' => 'https://www.instagram.com/bpkadjabarprov/',
                'google_plus' => 'https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q',
                'nama_facebook' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'nama_twitter' => 'BPKAD PROV JABAR',
                'nama_instagram' => 'BPKAD Provinsi Jawa Barat',
                'nama_google_plus' => '',
                'singkatan' => 'BPKAD',
                'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.634383807166!2d107.618288!3d-6.901534000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5543cd68e7b6719d!2sBadan%20Pengelolaan%20Keuangan%20dan%20Aset%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1610946848456!5m2!1sen!2sid" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                'gambar' => 'logo-dinas.png',
                'video' => 'fsH_KhUWfho',
                'gambar_berita' => 'balairung-budiutomo-01.jpg',
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://mail.mail.com',
                'smtp_port' => '465',
                'smtp_timeout' => '12',
                'smtp_user' => 'info@mail.com',
                'smtp_pass' => '1234',
                'twitter_feeds' => '<a class="twitter-timeline" data-width="500" data-height="365" href="https://twitter.com/bpkadjabarprov?ref_src=twsrc%5Etfw">Tweets by bpkadjabarprov</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
                'text_bawah_peta' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'id_user' => 4,
                'tanggal' => '2021-01-23 02:41:40',
                'nama_youtube' => 'BPKAD PROV JABAR',
                'youtube' => 'https://www.youtube.com/channel/UCZPhYb-0GV5t_FKE1c2u1ZA',
                'facebook_page' => '<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbpkadjabar&tabs=timeline%2C%20messages&width=360&height=385&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=424845868955585" width="360" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>',
                'disqus_shortname' => 'bpkad-jabarprov-go-id',
            ),
        ));
        
        
    }
}