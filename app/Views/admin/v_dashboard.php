<!DOCTYPE html>
<!-- =========================================================
* SOFTWARE DEVELOPER TEAM - UKM ORBIT 
==============================================================

* https://developer.orbituinbkt.com

=========================================================
 -->

<!-- CARI APA BRO ?? -->


<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url() ?>/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>SIMA-ORBIT</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url() ?>/assets/vendor/js/helpers.js"></script>

      <!-- DataTable -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>/assets/js/config.js"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?= base_url() ?>/thumbnail/logosima.png" alt="" width="50">
               </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">sima-orbit</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?= $active == "dashboard" ? "active" : "" ?>">
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- TAG -->
            <li class="menu-item <?= $active == "keanggotaan" ? "active" : "" ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-user-pin'></i>
              <!-- <i class='menu-icon tf-icons bx bx-transfer-alt' ></i> -->
                <div data-i18n="Layouts">Keanggotaan</div>
              </a>
              <ul class="menu-sub">
              <!-- <li class="menu-item">
                  <a href="/anggota" class="menu-link">
                    <div data-i18n="Without navbar">Pendaftaran Anggota</div>
                  </a>
                </li> -->
              <li class="menu-item">
                  <a href="/anggota" class="menu-link">
                    <div data-i18n="Without navbar">Anggota</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/pengurus" class="menu-link">
                    <div data-i18n="Without menu">Pengurus</div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="/alumni" class="menu-link">  
                    <div data-i18n="Without navbar">Alumni</div>
                  </a>
                </li>
                
              </ul>
            </li>

            <!-- Monitoring -->
            <li class="menu-item <?= $active == "penugasan" ? "active" : "" ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-food-menu'></i>
                <div data-i18n="Layouts">Penugasan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/penugasan" class="menu-link">
                    <div data-i18n="Without menu">Daftar Penugasan</div>
                  </a>
                </li>
              </ul>
            </li>

                  

            <li class="menu-item <?= $active == "kompetensi" ? "active" : "" ?>">
              <a href="/kompetensi" class="menu-link">
                
                <i class='menu-icon tf-icons bx bxs-certification' ></i>
                <div data-i18n="Boxicons">kompetensi</div>
              </a>
            </li>         

            <li class="menu-item <?= $active == "agenda" ? "active" : "" ?>">
              <a href="/agenda" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-calendar-plus' ></i>
                <div data-i18n="Boxicons">Agenda</div>
              </a>
            </li>         

            <li class="menu-item <?= $active == "pengumuman" ? "active" : "" ?>">
              <a href="/pengumuman" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-bell-plus' ></i>
                <div data-i18n="Boxicons">Pengumuman</div>
              </a>
            </li>   

            <!-- TAG -->
            <li class="menu-item <?= $active == "konfigurasi" ? "active" : "" ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-cog'></i>
              <!-- <i class='menu-icon tf-icons bx bx-transfer-alt' ></i> -->
                <div data-i18n="Layouts">Konfigurasi</div>
              </a>
              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="/bidang" class="menu-link">
                    <div data-i18n="Without navbar">Bidang</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/fakultas" class="menu-link">
                    <div data-i18n="Without menu">Fakultas</div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="/prodi" class="menu-link">  
                    <div data-i18n="Without navbar">Prodi</div>
                  </a>
                </li>
                
              </ul>
            </li>
      
        
         
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
            <a href="/support" class="menu-link">
                <i class='menu-icon tf-icons bx bx-support' ></i>
                <div data-i18n="Boxicons">Support</div>
              </a>
            </li>
            <li class="menu-item">
            <a href="/documentation" class="menu-link">
                <i class='menu-icon tf-icons bx bx-file-find'></i>
                <div data-i18n="Boxicons">dokumentasi</div>
              </a>
            </li>
            <li class="menu-item">
            <a href="/logout" class="menu-link">
            <i class='menu-icon tf-icons bx bx-log-out' ></i>
                <div data-i18n="Boxicons">Logout</div>
              </a>
            </li>

            <!-- Administrator -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Administrator</span></li>
            <li class="menu-item">
            <a href="/apikey" class="menu-link">
                <i class='menu-icon tf-icons bx bx-key' ></i>
                <div data-i18n="Boxicons">API KEY</div>
              </a>
            </li>
            <li class="menu-item">
            <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Admin</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                  <span class="fw-semibold d-block">Sistem Informasi Manajemen dan Administrasi ORBIT ( SIMA-ORBIT )</span>
                  <!-- <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url() ?>/assets/img/user.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url() ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li> -->
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

            <div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Selamat Datang di SIMA-ORBIT 🎉</h5>
              <p class="mb-4">
                Halo, <span class="fw-bold"><?= session()->get("admin_name") ?></span><br> apa kabar?, apakah kamu perlu bantuan?, jangan sungkan untuk bertanya
              </p>

              <a href="javascript:;" class="btn btn-sm btn-outline-primary">Support</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 order-1">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                </div>

              </div>
              <span class="fw-semibold d-block mb-1">Anggota Aktif</span>
              <h3 class="card-title mb-2"><?= $jumlah_anggota_active ?></h3>
              <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                </div>

              </div>
              <span>Anggota Tidak Aktif</span>
              <h3 class="card-title text-nowrap mb-1"><?= $jumlah_anggota_nonactive ?></h3>
              <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Total Revenue -->
    <!-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
      <div class="card">
        <div class="row row-bordered g-0">
          <div class="col-md-8">
            <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
            <div id="totalRevenueChart" class="px-2"></div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <div class="text-center">
                <div class="dropdown">
                  <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    2022
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                    <a class="dropdown-item" href="javascript:void(0);">2021</a>
                    <a class="dropdown-item" href="javascript:void(0);">2020</a>
                    <a class="dropdown-item" href="javascript:void(0);">2019</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="growthChart"></div>
            <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
              <div class="d-flex">
                <div class="me-2">
                  <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                </div>
                <div class="d-flex flex-column">
                  <small>2022</small>
                  <h6 class="mb-0">$32.5k</h6>
                </div>
              </div>
              <div class="d-flex">
                <div class="me-2">
                  <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                </div>
                <div class="d-flex flex-column">
                  <small>2021</small>
                  <h6 class="mb-0">$41.2k</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--/ Total Revenue -->

    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Golongan Darah - ALUMNI</h5>
            <!-- <small class="text-muted">1</small> -->
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            
            <canvas id="golongandarah"></canvas>
          </div>
         
        </div>
      </div>
    </div>
    <!--/ Order Statistics -->

    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Bidang Anggota</h5>
            <br>
          </div>

        </div>
        <div class="card-body">
        <canvas id="BidangStatistic"></canvas>
          <div class="d-flex justify-content-between align-items-center mb-3">
          
           
          </div>
          <ul class="p-0 m-0">
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Programming</h6>
                  <small class="text-muted">Mobile, Earbuds, TV</small>
                </div>
                <div class="user-progress">
                  <small class="fw-semibold"><?= $bidang_programming ?></small>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Multimedia</h6>
                  <small class="text-muted">T-shirt, Jeans, Shoes</small>
                </div>
                <div class="user-progress">
                  <small class="fw-semibold"><?= $bidang_multimedia ?></small>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Networking</h6>
                  <small class="text-muted">Fine Art, Dining</small>
                </div>
                <div class="user-progress">
                  <small class="fw-semibold"><?= $bidang_networking ?></small>
                </div>
              </div>
            </li>
            <li class="d-flex">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Robotik</h6>
                  <small class="text-muted">Football, Cricket Kit</small>
                </div>
                <div class="user-progress">
                  <small class="fw-semibold"><?= $bidang_robotik ?></small>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Order Statistics -->

    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
      <div class="row">
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="d-block mb-1">Alumni</span>
              <h3 class="card-title text-nowrap mb-2"><?= $jumlah_alumni ?></h3>
              <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
            </div>
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                </div>

              </div>
              <span class="fw-semibold d-block mb-1">Pengurus</span>
              <h3 class="card-title mb-2"><?= $jumlah_pengurus ?></h3>
              <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> -->
            </div>
          </div>
        </div>
    <!-- Transactions -->
    <div class="">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Anggota Baru</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
           <?php foreach ($anggota as $item) : ?>
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <small class="text-muted d-block mb-1"><?= $item["nim"] ?></small>
                  <h6 class="mb-0"><?= $item["nama"] ?></h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <h6 class="mb-0"><?= $item["active"] == 0 ? "Tidak aktif" : "Aktif" ?></h6>
                </div>
              </div>
            </li>
           <?php endforeach ?>
            
          </ul>
        </div>
      </div>
    </div>
    <!--/ Transactions -->
        <!-- </div>
    <div class="row"> -->
      
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

    <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Statistik Anggota Berdasarkan Program Studi</h5>
          </div>
        </div>
      <div class="card-body">
      <canvas id="statisticProdi"></canvas>
      </div>
    </div>
    
    </div>
  </div>
  <div class="row">z


  </div>
</div>

           
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://orbituinbkt.com" target="_blank" class="footer-link fw-bolder">Software Development Team - UKM ORBIT</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- DATATABLE -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
foreach ($prodi as $key => $value) {
  $prodiNama[] = $value["prodi_nama"];
  $anggotaProdiCount[] = $value["anggota_count"];
}
?>

<script>
  const ctx = document.getElementById('statisticProdi');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($prodiNama) ?>,
      datasets: [{
        label: '# anggota',
        data: <?= json_encode($anggotaProdiCount) ?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<?php
$golonganDarahA = 0;
$golonganDarahB = 0;
$golonganDarahAB = 0;
$golonganDarahO = 0;
$golonganDarahNotFound = 0;
foreach ($alumni_goldar as $key => $value) {

  if ($value["golongan_darah"] == "A") {
    $golonganDarahA += 1;
  } elseif ($value["golongan_darah"] == "B") {
    $golonganDarahB += 1;
  } else if ($value["golongan_darah"] == "AB") {
    $golonganDarahAB += 1;
  } else if ($value["golongan_darah"] == "O") {
    $golonganDarahO += 1;
  } else {
    $golonganDarahNotFound += 1;
  }
}
?>

<script>
  const ctxGolDar = document.getElementById('golongandarah');

  new Chart(ctxGolDar, {
    type: 'doughnut',
    data: {
      labels: ["A", "B", "AB", "O", "Tidak Diketahui"],
      datasets: [{
        label: 'Golongan Darah',
        data: [ <?= $golonganDarahA ?>, <?= $golonganDarahB ?>, <?= $golonganDarahAB ?>, <?= $golonganDarahO ?>, <?= $golonganDarahNotFound ?>],
        backgroundColor: [
          '#F4C794',
          '#43F111',
          '#DF8735',
          '#5D3AB5',
          '#800000'
        ],
        hoverOffset: 4
      }]
    },
   
  });
</script>

<?php
foreach ($bidang as $key => $value) {
  $bidangNama[] = $value["bidang_nama"];
  $anggotaBidangCount[] = $value["anggota_count"];
}
?>

<script>
  const ctxBidang = document.getElementById('BidangStatistic');

  new Chart(ctxBidang, {
    type: 'doughnut',
    data: {
      labels: <?= json_encode($bidangNama) ?>,
      datasets: [{
        label: 'My First Dataset',
        data: <?= json_encode($anggotaBidangCount) ?>,
        backgroundColor: [
          '#696CFF',
          '#71DD37',
          '#03C3EC',
          '#D95030',
          '#8592A3',
          '#8592A3',
          '#8592A3'
        ],
        hoverOffset: 4
      }]
    },
   
  });
</script>

  </body>
</html>