<aside id="sidebar" class=" colored sidebar " >
  <ul class="sidebar-nav" id="sidebar-nav">
     <li class="nav-item"> <a class="nav-link disabled" href=""> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
     <li class="nav-item pt-4 menu-open">
        <a class="{{ request()->is('userr/allusers')||('user/add')? 'nav-link':'' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-bounding-box  "></i><span>User Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="components-nav" class=" nav-content collapse show " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('addUser') }}" class="{{ request()->is('user/add')? 'active':'' }}"> <i class=" bi bi-circle active "></i><span>Add User</span> </a></li>
           <li> <a href="{{ route('allUsers') }} " class="{{ request()->is('userr/allusers')? 'active':'' }}"> <i class="bi bi-circle"></i><span>Lists Of Users</span></a></li>
        </ul>
     </li>
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>My Project</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li> <a href="{{ route('portifolio') }}"> <i class="bi bi-circle"></i><span>Add Project</span> </a></li>
           <li> <a href="forms-layouts.html"> <i class="bi bi-circle"></i><span>Project Lists</span> </a></li>
        </ul>
     </li>
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>My Skill</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>Add Skill</span> </a></li>
           <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Skill Lists</span> </a></li>
        </ul>
     </li>
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>My Education Level</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Add Education Certificate</span> </a></li>
           <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>Lists of Certificate</span> </a></li>
        </ul>
     </li>
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>My SocailMedia</span><i class="bi bi-chevron-down ms-auto"></i> </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Bootstrap Icons</span> </a></li>
           <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Remix Icons</span> </a></li>
           <li> <a href="icons-boxicons.html"> <i class="bi bi-circle"></i><span>Boxicons</span> </a></li>
        </ul>
     </li>
     <li class="nav-heading">Pages</li>
     <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>Portfolio Setting</span> </a></li>
     <li class="nav-item "> <a class="nav-link " href="{{ route('login') }}"> <i class="bi bi-lock "></i> <span>Lock Screen</span> </a></li>
 
    
  </ul>
</aside>