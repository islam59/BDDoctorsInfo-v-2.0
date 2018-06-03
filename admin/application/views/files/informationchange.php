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
<div class="col-md-1"></div>
<div class="col-md-9">
    <center><h1 style="color:#028DFA;">Information Update !</h1></center><hr/>

    <form action="<?php base_url(); ?>ChangeInfoForm" method="post" class="form-horizontal" role="form">

      <input type="hidden" name="userid" value="<?php echo $this->session->userdata('userid'); ?>" />   
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
        <label for="username" class="col-sm-3 control-label">Username</label>
        <div class="col-sm-9">
          <input name="username" type="text" class="form-control" id="username" value="<?php echo $userdata->username; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
          <input name="email" type="email" class="form-control" id="email" value="<?php echo $userdata->email; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="phonenumber" class="col-sm-3 control-label">Phone No.</label>
        <div class="col-sm-9">
          <input name="phonenumber" type="text" class="form-control" id="phonenumber" value="<?php echo $userdata->phonenumber; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="address" class="col-sm-3 control-label">Address</label>
        <div class="col-sm-9">
          <textarea name="address" class="form-control" id="address" rows="5">
              <?php echo $userdata->address; ?>
          </textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary">Update Information !</button> &nbsp; 
          <a href="<?php echo base_url(); ?>Profile/SelfProfile" type="submit" class="btn btn-default">Cancel</a>
        </div>
      </div>
    </form>
</div>
<div class="col-md-2"></div>


        </div>  
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
      </div>
    </div>

