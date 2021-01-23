<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeritaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('berita')->delete();
        
        \DB::table('berita')->insert(array (
            0 => 
            array (
                'id_berita' => 29,
                'id_user' => 4,
                'id_kategori' => 0,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'undang-undang',
                'judul_berita' => 'Undang - Undang',
                'isi' => '<table align="center" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
<caption>
<p>&nbsp;</p>
</caption>
<thead>
<tr>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">No.</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Judul Arsip</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Deskripsi</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Jenis Arsip</div>
</th>
<th scope="col">
<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Download</div>
</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:center">1</td>
<td style="text-align:center">Undang Undang Nomor 12 Tahun 2008</td>
<td style="text-align:center">Tentang Perubahan Kedua Atas UU No. 32/2004 Tentang Pemerintahan Daerah</td>
<td style="text-align:center">Produk Hukum</td>
<td style="text-align:center"><a href="http://localhost:8080/bpkad-web/download/unduh/6"><input name="Download" type="button" value="Download" /></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Layanan',
                'keywords' => NULL,
                'gambar' => 'logo-dinas-1611050443.png',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => 1,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-18 04:40:37',
                'tanggal_publish' => '2021-01-18 04:40:29',
                'tanggal' => '2021-01-23 04:03:28',
            ),
            1 => 
            array (
                'id_berita' => 33,
                'id_user' => 4,
                'id_kategori' => 6,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'jabar-juara',
                'judul_berita' => 'Jabar Juara',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel consequat lacus, quis facilisis risus. Etiam scelerisque, ligula quis vulputate vehicula, nisi turpis condimentum augue, ac vulputate magna nisl at orci. Sed scelerisque congue gravida. Pellentesque ultricies lectus congue velit egestas placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer mattis dolor arcu, id aliquet mi vehicula at. Praesent congue, massa a congue condimentum, sapien quam mollis tellus, eu egestas lacus tellus a ante. Ut nibh neque, egestas eget sem sodales, lacinia suscipit odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet leo nibh. Vestibulum viverra libero a sem cursus, ultrices malesuada ligula cursus. Etiam mattis ut quam at scelerisque. Sed euismod malesuada risus.</p>

<p>Pellentesque erat justo, egestas sed gravida a, fermentum eu tellus. Quisque placerat odio sed neque commodo, ut mollis leo sagittis. Vestibulum malesuada augue ac risus tempor, sed consequat elit laoreet. Nunc convallis non justo non suscipit. Vivamus at metus ipsum. Aliquam ultrices congue aliquet. Mauris dignissim, metus sit amet aliquet posuere, magna tellus condimentum ex, interdum sollicitudin magna nisl vel massa.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget sem sem. Mauris luctus nisi nec tortor posuere aliquet. Pellentesque sit amet sapien leo. Suspendisse nisi ante, consequat in tincidunt eget, rhoncus eget risus. Aliquam mattis auctor consectetur. Fusce non rutrum odio. Praesent pulvinar, justo non volutpat molestie, velit sem elementum magna, at mattis orci magna non metus. Quisque et arcu placerat, imperdiet lectus sed, iaculis justo. Donec mollis urna turpis, in sollicitudin dolor posuere sed.</p>

<p>Sed eget pharetra odio, nec congue ipsum. Proin posuere eros vitae felis sagittis, eget convallis lacus vestibulum. Aliquam sagittis tincidunt sollicitudin. Duis imperdiet sed justo eu congue. Donec nec magna vel tortor tincidunt rutrum. Praesent aliquam congue est, eget vestibulum neque imperdiet sit amet. Quisque at metus quis leo lobortis tincidunt. Aliquam erat volutpat. Cras nec luctus mi. Duis fermentum et leo nec viverra. Cras sit amet eleifend ipsum. Nullam justo massa, pulvinar fermentum tempor vel, rutrum sed felis. In at consectetur ligula, vitae rutrum tellus. Curabitur nec elit tincidunt, venenatis metus id, hendrerit elit. Donec pharetra, ex vitae lobortis lacinia, dolor ligula sollicitudin magna, eu pellentesque est ex a lorem.</p>

<p>Curabitur nec lobortis magna, iaculis iaculis massa. Sed luctus eget arcu vitae elementum. Morbi vel sagittis diam, sed faucibus nisl. Praesent ut mattis quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam massa dui, tincidunt in vulputate vitae, tincidunt id justo. Suspendisse potenti. Maecenas mollis elit justo, vitae imperdiet metus aliquam quis. Suspendisse imperdiet, sem ut commodo congue, tortor nibh molestie lectus, vel lacinia sem sem in libero. Duis finibus gravida nisl et efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '2d182c0b00f8fbfbf9ced554271176ba-1611033232.jpg',
                'icon' => 'fa-rocket',
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-19 05:13:53',
                'tanggal_publish' => '2021-01-19 05:07:13',
                'tanggal' => '2021-01-22 21:20:43',
            ),
            2 => 
            array (
                'id_berita' => 34,
                'id_user' => 4,
                'id_kategori' => 8,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'ujang-kemod',
                'judul_berita' => 'ujang Kemod',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel consequat lacus, quis facilisis risus. Etiam scelerisque, ligula quis vulputate vehicula, nisi turpis condimentum augue, ac vulputate magna nisl at orci. Sed scelerisque congue gravida. Pellentesque ultricies lectus congue velit egestas placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer mattis dolor arcu, id aliquet mi vehicula at. Praesent congue, massa a congue condimentum, sapien quam mollis tellus, eu egestas lacus tellus a ante. Ut nibh neque, egestas eget sem sodales, lacinia suscipit odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet leo nibh. Vestibulum viverra libero a sem cursus, ultrices malesuada ligula cursus. Etiam mattis ut quam at scelerisque. Sed euismod malesuada risus.</p>

<p>Pellentesque erat justo, egestas sed gravida a, fermentum eu tellus. Quisque placerat odio sed neque commodo, ut mollis leo sagittis. Vestibulum malesuada augue ac risus tempor, sed consequat elit laoreet. Nunc convallis non justo non suscipit. Vivamus at metus ipsum. Aliquam ultrices congue aliquet. Mauris dignissim, metus sit amet aliquet posuere, magna tellus condimentum ex, interdum sollicitudin magna nisl vel massa.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget sem sem. Mauris luctus nisi nec tortor posuere aliquet. Pellentesque sit amet sapien leo. Suspendisse nisi ante, consequat in tincidunt eget, rhoncus eget risus. Aliquam mattis auctor consectetur. Fusce non rutrum odio. Praesent pulvinar, justo non volutpat molestie, velit sem elementum magna, at mattis orci magna non metus. Quisque et arcu placerat, imperdiet lectus sed, iaculis justo. Donec mollis urna turpis, in sollicitudin dolor posuere sed.</p>

<p>Sed eget pharetra odio, nec congue ipsum. Proin posuere eros vitae felis sagittis, eget convallis lacus vestibulum. Aliquam sagittis tincidunt sollicitudin. Duis imperdiet sed justo eu congue. Donec nec magna vel tortor tincidunt rutrum. Praesent aliquam congue est, eget vestibulum neque imperdiet sit amet. Quisque at metus quis leo lobortis tincidunt. Aliquam erat volutpat. Cras nec luctus mi. Duis fermentum et leo nec viverra. Cras sit amet eleifend ipsum. Nullam justo massa, pulvinar fermentum tempor vel, rutrum sed felis. In at consectetur ligula, vitae rutrum tellus. Curabitur nec elit tincidunt, venenatis metus id, hendrerit elit. Donec pharetra, ex vitae lobortis lacinia, dolor ligula sollicitudin magna, eu pellentesque est ex a lorem.</p>

<p>Curabitur nec lobortis magna, iaculis iaculis massa. Sed luctus eget arcu vitae elementum. Morbi vel sagittis diam, sed faucibus nisl. Praesent ut mattis quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam massa dui, tincidunt in vulputate vitae, tincidunt id justo. Suspendisse potenti. Maecenas mollis elit justo, vitae imperdiet metus aliquam quis. Suspendisse imperdiet, sem ut commodo congue, tortor nibh molestie lectus, vel lacinia sem sem in libero. Duis finibus gravida nisl et efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '10-1611326347.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => 1,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-19 05:14:37',
                'tanggal_publish' => '2021-01-19 05:14:23',
                'tanggal' => '2021-01-22 21:39:07',
            ),
            3 => 
            array (
                'id_berita' => 35,
                'id_user' => 4,
                'id_kategori' => 8,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'uwoww',
                'judul_berita' => 'uwoww',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>

<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>

<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>

<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>

<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '12-1611332785.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-22 16:26:25',
                'tanggal_publish' => '2021-01-22 16:25:28',
                'tanggal' => '2021-01-22 23:26:25',
            ),
            4 => 
            array (
                'id_berita' => 36,
                'id_user' => 4,
                'id_kategori' => 6,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'dooor',
                'judul_berita' => 'dooor',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>

<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>

<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>

<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>

<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '22-1611332818.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-22 16:26:58',
                'tanggal_publish' => '2021-01-22 16:26:39',
                'tanggal' => '2021-01-22 23:26:58',
            ),
            5 => 
            array (
                'id_berita' => 37,
                'id_user' => 4,
                'id_kategori' => 8,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'loggg',
                'judul_berita' => 'loggg',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis est, efficitur sit amet bibendum cursus, venenatis eu eros. Nam posuere nibh sit amet vehicula tristique. Donec lacinia tortor et nunc ornare commodo. Etiam id egestas neque, non consequat enim. Integer vitae est at nulla condimentum pulvinar ut non enim. Integer quis faucibus ligula, et facilisis felis. Ut vel nunc mattis, maximus turpis nec, aliquet mi. Donec at mi eros. Pellentesque neque metus, porta a interdum eu, tincidunt et odio. Aenean commodo lectus a ipsum porta, vitae tristique dolor venenatis.</p>

<p>Pellentesque interdum odio sed molestie lacinia. Donec libero turpis, facilisis nec lectus ac, tincidunt consectetur ipsum. Curabitur ex felis, consequat nec condimentum viverra, volutpat ut tellus. Sed congue laoreet dui eget dapibus. Vivamus vitae arcu risus. Nullam quis felis sed arcu sollicitudin feugiat ac bibendum felis. Sed tempor sodales eros, ut faucibus ante elementum imperdiet. In elit velit, faucibus sit amet hendrerit ac, viverra eu metus.</p>

<p>Etiam commodo cursus dictum. Vivamus vestibulum quis nisl vel porta. Fusce luctus quam nec fringilla finibus. Aliquam interdum eros vitae libero luctus euismod. Duis placerat sem purus, id euismod diam vestibulum id. Fusce sed diam pretium, semper erat in, varius tortor. Donec aliquet justo eget urna tincidunt tempor. Nullam sit amet cursus nunc, ut feugiat sapien. In vestibulum placerat ultrices. Vivamus tincidunt, orci eu mattis condimentum, urna ipsum dapibus turpis, et sagittis leo augue ut nibh.</p>

<p>Quisque ullamcorper erat eu auctor varius. Aenean congue rhoncus nisi vitae porttitor. Praesent cursus lectus mi, a semper est rhoncus ut. Aliquam ullamcorper justo urna, in sollicitudin eros tincidunt gravida. Sed eu blandit lorem, vitae pharetra elit. Pellentesque consequat tellus varius posuere pulvinar. Curabitur sagittis ex id molestie convallis. Maecenas egestas nulla sed volutpat venenatis. Curabitur nec venenatis erat, in ornare diam. Morbi vitae odio ante. Nulla tincidunt ante elit, id viverra velit mattis sed. Curabitur eget lorem enim.</p>

<p>Ut vitae nulla eu ante tempus vehicula a in massa. Pellentesque faucibus aliquam lacus et pulvinar. Integer interdum tempus ligula sit amet placerat. Mauris eros velit, iaculis ac pharetra ac, luctus eu nulla. Nam nisl quam, accumsan in venenatis sit amet, dapibus sed sapien. Sed sit amet consectetur nulla. Ut libero quam, finibus et pellentesque eget, vehicula eu nulla. Cras arcu orci, rutrum id venenatis quis, posuere quis tellus.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '6-2-1611332985.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-22 16:29:45',
                'tanggal_publish' => '2021-01-22 16:29:33',
                'tanggal' => '2021-01-22 23:29:45',
            ),
            6 => 
            array (
                'id_berita' => 38,
                'id_user' => 4,
                'id_kategori' => 8,
                'bahasa' => 'ID',
                'updater' => '-',
                'slug_berita' => 'dorooon',
                'judul_berita' => 'dorooon',
                'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique faucibus ante, quis pulvinar velit iaculis vulputate. Integer bibendum et neque non condimentum. Suspendisse in ex non arcu commodo consectetur at non sem. Vestibulum convallis malesuada justo, et tempor arcu auctor sed. Mauris ultricies finibus sem, id accumsan odio luctus a. Nam lobortis urna sit amet elit fringilla tempus. Donec pulvinar aliquam dui, vitae rhoncus purus porta ac. In ac tempor dolor. Donec ultricies purus ac augue ornare cursus. Aenean pretium pharetra mauris vitae hendrerit. Donec et odio suscipit, dictum nibh a, mollis metus. Nunc blandit elementum risus, quis fringilla dui maximus ac. Nulla viverra velit est, non scelerisque lorem imperdiet at. Duis sit amet sem eu leo ullamcorper ultricies.</p>

<p>In feugiat neque quis urna volutpat, sed hendrerit felis vestibulum. Donec ullamcorper nisi a est lacinia, nec dapibus ex mattis. Morbi ullamcorper purus vel diam condimentum auctor. Etiam finibus eget nisi id euismod. Suspendisse ut dignissim orci. Vivamus vel interdum urna, ut viverra libero. Sed nec quam dapibus, consequat nisl sit amet, dapibus neque. Mauris porta mauris in lacus porta pulvinar.</p>

<p>In vitae auctor nunc. Vivamus vel dolor eget mi euismod pellentesque id eu odio. Sed eleifend nisi eget magna placerat ullamcorper. In ut eros leo. Ut id libero et dui tincidunt tempus. Curabitur risus justo, elementum vitae volutpat bibendum, sollicitudin non nisl. Pellentesque est augue, varius placerat lacus tristique, luctus aliquet nulla. Nam id ligula neque. Proin laoreet ut lectus in vestibulum. Phasellus eu dolor risus. Ut euismod vulputate laoreet. Sed vel semper metus, in accumsan tortor. Proin non rhoncus enim, quis finibus nisl.</p>

<p>Sed consectetur vel diam id commodo. Etiam sit amet turpis arcu. Sed id bibendum purus, et ultrices tortor. Nullam iaculis nisl vel venenatis auctor. Aenean et rhoncus lacus. Etiam gravida rutrum sem a maximus. Phasellus ultricies eleifend nunc, vehicula finibus augue aliquam vitae. Sed sem felis, lobortis eu venenatis a, consectetur quis ligula. Nam egestas lobortis luctus. Vivamus sed volutpat orci. Nulla arcu sapien, vestibulum non est sed, elementum sollicitudin orci. Fusce tincidunt ante diam, id mattis metus sagittis et. Suspendisse ac eros cursus ex tristique fringilla.</p>

<p>Cras consequat interdum nulla. Fusce rhoncus vulputate sem, non accumsan ante ullamcorper a. Donec at euismod neque. Ut turpis ante, consequat vel tellus ac, maximus pulvinar nisl. Cras cursus purus sapien, ac aliquet nisi finibus eget. Morbi scelerisque condimentum velit ac pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris pretium, purus id suscipit laoreet, neque lectus lobortis mi, a accumsan ante ante at nibh.</p>',
                'status_berita' => 'Publish',
                'jenis_berita' => 'Berita',
                'keywords' => NULL,
                'gambar' => '18-1611333809.jpg',
                'icon' => NULL,
                'hits' => NULL,
                'urutan' => NULL,
                'tanggal_mulai' => NULL,
                'tanggal_selesai' => NULL,
                'tanggal_post' => '2021-01-22 16:43:29',
                'tanggal_publish' => '2021-01-22 16:43:04',
                'tanggal' => '2021-01-22 23:43:29',
            ),
        ));
        
        
    }
}