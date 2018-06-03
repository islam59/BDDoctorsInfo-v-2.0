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
<div class="col-md-2"></div>
<div class="col-md-8">
    <center><h1 style="color:#028DFA;">Password Change !</h1></center><hr/>

    <form action="<?php base_url(); ?>ChangePasswordForm" method="post" class="form-horizontal" role="form">

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
        <label for="newPassword" class="col-sm-3 control-label">New Password</label>
        <div class="col-sm-9">
          <input name="newpassword" type="password" class="form-control" id="newPassword" placeholder="Enter New Password !" >
        </div>
      </div>
      <div class="form-group">
        <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password</label>
        <div class="col-sm-9">
          <input name="confirmpassword" type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password !">
        </div>
      </div>
      <div class="form-group">
        <label for="oldPassword" class="col-sm-3 control-label">Old Password</label>
        <div class="col-sm-9">
          <input name="oldpassword" type="password" class="form-control" id="oldPassword" placeholder="Enter Old Password" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary">Change Password !</button> &nbsp; 
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

