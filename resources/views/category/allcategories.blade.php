@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">categories</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All category Data</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>All category</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('create_category') }}"><i class=" fas fa-plus"></i>Add User</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">Id</th>
                       <th scope="col">Name</th>
                       <th scope="col">Description</th>
                       <th scope="col">status</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($category as $k => $category)   
                    <tr>
                       <td>{{ $category->id}}</td>
                       <td>{{ $category->name }}</td>
                       <td>{{ $category->description }}</td>
                       <td>
                     @if ($category->status==0)
                     <a href="{{ url('active/category/'.$category->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger text-white    active-btn">Inactive</span></a>
                     @elseif ($category->status==1)
                     <a href="{{ url('inactive/category/'.$category->id) }}"><span style="border-radius: 0.2rem;padding-left:5px;padding-right:5px" class=" bg-success text-white  active-btn">Active</span></a>                        
                     @endif
                      </td>
                       <td>
                        <a href="{{ url('categories/'.$category->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                        <a href="{{ url('category/'.$category->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn  btn-sm" id="delete"><i class=" ri-delete-bin-6-fill"></i></a>
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

