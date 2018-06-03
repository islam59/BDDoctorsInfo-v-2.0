
		<div class="row col-md-10 col-lg-10 col-sm-10 right-menu">
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
				<div class="col-md-4" style="margin-bottom: 5px; ">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Doctor Reports</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($TotalDoctor)){ echo $TotalDoctor; } ?>
						</p>
					</div>
				</div>				
				<div class="col-md-4" style="margin-bottom: 5px; ">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Services Reports</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($TotalServices)){ echo $TotalServices; } ?>
						</p>
					</div>
				</div>				
				<div class="col-md-4" style="margin-bottom: 5px;">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Institute Reports</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($TotalInstitute)){ echo $TotalInstitute; } ?>
						</p>
					</div>
				</div>					
				<div class="col-md-4" style="margin-bottom: 5px;">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Page Sponsor</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($PageSponsor)){ echo $PageSponsor; } ?>
						</p>
					</div>
				</div>	
				<div class="col-md-4" style="margin-bottom: 5px;">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Sidebar Sponsor</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($SidebarSponsor)){ echo $SidebarSponsor; } ?>
						</p>
					</div>
				</div>	
				<div class="col-md-4" style="margin-bottom: 5px;">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Slider Sponsor</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($SliderSponsor)){ echo $SliderSponsor; } ?>
						</p>
					</div>
				</div>	
				<div class="col-md-4"></div>
				<div class="col-md-4" style="margin-bottom: 5px;">
					<div class="dashboard-box" style="border-radius: 0px;">
						<h4>Messages</h4>
						<p id="index-summary" style="font-size:4.2em; ">
							<?php if(isset($MessageAll)){ echo $MessageAll; } ?>
						</p>
					</div>
				</div>	
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
			</div>
		</div>
