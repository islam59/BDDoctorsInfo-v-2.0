
		<div class="row col-md-10 col-lg-10 col-sm-10 row right-menu">
			<h3 class="pageHead">
				<?php if(isset($title)){ echo $title; } ?>
				<span class="pull-right">
					<a href="<?php echo base_url(); ?>Slider/SliderList" class="btn btn-xs btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Back To List</a>
					<a href="" class="btn btn-xs btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
				</span>
			</h3><br/>

			<div class="col-md-12" style="height: 450px; overflow-y: scroll; overflow-x: hidden;">
<!-- ##############################################################################################################-->
<!-- ########################################### Content of Page ##################################################-->
<!-- ##############################################################################################################-->

					<div class="col-md-3 col-sm-12 col-lg-3"></div>
					<div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5px;  border-radius: 0px; ">
							<div class="modal-content" style="border-radius: 0px;">
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white; margin-bottom: -10px; ">
								<h5>Update Slider !</h5>
							  </div>
    							<?php echo form_open_multipart('Slider/SliderUpdateForm'); ?>
								  <div class="modal-body" style="text-align: center; margin-bottom: -10px; ">
								  	<input type="hidden" name="id" value="<?php echo $slider->id; ?>">
								  	<input type="hidden" name="preimage" value="<?php echo $slider->images; ?>">

								  	<input type="text" name="title" class="form-control" value="<?php echo $slider->title; ?>" ><br/>
								  	<textarea name="body" class="form-control" rows="3" placeholder="Enter Slider Content">
								  		<?php echo $slider->body; ?>
								  	</textarea><br/>
								  	<p>
								  		<img src="<?php echo base_url(); ?>Assests/images/slider/<?php echo $slider->images; ?>" style="width:100%; height:100px; ">
								  	</p>
								  	<input type="file" name="images" class="form-control"><br/>
								  </div>
							  		<div class="modal-footer">
										<?php 
              								$msg = $this->session->flashdata('msg'); 
              								if(isset($msg)){ echo $msg; }
          								?> &nbsp; &nbsp; 
							  			<button type="submit" class="btn btn-sm btn-warning">Upload New !</button>
							  			<a href="<?php echo base_url(); ?>Slider/SliderList" class="btn btn-sm btn-default">Back To List !</a>
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


