@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Users Data</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Users Data</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>All Users</a>
               </li>
                 
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">Num</th>
                       <th scope="col">Image</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Status</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($users as $k => $users)
                    <tr>
                       <td>{{ $k++ }}</td>
                       <td>
                        <img src="{{ asset('/storage/user/'.$users->cover_image) }}" class="img-responsive" style="max-height: 50px; max-width: 50px;" alt="" srcset="">
                       </td>
                       <td>{{ $users->name }}</td>
                       <td>{{ $users->email }}</td>
                       <td>
                        @if($users->usertype=='Admin')
                           <a href=""><span style="border-radius: 0.2rem" class=" bg-success text-white pl-2 pr-2   active-btn">{{ $users->usertype }}</span></a>
                            @elseif ($users->usertype=='Super Admin')
                           <a href=""><span style="border-radius: 0.2rem; padding-left:3px;padding-right:3px" class=" bg-warning text-white pl-4 pr-4   active-btn">{{ $users->usertype }}</span></a>
                            @elseif ($users->usertype=='User')
                           <a href=""><span style="border-radius: 0.2rem; padding-left:3px; padding-right:3px;" class=" bg-primary text-white pl-2 pr-2   active-btn">{{ $users->usertype }}</span></a>
                        @endif
                       </td>
                       <td>
                     @if ($users->status==0)
                     <a href="{{ url('active/'.$users->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger text-white    active-btn">Inactive</span></a>
                     @elseif ($users->status==1)
                     <a href="{{ url('inactive/'.$users->id) }}"><span style="border-radius: 0.2rem;padding-left:5px;padding-right:5px" class=" bg-success text-white  active-btn">Active</span></a>
                     @endif
                      </td>
                       <td>
                        <a href="{{ url('user/'.$users->id.'/edit') }}" class=" btn btn-warning btn-sm">Edit</a>
                        @if(($users->id==7) && ($users->email=="yared@gmail.com"))
                        @else
                        <a href="{{ url('user/'.$users->id) }}" class="btn btn-danger btn-sm" id="delete">Delete</a>
                        @endif
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

