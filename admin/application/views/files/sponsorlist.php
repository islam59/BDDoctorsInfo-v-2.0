
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
				   <h3 style="font-weight: bold; "> 
				   		&nbsp; <i class="fa fa-audio-description" aria-hidden="true"></i>
				   		Special Adds <small>Header, Footer & Contact</small><hr/>
				   </h3>

<!-- ######################################################################################################################### -->
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
								<div class="modal-header" style="margin: -20px 0px;">
									<h3>Header Adds <?php  $msg = $this->session->flashdata('msgHeader'); if(isset($msg)){ echo $msg; } ?></h3>
								</div>
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->header; ?>" alt="header-add-img" style="width:100%; height: 150px;"/>
							  </div>
							  <div class="modal-footer">
							  	<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalHeader">Update Header Adds</a>
							  </div>
							</div>
					</div>

					<!--Modal for Header-->
						<div class="modal fade" id="myModalHeader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<?php echo form_open_multipart('Sponsor/SponsorHeaderAdd'); ?>
						  		<input type="hidden" name="id" value="<?php echo $special->id; ?>">
						  		<input type="hidden" name="preimage" value="<?php echo $special->header; ?>">
							    <div class="modal-content">
							     	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="myModalLabel">Header Page Adds</h4>
							      	</div>
									<div class="modal-body" style="text-align: center;">
										<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->header; ?>" alt="prescription-image" style="width:100%; height: 250px;"/>
									</div>
									<div class="modal-body" style="text-align: center;">
										<input type="file" name="images" class="form-control">
									</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							</form>
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<!--End : modal header..-->
<!-- ######################################################################################################################### -->


					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
								<div class="modal-header" style="margin: -20px 0px;">
									<h3>Footer Adds <?php  $msg = $this->session->flashdata('msgFooter'); if(isset($msg)){ echo $msg; } ?></h3>
								</div>
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->footer; ?>" alt="Footer-Image" style="width:100%; height: 150px;"/>
							  </div>

							  <div class="modal-footer">
							  	<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalFooter">Update Footer Adds</a>
							  </div>
							</div>
					</div>
					<!--Modal for Header-->
						<div class="modal fade" id="myModalFooter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<?php echo form_open_multipart('Sponsor/SponsorFooterAdd'); ?>
						  		<input type="hidden" name="id" value="<?php echo $special->id; ?>">
						  		<input type="hidden" name="preimage" value="<?php echo $special->footer; ?>">
							    <div class="modal-content">
							     	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="myModalLabel">Footer Page Adds</h4>
							      	</div>
									<div class="modal-body" style="text-align: center;">
										<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->footer; ?>" alt="prescription-image" style="width:100%; height: 250px;"/>
									</div>
									<div class="modal-body" style="text-align: center;">
										<input type="file" name="images" class="form-control">
									</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							</form>
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<!--End : modal header..-->
<!-- ########################################################################################################################### -->


					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
						<div class="modal-content" style="border-radius: 0px;">
							<div class="modal-header" style="margin: -20px 0px;">
								<h3>Contact Adds <?php  $msg = $this->session->flashdata('msgContact'); if(isset($msg)){ echo $msg; } ?></h3>
							</div>
						    <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->contact; ?>" alt="Contact-Image" style="width:100%; height: 150px;"/>
						    </div>

						    <div class="modal-footer">
						  		<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalContact">Update Contact Adds</a>
						  	</div>
						</div>
					</div>
					<!--Modal for Header-->
						<div class="modal fade" id="myModalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<?php echo form_open_multipart('Sponsor/SponsorContactAdd'); ?>
						  		<input type="hidden" name="id" value="<?php echo $special->id; ?>">
						  		<input type="hidden" name="preimage" value="<?php echo $special->contact; ?>">
							    <div class="modal-content">
							     	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="myModalLabel">Contact Page Adds</h4>
							      	</div>
									<div class="modal-body" style="text-align: center;">
										<img src="<?php echo base_url(); ?>/Assests/images/specialadds/<?php echo $special->contact; ?>" alt="prescription-image" style="width:100%; height: 250px;"/>
									</div>
									<div class="modal-body" style="text-align: center;">
										<input type="file" name="images" class="form-control">
									</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							</form>
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<!--End : modal header..-->
<!-- ######################################################################################################################### -->



<!--############################################################################################################################-->
<!--##############################################New Slider form ##############################################################-->
<!--############################################################################################################################-->
					<div class="col-sm-12 col-md-12 col-lg-12"><br/><br/>
					   <h3 style="font-weight: bold; "> 
					   		&nbsp; <i class="fa fa-audio-description" aria-hidden="true"></i>
					   		Page Adds <small>Adds for Home, Doctor, Medicine, Ambulance etc. </small>
					   		<?php  $msg = $this->session->flashdata('msgDelPageADDS'); if(isset($msg)){ echo $msg; } ?>
					   		<hr/>
					   </h3>	
					</div>
<?php
	$i = 0; 
	foreach ($pageadds as $pageadd) {
		$i++; 
?>
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<?php echo 'Page Add # '.$i; ?>
							  </div>
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/pageadds/<?php echo $pageadd->image; ?>" alt="prescription-image" style="width:100%; height: 150px;"/>
							  </div>
							  <div class="modal-body" style="background-color: rgba(00,33,44, 0.1); max-height: 50px; min-height: 50px; overflow-y: hidden;">

									<div class="btn-group">
<?php 
	$priority = $pageadd->priority;
	if($priority == 1){
?>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default" ><a href="<?php echo base_url(); ?>Sponsor/pTwo/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThree/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFive/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 2) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOne/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThree/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFive/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 	
	}elseif ($priority == 3) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOne/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwo/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFive/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 4) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOne/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwo/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pThree/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFive/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 5) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOne/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwo/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pThree/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:white; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}else{
?>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pOne/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default" ><a href="<?php echo base_url(); ?>Sponsor/pTwo/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThree/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFour/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFive/<?php echo $pageadd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}
?>										
									</div>

									<!-- -->
									<div class="btn-group pull-right clearfix" >
<?php 
	$status = $pageadd->status; 
	if($status == 1){
?>
	<a href="" class="btn btn-sm btn-success" style="color:white;  ">ON</a>
	<a class="btn btn-sm btn-default" href="<?php echo base_url(); ?>Sponsor/AccessOff/<?php echo $pageadd->id; ?>" style="color:black;">OFF</a>
<?php 
	}else{
?>
	<a class="btn btn-sm btn-default" href="<?php echo base_url(); ?>Sponsor/AccessOn/<?php echo $pageadd->id; ?>" style="color:black; display: block;">ON</a>
	<a class="btn btn-sm btn-success" href="" style="color:white; ">OFF</a>
<?php 
	}
?>


									</div>	
							  </div>
							  <div class="modal-footer">
							  	<a href="<?php echo base_url(); ?>Sponsor/SponsorUpdate/<?php echo $pageadd->id; ?>" data-toggle="modal" data-target="#myModalContact<?php echo $pageadd->id; ?>" class="btn btn-sm btn-warning">Update</a>
							  	<a href="<?php echo base_url(); ?>Sponsor/SponsorDeletePageAdd/<?php echo $pageadd->id; ?>/<?php echo $pageadd->image; ?>" class="btn btn-sm btn-danger">Remove</a>
							  </div>
							</div>
					</div>

					<!--Modal for Header-->
						<div class="modal fade" id="myModalContact<?php echo $pageadd->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<?php echo form_open_multipart('Sponsor/pageAddsUpdate'); ?>
						  		<input type="hidden" name="id" value="<?php echo $pageadd->id; ?>">
						  		<input type="hidden" name="preimage" value="<?php echo $pageadd->image; ?>">
							    <div class="modal-content">
							     	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="myModalLabel"><?php echo 'PageAdds ID #0'.$i; ?></h4>
							      	</div>
									<div class="modal-body" style="text-align: center;">
										<img src="<?php echo base_url(); ?>/Assests/images/pageadds/<?php echo $pageadd->image; ?>" alt="no-image" style="width:100%; height: 250px;"/>
									</div>
									<div class="modal-body" style="text-align: center;">
										<input type="file" name="image" class="form-control">
									</div>
									<div class="modal-body" style="text-align: center;">
										<input type="text" name="weblink" class="form-control" value="<?php if(!empty($pageadd->weblink)){echo $pageadd->weblink; }else{ echo 'N/A'; } ?>">
									</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							</form>
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<!--End : modal header..-->

<?php 
}//end of foreeach... pageadds...
?>
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px;  border-radius: 0px; margin-top: 30px;">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<h5>+ New Page Adds</h5>
							  </div>
    							<?php echo form_open_multipart('Sponsor/savePageAddForm'); ?>
								  <div class="modal-body" style="text-align: center;">
								  	<input type="text" name="weblink" class="form-control" placeholder="Enter Weblink !"><br/>
								  	<input type="file" name="image" class="form-control"><br/>
								  </div>
							  		<div class="modal-footer">
							  			<button type="submit" class="btn btn-sm btn-primary">Upload New !</button>
							 		</div>
								</form>
							</div>
					</div>		
<!--############################################################################################################################-->
<!--############################################################################################################################-->
<!--############################################################################################################################-->
<!--############################################################################################################################-->
<!--############################################################################################################################-->

					<div class="col-sm-12 col-md-12 col-lg-12"><br/><br/>
					   <h3 style="font-weight: bold; "> 
					   		&nbsp; <i class="fa fa-audio-description" aria-hidden="true"></i>
					   		Sidebar Adds <small>Adds for All Pages. </small>
					   		<?php  $msg = $this->session->flashdata('sidebarMsg'); if(isset($msg)){ echo $msg; } ?>
					   		<hr/>
					   </h3>	
					</div>
<?php
	$i = 0; 
	foreach ($sidebaradds as $sidebaradd) {
		$i++; 
?>
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<?php echo 'Sidebar Add # '.$i; ?>
							  </div>
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/sidebaradds/<?php echo $sidebaradd->image; ?>" alt="prescription-image" style="width:100%; height: 150px;"/>
								<br/>
							  </div>
							  <div class="modal-header" style="font-size: 1em; font-weight: bold; ">
								<?php echo $sidebaradd->title;  ?>
							  </div>
							  <div class="modal-body" style="text-align: justify;" style="background-color: red; min-height: 150px; ">
								<span><?php echo substr($sidebaradd->body, 0, 140); ?></span>
								<?php if(!empty($sidebaradd->weblink)){ ?>
								<span><a href="<?php echo $sidebaradd->weblink; ?>" target="_blank;">Go !</a></span>
								<?php } ?>
							  </div>

							  <div class="modal-body" style="background-color: rgba(00,33,44, 0.1); max-height: 50px; min-height: 50px; overflow-y: hidden;">

									<div class="btn-group">
<?php 
	$priority = $sidebaradd->priority;
	if($priority == 1){
?>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default" ><a href="<?php echo base_url(); ?>Sponsor/pTwoSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThreeSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFiveSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 2) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOneSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThreeSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFiveSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 	
	}elseif ($priority == 3) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOneSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwoSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFiveSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 4) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOneSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwoSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pThreeSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFiveSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}elseif ($priority == 5) {
?>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pOneSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info" ><a href="<?php echo base_url(); ?>Sponsor/pTwoSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pThreeSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:white; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-info"><a href="" style="color:white; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}else{
?>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pOneSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-empty" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default" ><a href="<?php echo base_url(); ?>Sponsor/pTwoSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-quarter" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pThreeSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-half" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFourSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></a></label>
<label class="btn btn-sm btn-default"><a href="<?php echo base_url(); ?>Sponsor/pFiveSidebar/<?php echo $sidebaradd->id; ?>" style="color:teal; "><i class="fa fa-battery-full" aria-hidden="true"></i></a></label>
<?php 
	}
?>										
									</div>

									<!-- -->
									<div class="btn-group pull-right clearfix" >
<?php 
	$status = $sidebaradd->status; 
	if($status == 1){
?>
	<a href="" class="btn btn-sm btn-success" style="color:white;  ">ON</a>
	<a class="btn btn-sm btn-default" href="<?php echo base_url(); ?>Sponsor/AccessOffSidebarAdd/<?php echo $sidebaradd->id; ?>" style="color:black;">OFF</a>
<?php 
	}else{
?>
	<a class="btn btn-sm btn-default" href="<?php echo base_url(); ?>Sponsor/AccessOnSidebarAdd/<?php echo $sidebaradd->id; ?>" style="color:black; display: block;">ON</a>
	<a class="btn btn-sm btn-success" href="" style="color:white; ">OFF</a>
<?php 
	}
?>


									</div>	
							  </div>
							  <div class="modal-footer">
							  	<a href="<?php echo base_url(); ?>Sponsor/SponsorUpdate/<?php echo $sidebaradd->id; ?>" data-toggle="modal" data-target="#myModalContact<?php echo $sidebaradd->id; ?>" class="btn btn-sm btn-warning">Update</a>
							  	<a href="<?php echo base_url(); ?>Sponsor/SidebarDeleteAdd/<?php echo $sidebaradd->id; ?>/<?php echo $sidebaradd->image; ?>" class="btn btn-sm btn-danger">Remove</a>
							  </div>
							</div>
					</div>

					<!--Modal for Header-->
						<div class="modal fade" id="myModalContact<?php echo $sidebaradd->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<?php echo form_open_multipart('Sponsor/sidebarAddsUpdate'); ?>
						  		<input type="hidden" name="id" value="<?php echo $sidebaradd->id; ?>">
						  		<input type="hidden" name="preimage" value="<?php echo $sidebaradd->image; ?>">
							    <div class="modal-content">
							     	<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="myModalLabel"><?php echo 'Sidebar Adds ID #0'.$i; ?></h4>
							      	</div>
									<div class="modal-body" style="text-align: center;">
										<img src="<?php echo base_url(); ?>/Assests/images/sidebaradds/<?php echo $sidebaradd->image; ?>" alt="no-image" style="width:100%; height: 130px;"/>
									</div>
									<div class="modal-body">
										<input type="file" name="image" class="form-control"><br/>
										<input type="text" name="title" class="form-control" value="<?php echo $sidebaradd->title; ?>"><br/>
										<textarea name="body" class="form-control" rows="4"><?php echo $sidebaradd->body; ?></textarea><br/>
										<input type="text" name="weblink" class="form-control" value="<?php echo $sidebaradd->weblink; ?>">
									</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							</form>
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<!--End : modal header..-->

<?php 
}//end of foreeach... pageadds...
?>
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px;  border-radius: 0px;">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<h5>+ New Sidebar Adds</h5>
							  </div>
    							<?php echo form_open_multipart('Sponsor/saveSidebarAddForm'); ?>
								  <div class="modal-body">
								  	<input type="text" name="title" class="form-control" placeholder="Enter Weblink !"><br/>
								  	<textarea name="body" class="form-control" rows="4" placeholder="Enter Adds Body Content !"></textarea><br/>
								  	<input type="text" name="weblink" class="form-control" placeholder="Enter Weblink !"><br/>
								  	<input type="file" name="image" class="form-control"><br/>
								  </div>
							  		<div class="modal-footer">
							  			<button type="submit" class="btn btn-sm btn-primary">Upload New !</button>
							 		</div>
								</form>
							</div>
					</div>	

<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>



