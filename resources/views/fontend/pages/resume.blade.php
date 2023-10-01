@extends('fontend.fontend_layout')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading mb-3">Online Resume</h2>
        <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/resources/sketch-template/resume-sketch-sketch-resume-template-for-software-developers/" target="_blank"><i class="fas fa-file-pdf me-2"></i>Download PDF Version</a>
    </div><!--//container-->
</section>
<div class="container resume-container px-3 px-lg-5">
    <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">

        <div class="resume-header">
            <div class="row align-items-center">
                {{-- @foreach ($resume as $resume ) --}}
                <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                    <h2 class="resume-name mb-0 text-uppercase">{{ $resume->fullname }}</h2>
                    <div class="resume-tagline mb-3 mb-md-0">{{ $resume->profession }}</div>
                </div><!--//resume-title-->
                <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg me-2 "></i><a class="resume-link" href="tel:#">{{ $resume->mobile }}</a></li>
                        <li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg me-2"></i><a class="resume-link" href="javascript:void();">{{ $resume->email }}</a></li>
                        <li class="mb-2"><i class="fas fa-globe fa-fw fa-lg me-2"></i><a class="resume-link" href="{{ $resume->portfolio_link }}"  target="_blank">{{ $resume->portfolio_link }}</a></li>
                        <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg me-2"></i>{{ $resume->location }}</li>
                    </ul>
                </div>
                <!--//resume-contact-->
            </div><!--//row-->

        </div><!--//resume-header-->
        <hr>
        <div class="resume-intro py-3">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 col-xl-2 text-center">
                    <img class="resume-profile-image mb-3 mb-md-0 me-md-5  ms-md-0 rounded mx-auto" src="{{ asset('/storage/resume/'.$resume['image']) }}" alt="image">
                </div>

                <div class="col text-start">
                    <p class="mb-0">Summarise your career here. <a class="theme-link" href="https://themes.3rdwavemedia.com/resources/sketch-template/resume-sketch-sketch-resume-template-for-software-developers/" target="_blank">You can make a PDF version of your resume using our free Sketch template here</a>. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.  Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. </p>
                </div><!--//col-->
            </div>
        </div>
        {{-- @endforeach --}}
        <!--//resume-intro-->
        <hr>
        <div class="resume-body">
            <div class="row">
                <div class="resume-main col-12 col-lg-8 col-xl-9   pe-0   pe-lg-5">
                    <section class="work-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Senior Software Engineer</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Google | 2019 - Present</div>

                            </div>

                        @foreach ($work_exp as $exp )<!--//item-->
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">{{ $exp->title }}</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Apple | 2016 - 2019</div>

                            </div>
                            <div class="item-content">
                                <p>{!!$exp->description!!}</p>

                            </div>
                        </div>
                        @endforeach<!--//item-->
                      <!--//item-->

                    </section><!--//work-section-->


                    <section class="project-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Projects</h3>
                        @foreach ($project as $pro )
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">{{ $pro->title }}</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Open Source</div>
                            </div>
                            <div class="item-content">
                                <p"> {!!$pro->description !!}</p>
                            </div>
                        </div><!--//item-->
                        @endforeach

                    </section><!--//project-section-->
                </div><!--//resume-main-->
                <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
                    <section class="skills-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
                        <div class="item">
                            <h4 class="item-title">Technical</h4>
                            <ul class="list-unstyled resume-skills-list">
                                @foreach ($skill as $skill )
                                <li class="mb-2">{{ $skill->name }}</li>

                                @endforeach

                                </ul>
                            </div><!--//item-->
                            {{-- <div class="item">
                                <h4 class="item-title">Professional</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">Effective communication</li>
                                    <li class="mb-2">Team player<li>
                                        <li class="mb-2">Strong problem solver</li>
                                        <li>Good time management</li>
                                    </ul>
                            </div><!--//item--> --}}
                            </section><!--//skills-section-->
                            <section class="education-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
                                <ul class="list-unstyled resume-education-list">
                                    @foreach ($education as $edu)
                                    <li class="mb-3">
                                        <div class="resume-degree font-weight-bold">{{ $edu->university }}</div>
                                        <div class="resume-degree-org text-muted">Bachelor of {{ $edu->bachelor }}</div>
                                        <div class="resume-degree-time text-muted">{{ $edu->start_year }} - {{ $edu->end_year }}</div>
                                    </li>
                                    @endforeach

                                </ul>
                            </section><!--//education-section-->
                            <section class="education-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Certificatation</h3>
                                <ul class="list-unstyled resume-awards-list">
                                    @foreach ($award as $award )
                                    <li class="mb-3">
                                        <div class="font-weight-bold">{{ $award->name }}</div>
                                        <div class="text-muted">from : {{ $award->company }}</div>
                                    </li>
                                    @endforeach

                                </ul>
                            </section><!--//education-section-->
                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
                                <ul class="list-unstyled resume-lang-list">
                                    @foreach ($language as $lang )
                                    <li class="mb-2">{{ $lang->name }}</li>
                                    @endforeach

                                </ul>
                            </section><!--//certificates-section-->
                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Interests</h3>
                                <ul class="list-unstyled resume-interests-list mb-0">
                                    <li class="mb-2">Climbing</li>
                                    <li class="mb-2">Snowboarding</li>
                                    <li class="mb-2">Photography</li>
                                    <li>Travelling</li>
                                </ul>
                            </section><!--//certificates-section-->

                        </aside><!--//resume-aside-->
                    </div><!--//row-->
                </div><!--//resume-body-->
                <hr>
                <div class="resume-footer text-center">
                    <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                        <li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href=" https://github.com/Yared11000010" target="_blank"><i class="fab fa-github-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/Yared11000010</span></a></li>
                        <li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="https://www.linkedin.com/in/yared-ayele"  target="_blank"><i class="fab fa-linkedin fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">linkedin.com/in/yared-ayele</span></a></li>
                        <li class="list-inline-item mb-lg-0 me-lg-3"><a class="resume-link" href="https://twitter.com"  target="_blank"><i class="fab fa-twitter-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">@twittername</span></a></li>
                    </ul>
                </div><!--//resume-footer-->
            </article>

        </div><!--//container-->

@endsection
