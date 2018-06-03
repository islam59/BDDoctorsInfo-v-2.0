    <div class="row col-md-10 col-lg-10 col-sm-10 row right-menu">
      <h3 class="pageHead">
        <?php if(isset($title)){ echo $title; } ?>
        <span class="pull-right">
          <a href="" class="btn btn-xs btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
        </span>
      </h3><br/>

      <div class="col-md-12" style="height: 450px; overflow-y: scroll; overflow-x: hidden;">
<!-- ##############################################################################################################-->
<!-- ########################################### Content of Page ##################################################-->
<!-- ##############################################################################################################-->

<div class="col-md-10">
    <form action="<?php base_url(); ?>addDoctorForm" method="post" class="form-horizontal" role="form">
      <div class="form-group">
        <label for="newPassword" class="col-sm-3 control-label"></label>
        <div class="col-sm-9">
          <?php 
              $msg = $this->session->flashdata('msg'); 
              if(isset($msg)){ echo $msg; }
          ?> 
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Doctor Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" placeholder="Enter Doctor Name !" >
        </div>
      </div>
      <div class="form-group">
        <label for="division" class="col-sm-3 control-label">Division</label>
        <div class="col-sm-3">
          <input name="division" type="text" class="form-control" id="division" placeholder="Enter Division !">
        </div>
        <label for="district" class="col-sm-3 control-label">District</label>
        <div class="col-sm-3">
          <input name="district" type="text" class="form-control" id="district" placeholder="Enter District !">
        </div>
      </div>
      <div class="form-group">
        <label for="degree" class="col-sm-3 control-label">Degree</label>
        <div class="col-sm-9">
          <input name="degree" type="text" class="form-control" id="degree" placeholder="Enter Doctor's Degree ! For Multiple Degree Use ',' separator">
        </div>
      </div>
      <div class="form-group">
        <label for="designationtitle" class="col-sm-3 control-label">Designation Title</label>
        <div class="col-sm-9">
          <input name="designationtitle" type="text" class="form-control" id="designationtitle" placeholder="Enter Designation Title ! For Multiple Use ',' separator">
        </div>
      </div>
      <div class="form-group">
        <label for="designationdetails" class="col-sm-3 control-label">Designation Details</label>
        <div class="col-sm-9">
          <textarea name="designationdetails" type="text" class="form-control" id="designationdetails" placeholder="Enter Designation Details For Multiple Use ',' separator" rows="2"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="chamber" class="col-sm-3 control-label">Chamber Information</label>
        <div class="col-sm-9">
          <textarea name="chamber" type="text" class="form-control" id="chamber" placeholder="Enter Chamber Information For Multiple Use ',' separator & also with Phone Number !" rows="2"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="gender" class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-3">
          <div class="radio">
            <label><input type="radio" name="gender" id="gender" value="Male">Male</label> &nbsp; 
            <label><input type="radio" name="gender" id="gender" value="Female">Female</label>
          </div>
        </div>
        <label for="priority" class="col-sm-3 control-label">Priority</label>
        <div class="col-sm-3">
          <select name="priority" class="form-control" id="priority">
            <option value="">Select Priority</option>
            <option value="0">Basic</option>
            <option value="1">Grade-1 </option>
            <option value="2">Grade-2</option>
            <option value="3">Grade-3</option>
            <option value="4">Grade-4</option>
            <option value="5">Grade-5</option>
            <option value="6">Premium</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary">Register New Doctor !</button> &nbsp; 
          <a href="<?php echo base_url(); ?>Doctor/DoctorList" type="submit" class="btn btn-default">Cancel</a>
        </div>
      </div>
    </form>
</div>


        </div>  
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
      </div>
    </div>

