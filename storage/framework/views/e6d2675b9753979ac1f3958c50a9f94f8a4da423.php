<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('/')); ?>img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('/')); ?>plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo e(asset('/')); ?>plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo e(asset('/')); ?>css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="<?php echo e(asset('/')); ?>img/brand/krenova.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo e(asset('/')); ?>img/brand/dashboard.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
               <!-- Navigation -->
               <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="<?php echo e(url('layout/home')); ?>" class="nav-link">
              <i class="ni ni-tv-2 text-danger"></i> Dashboard
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active " href="<?php echo e(route('admin.user')); ?>" class="nav-link">
              <i class="ni ni-align-left-2 text-danger"></i> Data User
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="<?php echo e(route('admin.index')); ?>" class="nav-link">
              <i class="ni ni-align-left-2 text-danger"></i> Data Inovasi
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Halaman Tambah Data Inovasi</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo e(asset('/')); ?>img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; 
    background-image: url(<?php echo e(asset('/')); ?>img/brand/dashboard.png); background-size: center-top; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient opacity-8"></span>
      <!-- Header container -->
    </div>
    <!-- Page content -->
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h2 class="mb-0">Daftar Lomba Krenova 2022</h2>
                  <br>
                  <h4>Data Akun</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form method="POST" action="<?php echo e(route('admin.store')); ?>">
              <?php echo csrf_field(); ?>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Username *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Username" name="username" id="username" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Password *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Password"  name="password" id="password" type="password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Email *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Email" name="email" id="email" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Data Diri</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Organisasi/Institusi *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Organisasi/Institusi Peserta" name="organisasi" id="organisasi" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Nama Peserta *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Nama Peserta/Ketua Kelompok" name="name" id="name" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Telepone *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan nomor Telepon Peserta" name="phone" id="phone" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-address">Sosial Media *</label>
                        <input id="input-address" class="form-control form-control-alternative" 
                        placeholder="Masukkan Username Sosial Media Peserta" name="sosmed" id="sosmed" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-control-label">Kategori Lomba yang Akan Diikuti *</label>
                      <select class="form-control" name="kategori" id="kategori">
                        <option>-Pilih Kategori Lomba-</option>
                        <option>Pendidikan</option>
                        <option>Kesehatan</option>
                        <option>Energi</option>
                        <option>Kelautan</option>
                        <option>Pembangunan</option>
                        <option>Rekayasa</option>
                        <option>Sosial Humaniora</option>
                        <option>Industri Kreatif</option>
                        <option>Agribisnis</option>
                        <option>Teknologi</option>
                        <option>Material</option>
                      </select>
                  </div>
                  <div class="file-upload-wrapper">
                      <input type="file" id="file" name="file" class="file-upload" />
                  </div>
                </div>
                <div class="col-lg-10 col-md-9">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="<?php echo e(asset('/')); ?>plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo e(asset('/')); ?>argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html><?php /**PATH D:\krenova-seal\resources\views/admin/tambah_inovasi.blade.php ENDPATH**/ ?>