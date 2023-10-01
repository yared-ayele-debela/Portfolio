@extends('admin_layouts.maindashboard')

@section('dashboard')

<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Projects</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Projects</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>All Projects</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ url('project/create') }}"><i class=" fas fa-plus"></i>Add Project</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">Id</th>
                       <th scope="col">Image</th>
                       <th scope="col">Title</th>
                       <th scope="col">Start Date </th>
                       <th scope="col">End Date</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($projects as $k => $project)
                    <tr>
                       <td>{{ $project->id}}</td>
                       <td><img src="{{ asset('/storage/projects/'.$project->cover_image) }}" style="width: 40px; height:40px;" alt=""></td>
                       <td>{{ $project->title }}</td>
                       <td>{{ $project->start_date }}</td>
                       <td>{{ $project->end_date }}</td>
                       <td>
                        <a href="{{ url('project/edit/'.$project->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                        <a href="{{ url('project/'.$project->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn  btn-sm" id="delete"><i class=" ri-delete-bin-6-fill"></i></a>

                       </td>
                  @endforeach
                 </tbody>
              </table>

           </div>
        </div>
     </div>
  </div>
</section>
@endsection

