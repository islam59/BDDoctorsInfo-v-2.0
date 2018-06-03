<!--slider section...-->
	<section class="section-slider container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators 
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
			-->
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
<?php 
	$i = 0; 
    foreach ($sliderdata as $slider) {
    	$i++; 
    	$priority = $slider->priority; 
?>
			<div class="item <?php if($i == 1){ echo 'active'; } ?>">
			  <img src="<?php echo base_url(); ?>Admin/Assests/images/slider/<?php echo $slider->images; ?>" alt="slider-image">
			  <div class="carousel-caption">
				<h2 style="color:white;"><?php echo $slider->title; ?></h2>
				<p style="color:white; "><?php echo $slider->body; ?></p>
			  </div>
			</div>
<?php 
	} //end of foreach.. 
?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</section><!--slider end..-->