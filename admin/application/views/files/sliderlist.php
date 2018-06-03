
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
								  	<p>
										<?php 
              								$msg = $this->session->flashdata('msg'); 
              								if(isset($msg)){ echo $msg; }
          								?> 
								  	</p>
<?php 
	foreach ($sliderdata as $slider) {
?>
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px; border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>/Assests/images/slider/<?php echo $slider->images; ?>" alt="prescription-image" style="width:100%; height: 150px;"/>
							  </div>
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<?php echo $slider->title; ?>
							  </div>
							  <div class="modal-body" style="background-color: rgba(00,33,44, 0.1); max-height: 100px; min-height: 100px; overflow-y: hidden;">
								<p style="color:teal; text-align: center;">
									<?php echo $slider->body; ?>								
								</p>
							  </div>
							  <div class="modal-footer">
							  	<a href="<?php echo base_url(); ?>Slider/SliderUpdate/<?php echo $slider->id; ?>" class="btn btn-sm btn-primary">Update</a>
							  	<a href="<?php echo base_url(); ?>Slider/SliderDelete/<?php echo $slider->id; ?>/<?php echo $slider->images; ?>" class="btn btn-sm btn-danger">Remove</a>
							  </div>
							</div>
					</div>
<?php 
	}//end of foreach slider datalist... 
?>
<!--##############################################################################################################################-->
<!--################################################New Slider form ##############################################################-->
<!--##############################################################################################################################-->
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px;  border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<h5>Add New Slider</h5>
							  </div>
    							<?php echo form_open_multipart('Slider/SliderAddForm'); ?>
								  <div class="modal-body" style="text-align: center;">
								  	<input type="text" name="title" class="form-control" placeholder="Enter Slider Title !"><br/>
								  	<textarea name="body" class="form-control" rows="4" placeholder="Enter Slider Content"></textarea><br/>
								  	<input type="file" name="images" class="form-control"><br/>
								  </div>
							  		<div class="modal-footer">
							  			<button type="submit" class="btn btn-sm btn-primary">Upload New !</button>
							 		</div>
								</form>
							</div>
					</div>		
<!--##############################################################################################################################-->

<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>



