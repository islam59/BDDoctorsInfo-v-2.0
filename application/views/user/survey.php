	<div class="down-bottom container">
		<img src="<?php echo base_url(); ?>assets/images/add/7.jpg" alt="" style="width:100%; height:100%; "/>
	</div><!---->
	
<!-- ------------------------------------------------------- -->

	<section class="section-survey container">
		<div class="home-survey">

			<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="page-header">
				  <h3>Prescription Survey<small>// <a href="#">Click Here <span class="badge"><?php if(isset($surveyamount)){ echo $surveyamount; } ?></span></a></small></h3>
				</div>
				<div class="survey-home clearfix">		

						<div class="row">
<?php 
    foreach ($surveydata as $data) {
?>
						  <div class="col-sm-12 col-md-3">
						    <div class="thumbnail">
						      <img src="<?php echo base_url(); ?>assets/images/survey/<?php echo $data->image; ?>" class="img-responsive survey-img" style="width:100%; height:250px;" />
						      <div class="caption">
						        <h3>Thumbnail label</h3>
						        <p style="color:gray; ">Posted# 34 Jan 2017</p>
						        <p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModalSurvey<?php echo $data->id; ?>">View</a></p>
						      </div>
						    </div>
						  </div>
						<!-- Modal -->
						<div class="modal fade" id="myModalSurvey<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel" style="color:#024; font-weight: bold; text-transform: uppercase;"><small>Posted By-</small><?php echo $data->user_id; ?></h4>
							  </div>
							  <div class="modal-body">
								<img src="<?php echo base_url(); ?>assets/images/survey/<?php echo $data->image; ?>" alt="prescription-image" style="width:100%; "/>
							  </div>
							  <div class="modal-body">
								<span style="color:teal;">Publisherd Date# <?php echo $data->post_at; ?></span>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div><!-- Modal -->
<?php 	} //end of foreach ...?>				
						</div>
					<!--survey report end..-->


	
				</div>
				<br/><br/>
				<button class="btn btn-primary clearfix" type="button">
				  Survey Reports <span class="badge">142</span>
				</button>
				<br/>
				<span class="main-home"><Br/>
					<img src="<?php echo base_url(); ?>assets/images/add/6.jpg" class="img-responsive"  style="height: 120px; width:100%; margin-bottom: 5px; "/>
				</span>
			</div>
	</div>
</section>