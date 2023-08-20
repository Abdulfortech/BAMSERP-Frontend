
<!-- service action modal -->
<div class="modal modal fade" id="actionService">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actions For Service</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <center>
          <a href="service-edit.php?edit=<?php echo $serviceid;?>" class="btn btn-primary mb-1"><i class="fa fa-edit"></i> Edit</a>
          <a href="service-records.php?svcrec=<?php echo $serviceid;?>" class="btn btn-info mb-1"><i class="fa fa-table"></i> Records</a>
          <a href="invoice-add.php?service=<?php echo $serviceid;?>" class="btn btn-info mb-1"><i class="fa fa-file"></i> Invoice</a>
          <?php if ($status == '1') {?>
          <a href="action.php?action=DeactivateSVC&sid=<?php echo $serviceid;?>" class="btn btn-warning mb-1">Deactivate</a>
          <?php }elseif ($status == '2'){?>
          <a href="action.php?action=ActivateSVC&sid=<?php echo $serviceid;?>" class="btn btn-success mb-1">Activate</a>
          <?php }?>
          <a href="action.php?action=DeleteSVC&sid=<?php echo $serviceid;?>" class="btn btn-danger mb-1">Delete</a>
        </center>
      </div>
    </div>
  </div>
</div>
<!-- service completion Modal -->
<div class="modal modal fade" id="completService">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Service Completion Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php">
          <input type="text" name="service" value="<?php echo $serviceid;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-6">
                <label for="optiona">Expected Completion Date</label>
                <input class="form-control" type="date" name="etime" value="<?= $ftime?>" readonly>
              </div>
              <div class="col-md-6">
                <label for="optiona">Exact Completion Date</label>
                <input class="form-control" type="date" name="cdate" required>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="finishService" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add client Modal -->
<div class="modal modal fade" id="addClientModal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Client</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="inprocess.php">
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-8">
                <label for="optiona">Name </label>
                <input class="form-control" type="text" name="name" required>
              </div>
              <div class="col-md-4">
                <label for="optiona">Category</label>
                <select class="form-control" name="category" required>
                  <option selected value="">Choose..</option>
                  <option>Organization</option>
                  <option>Individual</option>
                  <option>Company</option>
                  <option>Goverment</option>
                  <option>Others</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-6">
                <label for="optiona">Phone Number 1 *</label>
                <input class="form-control" type="number" name="phone1" required>
              </div>
              <div class="col-md-6">
                <label for="optiona">Phone Number 2</label>
                <input class="form-control" type="number" name="phone2">
              </div>
            </div>
          </div>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-6">
                <label>State</label>
                <select   onchange="toggleLGA(this);" name="state" id="state"  class="form-control" required>
                  <option selected value="">Choose..</option>
                  <?php include 'state-list.php';?>
                </select>
              </div>
              <div class="col-md-6">
                <label>Local Goverment Area</label>
                <select name="lga" id="lga" class="form-control select-lga" required >
                </select>
              </div>
              <div class="col-md-12">
                <label for="optiona">Address</label>
                <input class="form-control" type="text" name="address" required>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="addClient2" class="btn btn-primary" value="Add Client">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- editGallery Modal -->
<div class="modal modal fade" id="editGallery">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Picture Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="gallery" value="<?php echo $galleryid;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-12">
                <label for="optiona">Description</label>
                <textarea class="form-control" name="desc" maxlength="100"><?php echo $desc;?></textarea>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="editGallery" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- editGalleryPic Modal -->
<div class="modal modal fade" id="editGalleryPic">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Change Picture</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="gallery" value="<?php echo $galleryid;?>" hidden>
          <input type="text" name="type" value="<?php echo $type;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-12">
                <img src="<?php echo $url;?>" class="picture" width="450">
              </div>
              <div class="col-md-12 mt-1">
                <label for="optiona">Upload New Picture</label>
                <input type="file" name="upload" id="upload" class="form-control" required>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="editGalleryPic" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- pictureEdit Modal -->
<div class="modal modal fade" id="pictureEdit">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Employee Picture</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="edate" value="<?php echo $edate;?>" hidden>
          <input type="text" name="employee" value="<?php echo $employeeid;?>" hidden>
          <div  class="form-group text-center">
            <img src="<?php echo $picture;?>" width="200" height="200" class="rounded-circle mb-3">
            <br>
            <label class="text-left">New Picture</label>
            <input type="file" name="upload" id="upload" class="form-control" required>
          </div>
          <center>
            <input type="submit" class="btn btn-primary" name="editPic" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- fileEdit Modal -->
<div class="modal modal fade" id="fileEdit">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Employee File</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="employee" value="<?php echo $employeeid;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-12 mt-1">
                <label for="optiona">New File Picture</label>
                <input type="file" name="upload" id="upload" class="form-control" required>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="fileEdit" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- IDEdit Modal -->
<div class="modal modal fade" id="idEdit">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Employee ID Card</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="employee" value="<?php echo $employeeid;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-12 mt-1">
                <label for="optiona">New ID Card Picture</label>
                <input type="file" name="upload" id="upload" class="form-control" required>
              </div>
            </div>
          </div>
          <center>
            <input type="submit" name="idEdit" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- company Modal -->
<div class="modal modal fade" id="editCompany">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Company Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form  method="POST" action="process.php" enctype="multipart/form-data">
          <input type="text" name="company" value="<?php echo $companyid;?>" hidden>
          <div class="form-group text-left">
            <div class="row">
              <div class="col-md-12">
                <label for="optiona">Company Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-md-12">
                <label for="optiona">Type</label>
                <select class="form-control" name="type" required>
                  <option><?php echo $type;?></option>
                  <option>Construction</option>
                </select>
              </div>
              <div class="col-md-12">
                <label for="optiona">Description</label>
                <textarea class="form-control" name="desc" maxlength="100"><?php echo $desc;?></textarea>
              </div>
              <div class="col-md-6">
                <label for="optiona">Phone Number</label>
                <input type="number" class="form-control" name="phone1" value="<?php echo $phone1;?>" required>
              </div>
              <div class="col-md-6">
                <label for="optiona">Phone Number (Optional)</label>
                <input type="number" class="form-control" name="phone2" value="<?php echo $phone2;?>">
              </div>
              <div class="col-md-7">
                <label for="optiona">Email (Optional)</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
              </div>
              <div class="col-md-5">
                <label for="optiona">Website (Optional)</label>
                <input type="text" class="form-control" name="website" value="<?php echo $website;?>">
              </div>
              <div class="col-md-12">
                <label for="optiona">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $address;?>" required>
              </div>
              <div class="col-md-12">
                <label for="optiona">Account Name</label>
                <input type="text" class="form-control" name="accname" value="<?php echo $accname;?>" required>
              </div>
              <div class="col-md-6">
                <label for="optiona">Account Number</label>
                <input type="number" class="form-control" name="accnumber" value="<?php echo $accnumber;?>" required>
              </div>
              <div class="col-md-6">
                <label for="optiona">Bank</label>
                <input type="text" class="form-control" name="bank" value="<?php echo $phone1;?>" required>
              </div>

            </div>
          </div>
          <center>
            <input type="submit" name="editCompany" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- addInvoice Modal -->
<div class="modal modal fade" id="addInvoice">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Invoice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form  method="POST" action="invoice-add.php" enctype="multipart/form-data">
          <input type="text" name="gallery" value="<?php echo $galleryid;?>" hidden>
          <div class="form-group text-left">
            <label for="optiona">Clients</label>
            <select class="form-control" name="client" required>
              <option selected value="">Choose..</option>
              <?php
              $services = $conn->query("SELECT * FROM services WHERE status is not null ORDER BY service_id DESC") or die($conn->error);
              while ($row3 = $services->fetch_assoc()) { ?>
              <option value="<?php echo $row3['service_id'];?>"><?php echo $row3['title'];?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group text-left">
            <label for="optiona">Service</label>
            <select class="form-control" name="service" required>
              <option selected value="">Choose..</option>
              <?php
              $services = $conn->query("SELECT * FROM services WHERE status is not null ORDER BY service_id DESC") or die($conn->error);
              while ($row3 = $services->fetch_assoc()) { ?>
              <option value="<?php echo $row3['service_id'];?>"><?php echo $row3['title'];?></option>
              <?php }?>
            </select>
          </div>
          <center>
            <input type="submit" name="addInvoice" class="btn btn-primary" value="Create">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </center>
        </form>
      </div>

    </div>
  </div>
</div>