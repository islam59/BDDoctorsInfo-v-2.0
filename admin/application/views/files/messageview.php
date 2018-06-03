
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
						<h4 style="font-weight: bold;">
							<span style="font-size: 1.5em; padding:3px 30px; color: teal; background-color: #000;"> <?php if(isset($message)){ echo $message->created_at; } ?></span>
						</h4>
						<div class="position">

							<table class="table table-bordered">
								<tr>
									<th colspan="2" style="text-align: center;">

									</th>
								</tr>
								<tr>
									<th style="text-align: right; width: 20%;">Send By #</th>
									<td> <?php if(isset($message)){ echo $message->name; } ?></td>
								</tr>
								<tr>
									<th style="text-align: right; width: 20%;">Sent From # </th>
									<td> <?php if(isset($message)){ echo $message->email; } ?> </td>
								</tr>
								<tr>
									<th style="text-align: right; width: 20%;">Subject #</th>
									<td><?php if(isset($message)){ echo $message->subject; } ?></td>
								</tr>
								<tr>
									<th style="text-align: right; width: 20%;">Message #</th>
									<td style="min-height: 200px; text-align: justify;"> <?php if(isset($message)){ echo $message->message; }?> <br/></td>
								</tr>
							</table>
						</div>
						<p class=""> 
						<?php 
							$type = $this->session->userrole;
							if($type == 'Admin'){
						?>
							<a href="<?php echo base_url(); ?>Message/MessageList/<?php echo $message->id; ?>" class="btn btn-primary btn-sm">Back To Message List</a>	
							<a href="<?php echo base_url(); ?>Message/MessageDelete/<?php echo $message->id; ?>" class="btn btn-danger btn-sm">Remove</a>	
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


