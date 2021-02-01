<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Download_model;
use App\Models\Berita_model;

class Download extends Controller
{
    // Main page
    public function index()
    {
        Paginator::useBootstrap();
        $kategori_download = DB::table('kategori_download')
                    ->orderBy('kategori_download.urutan','ASC')
                    ->get();

		$data = array(  'title'		                => 'Dokumen '.website('namaweb'),
						'deskripsi'	                => 'Dokumen '.website('namaweb'),
						'keywords'	                => 'Dokumen '.website('namaweb'),
						'kategori_download'	        => $kategori_download,
                        'content'	                => 'download/kategori'
                    );
        return view('layouts/wrapper',$data);
    }

    // Main page
    public function kategori($slug_kategori_download)
    {
        Paginator::useBootstrap();
        $kategori   = DB::table('kategori_download')
                    ->where('kategori_download.slug_kategori_download',$slug_kategori_download)
                    ->first();
        $download = DB::table('download')
                    ->join('kategori_download', 'kategori_download.id_kategori_download', '=', 'download.id_kategori_download','LEFT')
                    ->select('download.*', 'kategori_download.nama_kategori_download')
                    ->where('download.id_kategori_download',$kategori->id_kategori_download)
                    ->orderBy('download.id_download','DESC')
                    ->paginate(25);

        $data = array(  'title'     => $kategori->nama_kategori_download,
                        'deskripsi' => $kategori->nama_kategori_download,
                        'keywords'  => $kategori->nama_kategori_download,
                        'downloads' => $download,
                        'kategori'  => $kategori,
                        'content'   => 'download/index'
                    );
        return view('layouts/wrapper',$data);
    }

    // detail
    public function detail($id_download,$slug_download)
    {
        $mydownload = new Download_model();
        $download   = $mydownload->detail($id_download);
        $hits       = $download->hits+1;
        DB::table('download')->where('id_download',$download->id_download)->update([
            'hits'      => $hits
        ]);
        $data = array(  'title'     => $download->judul_download,
                        'deskripsi' => $download->judul_download,
                        'keywords'  => $download->judul_download,
                        'download'  => $download,
                        'content'   => 'download/detail'
                    );
        return view('layouts/wrapper',$data);
    }

    // Unduh
    public function unduh($id_download)
    {
        $mydownload = new Download_model();
        $download   = $mydownload->detail($id_download);
        $hits       = $download->hits+1;
        DB::table('download')->where('id_download',$download->id_download)->update([
            'hits'      => $hits
        ]);
        $pathToFile           = './assets/upload/file/'.$download->gambar;
        return response()->download($pathToFile, $download->gambar);
    }

    public function pencarian(Request $request)
    {
        $keywords = $request->keywords;
        $queryDownload = Download_model::where('judul_download','LIKE','%'.$keywords.'%')->orWhere('isi','LIKE','%'.$keywords.'%')->get();
        $queryBerita = Berita_model::where('jenis_berita','LIKE','%'.$keywords.'%')->orWhere('isi','LIKE','%'.$keywords.'%')->get();
        $searchResults = array_merge($queryDownload->toArray(), $queryBerita->toArray());
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        //Create a new Laravel collection from the array data
        $collection = new Collection($searchResults);

        //Define how many items we want to be visible in each page
        $perPage = 10;

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $paginatedSearchResults= new LengthAwarePaginator ($currentPageSearchResults, count($collection), $perPage);

        $data = array(  'title'		        => 'Hasil Pencarian',
                        'deskripsi'	        => 'Dokumen '.website('namaweb'),
                        'keywords'	        => $keywords,
                        'search'            => $searchResults,
                        'hasilpencarian'    => $paginatedSearchResults,
                        'content'           => 'home/search'
                    );
        return view('layouts/wrapper', $data);
    }

}
