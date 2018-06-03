    <div class="row col-md-10 col-lg-10 col-sm-10 row right-menu">
      <h3 class="pageHead">
        <?php if(isset($title)){ echo $title; } ?>
        <span class="pull-right">
          <a href="<?php echo base_url(); ?>Doctor/addDoctor" class="btn btn-xs btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Doctor !</a>
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
      <th class="" style="width:25%; text-align: center; background-color: #028DFA; ">#Doctor Name</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; ">#Degree</th>
      <th class="" style="width:15%; text-align: center; background-color: #028DFA; ">#Priority</th>
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
  foreach ($doctordata as $doctor) {
    $i++; 
?>

    <tr>
      <td class="" style="width:5%; text-align: center;"><?php echo $i; ?></td>
      <td class="" style="width:25%; text-align: center;"><?php echo $doctor->name; ?></td>
      <td class="" style="width:20%; text-align: center;"><?php echo $doctor->degree; ?></td>
      <td class="" style="width:15%; text-align: center;">
        <?php 
          $priority= $doctor->priority; 
          if($priority == 0){ echo "Basic";}
          elseif($priority == 1){ echo "Grade-1"; }
          elseif($priority == 2){ echo "Grade-2"; }
          elseif($priority == 3){ echo "Grade-3"; }
          elseif($priority == 4){ echo "Grade-4"; }
          elseif($priority == 5){ echo "Grade-5"; }
          elseif($priority == 6){ echo "Premium"; }
        ?>
        
      </td>
        <?php 
          $role = $this->session->userrole; 
          if($role == 'Admin'){
        ?>
      <td class="" style="width:10%; text-align: center;">
        <?php if($doctor->status == 1){ ?>
            <a href="" class="btn btn-xs btn-info"> On </a>
            <a href="<?php echo base_url(); ?>Doctor/AccessOff/<?php echo $doctor->id; ?>" class="btn btn-xs btn-default"> Off </a>
        <?php }else{ ?>
            <a href="<?php echo base_url(); ?>Doctor/AccessOn/<?php echo $doctor->id; ?>" class="btn btn-xs btn-default"> On </a>
            <a href="" class="btn btn-xs btn-info"> Off </a>
        <?php } ?>
      </td>
      <td class="" style="width:25%; text-align: center;">
        <a href="<?php echo base_url(); ?>Doctor/DoctorView/<?php echo $doctor->id; ?>" class="btn btn-xs btn-primary"> View </a> &nbsp; 

          <a href="<?php echo base_url(); ?>Doctor/DoctorUpdate/<?php echo $doctor->id; ?>" class="btn btn-xs btn-warning"> Edit </a> &nbsp; 
          <a href="<?php echo base_url(); ?>Doctor/DoctorDelete/<?php echo $doctor->id; ?>" onclick="alert('Confirm To Delete This User ?')" class="btn btn-xs btn-danger"> Remove </a> &nbsp;
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

