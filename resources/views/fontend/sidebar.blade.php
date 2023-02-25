<header class="header text-center">	    
    <div class="force-overflow">
        <nav class="navbar navbar-expand-lg navbar-light" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class=" shadow-lg border-2 profile-image mb-3 rounded-circle mx-auto" src="{{asset('fontend/assets/images/profile.png')}}" alt="image" >			
                    <h3 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Yared Ayele Debela</a></h3>
        
                    <div class="bio mb-3">Hi, my name is Simon Doe and I'm a senior software engineer. Welcome to my personal website!</div><!--//bio-->
                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <hr> 
                </div><!--//profile-section-->
                
                <ul class="navbar-nav flex-column text-start">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('fondend_portfolio') }}"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('myportfolio') }}"><i class="fas fa-laptop-code fa-fw me-2"></i>Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resume') }}"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cogs fa-fw me-2"></i>More Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="project.html">Project Page</a></li>
                            <li><a class="dropdown-item" href="blog-home.html">Blog Home 1</a></li>
                            <li><a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                        </ul>
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
