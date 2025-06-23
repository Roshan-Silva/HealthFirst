@extends('frontend.layouts.master')

@section('content')

		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Blog Posts</h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="row">
							<div class="col-12">
								@foreach ($posts as $post)

								<div class="col-lg-12 col-12">
									
								
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img  src="{{asset('storage/'.$post->image)  }}" alt="#">
									</div>
									<!-- News Title -->
									<h1 class="news-title">{{$post->title}}</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											
											<span class="date"><i class="fa fa-clock-o"></i>{{$post->updated_at}}</span>
										</div>
										
									</div>
									<!-- News Text -->
									<div class="news-text">
										<p>{{$post->content}}</p>
										
									</div>
									
								</div>
								
								</div>
							</div>
							
							@endforeach
							
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
		
		@endsection