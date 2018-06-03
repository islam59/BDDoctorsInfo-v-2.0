    <div class="row col-md-10 col-lg-10 col-sm-10 row right-menu">
      <h3 class="pageHead">
        <?php if(isset($title)){ echo $title; } ?>
        <span class="pull-right">
          <a href="<?php echo base_url(); ?>Member/addMember" class="btn btn-xs btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User !</a>
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
      <th class="" style="width:25%; text-align: center; background-color: #028DFA; ">#Username</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; ">#Email</th>
      <th class="" style="width:15%; text-align: center; background-color: #028DFA; ">#Role</th>
 <?php 
    $role = $this->session->userrole; 
    if($role == 'Admin'){
?>
      <th class="" style="width:15%; text-align: center; background-color: #028DFA; ">#Access</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; ">#Action</th>
<?php } ?>
    </tr>
  </thead>
  <tbody>
<?php 
  $i = 00; 
  foreach ($memberdata as $member) {
    $i++; 
?>

    <tr>
      <td class="" style="width:5%; text-align: center;"><?php echo $i; ?></td>
      <td class="" style="width:25%; text-align: center;"><?php echo $member->username; ?></td>
      <td class="" style="width:20%; text-align: center;"><?php echo $member->email; ?></td>
      <td class="" style="width:15%; text-align: center;"><?php echo $member->userrole; ?></td>
        <?php 
          $role = $this->session->userrole; 
          if($role == 'Admin'){
        ?>
      <td class="" style="width:15%; text-align: center;">
        <?php if($member->useraccess == 1){ ?>
            <a href="" class="btn btn-xs btn-info"> On </a> &nbsp; 
            <a href="<?php echo base_url(); ?>Member/AccessOff/<?php echo $member->id; ?>" class="btn btn-xs btn-default"> Off </a> &nbsp; 
        <?php }else{ ?>
            <a href="<?php echo base_url(); ?>Member/AccessOn/<?php echo $member->id; ?>" class="btn btn-xs btn-default"> On </a> &nbsp; 
            <a href="" class="btn btn-xs btn-info"> Off </a> &nbsp; 
        <?php } ?>
      </td>
      <td class="" style="width:20%; text-align: center;">
        <a href="<?php echo base_url(); ?>Member/MemberShow/<?php echo $member->id; ?>" class="btn btn-xs btn-primary"> Show </a> &nbsp; 

          <a href="<?php echo base_url(); ?>Member/UpdateMember/<?php echo $member->id; ?>" class="btn btn-xs btn-warning"> Edit </a> &nbsp; 
          <a href="<?php echo base_url(); ?>Member/MemberDelete/<?php echo $member->id; ?>" onclick="alert('Confirm To Delete This User ?')" class="btn btn-xs btn-danger"> Remove </a> &nbsp;
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

