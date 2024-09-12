<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard Yared Ayele Debela</title>
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
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   </head>
   <body>

    @include('admin_layouts.header')
    @include('admin_layouts.leftsidebar')
    <main id="main" class="main" style="background-color:rgb(255, 255, 255)">
    @yield('dashboard')
    </main>
    @include('admin_layouts.footer')
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
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
                $('#summernote').summernote({
                    height: 400
                });
            </script>
            <script type="text/javascript">
            $(function(){
              $(document).on('click','#delete',function(e){
                e.preventDefault();
                var link=$(this).attr("href");
                Swal.fire({
                       title: 'Are you sure?',
                       text: "You won't be able to Delete this!",
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Yes, delete it!'
                       }).then((result) => {
                         if (result.isConfirmed) {
                            window.location.href=link
                          Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                       }
                      })
              });
            });

               </script>

   </body>
</html>
