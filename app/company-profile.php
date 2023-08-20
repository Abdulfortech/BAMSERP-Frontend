
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>BAMS | Company Profile</title>
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
        <li class="breadcrumb-item"><a href="index">Home</a></li>
        <li class="breadcrumb-item"><a href="settings">Settings</a></li>
        <li class="breadcrumb-item active">Company Profile</li>
      </ul>
    <!-- Header -->
    
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h1 class="text-center">Company Profile</h1>
            <form  method="POST" action="process.php" enctype="multipart/form-data">
              <input class="form-control" type="text" value="<?php echo $editorid; ?>" name="editor" hidden>
              <div class="form-group text-left">
                <div class="row">
                    <div class="col-md-12">
                      <label for="optiona">Title </label>
                      <input class="form-control" type="text" value="" name="fname" required>
                    </div>
                    <div class="col-md-12">
                      <label for="optiona">Motto</label>
                      <input class="form-control" type="text" value="" name="lname" required>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">Category</label>
                      <select class="form-control" name="category" required>
                          <option>Manufacturing</option>
                          <option>Retail/Wholesale</option>
                          <option>Services</option>
                          <option>Trade</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">Registration</label>
                      <select class="form-control" name="registration" required>
                          <option>Registered (CAC)</option>
                          <option>Not Registered</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">Phone Number 1</label>
                      <input class="form-control" type="number" value="" name="phone1" required>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">Phone Number 2</label>
                      <input class="form-control" type="number" value="" name="phone1" >
                    </div>
                    <div class="col-md-12">
                      <label for="optiona">Email</label>
                      <input class="form-control" type="email"  name="email" hidden>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">State</label>
                      <select class="form-control" name="role" required>
                        <option>choose</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="optiona">Local Goverment</label>
                      <select class="form-control" name="lga" required>
                        <option>choose</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="optiona">Address</label>
                      <input class="form-control" type="text"  name="email" required>
                    </div>
                    <div class="col-md-12">
                      <label for="optiona">Description</label>
                      <textarea class="form-control" rows="5" maxlength="250" name="description" required></textarea>
                    </div>
                </div>
              </div>
              <center>
                <input type="submit" name="editProfile" class="btn btn-primary" value="Update">
              </center>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- change profile picture -->
        <div class="card">
          <div class="card-body">
            <h3 class="text-center">Change Company Logo</h3>
            <form  method="POST" action="process.php" enctype="multipart/form-data">
              <input class="form-control" type="text" value="<?php echo $editorid; ?>" name="editor" hidden>
              <div class="form-group text-left">
                <div class="row">
                    <div class="col-md-12 mb-4">
                      <center>
                        <img src="../assets/img/theme/profile-cover.jpg" width="100" height="100" class="rounded-circle">
                      </center>
                    </div>
                    <div class="col-md-12">
                      <input class="form-control" type="file" value="" name="picture">
                    </div>
                </div>
              </div>
              <center>
                <input type="submit" name="editProfile" class="btn btn-primary" value="Update">
              </center>
            </form>
          </div>
        </div>
        <!-- change profile picture -->
        <div class="card">
          <div class="card-body">
            <h3 class="text-center">Change Company Later Head</h3>
            <form  method="POST" action="process.php" enctype="multipart/form-data">
              <input class="form-control" type="text" value="<?php echo $editorid; ?>" name="editor" hidden>
              <div class="form-group text-left">
                <div class="row">
                    <div class="col-md-12 mb-4">
                      <center>
                        <img src="../assets/img/theme/profile-cover.jpg" width="250" height="150" class="rounded">
                      </center>
                    </div>
                    <div class="col-md-12">
                      <input class="form-control" type="file" value="" name="picture">
                    </div>
                </div>
              </div>
              <center>
                <input type="submit" name="editProfile" class="btn btn-primary" value="Update">
              </center>
            </form>
          </div>
        </div>
      </div>
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
