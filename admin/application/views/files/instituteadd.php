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
  <div class="form form-horizontal" role="form">

    <?php echo form_open_multipart('Institute/InstituteAddForm'); ?>

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
        <label for="name" class="col-sm-3 control-label">Institute Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" placeholder="Enter Institute Name !" >
        </div>
      </div>

      <div class="form-group">
        <label for="type" class="col-sm-3 control-label">Service Type</label>
        <div class="col-sm-9">
          <select name="type" class="form-control" id="type">
            <option value="">Please Select Institute Type</option>
            <option value="Public medical college">Public medical college</option>
            <option value="Semi-public medical college">Semi-public medical college</option>
            <option value="Private medical college">Private medical college</option>
            <option value="Public Dental College">Public Dental College</option>
            <option value="Private Dental College">Private Dental College</option>
            <option value="Nursing Institute">Nursing Institute</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="location" class="col-sm-3 control-label">Institute Location</label>
        <div class="col-sm-9">
          <input name="location" type="text" class="form-control" id="location" placeholder="Enter Location !" >
        </div>
      </div>

      <div class="form-group">
        <label for="weblink" class="col-sm-3 control-label">Web Site Link</label>
        <div class="col-sm-9">
          <input name="weblink" type="text" class="form-control" id="weblink" placeholder="example- https//www.weblink.com">
        </div>
      </div>

      <div class="form-group">
        <label for="images" class="col-sm-3 control-label">Cover Photo</label>
        <div class="col-sm-9">
          <input type="file" name="images" id="images" style="margin-top: 1%; ">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <br/>
          <button type="submit" class="btn btn-primary">Register New Institute !</button> &nbsp; 
          <a href="<?php echo base_url(); ?>Institute/InstituteList" type="submit" class="btn btn-default">Cancel</a>
        </div>
      </div>

    </form>
  </div>
</div>


        </div>  
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
      </div>
    </div>


