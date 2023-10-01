@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Resume</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Resume Data</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active"><i class="fa fa-list mr-2"></i>All Resume</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('resumes.create') }}"><i class=" fas fa-plus"></i>Add Resume</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Full Name</th>
                       <td scope="col">Image</td>
                       <th scope="col">Mobile</th>
                       <th scope="col">Email</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($allresumes as $k => $resumes)
                    <tr>
                       <td>{{ $resumes->id}}</td>
                       <td>{{ $resumes->fullname }}</td>
                       <td>
                        <img src="{{ asset('/storage/resume/'.$resumes['image']) }}" style="width: 40px; height:40px; box-shadow:1px 1px 2px 1px gray" alt="">
                       </td>
                       <td>{{ $resumes->mobile }}</td>
                       <td>{{ $resumes->email }}</td>

                       <td class="d-flex">
                        <a href="{{ url('resumes/'.$resumes->id.'/edit') }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                      &nbsp;  <form action="{{ url('resumes/'.$resumes->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class=" btn" style="background: rgb(50, 49, 49);color:white;">
                          </form>

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

