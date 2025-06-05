<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="{{asset('frontend/img/section-img.png') }}" alt="#">
							<p>Keep informed about breakthroughs, health tips, and hospital updates through our trusted medical news. From innovative treatments to wellness advice, we share valuable insights to help you make informed health decisions.

</p>
						</div>
					</div>
				</div>
                
				<div class="row">
                    @foreach ($news as $newsItem)
					<div class="col-lg-4 col-md-6 col-12">
                        
                            
                        
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{asset('storage/'.$newsItem->image_link) }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ $newsItem->date }}</div>
									<h2><a href="blog-single.html">{{ $newsItem->title }}</a></h2>
									<p class="text">{{ $newsItem->description }}</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
                        
					</div>
                    @endforeach
					{{-- <div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{asset('frontend/img/blog2.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">15 Jul, 2020</div>
									<h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{asset('frontend/img/blog3.jpg') }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">05 Jan, 2020</div>
									<h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div> --}}
				</div>
                
			</div>
		</section>
		<!-- End Blog Area -->