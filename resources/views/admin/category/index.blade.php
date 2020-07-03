@extends('template_backend.home')
@section('subjudul','Daftar Data Kategori')
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
<br>
<a href="{{ route('category.create') }}" class="btn btn-primary" >Tambah Data</a>
<br><br>
	<table class="table table-striped tabel-hover tabel-bordered">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Keterangan</th>
			<th>Action</th>
	
		</tr>
		@foreach ($rows as $row => $tampil)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $tampil->cat_name }}</td>
			<td>{{ $tampil->cat_text }}</td>
			<td>
				
				<form action="{{ route('category.destroy', $tampil->id)}}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ route('category.edit', $tampil->id)}}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>


{{ $rows->links()}}
@endsection