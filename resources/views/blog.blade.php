@extends('templateblog.content')
@section('isi')
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_new)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{asset('')}}"><img style="width: 400px height:160px" src="{{ $post_new->photo_text }}" alt=""></a>
								<div class="post-body">
									
									<h3 class="post-title"><a href="#">{{$post_new->get_post->post_title}}</a></h3>
									
								</div>
							</div>
							
						</div>
						@endforeach
						<!-- /post -->

						
					</div>
					<!-- /row -->

				</div>
			
			
@endsection



	