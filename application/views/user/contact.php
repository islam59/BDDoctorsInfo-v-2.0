	<div class="down-bottom container">
		<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->header; } ?>" alt="" style="width:100%; height:100%; "/>
	</div><!---->
<br/>	
	<section class="section-doctor container">
		<div class="home-doctor">

			<div class="col-md-9 col-sm-12 col-lg-9">
				<div class="page-header">
				  <h3>Contact Us</h3>
				</div>

					<!-- start<: contactForm -->
					<form action="<?php echo base_url(); ?>index.php/contact/contact" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Your Name</label>
					    <div class="col-sm-10">
					      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Enter Your Name !">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Your Email</label>
					    <div class="col-sm-10">
					      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="e.g.- example@mail.com">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
					    <div class="col-sm-10">
					      <input name="subject" type="text" class="form-control" id="inputPassword3" placeholder="Enter Message Title !">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
					    <div class="col-sm-10">
					      <textarea name="message" class="form-control" rows="5" placeholder="Enter Your Message !"></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Send Message !</button>
							<?php 
							    $msg = $this->session->flashdata('msg'); 
							    if(isset($msg)){ echo $msg; }
							?>
					    </div>
					  </div>
					</form>
					<!-- end: contactForm-->
					<br/><br/>
				<span class="main-home"><Br/> 
					<img src="<?php echo base_url(); ?>admin/Assests/images/pageadds/<?php if(isset($pageAdds['0'])){	echo $pageAdds['0']->image; } ?>" alt="no-adds" class="img-responsive" style="height:120px; width:100%; "/>
				</span>

				<span class="main-home"><Br/>
					<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->contact; } ?>" class="img-responsive" style="height:300px; width: 100%; margin-bottom: 5px; "/> 
				</span>


				<span class="main-home"><Br/>
					<img src="<?php echo base_url(); ?>admin/Assests/images/specialadds/<?php if(isset($specialAdd)){ echo $specialAdd->footer; } ?>" class="img-responsive" style="height:120px; width: 100%; margin-bottom: 5px; "/> 
				</span>
			</div>

	


