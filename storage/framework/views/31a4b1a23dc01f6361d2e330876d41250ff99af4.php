<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Kreativitas dan Inovasi Kota Semarang
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

<body>
  <div class="main-content">
  <div class="" style="background-image: url('img/brand/login.png'); background-position: center;
  background-size: cover; ">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <img src="<?php echo e(asset('/')); ?>img/brand/krenova.png" width="200px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="<?php echo e(asset('/')); ?>img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
          </div>
        </div>
      </div>
      <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <?php if(session('msg')): ?>
                <?php echo e(session('msg')); ?>

      <?php endif; ?>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
            <div class="" style="background-image: url('img/brand/daftar.png'); background-position: center ;
    background-size: cover; ">
              <div class="text-center text-muted mb-4">
                <h1>Daftar Akun</h1>
              </div>
              <form role="form" action="<?php echo e(url('/register/simpan')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                <div class="col-lg-6 col-md-8">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="name" id="name">
                  </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-6 col-md-8">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" id="username">
                  </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-6 col-md-8">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" id="email">
                  </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-6 col-md-8">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <!-- <div class="col-lg-6 col-md-8">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-check"></i></span>
                    </div>
                    <input class="form-control" placeholder="Masukkan Level" type="text" name="level" id="level">
                  </div>
                  </div>
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn btn-danger mt-4">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2022 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">KRENOVA Kota Semarang</a>
          </div>
        </div>
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
  <script src="<?php echo e(asset('/')); ?>js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html><?php /**PATH D:\CODING\BackEnd\Laravel\krenova-seal\resources\views/admin/view_register.blade.php ENDPATH**/ ?>