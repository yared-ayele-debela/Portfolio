@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="pagetitle pt-4">
  <nav>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Socail_media</li>
     </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
     <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">All Socail_media Data</h5>
              <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
               <li class="nav-item">
                 <a class="nav-link active"><i class="fa fa-list mr-2"></i>All Socail_media</a>
               </li>
                 <li class="nav-item border-none">
                 <a class="nav-link bg-light" href="{{ route('social_meda.create') }}"><i class=" fas fa-plus"></i>Add socail_media</a>
               </li>
              </ul>
              <table class="table datatable">
                 <thead>
                    <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Icon</th>
                       <th scope="col">Link</th>
                       <th scope="col">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @foreach ($allsocial_medias as $k => $socail_media)
                    <tr>
                       <td>{{ $socail_media->id}}</td>
                       <td>{{ $socail_media->name }}</td>
                       <td>
                        <img src="{{ asset('/storage/icon/'.$socail_media['icon']) }}" style="width: 40px; height:40px; box-shadow:1px 1px 2px 1px gray" alt="">
                       </td>
                       <td>{{ $socail_media->link }}</td>

                       <td class="d-flex">
                        <a href="{{ url('social_meda/'.$socail_media->id.'/edit') }}"  style="background-color:rgb(239, 239, 239) "  class="btn btn-sm"><i class="ri-ball-pen-fill"></i></a>
                        &nbsp;  <form action="{{ url('social_meda/'.$socail_media->id) }}" method="POST">
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

