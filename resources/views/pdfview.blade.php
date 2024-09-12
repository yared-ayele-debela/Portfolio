@extends('fontend.fontend_layout')
@section('content')
<section style="background-color: #f8f9fa; padding: 80px 0;" class="py-5">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;" class="text-center">
        <h2 style="margin-bottom: 30px; font-size: 2rem;">Online Resume</h2>
        <a style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;" href="{{ route('pdfview',['download'=>'pdf']) }}" target="_blank">
            <i style="margin-right: 5px;" class="fas fa-file-pdf"></i> Download PDF Version
        </a>
    </div>
</section>

<div style="max-width: 800px; margin: 0 auto; padding: 20px;" class="resume-container">
    <article style="background-color: #f8f9fa; padding: 20px; margin-bottom: 30px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);" class="shadow-lg">

        <div style="margin-bottom: 30px; padding: 20px; border-bottom: 1px solid #ccc;" class="resume-header">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div style="flex: 2;">
                    <h2 style="margin: 0; text-transform: uppercase;">{{ $resume->fullname }}</h2>
                    <div>{{ $resume->profession }}</div>
                </div>
                <div style="flex: 1; text-align: right;">
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-phone-square fa-lg" style="margin-right: 5px;"></i><a style="text-decoration: none; color: inherit;" href="tel:#">{{ $resume->mobile }}</a></li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-envelope-square fa-lg" style="margin-right: 5px;"></i><a style="text-decoration: none; color: inherit;" href="javascript:void();">{{ $resume->email }}</a></li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-globe fa-lg" style="margin-right: 5px;"></i><a style="text-decoration: none; color: inherit;" href="{{ $resume->portfolio_link }}" target="_blank">{{ $resume->portfolio_link }}</a></li>
                        <li><i class="fas fa-map-marker-alt fa-lg" style="margin-right: 5px;"></i>{{ $resume->location }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 30px; padding: 20px; border-bottom: 1px solid #ccc;" class="resume-intro">
            <div style="display: flex;">
                <div style="flex: 1; text-align: center; margin-right: 20px;">
                    <img style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;" src="{{ asset('/storage/resume/'.$resume['image']) }}" alt="image">
                </div>
                <div style="flex: 3;">
                    <p style="margin: 0;">Summarise your career here. <a style="text-decoration: none; color: #007bff;" href="https://themes.3rdwavemedia.com/resources/sketch-template/resume-sketch-sketch-resume-template-for-software-developers/" target="_blank">You can make a PDF version of your resume using our free Sketch template here</a>. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa...</p>
                </div>
            </div>
        </div>

        <div class="resume-body">
            <!-- Work Experiences -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Work Experiences</h3>
                @foreach ($work_exp as $exp)
                    <div style="margin-bottom: 20px;">
                        <h4 style="font-size: 1.2rem; margin-bottom: 10px;">{{ $exp->title }}</h4>
                        <p style="margin: 0;">{!! $exp->description !!}</p>
                    </div>
                @endforeach
            </section>

            <!-- Projects -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Projects</h3>
                @foreach ($project as $pro)
                    <div style="margin-bottom: 20px;">
                        <h4 style="font-size: 1.2rem; margin-bottom: 10px;">{{ $pro->title }}</h4>
                        <p style="margin: 0;">{!! $pro->description !!}</p>
                    </div>
                @endforeach
            </section>

            <!-- Skills -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Skills</h3>
                <ul style="list-style: none; padding: 0;">
                    @foreach ($skill as $skill)
                        <li style="margin-bottom: 10px;">{{ $skill->name }}</li>
                    @endforeach
                </ul>
            </section>

            <!-- Education -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Education</h3>
                <ul style="list-style: none; padding: 0;">
                    @foreach ($education as $edu)
                        <li style="margin-bottom: 20px;">
                            <div style="font-weight: bold;">{{ $edu->university }}</div>
                            <div style="color: #888;">Bachelor of {{ $edu->bachelor }}</div>
                            <div style="color: #888;">{{ $edu->start_year }} - {{ $edu->end_year }}</div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <!-- Certifications -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Certifications</h3>
                <ul style="list-style: none; padding: 0;">
                    @foreach ($award as $award)
                        <li style="margin-bottom: 20px;">
                            <div style="font-weight: bold;">{{ $award->name }}</div>
                            <div style="color: #888;">from: {{ $award->company }}</div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <!-- Languages -->
            <section style="margin-bottom: 30px;">
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Languages</h3>
                <ul style="list-style: none; padding: 0;">
                    @foreach ($language as $lang)
                        <li style="margin-bottom: 10px;">{{ $lang->name }}</li>
                    @endforeach
                </ul>
            </section>

            <!-- Interests -->
            <section>
                <h3 style="font-size: 1.5rem; text-transform: uppercase; margin-bottom: 20px;">Interests</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 10px;">Climbing</li>
                    <li style="margin-bottom: 10px;">Snowboarding</li>
                    <li style="margin-bottom: 10px;">Photography</li>
                    <li>Travelling</li>
                </ul>
            </section>
        </div>

        <div style="text-align: center; padding: 20px;">
            <ul style="list-style: none;" class="list-inline mb-0">
                <li class="list-inline-item me-3">
                    <a style="text-decoration: none; color: #888;" href="https://github.com/Yared11000010" target="_blank">
                        <i style="font-size: 2rem;" class="fab fa-github-square"></i><br>
                        github.com/Yared11000010
                    </a>
                </li>
                <li class="list-inline-item me-3">
                    <a style="text-decoration: none; color: #888;" href="https://www.linkedin.com/in/yared-ayele" target="_blank">
                        <i style="font-size: 2rem;" class="fab fa-linkedin"></i><br>
                        linkedin.com/in/yared-ayele
                    </a>
                </li>
                <li class="list-inline-item">
                    <a style="text-decoration: none; color: #888;" href="https://twitter.com" target="_blank">
                        <i style="font-size: 2rem;" class="fab fa-twitter-square"></i><br>
                        @twittername
                    </a>
                </li>
            </ul>
        </div>
    </article>
</div>

@endsection
