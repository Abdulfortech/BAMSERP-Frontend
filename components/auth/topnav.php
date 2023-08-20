<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" >
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Search form -->
      <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main"  method="post" action="search">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative input-group-merge">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search ..." type="search" name="searchdata" id="searchdata">
            <button class="" name="search" type="submit" hidden></i></button>
          </div>
        </div>
        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </form>

      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center  ml-md-auto ">
        <li class="nav-item d-xl-none">
          <!-- Sidenav toggler -->
          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
        <li class="nav-item d-sm-none">
          <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
            <i class="ni ni-zoom-split-in"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-fat-add" style="font-size:24px;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
            <div class="row shortcuts px-4">
              <a href="employee-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                  <i class="fa fa-users"></i>
                </span>
                <small>Employee</small>
              </a>
              <a href="service-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="ni ni-building"></i>
                </span>
                <small>Services</small>
              </a>
              <a href="client-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="fa fa-users"></i>
                </span>
                <small>Client</small>
              </a>
              <a href="transaction-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="ni ni-credit-card"></i>
                </span>
                <small>Transaction</small>
              </a>
              <a href="gallery-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="ni ni-image"></i>
                </span>
                <small>Gallery</small>
              </a>
              <a href="expense-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="ni ni-book-bookmark"></i>
                </span>
                <small>Expense</small>
              </a>
              <a href="wage-add" class="col-4 shortcut-item text-center">
                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                  <i class="ni ni-money-coins"></i>
                </span>
                <small>Wage</small>
              </a>
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../assets/img/kwalisa blue.png">
              </span>
              <div class="media-body  ml-2  d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">username</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu  dropdown-menu-right ">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="profile" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="settings" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <div class="dropdown-divider"></div>
            <a data-toggle="modal" data-target="#logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Sign Out</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header -->

<!-- signin action modal -->
<div class="modal modal fade" id="logout">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign Out</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <center>
          <h4>Are you sure you want to sign out?</h4>
          <a href="logout" class="btn btn-primary mb-1"><i class="fa fa-power"></i> Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </center>
      </div>
    </div>
  </div>
</div>
