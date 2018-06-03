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
    <form action="<?php echo base_url(); ?>Service/ServiceAddForm" method="post" class="form-horizontal" role="form">
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
        <label for="name" class="col-sm-3 control-label">Service Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" placeholder="Enter Service Name !" >
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
        <label for="type" class="col-sm-3 control-label">Service Type</label>
        <div class="col-sm-9">
          <select name="type" class="form-control" id="type">
            <option value="">Select Service Type</option>
            <option value="Ambulance">Ambulance Service</option>
            <option value="Hospital, Clinic or Diagonstic Center">Hospital, Clinic or Diagonstic Center</option>
            <option value="Pharmacy or Medicine Shop">Pharmacy / Medicine Shop</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="contact" class="col-sm-3 control-label">Contact No.</label>
        <div class="col-sm-9">
          <input name="contact" type="text" class="form-control" id="contact" placeholder="Enter Contact Number Title ! For Multiple Use ',' separator">
        </div>
      </div>
      <div class="form-group">
        <label for="address" class="col-sm-3 control-label">Address</label>
        <div class="col-sm-9">
          <textarea name="address" type="text" class="form-control" id="address" placeholder="Enter Address ! For Multiple Use ',' separator" rows="2"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="priority" class="col-sm-3 control-label">Priority</label>
        <div class="col-sm-9">
          <div class="radio">
            <label><input type="radio" name="priority" id="priority" value="0" checked>Premium</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="1">Silver</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="2">Bronze</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="3">Gold</label> &nbsp; 
            <label><input type="radio" name="priority" id="priority" value="4">Diamond</label> &nbsp; 
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <br/>
          <button type="submit" class="btn btn-primary">Register New Service !</button> &nbsp; 
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

