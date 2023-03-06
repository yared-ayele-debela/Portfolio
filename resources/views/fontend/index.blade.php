@extends('fontend.fontend_layout')
@section('content')
    <section class="about-me-section p-3 p-lg-5 theme-bg-light">
        <div class="container">
            <div class="profile-teaser row">
                
                <div class="col">
                    <h2 class="name font-weight-bold mb-1">Simon Doe</h2>
                    <div class="tagline mb-3">Senior Software Engineer</div>
                    <div class="bio mb-4">I'm a software engineer specialised in frontend and backend development for complex scalable web apps. I write about software development on <a class="text-link" href="blog-home.html">my blog</a>. Want to know how I may help your project? Check out my project <a class="text-link" href="projects.html">portfolio</a> and <a class="text-link" href="resume.html">online resume</a>.
                    </div><!--//bio-->
                    <div class="mb-4">
                        <a class="btn btn-primary me-2 mb-3" href="{{ route('portifolio') }}"><i class="fas fa-arrow-alt-circle-right me-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
                        <a class="btn btn-secondary mb-3" href="{{ route('resume') }}"><i class="fas fa-file-alt me-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
                    </div>
                </div><!--//col-->
                
                <div class="col-md-5 col-lg-5">
                    <img class="shadow-lg border-1 profile-image img-fluid mb-3 mb-lg-0 me-md-0" style="border-radius: 3rem 1rem;" src="{{asset('fontend/assets/images/profile-lg.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section><!--//about-me-section-->
		<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">What I do</h2>
				<div class="section-intro mb-5">I have more than 10 years' experience building software for clients all over the world. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a class="text-link" href="resume.html">online resume</a> and <a class="text-link" href="portfolio.html">project portfolio</a>.</div>
				<div class="row">
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-js-square"></i></div>
							<h3 class="item-title">Vanilla JavaScript</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-angular me-2"></i><i class="fab fa-react me-2"></i><i class="fab fa-vuejs"></i></div>
							<h3 class="item-title">Angular, React &amp;  Vue</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-node-js"></i></div>
							<h3 class="item-title">Node.js</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-python"></i></div>
							<h3 class="item-title">Python &amp; Django</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-php"></i></div>
							<h3 class="item-title">PHP</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-npm me-2"></i><i class="fab fa-gulp me-2"></i><i class="fab fa-grunt"></i></div>
							<h3 class="item-title">npm, Gulp &amp; Grunt</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-html5 me-2"></i><i class="fab fa-css3-alt"></i></div>
							<h3 class="item-title">HTML &amp; CSS</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-sass me-2"></i><i class="fab fa-less"></i></div>
							<h3 class="item-title">Sass &amp; LESS</h3>
							<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
						</div><!--//item-inner-->
					</div><!--//item-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="{{ route('service') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>Services &amp; Pricing
					
				</a></div>
				
			</div><!--//container-->
		</section>
		
		<div class="container"><hr></div>
		
		<section class="testimonials-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
				
				<div class="testiomonial-carousel-container">
					<div class="testimonial-carousel  tiny-slider">
	                    <div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-1.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">Brandon James</div>
										<div class="info">Project Manager, Google</div>
									</div>
								</div>
							</div><!--//item-inner-->
						</div><!--//item-->
						
						<div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-2.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">Kate Sanders</div>
										<div class="info">Project Manager, Uber</div>
									</div>
								</div>
							</div><!--//item-inner-->
						</div><!--//item-->
						
						<div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-3.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">James Lee</div>
										<div class="info">Product Manager, Amazon</div>
									</div>
								</div>
						    </div><!--//item-inner-->
						</div><!--//item-->
						
						<div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-4.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">James Lee</div>
										<div class="info">Product Manager, Amazon</div>
									</div>
								</div>
						    </div><!--//item-inner-->
						</div><!--//item-->
						
						<div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-5.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">Olivia White</div>
										<div class="info">Product Manager, Dropbox</div>
									</div>
								</div>
						    </div><!--//item-inner-->
						</div><!--//item-->
						
						<div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>
								</div><!--//quote-holder-->
								<div class="source-holder">
									<div class="source-profile">
										<img src="{{asset('fontend/assets/images/clients/profile-6.png')}}" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">Samuel Reyes</div>
										<div class="info">CTO, StartupHub</div>
									</div>
								</div>
						    </div><!--//item-inner-->
						</div><!--//item-->
					</div><!--//testimonial-carousel-->	
				</div><!--//testimonial-carousel-container-->	
			</div><!--//container-->
		</section><!--//testimonials-section-->
		
		<div class="container"><hr></div>
		
		<section class="featured-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="{{asset('fontend/assets/images/project/project-1.jpg')}}" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">	
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="{{asset('fontend/assets/images/project/project-2.jpg')}}" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="{{asset('fontend/assets/images/project/project-3.jpg')}}" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="{{asset('fontend/assets/images/project/project-4.jpg')}}" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Uber</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="{{ route('portifolio') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Portfolio</a></div>
				
			</div><!--//container-->
		</section><!--//featured-section-->
		
		<div class="container"><hr></div>
		
		<section class="latest-blog-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="{{asset('fontend/assets/images/blog/blog-post-thumb-card-1.jpg')}}" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>
								
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 2 days ago</small>
							</div>
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="{{asset('fontend/assets/images/blog/blog-post-thumb-card-2.jpg')}}" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote Working</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published a week ago</small>
								
							</div>
						</div><!--//card-->
					</div><!--//col-->
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="{{asset('fontend/assets/images/blog/blog-post-thumb-card-3.jpg')}}" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 3 weeks ago</small>
							</div>
						</div><!--//card-->
					</div><!--//col-->
				</div><!--//row-->
				<div class="text-center py-3"><a href="{{ route('blog') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Blog</a></div>
			</div><!--//container-->
			
		</section><!--//latest-blog-section-->

	<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
	<!--//configure-panel-->
@endsection