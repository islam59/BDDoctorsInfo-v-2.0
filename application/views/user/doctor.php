	<div class="down-bottom container">
		<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->header; } ?>" alt="" style="width:100%; height:100%; "/>
	</div><!---->
	


	<section class="section-doctor container">
		<div class="home-doctor">

			<div class="col-md-9 col-sm-12 col-lg-9">
				<div class="page-header">
				  <h3>Get Your Doctor<small>
				  <ol class="breadcrumb" style="display:inline; ">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Dhaka" >Dhaka</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Rajshahi">Rajshahi</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Chittagong">Chittagong</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Khulna">Khulna</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Rangpur">Rangpur</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Sylhet">Sylhet</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/doctor/doctorlistArea/Barishal">Barishal</a></li>
					</ol>
					</small></h3>
				</div>

				<table id="mytableId" class="display" class="table table-striped table-responsive">
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
				<button class="btn btn-primary" type="button">
				  Registered Doctor <span class="badge"><?php if(isset($doctoramount)){ echo $doctoramount; } ?></span>
				</button>
				<br/>
				<span class="main-home"><Br/>
					<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->footer; } ?>" class="img-responsive" style="height:120px; width: 100%; margin-bottom: 5px; "/> 
				</span>
			</div>

