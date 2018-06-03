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

<table class="table table-striped" id="mytableId">
  <thead>
    <tr>
      <th class="" style="width:05%; text-align: center; background-color: #028DFA; ">#SL</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; ">#From</th>
      <th class="" style="width:20%; text-align: center; background-color: #028DFA; ">#Email</th>
      <th class="" style="width:15%; text-align: center; background-color: #028DFA; ">#Date</th>
 <?php 
    $role = $this->session->userrole; 
    if($role == 'Admin'){
?>
      <th class="" style="width:10%; text-align: center; background-color: #028DFA; ">#Status</th>
      <th class="" style="width:30%; text-align: center; background-color: #028DFA; ">#Action</th>
<?php } ?>
    </tr>
  </thead>
  <tbody>
<?php 
  $i = 00; 
  foreach ($messagedata as $message) {
    $i++; 
?>

    <tr>
      <td class="" style="width:5%; text-align: center;"><?php echo $i; ?></td>
      <td class="" style="width:20%; text-align: center;"><?php echo $message->name; ?></td>
      <td class="" style="width:20%; text-align: center;"><?php echo $message->email; ?></td>
      <td class="" style="width:15%; text-align: center;"><?php echo $message->created_at; ?></td>
        <?php 
          $role = $this->session->userrole; 
          if($role == 'Admin'){
        ?>
      <td class="" style="width:10%; text-align: center;">
        <?php if($message->status == 1){ echo 'Unread'; }else{ echo 'Read'; } ?>
      </td>
      <td class="" style="width:30%; text-align: center;">
        <a href="<?php echo base_url(); ?>Message/MessageShow/<?php echo $message->id; ?>" class="btn btn-xs btn-primary"> Show </a> &nbsp; 
        <?php if($message->status == 1){ ?>
          <a href="<?php echo base_url(); ?>Message/AccessOff/<?php echo $message->id; ?>" class="btn btn-xs btn-warning"> &nbsp; Mark As Read &nbsp; </a> &nbsp; 
        <?php }else{ ?> 
          <a href="<?php echo base_url(); ?>Message/AccessOn/<?php echo $message->id; ?>" class="btn btn-xs btn-default"> Mark As Unread </a> &nbsp; 
        <?php } ?>


          <a href="<?php echo base_url(); ?>Message/MessageDelete/<?php echo $message->id; ?>" onclick="alert('Confirm To Delete This User ?')" class="btn btn-xs btn-danger"> Remove </a> &nbsp;
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
