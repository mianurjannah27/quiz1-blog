@extends('template_backend.home')
@section('subjudul','Edit Data Photo')
@section('content') 

<div class="container">
	<h3>Edit Data Photo</h3>
		<form action="{{ url('/photo/' . $row->photo_id) }}" method="POST"> 
			<input name="_method" type="hidden" value="PATCH"> 
			@csrf
			<table>
				<tr>
					<td>Tanggal</td>
					<td><input type="date" name="photo_date" value="{{ $row->photo_date }}"></td>
				</tr>
				<tr>
					<td>Judul Photo</td>
					<td><input type="text" name="photo_title" value="{{ $row->photo_title }}"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" name="photo_text" value="{{ $row->photo_text }}"></td>
					
				</tr>
				<tr>
					<td>Post</td>
					<td><input type="text" name="photo_post_id" value="{{ $row->photo_post_id }}"></td>
				</tr>			
				<tr>
					<td></td>
					<td><input type="submit" value="UPDATE"></td>
				</tr>
			</table>
		</form> 
	</div>
@endsection