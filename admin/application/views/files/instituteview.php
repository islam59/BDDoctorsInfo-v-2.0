
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
					<div class="dashboard-box shop-kepper" style="border-radius: 0px;">
						<h4 style="font-size:2em; font-weight: bold; "><?php if(isset($institute)){ echo $institute->name; } ?></h4>
						<p class="position" style="margin-bottom: -10px; ">
							<img src="<?php if(isset($institute)){ echo base_url().'Assests/images/institute/'.$institute->images; } ?>" alt="N/A" class="img-thumbnail" style="width:40%; height:180px; ">
						</p>
						<center><br/>
							<span class="name" style="font-size:12px; background-color: black; color:white; width:70%; padding: 4px 20px;"><?php if(isset($institute)){ echo $institute->type; } ?></span><br/>
						</center>
						<p class="name"> 
							Location# <?php if(isset($institute)){ echo $institute->location; } ?><br/>
							Website# <a href="<?php if(isset($institute)){ echo $institute->weblink; } ?>" target="_blank"><?php if(isset($institute)){ echo $institute->weblink; } ?></a>
						</p>
						<p class="action" style="margin-top:-20px;"> 
						<?php  
							$type = $this->session->userrole;
							if($type == 'Admin' OR $uid == $sid ){
						?>
							<a href="<?php echo base_url(); ?>Institute/InstituteUpdate/<?php echo $institute->id; ?>" class="btn btn-warning btn-sm">Update Institute Information</a>	
							<a href="<?php echo base_url(); ?>Institute/InstituteList" class="btn btn-default btn-sm">Back To List</a>	
						<?php 
							}
						?>				
						</p>
					</div>


				</div>	
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>

