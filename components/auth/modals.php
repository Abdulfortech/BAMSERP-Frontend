<!-----------------------
    Employee Role
--------------------- -->
<!-- add -->
<div class="modal modal fade" id="addEmployeeRole">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Employee Role</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
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
                <input type="submit" name="editProfile" class="btn btn-primary" value="Submit">
            </center>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edit -->
<div class="modal modal fade" id="editEmployeeRole">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Employee Role</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
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
                <input type="submit" name="editProfile" class="btn btn-primary" value="Submit">
            </center>
        </form>
      </div>
    </div>
  </div>
</div>