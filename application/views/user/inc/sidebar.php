
		<div class="col-md-3 col-sm-12 col-lg-3">
<?php 
	foreach ($sidebarAdds as $sidebaradd) {
?>
			<div class="row"><!--adds 1-->
				<a href="<?php $sidebaradd->weblink; ?>" target="_blank" style="text-decoration: none;">
			    <div class="thumbnail" style="box-shadow: 0px, 0px, 1px solid #024; "><br/>
			      <img src="<?php echo base_url(); ?>admin/Assests/images/sidebaradds/<?php echo $sidebaradd->image; ?>" alt="Rent For Add !">
			      <div class="caption">
			        <?php if(!empty($sidebaradd->title)){ ?><h4><?php echo $sidebaradd->title; ?></h4><?php } ?>
			        <?php if(!empty($sidebaradd->body)){?>
			        	<p style="text-align: justify;"><?php echo substr($sidebaradd->body, 0, 100); ?> </p>
			        <?php } ?>
			        <?php if(!empty($sidebaradd->weblink)){ ?>
			        	<p><a href="#" class="btn btn-primary btn-xs" role="button">Click for More</a></p>
			        <?php } ?>
			      </div>
			    </div>
			    </a>
			</div>
<?php } //end of foreach.. ?>
		</div>
	</div>
</section><!--end doctor section...-->
