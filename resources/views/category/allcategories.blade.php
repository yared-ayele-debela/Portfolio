@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">What i can do</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>All what i can do</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('create_category') }}"><i class=" fas fa-plus"></i>Add What i can do</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">ID</th>
                       <td scope="col">Image</td>
                       <th scope="col">Name</th>
                       <th scope="col">Description</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($category as $k => $category)
                    <tr>
                       <td>{{ $category->id}}</td>
                       <td><img src="{{ asset('storage/category/'.$category->cover_image) }}" style="width: 40px; height:40px;" alt=""></td>
                       <td>{{ $category->name }}</td>
                       <td>{{ $category->description }}</td>
                       <td>
                        <a href="{{ url('category/categories/'.$category->id) }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
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

