@extends('template_backend.home')
@section('subjudul','Tambah Data Photo')
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
<form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
	
@csrf
<div class="form-group">
	<label>Tanggal Upload</label>
	<input type="date" name="photo_date">
</div>
<div class="form-group">
	<label>Judul Photo</label>
	<input type="text" name="photo_title">
</div>
<div class="form-group">
	<label>photo</label>
	<input type="file" class="form-control" name="photo_text"></input>	
</div>
<div class="form-group">
	<label>Postingan</label>
	<select class="form-control" name="photo_post_id">
		<option value="" holder>--Pilih Post--</option>
		@foreach($rows as $row)
		<option value="{{ $row->post_id}}">{{ $row->post_title}}</option>
		@endforeach
	</select>
</div>
<div>
	<button class='btn btn-pryimary'>Simpan</button>
</div>
</form>
@endsection	