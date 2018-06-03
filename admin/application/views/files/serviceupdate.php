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
    <form action="<?php echo base_url(); ?>Service/ServiceUpdateForm" method="post" class="form-horizontal" role="form">
      <div class="form-group">
        <label for="newPassword" class="col-sm-3 control-label"></label>
        <div class="col-sm-9">
          <?php 
              $msg = $this->session->flashdata('msg'); 
              if(isset($msg)){ echo $msg; }
          ?> 
        </div>
      </div>
      <input type="hidden" name="sid" value="<?php echo $service->id; ?>">
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Service Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" value="<?php if(isset($service)){ echo $service->name; } ?>" >
        </div>
      </div>
      <div class="form-group">
        <label for="division" class="col-sm-3 control-label">Division</label>
        <div class="col-sm-3">
          <input name="division" type="text" class="form-control" id="division" value="<?php if(isset($service)){ echo $service->division; } ?>" >
        </div>
        <label for="district" class="col-sm-3 control-label">District</label>
        <div class="col-sm-3">
          <input name="district" type="text" class="form-control" id="district"value="<?php if(isset($service)){ echo $service->district; } ?>" >
        </div>
      </div>
      <div class="form-group">
        <label for="type" class="col-sm-3 control-label">Service Type</label>
        <div class="col-sm-9">
          <select name="type" class="form-control" id="type">
            <option value="">Select Service Type</option>
            <option value="Ambulance" <?php if ($service->type == 'Ambulance' OR $service->type == 'Ambulance Service'){ echo 'selected'; } ?> >Ambulance Service</option>
            <option value="Hospital, Clinic or Diagonstic Center" <?php if ($service->type == 'Hospital' OR $service->type == 'Clinic' OR $service->type == 'Diagonstic Center' OR $service->type == 'Hospital, Clinic or Diagonstic Center'){ echo 'selected'; } ?> >Hospital, Clinic or Diagonstic Center</option>
            <option value="Pharmacy or Medicine Shop" <?php if ($service->type == 'Pharmacy' OR $service->type == 'Medicine Shop' OR $service->type == 'Pharmacy or Medicine Shop'){ echo 'selected'; } ?> >Pharmacy / Medicine Shop</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="contact" class="col-sm-3 control-label">Contact No.</label>
        <div class="col-sm-9">
          <input name="contact" type="text" class="form-control" id="contact" value="<?php if(isset($service)){ echo $service->contact; } ?>" >
        </div>
      </div>
      <div class="form-group">
        <label for="address" class="col-sm-3 control-label">Address</label>
        <div class="col-sm-9">
          <textarea name="address" type="text" class="form-control" id="address" rows="2">
           <?php if(isset($service)){ echo $service->address; } ?>
          </textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="priority" class="col-sm-3 control-label">Priority</label>
        <div class="col-sm-9">
          <div class="radio">
            <label><input type="radio" name="priority" id="priority" value="0" <?php if($service->priority == 0){ echo 'checked'; }?> >Premium</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="1" <?php if($service->priority == 1){ echo 'checked'; }?>>Silver</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="2" <?php if($service->priority == 2){ echo 'checked'; }?>>Bronze</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="3" <?php if($service->priority == 3){ echo 'checked'; }?>>Gold</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="4" <?php if($service->priority == 4){ echo 'checked'; }?>>Diamond</label> &nbsp; 
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <br/>
          <button type="submit" class="btn btn-warning">Update Service Information !</button> &nbsp; 
          <a href="<?php echo base_url(); ?>Service/ServiceList" type="submit" class="btn btn-default">Cancel</a>
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

