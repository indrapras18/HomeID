
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perumahan Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/feather/feather.css') !!}">
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/ti-icons/css/themify-icons.css') !!}">
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/vendors/css/vendor.bundle.base.css') !!}">
  <link rel="stylesheet" href="{!! asset('frontend_dashboard/css/vertical-layout-light/style.css') !!}">
  <link rel="shortcut icon" href="{!! asset('frontend_dashboard/images/favicon.png') !!}"/>
  <link rel="shortcut icon" href="{!! asset('frontend_dashboard/images/favicon.png') !!}"/>

</head>

<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/index"><img src="frontend_dashboard/images/home.png"style="width:150px;height:40px;" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/index"><img src="frontend_dashboard/images/icon.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{!! asset('frontend_dashboard/images/faces/face28.jpg') !!}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial:frontend_dashboard/partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:frontend_dashboard/partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="frontend_dashboard/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="frontend_dashboard/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="frontend_dashboard/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="frontend_dashboard/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="frontend_dashboard/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="frontend_dashboard/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->

      <!-- partial:frontend_dashboard/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">

          </li>

          <li class="nav-item">

          </li>
          <li class="nav-item">

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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data</h4>
                  <form action="/addrumah" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Tipe Rumah </label>
                        <input type="text" name="tipe_rumah" class="form-control @error('tipe_rumah') is-invalid @enderror"
                         id="" value="{{ old('tipe_rumah') }}"placeholder="Masukkan Tipe" autofocus>
                        @error('tipe_rumah')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror  
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Judul Rumah </label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                         id="" value="{{ old('judul') }}"placeholder="Masukkan Tipe" autofocus>
                        @error('judul')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror  
                      </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Harga Rumah </label>
                      <input type="number" name="harga_rumah" class="form-control @error('harga_rumah') is-invalid @enderror"
                       id="" value="{{ old('harga_rumah') }}"placeholder="Masukkan Harga" >
                      @error('harga_rumah')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                      <div class="form-group">
                        {{-- <label for="exampleFormControlFile1">Tampak Depan</label>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" name="foto_rumah1" class="custom-file-input @error('foto_rumah1') is-invalid @enderror" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" accept="image/*">{{ old('foto_rumah1') }}
                        
                          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                      </div>
                      @error('foto_rumah1')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror   --}}

                      <div class="form-group">

                        <label for="exampleFormControlFile1">Tampak Depan</label><br>
                        <input type="file" name="foto_rumah1" id=""><br>

                        <label for="exampleFormControlFile1">Tampak Dalam</label><br>
                        <input type="file" name="foto_rumah2" id=""><br>

                        <label for="exampleFormControlFile1">Tampak Belakang</label><br>
                        <input type="file" name="foto_rumah3" id=""><br>
                      {{-- <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" name="foto_rumah2" value="{{ old('foto_rumah2') }}" class="custom-file-input @error('foto_rumah2') is-invalid @enderror" id="inputGroupFile02" accept="image/*">
                         
                          <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                          
                        </div>
                        @error('foto_rumah2')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div> --}}

                      {{-- <div class="form-group">
                        <label for="exampleFormControlFile1">Tampak Belakang</label>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" name="foto_rumah3" value="{{ old('foto_rumah3') }}" class="custom-file-input @error('foto_rumah3') is-invalid @enderror" id="inputGroupFile02" accept="image/*">
                       
                          <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        @error('foto_rumah3')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div> --}}
                      
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas Bangunan </label>
                        <input type="text" name="luas_bangunan" class="form-control @error('luas_bangunan') is-invalid @enderror" id="" value="{{ old('luas_bangunan') }}"placeholder="masukkan  harga">
                        @error('luas_bangunan')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Luas Tanah </label>
                        <input type="text" name="luas_tanah" class="form-control @error('luas_tanah') is-invalid @enderror" id="" value="{{ old('luas_tanah') }}"placeholder="masukkan  harga">
                        @error('luas_tanah')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Total Kamar Mandi </label>
                        <input type="number" name="total_kamar_mandi" class="form-control @error('total_kamar_mandi') is-invalid @enderror" id="" value="{{ old('total_kamar_mandi') }}"placeholder="masukkan  harga">
                        @error('total_kamar_mandi')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Total Kamar </label>
                        <input type="number" name="total_kamar" class="form-control @error('total_kamar') is-invalid @enderror" id="" value="{{ old('total_kamar') }}"placeholder="masukkan  harga">
                        @error('total_kamar')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Garasi</label>
                        <input type="" name="total_garasi" class="form-control @error('total_garasi') is-invalid @enderror" id="" value="{{ old('total_garasi') }}"placeholder="masukkan  harga">
                        @error('total_garasi')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>

                      <div class="mb-3">
                        <label for="">Alamat</label>
                        <textarea class="form-control @error('alamat_rumah') is-invalid @enderror" name="alamat_rumah" placeholder="masukkan alamat" rows="4" >{{ old('alamat_rumah') }}</textarea>
                        @error('alamat_rumah')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>
                      <label for="recipient-name" class="col-form-label @error('id') is-invalid @enderror ">Nama Penjual</label>
                      <select name="id" class="custom-select @error('id') is-invalid @enderror" >
                        <option value>-Pilih Nama- </option>
                        @foreach ($name as $row)
                            <option value="{{ $row->id }}" {{ old('id') == $row->id ? 'selected' : null }}>{{ $row->username }}</option>
                        @endforeach
                      </select>
                      @error('id')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>

                      <div>
                        <label for="">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="informasi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                      </div>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                    <button class="btn btn-light"><a style="color:black; text-decoration:none;" href="/tbrumah">Batal</a></button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
<script>
    CKEDITOR.replace( 'informasi' );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{!! asset('frontend_dashboard/vendors/js/vendor.bundle.base.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/off-canvas.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/hoverable-collapse.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/template.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/settings.js') !!}"></script>
  <script src="{!! asset('frontend_dashboard/js/todolist.js') !!}"></script>
</body>

</html>
