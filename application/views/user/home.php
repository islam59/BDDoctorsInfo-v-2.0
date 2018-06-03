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
<div class="container">
	<div class="col-md-9 col-sm-12 col-lg-9">
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
		<section class="section-doctor">
			<div class="home-doctor">
					<div class="page-header">
					  <h3>Get Your Doctor <small>// <a href="<?php echo base_url(); ?>index.php/Doctor/doctorlist">Click Here <span class="badge"><?php if(isset($doctoramount)){ echo $doctoramount; } ?></span></a></small></h3>
					</div>
					<table class="table table-striped table-responsive">
					  <thead>
						<!-- On cells (`td` or `th`) -->
						<tr>
						  <th class="active"  style="background:#024;">SL#</th>
						  <th class="success"  style="background:#024;">Doctor's Name</th>
						  <th class="warning"  style="background:#024;">Department</th>
						  <th class="info"  style="background:#024;">##</th>
						</tr>
					  </thead>	
					  <tbody>
						<!-- On cells (`td` or `th`) -->
	<?php 

	    $i = 0; 
	    foreach ($doctordata as $data) {
	      $i++; 

	?>
						<tr>
						  <td class="active"><a href="#" data-toggle="modal" data-target="#myModal<?php echo $data->id; ?>"><?php echo $i; ?></a></td>
						  <td class="success"><a href="#" data-toggle="modal" data-target="#myModal<?php echo $data->id; ?>"><?php echo $data->name; ?></a></td>
						  <td class="warning"><a href="#" data-toggle="modal" data-target="#myModal<?php echo $data->id; ?>"><?php echo $data->designationtitle; ?></a></td>
						  <td class="info"><a href="" data-toggle="modal" data-target="#myModal<?php echo $data->id; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
							<!-- Modal -->
							<div class="modal fade" id="myModal<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title" id="myModalLabel" style="color:#002244; text-transform: uppercase; ">
										<?php echo $data->name; ?><br/>
										<small style="color:teal; "><?php echo $data->degree; ?></small>
									</h3>
								  </div>
								  <div class="modal-body">
									<p><b>Designation #</b> <?php echo $data->designationtitle; ?></p>
									<p><b>Designation Details #</b> <?php echo $data->designationdetails; ?></p>
									<p><b>Gender #</b> <?php echo $data->gender; ?></p>
								  </div>
								  <div class="modal-body">
									<p><b>Chamber Info #</b> <?php echo $data->chamber; ?></p>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								  </div>
								</div>
							  </div>
							</div><!-- Modal -->					
						</tr><!--end of table-row..-->
	<?php 
		}
	?>

					  </tbody>	
					</table>
					<a href="<?php echo base_url(); ?>index.php/Doctor/doctorlist" class="btn btn-primary" type="button">
					  Click For Dcotor <span class="badge"><?php if(isset($doctoramount)){ echo $doctoramount; } ?></span>
					</a>
					<br/>
	<!--////////////////////////////////////////////////////////////////////////////////////////////////-->			
	<!--///////////////////////////////////////////PAGE ADDS////////////////////////////////////////////-->
				<span class="main-home"><Br/> 
					<img src="<?php echo base_url(); ?>admin/Assests/images/pageadds/<?php if(isset($pageAdds['0'])){	echo $pageAdds['0']->image; } ?>" alt="no-adds" class="img-responsive" style="height:120px; width:100%; "/>
				</span>
	<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
				</div>
		</section><!--end doctor section...-->

<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
	<section class="section-ambulance">
		<div class="home-ambulance">
				<div class="page-header">
				  <h3>Rent Ambulance <small>// <a href="<?php echo base_url(); ?>index.php/Ambulance/ambulancelist">Click Here <span class="badge"><?php if(isset($ambulanceamount)){ echo $ambulanceamount; } ?></span></a></small></h3>
				</div>
				<table class="table table-striped table-responsive">
				  <thead>
					<!-- On cells (`td` or `th`) -->
					<tr>
					  <th class="active" style="background:#024;">SL#</th>
					  <th class="success"  style="background:#024;">Ambulance</th>
					  <th class="warning"  style="background:#024;">Phone</th>
					  <th class="info"  style="background:#024;">##</th>
					</tr>
				  </thead>	
				  <tbody>
					<!-- On cells (`td` or `th`) -->
<?php 
    $i = 0; 
    foreach ($ambulancedata as $data) {
      $i++; 

?>
					<tr>
					  <td class="active"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $i; ?></a></td>
					  <td class="success"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $data->name; ?></a></td>
					  <td class="warning"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $data->contact; ?></a></td>
					  <td class="info"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
						<!-- Modal -->
						<div class="modal fade" id="myModalAmbulance<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title" id="myModalLabel">
									<?php echo $data->name; ?><br/>
									<small><?php echo $data->type; ?></small>
								</h3>
							  </div>
							  <div class="modal-body">
								<p>
									<b>Service Area # </b>
									<?php echo $data->address; ?>
								</p>
							  </div>
							  <div class="modal-body">
								<p>
									<b>Hotline # </b>
									<?php echo $data->contact; ?>
								</p>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div><!-- Modal -->	
					</tr><!--end of ambulance row..-->
<?php 
	}
?>
				  </tbody>	
				</table>
				<a href="<?php echo base_url(); ?>index.php/Ambulance/ambulancelist" class="btn btn-primary" type="button">
				  Click For Ambulance <span class="badge"><?php if(isset($ambulanceamount)){ echo $ambulanceamount; } ?></span>
				</a>
				<br/>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
<!--//////////////////////////////////////////PAGE ADDS/////////////////////////////////////////////-->
				<span class="main-home"><Br/> 
					<img src="<?php echo base_url(); ?>admin/Assests/images/pageadds/<?php if(isset($pageAdds['1'])){	echo $pageAdds['1']->image; } ?>" alt="no-adds" class="img-responsive" style="height:120px; width:100%; "/>
				</span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
			</div>
	</section><!--end ambulance section..-->
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->

	<section class="section-hospital">
		<div class="home-hospital">
				<div class="page-header">
				  <h3>Hospital Services <small>// <a href="<?php echo base_url(); ?>index.php/hospital/hospital">Click Here <span class="badge"><?php if(isset($hospitalamount)){ echo $hospitalamount; } ?></span></a></small></h3>
				</div>
				<table class="table table-striped table-responsive">
				  <thead>
					<!-- On cells (`td` or `th`) -->
					<tr>
					  <th class="active" style="background:#024;">SL#</th>
					  <th class="success"  style="background:#024;">Hospital</th>
					  <th class="warning"  style="background:#024;">Phone</th>
					  <th class="info"  style="background:#024;">##</th>
					</tr>
				  </thead>	
				  <tbody>
<?php 
    $i = 0; 
    foreach ($hospitaldata as $data) {
      $i++; 

?>
					<tr>
					  <td class="active"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $i; ?></a></td>
					  <td class="success"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $data->name; ?></a></td>
					  <td class="warning"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><?php echo $data->contact; ?></a></td>
					  <td class="info"><a href="" data-toggle="modal" data-target="#myModalAmbulance<?php echo $data->id; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
						<!-- Modal -->
						<div class="modal fade" id="myModalAmbulance<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title" id="myModalLabel">
									<?php echo $data->name; ?><br/>
									<small><?php echo $data->type; ?></small>
								</h3>
							  </div>
							  <div class="modal-body">
								<p>
									<b>Service Area # </b>
									<?php echo $data->address; ?>
								</p>
							  </div>
							  <div class="modal-body">
								<p>
									<b>Hotline # </b>
									<?php echo $data->contact; ?>
								</p>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div><!-- Modal -->	
					</tr><!--end of ambulance row..-->
<?php 
	}
?>
				  </tbody>	
				</table>
				<a href="<?php echo base_url(); ?>index.php/hospital/hospital" class="btn btn-primary" type="button">
				  Click For Hospital Service <span class="badge"><?php if(isset($hospitalamount)){ echo $hospitalamount; } ?></span>
				</a>
				<br/>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
<!--//////////////////////////////////////////PAGE ADDS/////////////////////////////////////////////-->
				<span class="main-home"><Br/> 
					<img src="<?php echo base_url(); ?>admin/Assests/images/pageadds/<?php if(isset($pageAdds['2'])){	echo $pageAdds['2']->image; } ?>" alt="no-adds" class="img-responsive" style="height:120px; width:100%; "/>
				</span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
			</div>
	</section><!--end hospital section-->	
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->
<!-- ********************************************************************************************************* -->

	<section class="section-survey">
		<div class="home-survey">
				<div class="page-header">
				  <h3>Medical College & Hospital<small> // <a href="<?php echo base_url(); ?>index.php/institute/instituteList">Click Here <span class="badge"><?php if(isset($surveyamount)){ echo $surveyamount; } ?></span></a></small></h3>
				</div>
				<div class="survey-home clearfix">		
<?php 
    foreach ($institutedata as $data) {
?>
					<!--survey report start..-->				
					<div class="col-sm-12 col-md-3 col-lg-3" style="margin-bottom: 15px;">
						<div class="survey-image">
							<img src="<?php echo base_url(); ?>Admin/Assests/images/institute/<?php echo $data->images; ?>" class="img-responsive survey-img" />
						</div>
						<div class="survey-overley">
							<a href="" data-toggle="modal" data-target="#myInstituteSurvey<?php echo $data->id; ?>">
								<span class="fa fa-h-square" aria-hidden="true"></span>
							</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="myInstituteSurvey<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-body" style="text-align: center;">
							  		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<img src="<?php echo base_url(); ?>Admin/Assests/images/institute/<?php echo $data->images; ?>" alt="prescription-image" style="width:200px; height: 200px;"/>
							  </div>
							  <div class="modal-header" style="text-align: center;">
								<h3 class="modal-title" id="myModalLabel" style="color:#024; font-weight: bold; text-transform: uppercase;"><?php echo $data->name; ?></h3>
							  </div>
							  <div class="modal-body">
								<p style="color:teal; text-align: center;">
									Type # <?php echo $data->type; ?><br/>
									Location # <?php echo $data->location; ?><br/>
									Website # <a href="<?php echo $data->weblink; ?>" target="_blank"><?php echo $data->weblink; ?></a>
								</p>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div><!-- Modal -->
					</div>
					<!--survey report end..-->
<?php 
	}
?>
				</div>
				<a href="<?php echo base_url(); ?>index.php/institute/instituteList" class="btn btn-primary clearfix" type="button">
				  Click For Medical College & Hospital <span class="badge"><?php if(isset($instituteamount)){ echo $instituteamount; } ?></span>
				</a>
				<br/>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->				
<!--//////////////////////////////////////////PAGE ADDS/////////////////////////////////////////////-->
				<span class="main-home"><Br/> 
					<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->footer; } ?>" class="img-responsive" style="height:120px; width: 100%; margin-bottom: 5px; "/> 
				</span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->	
		</div>
	</section><!--end Survey section-->

	</div><!--9 end..-->

