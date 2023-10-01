@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Education</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Education Data</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active"><i class="fa fa-list mr-2"></i>All Education</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('education.create') }}"><i class=" fas fa-plus"></i>Add Education</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">ID</th>
                       <th scope="col">University</th>
                       <th scope="col">Bachelor</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($alleducations as $k => $education)
                    <tr>
                       <td>{{ $education->id}}</td>
                       <td>{{ $education->university }}</td>
                       <td>{{ $education->bachelor }}</td>
                       <td>
                        <a href="{{ url('education/'.$education->id.'/edit') }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                        <a href="{{ url('education/'.$education->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn  btn-sm" id="delete"><i class=" ri-delete-bin-6-fill"></i></a>
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

