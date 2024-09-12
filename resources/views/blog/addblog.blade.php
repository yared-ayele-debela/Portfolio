@extends('admin_layouts.maindashboard')
@section('dashboard')
<div class="content-wrapper text-sm" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3 mt-3 ">
          <div class="col-sm-6">
            <h1>blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">blog Managements</a></li>
              <li class="breadcrumb-item active">Add blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

            <!-- general form elements disabled -->
            <div class="card   bg-white">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href=""><i class="fa fa-plus mr-2"></i>Add blog</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('blogs.index') }}"><i class="fa fa-list mr-2"></i>All blogs</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="title">Blog Name</label>
                        <input type="text"
                        class="form-control form-control-blog border"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="blog title">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                    </div>
                  </div>
                        <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                      @error('description')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="image" class="form-control border">
                        </div>
                        @error('image')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  <div class="form-group footer">
                    <button type="submit" class="btn bg-primary text-white">Add Blog</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

          </div>

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
