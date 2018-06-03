    <div class="row col-md-10 col-lg-10 col-sm-10 row right-menu">
      <h3 class="pageHead">
        <?php if(isset($title)){ echo $title; } ?>
        <span class="pull-right">
          <a href="<?php echo base_url(); ?>Institute/InstituteAdd" class="btn btn-xs btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Service !</a>
          <a href="" class="btn btn-xs btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
        </span>
      </h3><br/>

      <div class="col-md-12" style="height: 450px; overflow-y: scroll; overflow-x: hidden;">
<!-- ##############################################################################################################-->
<!-- ########################################### Content of Page ##################################################-->
<!-- ##############################################################################################################-->

<table class="table table-striped" id="mytableId">
  <thead>
    <tr>
      <th class="" style="width:05%; text-align: center; background-color: #028DFA; ">#SL</th>
      <th class="" style="width:25%; text-align: center; background-color: #028DFA; "># Name</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; "># Type</th>
      <th class="" style="width:15%; text-align: center; background-color: #028DFA; "># Location</th>
 <?php 
    $role = $this->session->userrole; 
    if($role == 'Admin'){
?>
      <th class="" style="width:10%; text-align: center; background-color: #028DFA; ">#Status</th>
      <th class="" style="width:25%; text-align: center; background-color: #028DFA; ">#Action</th>
<?php } ?>
    </tr>
  </thead>
  <tbody>
<?php 
  $i = 00; 
  foreach ($instituteData as $institute) {
    $i++; 
?>

    <tr>
      <td class="" style="width:5%; text-align: center;"><?php echo $i; ?></td>
      <td class="" style="width:25%; text-align: center;"><img src="<?php echo base_url(); ?>Assests/images/institute/<?php echo $institute->images; ?>" class="img-rounded" style="width:40px; height: 40px;"> &nbsp; <?php echo $institute->name; ?></td>
      <td class="" style="width:20%; text-align: center;"><?php echo $institute->type; ?></td>
      <td class="" style="width:15%; text-align: center;"><?php echo $institute->location; ?></td>
        <?php 
          $role = $this->session->userrole; 
          if($role == 'Admin'){
        ?>
      <td class="" style="width:10%; text-align: center;">
        <?php if($institute->status == 1){ ?>
            <a href="" class="btn btn-xs btn-info"> On </a>
            <a href="<?php echo base_url(); ?>Institute/AccessOff/<?php echo $institute->id; ?>" class="btn btn-xs btn-default"> Off </a>
        <?php }else{ ?>
            <a href="<?php echo base_url(); ?>Institute/AccessOn/<?php echo $institute->id; ?>" class="btn btn-xs btn-default"> On </a>
            <a href="" class="btn btn-xs btn-info"> Off </a>
        <?php } ?>
      </td>
      <td class="" style="width:25%; text-align: center;">
        <a href="<?php echo base_url(); ?>Institute/InstituteView/<?php echo $institute->id; ?>" class="btn btn-xs btn-primary"> View </a> &nbsp; 

          <a href="<?php echo base_url(); ?>Institute/InstituteUpdate/<?php echo $institute->id; ?>" class="btn btn-xs btn-warning"> Edit </a> &nbsp; 
          
          <a href="<?php echo base_url(); ?>Institute/InstituteDelete/<?php echo $institute->id; ?>/<?php echo $institute->images; ?>" onclick="alert('Confirm To Delete This User ?'); " class="btn btn-xs btn-danger"> Remove </a> &nbsp;
      </td>
        <?php 
          }
        ?>
    </tr>
<?php 
  }
?>


  </tbody>
</table>

        </div>  
<!-- ##############################################################################################################-->
<!-- ########################################### /Content of Page #################################################-->
<!-- ##############################################################################################################-->
      </div>
    </div>
