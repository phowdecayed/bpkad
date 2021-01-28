<p class="text-right">
	<a href="{{ asset('admin/link') }}" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>
<?php
// Validasi error

// Error upload
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Form open
?>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/link/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_link" value="{{ $link->id_link }}">
<div class="row form-group">
    <div class="row form-group">
	<label class="col-md-3 text-right">Judul link</label>
	<div class="col-md-9">
		<input type="text" name="judul_link" class="form-control" placeholder="Judul link" value="<?php echo $link->judul_link ?>">
    </div>
    <br>
		<label class="col-md-3 text-right">Upload gambar</label>
		<div class="col-md-9">
			<input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
		</div>
<br>
		<label class="col-md-3 text-right">Link/website terkait link</label>
		<div class="col-md-9">
			<input type="url" name="website" class="form-control" placeholder="http://website.com" value="<?php echo $link->website ?>">
        </div>
        <br>
		<label class="col-md-3 text-right"></label>
		<div class="col-md-9">
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
			<input type="reset" name="reset" class="btn btn-info " value="Reset">
		</div>
	</div>
</div>
</form>
