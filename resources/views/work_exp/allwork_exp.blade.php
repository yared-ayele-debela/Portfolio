@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Working Expirence </li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Expirence</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active"><i class="fa fa-list mr-2"></i>All Expirence</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('work_experience.create') }}"><i class=" fas fa-plus"></i>Add Expirence</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Title</th>
                       <th scope="col">Description</th>
                       <th scope="col">Start Date</th>
                       <th scope="col">End Date</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($allwork_exps as $k => $work_exp)
                    <tr>
                       <td>{{ $work_exp->id}}</td>
                       <td>{{ $work_exp->title }}</td>
                       <td>{{ $work_exp->description }}</td>
                       <td>{{ $work_exp->start_date }}</td>
                       <td>{{ $work_exp->end_date }}</td>

                       <td class="d-flex">
                        <a href="{{ url('work_experience/'.$work_exp->id.'/edit') }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                        &nbsp;  <form action="{{ url('work_experience/'.$work_exp->id) }}" method="POST">
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

