<!-- @extends('admin.layouts.app') 
@section('content') -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
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
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/beranda">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/user_profile"></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <div class="d-flex flex-wrap align-items-center justify-content-between">
               <div class="d-flex flex-wrap align-items-center">
                  <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                     <img src="{{ asset('uploads/'.$user->foto) }}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                     </div>
                  <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                     <h4 class="me-2 h4"> {{ $user->firstname.' '.$user->lasttname}}</h4>
                     <span> - {{ $user->email}}</span>
                  </div>
               </div>
               <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active show" data-bs-toggle="tab" href="#profile-detail" role="tab" aria-selected="false">Profil Detail</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#profile-update" role="tab" aria-selected="false">Perbarui Profil</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-lg-12">
   <div class="profile-content tab-content">
      @include('sweetalert::alert')
      @if (session('Success'))
         <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
         </svg>
         <div class="alert alert-success d-flex  alert-dismissible fade show" role="alert">
         <svg class="bi flex-shrink-0 me-2" width="24" height="24">
            <use xlink:href="#exclamation-triangle-fill" />
         </svg>
         {{ session('Success') }}
         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      <div id="profile-detail" class="tab-pane fade active show">
         <div class="card">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Profil Detail</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="mt-2">
                  <h6 class="mb-1">NIK:</h6>
                  <p>{{ $user->nik}}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Nama Lengkap:</h6>
                  <p>{{ $user->firstname . ' ' .  $user->lasttname}}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Username:</h6>
                  <p>{{ $user->name}}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Email:</h6>
                  <p>{{ $user->email }}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">No Handphone:</h6>
                  <p>{{ $user->no_handphone}}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Jenis Kelamin:</h6>
                  <p>{{ $user->jenkel }}</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Alamat:</h6>
                  <p>@if ($user->alamat ) {{$user->alamat}} @else Silahkan Perbaharui @endif</p>
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Provinsi:</h6>
                  @foreach ($user_profile as $v)
                     <p>@if ($user->province_id) {{$v->province->name}} @else Silahkan Perbaharui @endif</p>
                  @endforeach
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Kota:</h6>
                  @foreach ($user_profile as $v) 
                    <p>@if ($user->regency_id) {{ $v->regencies->name}} @else Silahkan Perbaharui @endif</p>
                 @endforeach
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Kecamatan:</h6>
                  @foreach ( $user_profile as $v )
                     <p>@if ($user->village_id) {{ $v->village->name}} @else Silahkan Perbaharui @endif</p>
                  @endforeach
               </div>
               <div class="mt-2">
                  <h6 class="mb-1">Kelurahan:</h6>
                  @foreach ( $user_profile as $v )
                     <p>@if ($user->district_id) {{ $v->district->name}} @else Silahkan Perbaharui @endif</p>
                  @endforeach
               </div>
            </div>
      </div>
   </div>

   <div id="profile-update" class="tab-pane fade">
      <form method="POST" action="{{ route('user_profile.update', $user->id) }}" enctype="multipart/form-data">
         @csrf 
         <input type="hidden" name="_method" value="PUT"> 
         <div class="row">
            
               <div class="col-xl-4 col-lg-4">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Perbaharui Profil</h4>
                        </div>
                     </div>
                     <div class="card-body">
                           <div class="form-group">
                              <div class="profile-img-edit position-relative">
                                 <img src="{{ asset('uploads/'.$user->foto) }}" alt="profile-pic" class="theme-color-default-img profile-pic rounded avatar-100" id="preview">
                                 
                              </div></br>
                              
                              <input type="file" class="form-control" name="foto" accept="image/*" id="inputGambar_profile" >

                              <div class="img-extension mt-3">
                              <div class="d-inline-block align-items-center">
                                 <span>Only</span>
                                 <a href="javascript:void();">.jpg</a>
                                 <a href="javascript:void();">.png</a>
                                 <a href="javascript:void();">.jpeg</a>
                                 <span>allowed</span>
                              </div>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Informasi Profil</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="nik">NIK</label>:</label>
                                    <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" >
                                    
                                    @if ($errors->has('nik'))
                                       <div class="text-danger">
                                          {{ $errors->first('nik') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="firstname">Nama Depan</label>:</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nama Depan" >
                                    
                                    @if ($errors->has('firstname'))
                                       <div class="text-danger">
                                          {{ $errors->first('firstname') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="form-label" for="lasttname">Nama Belakang:</label>
                                    <input type="text" class="form-control" id="lasttname" name="lasttname" placeholder="Nama Belakang">
                                    @if ($errors->has('lastname'))
                                       <div class="text-danger">
                                          {{ $errors->first('lastname') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="form-label" for="name">Username:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    @if ($errors->has('name'))
                                       <div class="text-danger">
                                          {{ $errors->first('name') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-sm-4">
                                    <label class="form-label">Jenis Kelamin:</label>
                                    <select name="jenkel" class="selectpicker form-control" data-style="py-0">
                                       <option value="Laki-Laki">Laki-Laki</option>
                                       <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @if ($errors->has('jenkel'))
                                       <div class="text-danger">
                                          {{ $errors->first('jenkel') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="no_handphone">No Handphone:</label>
                                    <input type="number" class="form-control" name="no_handphone" id="no_handphone" placeholder="Mobile Number">
                                    @if ($errors->has('no_handphone'))
                                       <div class="text-danger">
                                          {{ $errors->first('no_handphone') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    @if ($errors->has('email'))
                                       <div class="text-danger">
                                          {{ $errors->first('email') }}
                                       </div>
                                    @endif
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label class="form-label" for="alamat">Alamat:</label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                                 </div>
                                 
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="province_id">Provinsi:</label>
                                    <select name="province_id" id="province_id" class="selectpicker form-control" data-style="py-0">
                                       <option>Pilih Provinsi...</option>
                                       @foreach ( $provinces as $provinsi)
                                          <option value="{{ $provinsi->id}}">{{ $provinsi->name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="regency_id">Kota:</label>
                                    <select name="regency_id" id="regency_id" class="selectpicker form-control" data-style="py-0">
                                    
                                 </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="village_id">Kecamatan:</label>
                                    <select name="village_id" id="village_id" class="selectpicker form-control" data-style="py-0">
                                    
                                 </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="district_id">Kelurahan:</label>
                                    <select name="district_id" id="district_id" class="selectpicker form-control" data-style="py-0">
                                    
                                 </select>
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="form-label" for="rt">RT:</label>
                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="form-label" for="kode_pos">RW:</label>
                                    <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="form-label" for="kode_pos">Kode Pos:</label>
                                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                                 </div>
                              </div>
                              <hr>
                              <h5 class="mb-3">Keamanan</h5>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="password_confirmation">Konfirmasi Password:</label>
                                    <input type="password" class="form-control" id="password_confirmation" placeholder="Repeat Password ">
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Ubah data</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script>
   $(function () {
      $('#province_id').on('change', function(){
         let province_id = $('#province_id').val();
         
         if (province_id) {
            $.ajax({
               url: "{{ route('getKota')}}",
               type: "POST",
               data : { province_id:province_id },
               cache: false,
               success:function($msg){
                  $('#regency_id').html($msg);
                  $('#village_id').html('');
                  $('#district_id').html('');
                },
               error: function (data) {
                  console.log('error:', data);
               }
            })
         }
      })
      $('#regency_id').on('change', function(){
         let regency_id = $('#regency_id').val();
         if (regency_id) {
            $.ajax({
               url: "{{ route('getKecamatan')}}",
               type: "POST",
               data : { regency_id:regency_id },
               cache: false,
               success:function($msg){
                  $('#village_id').html($msg);
                  $('#district_id').html('');
               },
               error: function (data) {
                  console.log('error:', data);
               }
            })
         }
      })
      $('#village_id').on('change', function(){
         let village_id = $('#village_id').val();
         if (village_id) {
            $.ajax({
               url: "{{ route('getKelurahan')}}",
               type: "POST",
               data : { village_id:village_id },
               cache: false,
               success:function($msg){
                  $('#district_id').html($msg);
               },
               error: function (data) {
                  console.log('error:', data);
               }
            })
         }
      })
      $('#inputGambar_profile').on('change',function(){
        //get the file name
          var fileName = $(this).val();
          var panjangnamafile = fileName.length;
          
          if (panjangnamafile > 22){
            hasilpotong = fileName.substring(0, 22);
            $(this).next('.custom-file-label').html(hasilpotong);
          }else{
            $(this).next('.custom-file-label').html(fileName);
          }
      })
      function filePreview(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               $('#preview').attr('src',e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
         }
      }
      $(function(){
         $("#inputGambar_profile").change(function () {
            filePreview(this);
         });
      });
   });
</script>
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<!-- @endsection -->