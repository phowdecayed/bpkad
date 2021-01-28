<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use App\Models\link_model;

class link extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	$mylink 			= new link_model();
		$link 			= $mylink->semua();
		$kategori_link 	= DB::table('kategori_link')->orderBy('urutan','ASC')->get();

		$data = array(  'title'				=> 'Data link',
						'link'			=> $link,
						'kategori_link'	=> $kategori_link,
                        'content'			=> 'admin/link/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mylink           = new link_model();
        $keywords           = $request->keywords;
        $link             = $mylink->cari($keywords);
        $kategori_link    = DB::table('kategori_link')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data link',
                        'link'            => $link,
                        'kategori_link'   => $kategori_link,
                        'content'           => 'admin/link/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_linknya       = $request->id_link;
            for($i=0; $i < sizeof($id_linknya);$i++) {
                DB::table('link')->where('id_link',$id_linknya[$i])->delete();
            }
            return redirect('admin/link')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['update'])) {
            $id_linknya       = $request->id_link;
            for($i=0; $i < sizeof($id_linknya);$i++) {
                DB::table('link')->where('id_link',$id_linknya[$i])->update([
                        'id_user'               => Session()->get('id_user'),
                        'id_kategori_link'    => $request->id_kategori_link
                    ]);
            }
            return redirect('admin/link')->with(['sukses' => 'Data kategori telah diubah']);
        }
    }

    //Status
    public function status_link($status_link)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mylink           = new link_model();
        $link             = $mylink->status_link($status_link);
        $kategori_link    = DB::table('kategori_link')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data link',
                        'link'            => $link,
                        'kategori_link'   => $kategori_link,
                        'content'           => 'admin/link/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Kategori
    public function kategori($id_kategori_link)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mylink           = new link_model();
        $link             = $mylink->all_kategori_link($id_kategori_link);
        $kategori_link    = DB::table('kategori_link')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data link',
                        'link'            => $link,
                        'kategori_link'   => $kategori_link,
                        'content'           => 'admin/link/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $kategori_link    = DB::table('kategori_link')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Tambah link',
                        'kategori_link'   => $kategori_link,
                        'content'           => 'admin/link/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // edit
    public function edit($id_link)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mylink           = new link_model();
        $link             = $mylink->detail($id_link);
        $kategori_link    = DB::table('kategori_link')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Edit link',
                        'link'            => $link,
                        'kategori_link'   => $kategori_link,
                        'content'           => 'admin/link/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_link'  => 'required|unique:link',
                            'gambar'        => 'required|file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath        = './assets/upload/image/thumbs/';
        $img = Image::make($image->getRealPath(),array(
            'width'     => 150,
            'height'    => 150,
            'grayscale' => false
        ));
        $img->save($destinationPath.'/'.$input['nama_file']);
        $destinationPath = './assets/upload/image/';
        $image->move($destinationPath, $input['nama_file']);
        // END UPLOAD
        $slug_nama_link = Str::slug($request->nama_link, '-');
        if($request->mulai_diskon=='') {
            $mulai_diskon = NULL;
        }else{
            $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon));
        }
        if($request->selesai_diskon=='') {
            $selesai_diskon = NULL;
        }else{
            $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon));
        }
        DB::table('link')->insert([
            'id_user'               => Session()->get('id_user'),
            'id_kategori_link'    => $request->id_kategori_link,
            'id_user'               => Session()->get('id_user'),
            'judul_link'          => $request->judul_link,
            'gambar'                => $input['nama_file'],
            'website'               => $request->website,
            'urutan'                => $request->urutan
        ]);
        return redirect('admin/link')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_link'  => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_nama_link = Str::slug($request->nama_link, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon));
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon));
            }
            DB::table('link')->where('id_link',$request->id_link)->update([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_link'    => $request->id_kategori_link,
                'id_user'               => Session()->get('id_user'),
                'judul_link'          => $request->judul_link,
                'gambar'                => $input['nama_file'],
                'website'               => $request->website,
                'urutan'                => $request->urutan
            ]);
        }else{
            $slug_nama_link = Str::slug($request->nama_link, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon));
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon));
            }
            DB::table('link')->where('id_link',$request->id_link)->update([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_link'    => $request->id_kategori_link,
                'id_user'               => Session()->get('id_user'),
                'judul_link'          => $request->judul_link,
                'website'               => $request->website,
                'urutan'                => $request->urutan
            ]);
        }
        return redirect('admin/link')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_link)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('link')->where('id_link',$id_link)->delete();
        return redirect('admin/link')->with(['sukses' => 'Data telah dihapus']);
    }
}
