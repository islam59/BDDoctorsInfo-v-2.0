<style type="text/css">
	/*survey style*/
	.survey-home{margin:10px 0px; padding:10px 0px; }
	.survey-img{ width:100%; height:150px; opacity:0.8; }
	.survey-image:hover{ }
	.survey-overley{ background:#024; height:150px; width:100%; margin-top:-150px; position:relative; 
		opacity:0.6; 
	}
	.survey-overley:hover{ opacity:0.8; }
	.survey-overley a{ color:white; text-align:center; line-height:160px; font-size:50px; display:block; 
		opacity:0.1; 
	}
	.survey-overley a:hover{ opacity:0.9; transform: rotate(360deg); transition-delay: 0s; transition-duration:2s; 
		font-size:90px; 
	}
	 .survey-details{ margin-bottom:10px; }
</style>
	<div class="down-bottom container">
		<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->header; } ?>" alt="" style="width:100%; height:100%; "/>
	</div><!---->
	
<!-- ------------------------------------------------------- -->

	<section class="section-survey container">
		<div class="home-survey">

			<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="page-header">
				  <h3>Medical College & Hospital<small> // <a href="">Click Here <span class="badge"><?php if(isset($surveyamount)){ echo $surveyamount; } ?></span></a></small></h3>
				</div>
				<div class="survey-home clearfix">		

						<div class="row">
<?php foreach ($institutedata as $data) { ?>
					<!--survey report start..-->				
					<div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 5px;  ">
							<div class="modal-content">
							  <div class="modal-body" style="text-align: center;">
								<img src="<?php echo base_url(); ?>Admin/Assests/images/institute/<?php echo $data->images; ?>" alt="prescription-image" style="width:200px; height: 200px;"/>
							  </div>
							  <div class="modal-header" style="text-align: center; background-color: #024; color:white;">
								<p style="color:#fff; font-size:1.1em; font-weight: bold; text-transform: uppercase;"><?php echo $data->name; ?></p>
							  </div>
							  <div class="modal-body" style="background-color: rgba(00,33,44, 0.1);">
								<p style="color:teal; text-align: center;">
									Type # <?php echo $data->type; ?><br/>
									Location # <?php echo $data->location; ?><br/>
									Website # <a href="<?php echo $data->weblink; ?>" target="_blank"><?php echo $data->weblink; ?></a>
								</p>
							  </div>
							</div>
					</div>

					<!--survey report end..-->
<?php } ?>				
						</div>
				</div>

				<button class="btn btn-primary clearfix" type="button">
				  Medical College & Hospital <span class="badge"><?php if(isset($instituteamount)){ echo $instituteamount; } ?></span>
				</button>
				<br/>
				<span class="main-home"><Br/>
					<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->footer; } ?>" class="img-responsive" style="height:120px; width: 100%; margin-bottom: 5px; "/> 
				</span>
			</div>
	</div>
</section>