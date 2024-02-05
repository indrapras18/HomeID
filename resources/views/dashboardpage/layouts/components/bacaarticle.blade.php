<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perumahan Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/feather/feather.css') !!}">
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/ti-icons/css/themify-icons.css') !!}">
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/css/vendor.bundle.base.css') !!}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/css/vertical-layout-light/style.css') !!}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{!! asset('frontend_dashboard/images/favicon.png') !!}"/>  
  <link rel="shortcut icon" href="{!! asset('frontend_dashboard/images/favicon.png') !!}"/>  
 
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"><br>
        <a class="navbar-brand brand-logo mr-8" href="/index"><img src="{!! asset('frontend_dashboard/images/artikel.png') !!}"style="width:180px;height:60px;" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/index"><img src="{!!  asset('frontend_dashboard/images/icon.png') !!}" alt="logo"/></a>  
      
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"style="background-color:#4B49AC;" >
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"style="color:white"></i>
                </span>
              </div>
              <input type="text"class="form-control"style="color:white" id="navbar-search-input"  placeholder="Search now"style="color:white;" aria-label="search" aria-describedby="search">
            </div>
           
          </li>
          <div class="judul">
           
        </div>
        </ul>
       
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown"> 
            </a>
            <a class="nav-link" href="#">
            </a>
          </li>
        </ul>
        
      </div>
    </nav>
    <!-- partial:frontend_dashboard/partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:frontend_dashboard/partials/_settings-panel.html -->
     
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                
              
                </div>
              </form>
            </div>
            
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->

      <!-- partial:frontend_dashboard/partials/_sidebar.html -->
      <nav class=" col-3 sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <a class="nav-link" style="background-color:#4B49AC;"data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           
            <span class="menu-title"style="color:white;">Apa itu Home Artikel?</span>
           
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"style="color:white;">Home Artikel merupakan halaman yang digunakan seseorang 
                untuk mencari informasi secara mendalam terkait aplikasi maupun rumah yang ada pada 
                aplikasi ini</a></li>
            </ul>
          </div>
          </li>
          <li class="nav-item"style="background-color:#4B49AC;">
              <a class="nav-link" href="{!! asset('home') !!}">
   
                <span class="menu-title"style="color:white;">Sub Artikel</span>
              </a>
          </li>
         
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          <li class="nav-item">
            
            <div class="collapse" id="ui-basic">
              
            </div>
          </li>

        </ul>
      </nav>    
      <!-- partial -->
      <div class=" main-panel">
        <div class=" content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card w-100">
                <div class="card-body" style="height: 500px;witdh:100%;">
                    <div class="card" style="width: 100%;">
                        <center><img src="{{ asset('foto article/'.$data->foto_article) }}" class="card-img-top" alt="..." style="width: 400px; height:400px;"></center>
                        <p>{!! $data->isi_article !!}</p>
                        </div>
                      </div>
                </div>
                </div>
              </div>
            </div>    
        </div>
    </div>
</div>
                 

                  
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <script src="{!! asset('frontend_dashboard/vendors/js/vendor.bundle.base.js') !!}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{!! asset('frontend_dashboard/js/off-canvas.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/hoverable-collapse.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/template.js') !!}"></script>

  <script src="{!! asset('frontend_dashboard/js/todolist.js') !!}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>