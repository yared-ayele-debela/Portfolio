@extends('fontend.fontend_layout')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Portfolio</h2>
        <div class="intro">
        <p>Welcome to my online portfolio. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. I'm taking on freelance work at the moment. Want some help building your software?</p>

        </div>
        <a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>


    </div><!--//container-->
</section>
<section class="projects-list px-3 py-5 p-md-5">
    <div class="container">

        <div class="project-cards row isotope">
            @foreach ($project as $project)
            <div class="isotope-item col-md-6 mb-5 mobileapp frontend">
                <div class="card project-card">
                    <div class="row">
                        <div class="col-12 col-xl-5 card-img-holder">
                            <img src="{{ asset('/storage/projects/'.$project->cover_image) }}" class="card-img" alt="image">
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
            @endforeach

        </div><!--//row-->

    </div>
</section>
@endsection
