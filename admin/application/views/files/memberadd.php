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
<div class="col-md-10">
    <center><h4 style="color:#028DFA;">Register New User !</h4></center>
    <form action="<?php base_url(); ?>addMemberForm" method="post" class="form-horizontal" role="form">
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
          <input name="username" type="text" class="form-control" id="username" placeholder="Enter Username !" >
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
          <input name="email" type="email" class="form-control" id="email" placeholder="e.g- example@email.com">
        </div>
      </div>
      <div class="form-group">
        <label for="phonenumber" class="col-sm-3 control-label">Phone</label>
        <div class="col-sm-9">
          <input name="phonenumber" type="text" class="form-control" id="phonenumber" placeholder="Example- +880 XXXX XXXXXX">
        </div>
      </div>
      <div class="form-group">
        <label for="address" class="col-sm-3 control-label">Address</label>
        <div class="col-sm-9">
          <textarea name="address" type="text" class="form-control" id="address" placeholder="Enter Address" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="role" class="col-sm-3 control-label">User Role</label>
        <div class="col-sm-9">
          <select name="userrole" class="form-control" id="role">
            <option value="">Select User Role</option>
            <option value="Admin">Admin</option>
            <option value="Director">Director</option>
            <option value="Editor">Editor</option>
            <option value="Operator">Operator</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-9">
          <input name="password" type="text" class="form-control" id="password" placeholder="Enter Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary">Register New User !</button> &nbsp; 
          <a href="<?php echo base_url(); ?>Member/MemberList" type="submit" class="btn btn-default">Cancel</a>
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

