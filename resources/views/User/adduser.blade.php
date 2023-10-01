{{-- @extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <h1>User Registration Form</h1>
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add User</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">User Registartion Form </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Add User</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('allUsers') }}"><i class=" fas fa-plus"></i>All Users</a>
                  </li>
                 </ul>
                 <form method="POST" class="row gap-1" action="{{ route('storeuser') }}" enctype="multipart/form-data">
                  @csrf
                 <div class="row">
                  <div class="form-group col-lg-4">
                     <label for="username" class="form-label">Username</label>
                     <div class="col-sm-10">
                      <input type="text" name="username" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="name" class="form-label">First Name</label>
                     <div class="col-sm-10">
                      <input type="text" name="name" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="last_name" class="form-labelform-label">Last Name</label>
                     <div class="col-sm-10">
                      <input type="text" name="last_name" class="form-control"></div>
                  </div>

                 </div>
                 <div class="row">
                  <div class="form-group col-lg-4">
                     <label class="form-label">Gender</label>
                     <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="gender">
                           <option class="selected">--Select--</option>
                           <option >Male</option>
                           <option >Female</option>
                           <option >Other</option>
                        </select>
                     </div>
                   </div>
                  <div class="form-group col-lg-4">
                     <label for="email" class="form-labelform-label">Email</label>
                     <div class="col-sm-10">
                      <input type="email" name="email" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="bio" class="form-labelform-label">Bio</label>
                     <div class="col-sm-10">
                      <input type="text" name="bio" class="form-control"></div>
                  </div>
                 </div>
                 <div class="row">
                  <div class="form-group col-lg-4">
                     <label for="address" class="form-labelform-label">Address</label>
                     <div class="col-sm-10">
                      <input type="text" name="address" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="company" class="form-labelform-label">Company</label>
                     <div class="col-sm-10">
                      <input type="text" name="company" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="job" class="form-labelform-label">Job</label>
                     <div class="col-sm-10">
                      <input type="text" name="job" class="form-control"></div>
                  </div>
                 </div>
                 <div class="row">
                  <div class="form-group col-lg-4">
                     <label for="phone" class="form-labelform-label">Phone</label>
                     <div class="col-sm-10">
                      <input type="phone" name="phone" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="github" class="form-labelform-label">Github</label>
                     <div class="col-sm-10">
                      <input type="text" name="github" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="linkedin" class="form-labelform-label">Linkedin</label>
                     <div class="col-sm-10">
                      <input type="text" name="linkedin" class="form-control"></div>
                  </div>
                 </div>
                 <div class="row">
                  <div class="form-group col-lg-4">
                     <label for="facebook" class="form-labelform-label">Facebook</label>
                     <div class="col-sm-10">
                      <input type="text" name="facebook" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="twitter" class="form-labelform-label">Twitter</label>
                     <div class="col-sm-10">
                      <input type="text" name="twitter" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="profile_image" class="form-labelform-label">Upload Profile Image</label>
                     <div class="col-sm-10">
                      <input type="file" name="profile_image" class="form-control"></div>
                  </div>
                  <div class="form-group col-lg-4">
                     <label for="cover_image" class="form-labelform-label">Cover Image</label>
                     <div class="col-sm-10">
                      <input type="file" name="cover_image" class="form-control"></div>
                  </div>
                  <div class="row mb-3 mt-3">
                     <label class="form-labelform-label"></label>
                        <div class="col-sm-10 ">
                        <button type="submit" class="btn btn-primary">Save User</button>
                        </div>
                  </div>
                 </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection --}}
