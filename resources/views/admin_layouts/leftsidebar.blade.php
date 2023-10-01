<aside id="sidebar" class=" colored sidebar " >
  <ul class="sidebar-nav" id="sidebar-nav">
     <li class="nav-item"> <a class="nav-link disabled" href=""> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>

     <li class="{{ request()->is('userr/allusers')?'nav-item active':'' }} {{ request()->is('user/add')?'nav-item active':''}}">
        <a class="nav-link" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-bounding-box  "></i><span>User Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="user-nav" class="nav-content collapse {{ request()->is('userr/allusers')?'show':'' }} {{ request()->is('user/add')?'show':'' }}" data-bs-parent="#sidebar-nav">
           {{-- <li> <a href="{{ route('addUser') }}" class="{{ request()->is('user/add')? 'nav-link active':'' }}"> <i class=" bi bi-circle active "></i><span>Add User</span> </a></li> --}}
           <li> <a href="{{ route('allUsers') }} " class="{{ request()->is('userr/allusers')? 'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Lists Of Users</span></a></li>
        </ul>
     </li>
     <li class="{{ request()->is('category/create')?'nav-item':'' }} {{ request()->is('category')?'nav-item':'' }}">
      <a class="nav-link" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-bounding-box  "></i><span>what can i do </span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="category-nav" class="nav-content collapse {{ request()->is('category/create')?'show':'' }} {{ request()->is('category')?'show':'' }} " data-bs-parent="#sidebar-nav">
         <li> <a href="{{ route('create_category') }}" class="{{ request()->is('category/create')? 'nav-link active':'' }}"> <i class=" bi bi-circle active "></i><span>Add what can i do</span> </a></li>
         <li> <a href="{{ route('category') }} " class="{{ request()->is('category')? 'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Lists Of what can i do</span></a></li>
      </ul>
     </li>

     <li class="{{ request()->is('service/create')?'nav-item active':'' }} {{ request()->is('service/all')?'nav-item active':'' }}">
      <a class="nav-link" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-bounding-box  "></i><span>Services Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="service-nav" class="nav-content collapse {{ request()->is('service/create')?'show':'' }} {{ request()->is('service/all')?'show':'' }}" data-bs-parent="#sidebar-nav">
         <li> <a href="{{ route('create_service') }}" class="{{ request()->is('service/create')?'nav-link active':'' }}"> <i class=" bi bi-circle active "></i><span>Add Service</span> </a></li>
         <li> <a href="{{ route('allservice') }} " class="{{ request()->is('service/all')? 'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Lists Of Services</span></a></li>
      </ul>
     </li>

     <li class="{{ request()->is('skill/all')?'nav-item active':'' }} {{ request()->is('skill/create')?'nav-item active':'' }}">
      <a class="nav-link" data-bs-target="#skill-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My Skill</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="skill-nav" class="nav-content collapse {{ request()->is('skill/all')?'show':'' }} {{ request()->is('skill/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
         <li> <a href="{{ route('create_skill') }}" class="{{ request()->is('skill/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add Skill</span> </a></li>
         <li> <a href="{{ route('allskills') }}" class="{{ request()->is('skill/all')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Skill Lists</span> </a></li>
      </ul>
      </li>
      <li class="{{ request()->is('project/all')?'nav-item active':'' }} {{ request()->is('project/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#project-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My Project</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="project-nav" class="nav-content collapse {{ request()->is('project/all')?'show':'' }} {{ request()->is('project/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ url('project/create') }}" class="{{ request()->is('project/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add Project</span> </a></li>
           <li> <a href="{{ url('project/all') }}" class="{{ request()->is('project/all')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Project Lists</span> </a></li>
        </ul>
     </li>

     <li class="{{ request()->is('resumes')?'nav-item active':'' }} {{ request()->is('resumes/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#resumes-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My resume data</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="resumes-nav" class="nav-content collapse {{ request()->is('resumes')?'show':'' }} {{ request()->is('resumes/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('resumes.create') }}" class="{{ request()->is('resumes/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add resume data</span> </a></li>
           <li> <a href="{{ route('resumes.index') }}" class="{{ request()->is('resumes')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>All resume data</span> </a></li>
        </ul>
     </li>
     <li class="{{ request()->is('work_experience')?'nav-item active':'' }} {{ request()->is('work_experience/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#work_experience-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My working expirence</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="work_experience-nav" class="nav-content collapse {{ request()->is('work_experience')?'show':'' }} {{ request()->is('work_experience/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('work_experience.create') }}" class="{{ request()->is('work_experience/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add  working expirence</span> </a></li>
           <li> <a href="{{ route('work_experience.index') }}" class="{{ request()->is('work_experience')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span> Working expirence lists</span> </a></li>
        </ul>
     </li>

     <li class="{{ request()->is('social_meda')?'nav-item active':'' }} {{ request()->is('social_meda/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#social_meda-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My socail media links</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="social_meda-nav" class="nav-content collapse {{ request()->is('social_meda')?'show':'' }} {{ request()->is('social_meda/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('social_meda.create') }}" class="{{ request()->is('social_meda/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add socail media links</span> </a></li>
           <li> <a href="{{ route('social_meda.index') }}" class="{{ request()->is('social_meda')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>socail media link Lists</span> </a></li>
        </ul>
     </li>

     <li class="{{ request()->is('language')?'nav-item active':'' }} {{ request()->is('language/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#language-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Language</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="language-nav" class="nav-content collapse {{ request()->is('language')?'show':'' }} {{ request()->is('language/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('language.create') }}" class="{{ request()->is('language/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add language</span> </a></li>
           <li> <a href="{{ route('language.index') }}" class="{{ request()->is('language')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Language Lists</span> </a></li>
        </ul>
     </li>

     <li class="{{ request()->is('education')?'nav-item active':'' }} {{ request()->is('education/create')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#education-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Education Certificate</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="education-nav" class="nav-content collapse {{ request()->is('education')?'show':'' }} {{ request()->is('education/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('education.create') }}" class="{{ request()->is('education/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add education certificate</span> </a></li>
           <li> <a href="{{ route('education.index') }}" class="{{ request()->is('skill')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>education certificate lists</span> </a></li>
        </ul>
     </li>

     <li class="{{ request()->is('award')?'nav-item active':'' }} {{ request()->is('award/*')?'nav-item active':'' }}">
        <a class="nav-link" data-bs-target="#award-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Award</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="award-nav" class="nav-content collapse {{ request()->is('award')?'show':'' }} {{ request()->is('award/create')?'show':'' }} " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('award.create') }}" class="{{ request()->is('award/create')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Add award</span> </a></li>
           <li> <a href="{{ route('award.index') }}" class="{{ request()->is('award')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>award Lists</span> </a></li>
        </ul>
     </li>


  </ul>
</aside>
