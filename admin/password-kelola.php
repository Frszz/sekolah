<?php
    require_once "../config/config.php";
    if(isset($_SESSION['emailAdmin'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Bantuan | Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  </head>

  <body data-topbar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="dashboard.php" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="assets/images/logo.png" alt="logo-sm-dark" height="30" />
                </span>
                <span class="logo-lg"
                  ><h2 style="margin-top: 1rem"><img src="assets/images/logo.png" alt="logo-sm-dark" height="30" /> SEKOLAH</h2>
                </span>
              </a>

              <a href="dashboard.php" class="logo logo-light">
                <span class="logo-sm">
                  <img src="assets/images/logo.png" alt="logo-sm-light" height="30" />
                </span>
                <span class="logo-lg">
                  <h2 style="margin-top: 1rem; color: white"><img src="assets/images/logo.png" alt="logo-sm-light" height="30" /> SEKOLAH</h2>
                </span>
              </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
              <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
              <div class="input-group">
                <button class="btn btn-rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Menu <i class="mdi mdi-chevron-down ms-2"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="daftar.php">Data Pendaftaran</a></li>
                  <li><a class="dropdown-item" href="mutasi.php">Data Mutasi</a></li>
                  <li><a class="dropdown-item" href="siswa.php">Data Siswa</a></li>
                </ul>
                <input type="text" class="form-control bg-transparent" placeholder="Search.." aria-label="Text input with dropdown button" />
                <span class="mdi mdi-magnify"></span>
              </div>
            </form>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none">
              <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="top-icon">
                  <i class="ri-search-line"></i>
                </div>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                  <div class="m-0">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search ..." />
                      <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end -->

            <div class="dropdown d-none d-lg-inline-block">
              <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <div class="top-icon">
                  <i class="mdi mdi-fullscreen"></i>
                </div>
              </button>
            </div>
            <!-- end  -->

            <!-- end notification -->

            <div class="dropdown d-inline-block user-dropdown">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="assets/images/users/person.png" alt="Header Avatar" />
                <span class="d-none d-xl-inline-block ms-1">Mutamadra</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> Email</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../auth/Login-admin/logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
              </div>
            </div>
            <!-- end user -->

            <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <div class="top-icon">
                  <i class="mdi mdi-cog-outline mdi-spin"></i>
                </div>
              </button>
            </div>
            <!-- end setting -->
          </div>
        </div>
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                <a href="dashboard.php" class="waves-effect">
                  <i class="ri-dashboard-line"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-inbox-archive-fill"></i>
                  <span>Pengajuan</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="daftar.php">Pengajuan Daftar</a></li>
                  <li><a href="mutasi.php">Pengajuan Mutasi</a></li>
                </ul>
              </li>
              <!-- end li -->
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-grid-fill"></i>
                  <span>Master</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="siswa.php">Data Siswa</a></li>
                  <li><a href="sekolah.php">Data Sekolah</a></li>
                  <li><a href="batas.php">Batas Waktu Mutasi</a></li>
                </ul>
              </li>
              <!-- end li -->
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-question-fill"></i>
                  <span>Bantuan</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="bantuan.php">Information</a></li>
                </ul>
              </li>
              <!-- end li -->
            </ul>
            <!-- end ul -->
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- Start right Content here -->
        <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Reset Password</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bantuan</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">Reset Password</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Kelola Password</h4>

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav-justified">
                                        <li class="nav-item">
                                            <a href="#konfirmasi-profil" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Konfirmasi Profil</span>
                                            </a>
                                        </li>
                                        <!-- end li -->
                                        <li class="nav-item">
                                            <a href="#reset-password" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Reset Password</span>
                                            </a>
                                        </li>
                                        <!-- end li -->
                                        <li class="nav-item">
                                            <a href="#konfirmasi" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Konfirmasi</span>
                                            </a>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->

                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="konfirmasi-profil">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="nama-admin">Nama Admin</label>
                                                            <input type="text" class="form-control" id="nama-admin">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email-admin">Email</label>
                                                            <input type="email" class="form-control" id="email-admin">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </form>
                                            <!-- end form -->
                                            <div class="mb-3 row mt-4">
                                                <div class="col">
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="next" style="float: left;">
                                                            <a href="bantuan.php" type="button" class="btn btn-primary"> Kembali</a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="#reset-password" type="button" class="btn btn-primary"> Konfirmasi</a>
                                                        </li>
                                                    </ul>
                                                  </div>
                                            </div>
                                            <!-- end ul -->
                                        </div>
                                        <!-- end tabpane -->
                                        <div class="tab-pane" id="reset-password">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password-admin">Password Baru</label>
                                                            <input type="password" class="form-control" id="password-admin">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password-admin">Konfirmasi Password</label>
                                                            <input type="password" class="form-control" id="password-admin">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </form>
                                            <!-- end form -->
                                            <div class="mb-3 row mt-4">
                                                <div class="col">
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="next" style="float: left;">
                                                            <a href="#konfirmasi-profil" type="button" class="btn btn-primary"> Kembali</a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="#konfirmasi" type="button" class="btn btn-primary"> Konfirmasi</a>
                                                        </li>
                                                    </ul>
                                                  </div>
                                            </div>
                                            <!-- end ul -->
                                        </div>
                                        <!-- end tabpane -->
                                        <div class="tab-pane" id="konfirmasi">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <i
                                                                class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                        </div>
                                                        <div>
                                                            <h5>Detail Konfirmasi</h5>
                                                            <p class="text-muted">Password Berhasil Diganti</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                            <div class="mb-3 row mt-4">
                                                <div class="col">
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="previous" >
                                                            <a href="#konfirmasi" type="button" class="btn btn-primary"> Kembali</a>
                                                        </li>
                                                        <li class="previous" style="float: right;">
                                                            <a href="bantuan.php" type="button" class="btn btn-primary"> Selesai</a>
                                                        </li>
                                                    </ul>
                                                  </div>
                                            </div>
                                            <!-- end ul -->
                                        </div>
                                        <!-- end tabpane -->
                                    </div>
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upbond.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
          <h5 class="m-0 me-2">Settings</h5>

          <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
          <div class="mb-2">
            <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1" />
          </div>

          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
          </div>

          <div class="mb-2">
            <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2" />
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
          </div>

          <div class="mb-2">
            <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3" />
          </div>
          <div class="form-check form-switch mb-5">
            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
          </div>
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

    <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/Login-admin/login.php';</script>";
    }
?>