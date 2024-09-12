<header class="header text-center">
    <div class="force-overflow">
        <nav class="navbar navbar-expand-lg navbar-light" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class=" shadow-lg border-2 profile-image mb-3 rounded-circle mx-auto" style="height:160px;" src="{{ asset('/storage/resume/'.$resume->image) }}" alt="image" >
                           <p style="color: rgb(248, 248, 248);"><b>{{ $resume->fullname }}</b></p>
                    <div class="bio mb-3" style="color:rgb(236, 233, 233)">Hi, {{ $resume->about_me }}</div><!--//bio-->
                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/yared-ayele-debela" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/Yared11000010" target="_blank"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://stackoverflow.com" target="_blank"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://codepen.io/Yared-Ayele" target="_blank"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <hr>
                </div><!--//profile-section-->

                <ul class="navbar-nav flex-column text-start">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active':'' }}" href="{{ route('myportfolio') }}"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('portfolio') ? 'active':'' }}" href="{{ route('fondend_portfolio') }}"><i class="fas fa-laptop-code fa-fw me-2"></i>Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('service') ? 'active':'' }}" href="{{ route('service') }}"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('resume') ? 'active':'' }}" href="{{ route('resume') }}"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active':'' }}" href="{{ route('blog') }}"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active':'' }}" href="{{ route('contact') }}"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cogs fa-fw me-2"></i>More Pages
                        </a>
                    </li>
                </ul>
                <div class="my-2">
                    <a class="btn btn-primary" href="{{ route('contact') }}" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
                </div>
                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust me-1"></i>Dark Mode</h4>
                    <input class="toggle" id="darkmode" type="checkbox">
                    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
                </div><!--//dark-mode-toggle-->
            </div>
        </nav>
    </div><!--//force-overflow-->
</header>
