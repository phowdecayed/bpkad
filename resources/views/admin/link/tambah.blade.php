<p class="text-right">
  <a href="{{ asset('admin/link') }}"
  class="btn btn-success btn-sm"><i class="fa fa-backward"></i> Kembali</a>
</p>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/link/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="row form-group">
<div class="row form-group">
<label class="col-md-3 text-right">Upload gambar</label>
<div class="col-md-9">
<input type="file" name="gambar" class="form-control" required="required" placeholder="Upload gambar">
</div>

<label class="col-md-3 text-right">Judul link</label>
<div class="col-md-9">
<input type="text" name="judul_link" class="form-control" placeholder="Judul link" value="{{ old('judul_link') }}">
</div>

<label class="col-md-3 text-right">Link / website yang terkait dengan link</label>
<div class="col-md-9">
<input type="url" name="website" class="form-control" placeholder="http://website.com" value="{{ old('website') }}">
</div>

<label class="col-md-3 text-right"></label>
<div class="col-md-9">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<input type="reset" name="reset" class="btn btn-info " value="Reset">
</div>
</div>
</div>
</div>
</form>
