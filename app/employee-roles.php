
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
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
      <!-- <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h1 class="text-center">Add Role</h1>
            <form  method="POST" action="process.php" enctype="multipart/form-data">
              <input class="form-control" type="text" value="<?php echo $editorid; ?>" name="editor" hidden>
              <div class="form-group text-left">
                <div class="row">
                    <div class="col-md-12">
                      <label for="optiona">Title </label>
                      <input class="form-control" type="text" value="" name="fname" required>
                    </div>
                    <div class="col-md-12">
                      <label for="optiona">Status</label>
                      <select class="form-control" name="status" required>
                          <option>Active</option>
                          <option>Inactive</option>
                      </select>
                    </div>
                </div>
              </div>
              <center>
                <input type="submit" name="editProfile" class="btn btn-primary" value="Update">
              </center>
            </form>
          </div>
        </div>
      </div> -->
      <div class="col-md-12">
        <!-- change profile picture -->
        <div class="card p-2">
            <DIV class="card-header justify-content-between">
                <h1 class="float-left">Employees</h1>
                <button class="btn btn-primary float-right">Add Role</button>
            </DIV>
            <div class="table-responsive">
                <table class="table table-binvoiceed table-striped" id="example2">
                    <thead class="thead-dark">
                    <tr>
                        <th >S/N</th>
                        <th >Name</th>
                        <th >Employee ID</th>
                        <th >Role</th>
                        <th >Department</th>
                        <th >Status</th>
                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                        <td>1</td>
                        <td>CEO</td>
                        <td>CTO</td>
                        <td>CMO</td>
                        <td>DBSSVDF</td>
                        <td><span class="badge badge-pill badge-success">Active</span></td>
                        <td class="text-right">
                            <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="employee-single.php?employee=<?php echo $row['employee_id'];?>" class="dropdown-item">View</a>
                                <a href="employee-edit.php?employee=<?php echo $row['employee_id'];?>" class="dropdown-item">Edit</a>
                            </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                    <tfoot class="thead-light">
                    <tr>
                        <th >S/N</th>
                        <th >Name</th>
                        <th >Employee ID</th>
                        <th >Role</th>
                        <th >Department</th>
                        <th >Status</th>
                        <th >Action</th>
                    </tr>
                    </tfoot>
                </table>
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
  <!-- DataTables -->
  <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script>
    $(function () {
      $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });      
    });
  </script>
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
