@extends('template_backend.home')

@section('content')
@section('subjudul','Daftar Photo')

<a href="{{ route('photo.create') }}" class="btn btn-primary" >Tambah Data</a>
	<table class="table table-striped tabel-hover tabel-bordered">
		<tr>
			<th>No</th>
			<th>Date</th>
			<th>Judul Photo</th>
			<th>Photo</th>
			<th>Post</th>
			<th>Action</th>
	
		</tr>
		@foreach ($rows as $row => $tampil)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $tampil->photo_date }}</td>
			<td>{{ $tampil->photo_title }}</td>
			<td><img src="{{ asset($tampil->photo_text)}}" class="img-fluid" style="width: 200px"></td>
			<td>{{ $tampil->get_post->post_title }}</td>
			<td>
				
				<form action="{{ route('photo.destroy', $tampil->photo_id)}}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ route('photo.edit', $tampil->photo_id)}}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>


{{ $rows->links()}}
@endsection