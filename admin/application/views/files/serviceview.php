
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
					<div class="dashboard-box shop-kepper"  style="border-radius: 0px; ">
						<h4 style="font-size:1.3em; font-weight: bold;">
							<?php if(isset($service)){ echo $service->name; } ?>
						</h4>
						<div class="position">

							<table class="table table-bordered">
								<tr>
									<th colspan="2" style="text-align: center;">
										<small style="font-size: 10px; padding:3px 30px; color: teal; background-color: #000;"> 	<?php if(isset($service)){ echo $service->type; } ?> 
										</small><br/><br/>
									</th>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Location #</th>
									<td> <?php if(isset($service)){ echo $service->district.' - '.$service->division; } ?> </td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Address # </th>
									<td> <?php if(isset($service)){ echo $service->address; } ?> </td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Contact No. #</th>
									<td> <?php if(isset($service)){ echo $service->contact; } ?> </td>
								</tr>
								<tr>
									<th style="text-align: right; width: 30%;">Uploaded By #</th>
									<td> 
										<?php 
											if(isset($service)){ 
												if(!empty($service->created_by)){
													echo $service->created_by; 
												}else{
													echo "N/A"; 
												}
									 		} 
									 	?>
									 
									 </td>
								</tr>
							</table>
						</div>
						<p class=""> 
						<?php 
							$type = $this->session->userrole;
							if($type == 'Admin'){
						?>
							<a href="<?php echo base_url(); ?>Service/ServiceUpdate/<?php echo $service->id; ?>" class="btn btn-primary btn-sm">Update Information</a>	
							<a href="<?php echo base_url(); ?>Service/ServiceDelete/<?php echo $service->id; ?>" onclick="alert('Confirm to Delete Service Item ? ')" class="btn btn-danger btn-sm">Remove</a>	
						<?php 
							}
						?>				
						</p>
					</div>
					<center><br/>
						<?php $id = $service->id; ?>
						<a href="<?php echo base_url(); ?>Service/ServiceView/<?php echo  $id-1; ?>" class="btn btn-xs btn-primary">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>&nbsp; &nbsp;
						<a href="<?php echo base_url(); ?>Service/ServiceList" class="btn btn-sm btn-primary">
							<i class="fa fa-table" aria-hidden="true"></i>
						</a> &nbsp; &nbsp;
						<a href="<?php echo base_url(); ?>Service/ServiceView/<?php echo  $id+1; ?>" class="btn btn-xs btn-primary">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>
						
					</center>

				</div>	
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>


