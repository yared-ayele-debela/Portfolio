<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Pages / Register - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="{{asset('backend/img/favicon.png')}}" rel="icon">
      <link href="{{asset('backend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/quill.snow.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/quill.bubble.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/remixicon.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/simple-datatables.css')}}" rel="stylesheet">
      <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
   </head>
   <body>
      <main>
         <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4"> <a href="index.html" class="logo d-flex align-items-center w-auto"> <img src="{{asset('backend/img/logo.png')}}" alt=""> <span class="d-none d-lg-block">Portiflio</span> </a></div>
                        <div class="card mb-3">
                           <div class="card-body">
                              <div class="pt-4 pb-2">
                                 <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                 <p class="text-center small">Enter your personal details to create account</p>
                              </div>
                              <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                                @csrf
                                 <div class="col-12">
                                    <label for="name" class="form-label">Name</label> 
                                    <input type="text" name="name" class="form-control" id="name" required placeholder="your name">
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                 </div>
                                 <div class="col-12">
                                    <label for="email" class="form-label">Email</label> 
                                    <input type="email" name="email" class="form-control" id="email" required placeholder="your email">
                                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                 </div>
                                 <div class="col-12">
                                    <label for="password" class="form-label">Password</label> 
                                    <input type="password" name="password" class="form-control" id="password" required placeholder="yrour password">
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>
                                 <div class="col-12">
                                  <label for="password_confirmation" class="form-label">Confirm Password</label> 
                                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                  <div class="invalid-feedback">Please enter your Conformation password!</div>
                               </div>
                                 <div class="col-12">
                                    <div class="form-check">
                                       <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required> <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                       <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                    <div class="col-8">
                                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                      <div class="icheck-primary">
                                        <input type="checkbox" name="terms" id="terms">
                                        <label for="agreeTerms">
                                          {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class=" underline">'.__('Terms of Service').'</a>',
                                                                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline ">'.__('Privacy Policy').'</a>',
                                           ]) !!}
                                        </label>
                                      </div>
                                      @endif
                                    </div>
                                 </div>
                                 <div class="col-12"> 
                                  <button class="btn btn-primary w-100" type="submit">Create Account</button></div>
                                 <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
      <script src="{{asset('backend/js/apexcharts.min.js')}}"></script>
      <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('backend/js/chart.min.js')}}"></script>
      <script src="{{asset('backend/js/echarts.min.js')}}"></script>
      <script src="{{asset('backend/js/quill.min.js')}}"></script>
      <script src="{{asset('backend/js/simple-datatables.js')}}"></script>
      <script src="{{asset('backend/js/tinymce.min.js')}}"></script>
      <script src="{{asset('backend/js/validate.js')}}"></script>
      <script src="{{asset('backend/js/main.js')}}"></script> 
   </body>
</html>