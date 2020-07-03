@extends('template_backend.home')
@section('content')
@section('subjudul','Edit Data Kategori')
<form action="{{ route('category.update', $row->cat_id) }}" method="POST">
	
@csrf
@method('patch')
<div class="card-body">
    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategory</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="cat_name" value="{{ $row->cat_name}}">
            </div>
    </div>
	<div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
             <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="cat_text" value="{{ $row->cat_text}}">
             </div>
    </div>
    <div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	<div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Update</button>
    </div>
</div>
</form>
@endsection	