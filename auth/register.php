<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    BAMS | Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <!-- <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css"> -->
  <link href="../assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="login-page">
  <!-- Navbar -->
  <?php include '../components/navbar.php';?>
  <!-- End Navbar -->
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-4 ">
                <div class="text-center">
                    <center>
                        <i class="fa fa-user-circle text-primary" style="font-size: 75px;"></i>
                        <h4 class="text-primary font-weight-bold">Register</h4>
                    </center>
                </div>
                <form role="form" method="post" action="log.php">
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-12 mb-1">
                                <h6 class="text-primary">Business Information</h6>
                            </div>
                            <div class="col-md-12 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input id="bname" class="form-control" type="text" name="bname" placeholder="Business Name" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input id="bmotto" class="form-control" type="text" name="bmotto" placeholder="Business Motto" required>
                                </div>
                            </div>

                            <div class="col-md-5 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                    </div>
                                    <select id="btype" class="form-control" name="btype" placeholder="Business Type" required>
                                        <option value="">Choose Type</option>
                                        <option>Retail</option>
                                        <option>Manufacturing</option>
                                        <option>Service</option>
                                        <option>Trade</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-7 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input id="bemail" class="form-control" type="email" name="bemail" placeholder="Business Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-1">
                                <h6 class="text-primary">Admin Information</h6>
                            </div>
                            <div class="col-md-6 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input id="fname" class="form-control" type="text" name="fname" placeholder="Firstname" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input id="lname" class="form-control" type="text" name="lname" placeholder="Lastname" required>
                                </div>
                            </div>

                            <div class="col-md-5 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <select id="role" class="form-control" name="role" required>
                                        <option selected value="">Role..</option>
                                        <option>Manager/CEO</option>
                                        <option>CFO</option>
                                        <option>COO</option>
                                        <option>CTO</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-7 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="Email" maxlength="11" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password" required>                                    
                                </div>
                            </div>

                            <div class="col-md-6 mb-1 px-2">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="confirm_password" class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                    <input type="submit" class="btn btn-primary my-4" name="register" value="Register">
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="login" class="text-primary"><small>Already registered?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="../" class="text-primary"><small>Back to Home</small></a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="../assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>