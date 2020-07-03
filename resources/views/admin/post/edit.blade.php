@extends('template_backend.home')
@section('subjudul','Edit Postingan')
@section('content') 

<div class="container">
	<h3>Edit Data Post</h3>
		<form action="{{ url('/post/' . $row->post_id) }}" method="POST"> 
			<input name="_method" type="hidden" value="PATCH"> 
			@csrf
			<table>
				<tr>
					<td>Tanggal</td>
					<td><input type="date" name="post_date" value="{{ $row->post_date }}"></td>
				</tr>
				<tr>
					<td>Judul Blog</td>
					<td><input type="text" name="post_title" value="{{ $row->post_title }}"></td>
				</tr>
				<tr>
					<td>Isi Blog</td>
					<td><textarea name="post_text" rows="15" cols="100"><?php echo "{$row->post_text}" ?></textarea></td>
					
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="post_cat_id" value="{{ $row->post_cat_id }}"></td>
				</tr>				
				<tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UPDATE"></td>
				</tr>
			</table>
		</form> 
	</div>
@endsection