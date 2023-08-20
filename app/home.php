<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title> BAMS | Home</title>
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
  
  <?php include 'session.php'; include 'nav.php'; ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <?php include 'topnav.php'; include 'modals.php'; ?>
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
            <?php
              //counting Employes
              $employeeCount = $conn->query("SELECT * FROM employees WHERE user_id='".$userid."' and status='1' ") or die($conn->error);
              $countEmployee = mysqli_num_rows($employeeCount);
              //counting Clients
              $clientCount = $conn->query("SELECT * FROM clients WHERE user_id='".$userid."' and status='1' ") or die($conn->error);
              $countClient = mysqli_num_rows($clientCount);
              //counting Services
              $serviceCount = $conn->query("SELECT * FROM services WHERE user_id='".$userid."' and status='1' ") or die($conn->error);
              $countService = mysqli_num_rows($serviceCount);
            
            ?>
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
                        <span class="h3 font-weight-bold mb-0"><?php echo $countEmployee; ?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">Total Employees : <?php echo $countEmployee; ?></span>
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
                        <span class="h3 font-weight-bold mb-0"><?php echo $countClient; ?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap">Total Clients : <?php echo $countClient; ?></span>
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
                      <span class="h3 font-weight-bold mb-0"><?php echo $countService; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-building"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm text-success">
                    <span class="text-nowrap">Total Services : <?php echo $countService; ?></span>
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
                    <?php $notes = $conn->query("SELECT * FROM notes WHERE user_id='".$userid."' and status is not null");
                      $notesC = mysqli_num_rows($notes);?>
                    <h5 class="card-title text-uppercase text-muted mb-0"> Notes</h5>
                    <span class="h4 font-weight-bold mb-0"><?php echo $notesC; ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="fa fa-edit"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap">All notes : <?php echo $notesC; ?></span>
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
                        <?php  $revenue = $conn->query("SELECT * FROM payments WHERE user_id='".$userid."' and status is not null and date LIKE '%".$year."%'");
                          $arevenue = 0;
                          while ($row = $revenue->fetch_assoc()) {
                            $arevenue += $row['amount'];
                          }
                        ?>
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $year;?> Income</h5>
                        <span class="h4 font-weight-bold mb-0">&#8358; <?php echo number_format($arevenue,0); ?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap"><?php echo $year; ?> Income : &#8358; <?php echo number_format($arevenue,0); ?></span>
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
                        <?php
                        //
                        $month = date('F');
                        $mont = date('Y-m');
                        $avalue = 0;
                        $totalrevenue = $conn->query("SELECT * FROM payments WHERE pdate like  '%$mont%'  AND status='1'") or die($conn->error);
                        while($row = $totalrevenue->fetch_assoc()){
                          $avalue += $row['amount'];
                        }
                        ?>
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $month; ?> </h5>
                    <span class="h4 font-weight-bold mb-0">$ <?php echo number_format($avalue);?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap"><?php echo $month;?> : $ <?php echo number_format($avalue);?></span>
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
                        <?php $twages = $conn->query("SELECT * FROM wages WHERE user_id='".$userid."' and status is not null and pdate LIKE '%".$year."%'");
                          $twage = 0;
                          while ($row = $twages->fetch_assoc()) {
                            $twage += $row['amountp'];
                          }
                        ?>
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $year;?> Wages</h5>
                        <span class="h4 font-weight-bold mb-0">&#8358; <?php echo number_format($twage,0); ?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm text-success">
                      <span class="text-nowrap"><?php echo $year; ?> Wages : &#8358; <?php echo number_format($twage,0); ?></span>
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
                    <?php $year = date('Y'); ?>
                    <?php $spendings = $conn->query("SELECT * FROM spendings WHERE user_id='".$userid."' and status is not null and sdate LIKE '%".$year."%'");
                      $tvalue = 0;
                      while ($row = $spendings->fetch_assoc()) {
                        $tvalue += $row['cost'];
                      }
                    ?>
                    <h5 class="card-title text-uppercase text-muted mb-0">Spendings</h5>
                    <span class="h4 font-weight-bold mb-0">&#8358; <?php echo number_format($tvalue,0); ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="ni ni-book-bookmark"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm text-success">
                  <span class="text-nowrap"><?php echo $year; ?> Spendings : &#8358; <?php echo number_format($tvalue); ?></span>
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
      <?php include 'footer.php';?>
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
