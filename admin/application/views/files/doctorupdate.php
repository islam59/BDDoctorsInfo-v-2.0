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
    <form action="<?php echo base_url(); ?>Doctor/DoctorUpdateForm" method="post" class="form-horizontal" role="form">

      <div class="form-group">
        <label for="newPassword" class="col-sm-3 control-label"></label>
        <div class="col-sm-9">
          <?php 
              $msg = $this->session->flashdata('msg'); 
              if(isset($msg)){ echo $msg; }
          ?> 
        </div>
      </div>
      <input type="hidden" name="dataid" value="<?php echo $doctor->id; ?>">

      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Doctor Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" value="<?php echo $doctor->name; ?>" >
        </div>
      </div>
      <div class="form-group">
        <label for="division" class="col-sm-3 control-label">Division</label>
        <div class="col-sm-3">
          <input name="division" type="text" class="form-control" id="division" value="<?php echo $doctor->division; ?>">
        </div>
        <label for="district" class="col-sm-3 control-label">District</label>
        <div class="col-sm-3">
          <input name="district" type="text" class="form-control" id="district" value="<?php echo $doctor->district; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="degree" class="col-sm-3 control-label">Degree</label>
        <div class="col-sm-9">
          <input name="degree" type="text" class="form-control" id="degree" value="<?php echo $doctor->degree; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="designationtitle" class="col-sm-3 control-label">Designation Title</label>
        <div class="col-sm-9">
          <input name="designationtitle" type="text" class="form-control" id="designationtitle" value="<?php echo $doctor->designationtitle; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="designationdetails" class="col-sm-3 control-label">Designation Details</label>
        <div class="col-sm-9">
          <textarea name="designationdetails" type="text" class="form-control" id="designationdetails" rows="2">
            <?php echo $doctor->designationdetails; ?>
          </textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="chamber" class="col-sm-3 control-label">Chamber Information</label>
        <div class="col-sm-9">
          <textarea name="chamber" type="text" class="form-control" id="chamber" placeholder="Enter Chamber Information For Multiple Use ',' separator & also with Phone Number !" rows="2">
            <?php echo $doctor->chamber; ?>
          </textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="gender" class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-3">
          <div class="radio">
            <label><input type="radio" name="gender" id="gender" value="Male" <?php if($doctor->gender == 'Male'){ echo "checked"; }?> >Male</label> &nbsp; 
            <label><input type="radio" name="gender" id="gender" value="Female" <?php if($doctor->gender == 'Female'){ echo "checked"; }?> >Female</label>
          </div>
        </div>
        <label for="priority" class="col-sm-3 control-label">Priority</label>
        <div class="col-sm-3">
          <select name="priority" class="form-control" id="priority">
            <option value="">Select Priority</option>
            <option value="0" <?php if($doctor->priority == 0){ echo 'selected'; }?>>Basic</option>
            <option value="1" <?php if($doctor->priority == 1){ echo 'selected'; }?>>Grade-1 </option>
            <option value="2" <?php if($doctor->priority == 2){ echo 'selected'; }?>>Grade-2</option>
            <option value="3" <?php if($doctor->priority == 3){ echo 'selected'; }?>>Grade-3</option>
            <option value="4" <?php if($doctor->priority == 4){ echo 'selected'; }?>>Grade-4</option>
            <option value="5" <?php if($doctor->priority == 5){ echo 'selected'; }?>>Grade-5</option>
            <option value="6" <?php if($doctor->priority == 6){ echo 'selected'; }?>>Premium</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-warning"> Update Doctor Information !</button> &nbsp; 
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

