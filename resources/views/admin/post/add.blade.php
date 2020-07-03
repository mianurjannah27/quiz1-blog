@extends('template_backend.home')
@section('subjudul','Tambah Data Post')
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
<form action="{{ route('post.store') }}" method="POST">
	
@csrf
<div class="form-group">
	<label>Tanggal Post</label>
	<input class="form-control" type="date" name="post_date">
</div>
<div class="form-group">
	<label>Judul Blog</label>
	<input class="form-control" type="text" name="post_title">
</div>
<div class="form-group">
	<label>Isi Blog</label>
	<textarea class="form-control" name="post_text"></textarea>
</div>
<div class="form-group">
	<label>Kategori</label>
	<select class="form-control" name="post_cat_id">
		<option value="" holder>--Pilih Kategori--</option>
		@foreach($rows as $row)
		<option value="{{ $row->id}}">{{ $row->cat_name}}</option>
		@endforeach
	</select>
</div>
<div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection	