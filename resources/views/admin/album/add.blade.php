@extends('template_backend.home')
@section('subjudul','Tambah Data Album')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class="allert allert-danger" role="allert">
		{{ $error }}
	</div>
	@endforeach
@endif
@if(Session::has("success"))
<div class="allert allert-success" role="allert">
		{{ Session("success") }}
	</div>
@endif
<br><br>
<form action="{{ route('Album.store') }}" method="POST" enctype="multipart/form-data">
	
@csrf
<div class="form-group">
	<label>Judul Album</label>
	<input type="text" name="album_name">
</div>
<div class="form-group">
	<label>Keterangan</label>
	<input type="text" name="album_text">
</div>
<div class="form-group">
	<label>Photo</label>
	<select class="form-control" name="album_photo_id">
		<option value="" holder>--Pilih Photo--</option>
		@foreach($rows as $row)
		<option value="{{ $row->photo_id}}">{{ $row->photo_title}}</option>
		@endforeach
	</select>
</div>
<div>
	<button class='btn btn-pryimary'>Simpan</button>
</div>
</form>
@endsection	