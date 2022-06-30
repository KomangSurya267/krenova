<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Kreativitas dan Inovasi Kota Semarang
  </title>
  <!-- Favicon -->
  <link href="{{ asset('/') }}img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('/') }}plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="{{ asset('/') }}plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('/') }}css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body>
  <div class="main-content">
    <div style="background-image:  url('../img/brand/login.png'); background-position: center;
    background-size: cover; ">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
        <img src="{{ asset('/') }}img/brand/krenova.png"  width="200px">
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
                  <img src="{{ asset('/') }}img/brand/krenova.png"  width="200px">
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
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="btn-wrapper text-center">
              <img src="{{ asset('/') }}img/brand/akun.png" width="350px"  >
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form action="{{ url(' ') }}" method="get">
                
                <div class="text-right">
                  <button type="submit" class="btn btn-danger my-4">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2022 <a href="" class="font-weight-bold ml-1" target="_blank">KRENOVA Kota Semarang</a>
            </div>
          </div>
        </div>
      </div>  
</div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="{{ asset('/') }}plugins/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('/') }}plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="{{ asset('/') }}js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>