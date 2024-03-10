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

<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
            <?= $this->renderSection('content') ?>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      });
    </script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $(document).ready(function () {
         $('#exampleSelect').select2();
      });
   </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
      function ImgPreview() {
        const thumb = document.querySelector('#thumb')
        const imgPreview = document.querySelector('.img-preview')
  
        const fileThumb = new FileReader();
        fileThumb.readAsDataURL(thumb.files[0])
  
        fileThumb.onload = function(e){
          imgPreview.src = e.target.result
        }
      }

    </script>

  </body>
</html>