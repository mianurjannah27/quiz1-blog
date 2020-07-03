@extends('template_backend.home')
@section('subjudul','Daftar Data Post')
@section('content')


<a href="{{ route('post.create') }}" class="btn btn-primary" >Tambah Data</a>
	<table class="table table-striped tabel-hover tabel-bordered">
		<tr>
			<th>No</th>
			<th>Date</th>
			<th>Slug</th>
			<th>Judul Blog</th>
			<th>Isi Blog</th>
			<th>Kategori</th>
			<th>Action</th>
	
		</tr>
		@foreach ($rows as $row => $tampil)
		<tr>
			<td>{{ $row +  $rows->firstitem() }}</td>
			<td>{{ $tampil->post_date }}</td>
			<td>{{ $tampil->post_slug }}</td>
			<td>{{ $tampil->post_title }}</td>
			<td>{{ $tampil->post_text }}</td>
			<td>{{ $tampil->get_category->cat_name }}</td>
			<td>
				
				<form action="{{ route('post.destroy', $tampil->post_id)}}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ route('post.edit', $tampil->post_id)}}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>


{{ $rows->links()}}
@endsection