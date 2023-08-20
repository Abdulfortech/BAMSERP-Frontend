<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>BAMS | Home</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets\vendor\material-design-iconic-font\css\materialdesignicons.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  
  <?php include '../components/auth/sidebar.php'; ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <?php include '../components/auth/topnav.php'; include '../components/auth/modals.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-box"></i> BAMS</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
              </nav>
            </div>
            
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="news-add.php" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> News</a> -->
              <!-- <a href="media-add.php" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Media</a> -->
            </div>
          </div>          
          
          <h1 class="text-white text-center mb-2">Welcome to BAMS!</h1>
          <!-- Card stats -->
          <div class="row">
            <!-- employees -->
            <div class="col-xl-3 col-md-6">
              <a href="#">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Employees</h5>
                        <span class="h3 font-weight-bold mb-0">10</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">Total Employees : 10</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- clients -->
            <div class="col-xl-3 col-md-6">
              <a href="clients.php">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Clients</h5>
                        <span class="h3 font-weight-bold mb-0">100</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">Total Clients : 100</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- services -->
            <div class="col-xl-3 col-md-6">
              <a href="services.php">
                <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Services</h5>
                      <span class="h3 font-weight-bold mb-0">100</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-building"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm text-success">
                    <span class="text-nowrap">Total Services : 100</span>
                  </p>
                </div>
              </div>
              </a>
            </div>
            <!-- Number of payments -->
            <div class="col-xl-3 col-md-6">
              <a href="payments.php">
                <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"> Notes</h5>
                    <span class="h4 font-weight-bold mb-0">100</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="fa fa-edit"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap">All notes : 100</span>
                </p>
                </div>
              </div>
              </a>
            </div>
            <!-- income -->
            <div class="col-xl-3 col-md-6">
              <a href="#">
                <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">2023 Income</h5>
                        <span class="h4 font-weight-bold mb-0">&#8358; 10,000,000</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">2023 Income : &#8358; 10,000,000</span>
                    </p>
                </div>
              </div>
              </a>
            </div> 
            <!-- current month income -->
            <div class="col-xl-3 col-md-6">
              <a href="#">
                <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">August </h5>
                        <span class="h4 font-weight-bold mb-0">$ 10000</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap">August : $ 10000</span>
                </p>
                </div>
              </div>
              </a>
            </div>                   
            <!-- wages -->
            <div class="col-xl-3 col-md-6">            
              <a href="wages.php">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">2023 Wages</h5>
                        <span class="h4 font-weight-bold mb-0">&#8358; 150,000</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">2023 Wages : &#8358; 150,000</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- expanses -->
            <div class="col-xl-3 col-md-6">
              <a href="expenses.php">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Spendings</h5>
                    <span class="h4 font-weight-bold mb-0">&#8358; 200000</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="ni ni-book-bookmark"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap">2023 Spendings : &#8358; 20200202</span>
                </p>
                </div>
              </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <!-- Page content -->
    <div class="container-fluid mt-4">
      <!-- Footer -->
      <?php include '../components/auth/footer.php';?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
  <script type="text/javascript">
      $(document).ready(function() {
          $.notify({
          title: "<b>Alert :</b>",
          message: "<?= $msg?>",
          icon: 'fa fa-bell',
          type: "info"
          });
      });
  </script>
  <?php  unset($_SESSION['msg']); }?>
</body>

</html>
