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
    
<form action="<?php base_url(); ?>OptionFacebook" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="facebook" class="col-sm-3 control-label">Facebook #</label>
    <div class="col-sm-6">
      <input name="facebook" type="text" class="form-control" id="facebook" value="<?php if(isset($sitedata)){ echo $sitedata->facebook; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg1'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Google" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="google" class="col-sm-3 control-label">Google + #</label>
    <div class="col-sm-6">
      <input name="google" type="text" class="form-control" id="google" value="<?php if(isset($sitedata)){ echo $sitedata->google; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg2'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Twitter" method="post" class="form-horizontal" role="form">
   <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="twitter" class="col-sm-3 control-label">Twitter #</label>
    <div class="col-sm-6">
      <input name="twitter" type="text" class="form-control" id="twitter" value="<?php if(isset($sitedata)){ echo $sitedata->twitter; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg3'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Phone" method="post" class="form-horizontal" role="form">
   <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="phone" class="col-sm-3 control-label">phone #</label>
    <div class="col-sm-6">
      <input name="phone" type="text" class="form-control" id="phone" value="<?php if(isset($sitedata)){ echo $sitedata->phone; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg4'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Email" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email #</label>
    <div class="col-sm-6">
      <input name="email" type="email" class="form-control" id="email" value="<?php if(isset($sitedata)){ echo $sitedata->email; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg5'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Website" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="website" class="col-sm-3 control-label">Website #</label>
    <div class="col-sm-6">
      <input name="website" type="text" class="form-control" id="website" value="<?php if(isset($sitedata)){ echo $sitedata->website; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg6'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Develpper" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="twitter" class="col-sm-3 control-label">Developed By #</label>
    <div class="col-sm-3">
      <input name="developed_by" type="text" class="form-control" id="twitter" value="<?php if(isset($sitedata)){ echo $sitedata->developed_by; } ?>">
    </div>
    <div class="col-sm-3">
      <input name="developed_link" type="text" class="form-control" id="twitter" value="<?php if(isset($sitedata)){ echo $sitedata->developed_link; } ?>">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg7'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>

<form action="<?php base_url(); ?>Description" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php if(isset($sitedata)){ echo $sitedata->id; }?>">
  <div class="form-group">
    <label for="description" class="col-sm-3 control-label">Website Description #</label>
    <div class="col-sm-6">
      <textarea name="description" class="form-control" id="description" rows="4"><?php if(isset($sitedata)){ echo $sitedata->description; } ?></textarea>
    </div>
    <div class="col-sm-3"><br/><br/>
      <button type="submit" class="btn btn-primary">Update</button>
      <?php $msg = $this->session->flashdata('msg8'); if(isset($msg)){ echo $msg; } ?> 
    </div>
  </div>
</form>


<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
        </div>  
      </div>
    </div>

