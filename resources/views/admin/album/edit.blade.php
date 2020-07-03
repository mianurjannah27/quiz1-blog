@extends('template_backend.home')
@section('subjudul','Daftar Data Album')
@section('content') 

<div class="container">
	<h3>Edit Data Album</h3>
		<form action="{{ url('/album/' . $row->album_id) }}" method="POST" enctype="multipart/form-data"> 
			<input name="_method" type="hidden" value="PATCH"> 
			@csrf
			<table>
				<tr>
					<td>Nama Album</td>
					<td><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="album_text" value="{{ $row->album_text }}"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="text" name="album_photo_id" value="{{ $row->album_photo_id }}"></td>
					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UPDATE"></td>
				</tr>
			</table>
		</form> 
	</div>
@endsection