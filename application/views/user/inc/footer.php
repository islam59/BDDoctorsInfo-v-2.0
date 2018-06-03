<style type="text/css">
	/*footer style ALL ARE INCLUDED IN INLINE CSS*/ 
	.section-footer{  margin-top:10px; min-height:30px;} 
	.footerLeft{ color:white; padding:20px; text-align:right; } 
	.footerCenter{ color:white; padding:20px; text-align:center; font-size:40px; line-height:40px; } 
	.footerRight{ color:white; padding:20px; text-align:left; } 
</style>	
	<section class="section-footer row">
		<div class="footer container">
			<div class="col-md-3 col-sm-12 col-lg-3">
				<p class="footerLeft" style="font-size:12px;">				
					<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <?php if(isset($siteoption)){ echo $siteoption->phone; } ?>
					<br/>
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php if(isset($siteoption)){ echo $siteoption->email; } ?>
					<br/>
					<a href="<?php if(isset($siteoption)){ echo $siteoption->website; } ?>" target="_blank">
						<span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <?php if(isset($siteoption)){ echo $siteoption->website; } ?>
					</a><br/>		
				</p>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-6">
				<p class="footerCenter" >				
					<a href="<?php if(isset($siteoption)){ echo $siteoption->facebook; } ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="<?php if(isset($siteoption)){ echo $siteoption->twitter; } ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="<?php if(isset($siteoption)){ echo $siteoption->google; } ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
					
				</p>
			</div>
			<div class="col-md-3 col-sm-12 col-lg-3">
				<p class="footerRight" style="font-size:12px; ">				
					Copyright_ &copy 2017<br/>
					Developd By# <a href="<?php if(isset($siteoption)){ echo $siteoption->developed_link; } ?>" target="_blank" style="text-transform: uppercase;"><?php if(isset($siteoption)){ echo $siteoption->developed_by; } ?></a><br/>
					<a href="<?php base_url(); ?>admin">Admin Login</a>		
				</p>
			</div>
		</div>
	</section>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!--data table api included...-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>	
	<script>
	$(document).ready( function () {
		$('#mytableId').DataTable();
	} );
	</script>
  </body>
</html>