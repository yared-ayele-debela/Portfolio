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
             <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 d-flex pb-2 pt-2">
                    <div class="card flex-fill" style="border:none;-webkit-box-shadow: 1px 0px 8px -1px rgba(206, 201, 201, 0.75);
                   -moz-box-shadow: 1px 0px 8px -1px rgba(143, 137, 137, 0.75);
                   box-shadow: 1px 0px 8px -1px rgba(218, 217, 217, 0.75);">
                     <div class="row no-gutters">
                       <img src="{{ asset('/storage/projects/'.$project->cover_image) }}" style="width: 100%; height:260px;" alt="">
                        <div class="card-body d-flex flex-column">
                           <h5 class="card-title">{{ $project->title }}</h5>
                           <p class="card-text">{!! $project->description !!}</p>
                           <p class="card-text">Published: {{ $project->created_at }}</p>
                         </div>
                     </div>
                   </div>
                 </div><!--//card-->
            @endforeach
              <div class="text-center">
                {{ $projects->links('pagination::bootstrap-4') }}
              </div>
        </div>
    </div>
</section>
@endsection
