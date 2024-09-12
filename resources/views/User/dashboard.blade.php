@extends('admin_layouts.maindashboard')
@section('dashboard')
<style>
    .element.style {
        background-color: white !important;
    }
</style>
  <div class="pagetitle">
     <nav class="bg-white shadow-sm">
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item active">Dashboard</li>
        </ol>
     </nav>
  </div>
  <section class="section dashboard">
     <div class="row">
        <div class="col-lg-12">
           <div class="row">
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Resume</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-file-earmark-person-fill"></i></div>
                          <div class="ps-3">
                             <h6>{{ $resume }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Skills</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                          <div class="ps-3">
                             <h6>{{ $skill }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Working Expierence</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-person-workspace"></i></div>
                          <div class="ps-3">
                             <h6>{{ $work_exp }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Languages</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-translate"></i></div>
                          <div class="ps-3">
                             <h6>{{ $language }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Projects</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                          <div class="ps-3">
                             <h6>{{ $project }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Socail Media</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                          <div class="ps-3">
                             <h6>{{ $social_media }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Awards</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-award"></i></div>
                          <div class="ps-3">
                             <h6>{{ $award }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Education</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-backpack4-fill"></i></div>
                          <div class="ps-3">
                             <h6>{{ $education }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Services</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                          <div class="ps-3">
                             <h6>{{ $service }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="card info-card sales-card">
                    <div class="card-body">
                       <h5 class="card-title">Blogs</h5>
                       <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                          <div class="ps-3">
                             <h6>{{ $blog }}</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>

           </div>
        </div>
     </div>
  </section>
@endsection
