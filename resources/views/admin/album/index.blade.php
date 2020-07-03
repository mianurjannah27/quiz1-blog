@extends('template_backend.home')
@section('subjudul','Daftar Data Album')
@section('content')


<a href="{{ route('Album.create') }}" class="btn btn-primary" >Tambah Data</a>
	<table class="table table-striped tabel-hover tabel-bordered">
		<tr>
			<th>No</th>
			<th>Judul Album</th>
			<th>Keterangan</th>
			<th>Photo</th>
			<th>Action</th>
	
		</tr>
		@foreach ($rows as $row => $tampil)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $tampil->album_name }}</td>
			<td>{{ $tampil->album_text }}</td>
			<td>{{ $tampil->album_photo_id }}</td>
			<td>
				
				<form action="" method="POST">
					@csrf
					@method('delete')
					<a href="" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>


{{ $rows->links()}}
@endsection