
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
					<div class="dashboard-box shop-kepper">
						<h4>ID# BDDIA-98</h4>
						<p class="name" style="font-size:3em;">
							<?php if(isset($userdata)){ echo $userdata->username; } ?>
						</p>
						<p class="position">Position: <?php if(isset($userdata)){ echo $userdata->userrole; } ?></p>
						<p class="id"></p>
						<p class="details"> 
							Phone: <?php if(isset($userdata)){ echo $userdata->phonenumber; } ?><br/>
							Email: <?php if(isset($userdata)){ echo $userdata->email; } ?><br/>
							Address: <?php if(isset($userdata)){ echo $userdata->address; } ?>.
						</p>
						<p class="action"> 
						<?php 
							$sid = $this->session->userid; 
							$uid = $userdata->id; 
							$type = $this->session->userrole;
							if($type == 'Admin' OR $uid == $sid ){
						?>
							<a href="<?php echo base_url(); ?>Profile/ChangePassword" class="btn btn-primary btn-sm">Change Password</a>	
							<a href="<?php echo base_url(); ?>Profile/ChangeInfo" class="btn btn-primary btn-sm">Change Information</a>	
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

