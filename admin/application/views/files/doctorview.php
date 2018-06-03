
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
				<div class="col-md-8 ">
					<div class="dashboard-box shop-kepper" style="border-radius: 0px; ">
						<h4 style="font-size:1.3em; font-weight: bold;">
							<?php if(isset($doctordata)){ echo $doctordata->name; } ?>
						</h4>
						<div class="position">

							<table class="table table-bordered">
								<tr>
									<th colspan="2" style="text-align: center;">
										<small style="font-size: 10px; padding:3px 30px; color: teal; background-color: #000;"> <?php if(isset($doctordata)){ echo $doctordata->degree; } ?></small><br/><br/>
									</th>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Designation #</th>
									<td> <?php if(isset($doctordata)){ echo $doctordata->designationtitle; } ?></td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Details # </th>
									<td> <?php if(isset($doctordata)){ echo $doctordata->designationdetails; } ?> </td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Chamber #</th>
									<td><?php if(isset($doctordata)){ echo $doctordata->chamber; } ?></td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Location #</th>
									<td> <?php if(isset($doctordata)){ echo $doctordata->district.' - '.$doctordata->division; } ?> </td>
								</tr>
							</table>
						</div>
						<p class=""> 
						<?php 
							$type = $this->session->userrole;
							if($type == 'Admin'){
						?>
							<a href="<?php echo base_url(); ?>Doctor/DoctorUpdate/<?php echo $doctordata->id; ?>" class="btn btn-primary btn-sm">Update Information</a>	
							<a href="<?php echo base_url(); ?>Doctor/DoctorDelete/<?php echo $doctordata->id; ?>" class="btn btn-danger btn-sm">Remove</a>	
						<?php 
							}
						?>				
						</p>
					</div>
					<center><br/>
						<?php $id = $doctordata->id; ?>
						<a href="<?php echo base_url(); ?>Doctor/DoctorView/<?php echo  $id-1; ?>" class="btn btn-xs btn-primary">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>&nbsp; &nbsp;
						<a href="<?php echo base_url(); ?>Doctor/DoctorList" class="btn btn-sm btn-primary">
							<i class="fa fa-table" aria-hidden="true"></i>
						</a> &nbsp; &nbsp;
						<a href="<?php echo base_url(); ?>Doctor/DoctorView/<?php echo  $id+1; ?>" class="btn btn-xs btn-primary">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>
						
					</center>

				</div>	
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>


