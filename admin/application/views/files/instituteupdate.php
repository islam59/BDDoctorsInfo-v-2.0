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

    <?php echo form_open_multipart('Institute/InstituteUpdateForm'); ?>

      <div class="form-group">
        <label for="newPassword" class="col-sm-3 control-label"></label>
        <div class="col-sm-9">
          <?php 
              $msg = $this->session->flashdata('msg'); 
              if(isset($msg)){ echo $msg; }
          ?> 
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $institute->id; ?>">
      <input type="hidden" name="preimage" value="<?php echo $institute->images; ?>">

      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Institute Name</label>
        <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="name" value="<?php echo $institute->name; ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="type" class="col-sm-3 control-label">Service Type</label>
        <div class="col-sm-9">
          <select name="type" class="form-control" id="type">
            <option value="">Please Select Institute Type</option>
            <option value="Public medical college" <?php if ($institute->type == 'Public medical college'){ echo 'selected'; } ?>>Public medical colleges</option>
            <option value="Semi-public medical college" <?php if ($institute->type == 'Semi-public medical college'){ echo 'selected'; } ?>>Semi-public medical colleges</option>
            <option value="Private medical college" <?php if ($institute->type == 'Private medical college'){ echo 'selected'; } ?>>Private medical colleges</option>
            <option value="Public Dental College" <?php if ($institute->type == 'Public Dental College'){ echo 'selected'; } ?>>Public Dental Colleges</option>
            <option value="Private Dental College" <?php if ($institute->type == 'Private Dental College'){ echo 'selected'; } ?>>Private Dental Colleges</option>
            <option value="Nursing Institute" <?php if ($institute->type == 'Nursing Institute'){ echo 'selected'; } ?>>Nursing Institute</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="location" class="col-sm-3 control-label">Institute Location</label>
        <div class="col-sm-9">
          <input name="location" type="text" class="form-control" id="location" value="<?php echo $institute->location; ?>" >
        </div>
      </div>

      <div class="form-group">
        <label for="weblink" class="col-sm-3 control-label">Web Site Link</label>
        <div class="col-sm-9">
          <input name="weblink" type="text" class="form-control" id="weblink" value="<?php echo $institute->weblink; ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="images" class="col-sm-3 control-label">Change Photo</label>
        <div class="col-sm-9">
          <img src="<?php echo base_url(); ?>/Assests/images/institute/<?php echo $institute->images; ?>" alt="N/A" style="width:100px; height: 100px; ">
          <input type="file" name="images" id="images" style="margin-top: 1%; ">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <br/>
          <button type="submit" class="btn btn-warning">Update Institute Information !</button> &nbsp; 
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


