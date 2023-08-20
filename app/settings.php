
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>BAMS | Profile</title>
  <!-- Fonts -->
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
    <br><br><br>
    <!-- Page content -->
    <div class="container-fluid ">
      <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="settings">Settings</a></li>
      </ul>
    <!-- Header -->
    <br>
    <h1 class="text-center">Settings</h1>
        <div class="row">
          <!-- Single  card  -->
          <div class="col-xl-4">
            <a href="profile">
              <div class="card text-center" id="item-card">
                  <div class="card-body p-2">
                    <center>
                      <span class="badge badge-pill badge-primary p-4">
                        <i class="fa fa-user" style="font-size:60px;"></i>
                      </span>
                      <h2 class="text-primary">My Profile</h2>
                    </center>
                  </div>
              </div>
            </a>
          </div>
          <!-- Single  card  -->
          <div class="col-xl-4">
            <a href="profile">
              <div class="card text-center" id="item-card">
                  <div class="card-body p-2">
                    <center>
                      <span class="badge badge-pill badge-primary p-4">
                        <i class="fa fa-user-circle" style="font-size:60px;"></i>
                      </span>
                      <h2 class="text-primary">Profile Picture</h2>
                    </center>
                  </div>
              </div>
            </a>
          </div>
          <!-- Single  card  -->
          <div class="col-xl-4">
            <a href="profile">
              <div class="card text-center" id="item-card">
                  <div class="card-body p-2">
                    <center>
                      <span class="badge badge-pill badge-primary p-4">
                        <i class="fa fa-lock" style="font-size:60px;"></i>
                      </span>
                      <h2 class="text-primary">Change Password</h2>
                    </center>
                  </div>
              </div>
            </a>
          </div>
          <!-- Single  card  -->
          <div class="col-xl-4">
            <a href="company-profile">
              <div class="card text-center" id="item-card">
                  <div class="card-body p-2">
                    <center>
                      <span class="badge badge-pill badge-primary p-4">
                        <i class="fa fa-lock" style="font-size:60px;"></i>
                      </span>
                      <h2 class="text-primary">Company Profile</h2>
                    </center>
                  </div>
              </div>
            </a>
          </div>
          <!-- Single  card  -->
          <div class="col-xl-4">
            <a href="employee-roles">
              <div class="card text-center" id="item-card">
                  <div class="card-body p-2">
                    <center>
                      <span class="badge badge-pill badge-primary p-4">
                        <i class="fa fa-sitemap" style="font-size:60px;"></i>
                      </span>
                      <h2 class="text-primary">Employee Roles</h2>
                    </center>
                  </div>
              </div>
            </a>
          </div>

        </div>

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
