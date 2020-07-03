@extends('template_backend.home')
@section('subjudul','Tambah Data Kategori')
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

<form action="{{ route('category.store') }}" method="POST">
	
@csrf
<div class="card-body">
    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategory</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="cat_name">
            </div>
    </div>
	<div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
             <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="cat_text">
             </div>
    </div>
    <div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	<div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>
@endsection	

				