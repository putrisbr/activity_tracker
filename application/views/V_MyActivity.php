<div id="layoutSidenav_content">
<div class="container">
    <h1 class="text-center">Your Activity </h1>
</div>

<div class="container">
    <div class="col-12 mb-4" style="margin-top: 50px;">
     <button type="button" class="btn btn-success" style="background-color:#30526e;" data-toggle="modal" data-target="#newActivity"><i class="fa fa-plus"> </i> New Activity</button>
    </div>
    <div class="table-responsive p-0">
        <table class="table table-hover text-nowrap" id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Activity</th>
                    <th>Description</th>
                    <th>Time</th>
                    <th>Priority</th>
                    <th>To Do</th>
                    <th>Do</th>
                    <th>Done</th>
                    <th>Tools</th>
                </tr>
            </thead>   
            <tbody>
              <?php $i=1; foreach($activity as $data) { ?>
                
                <?php 
                $priority = 0;
                if($data['priority'] == "1"){
                  $priority = "High";
                }

                if($data['priority'] == "2"){
                  $priority = "Medium";
                }

                if($data['priority'] == "3"){
                  $priority = "Low";
                }
                
                ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td class="id"><?= $data['id']; ?></td>
                  <td class="act"><?= $data['activity'] ?></td>
                  <td class="desc"><?= $data['deskripsi'] ?></td>
                  <td><?= $data['time'] ?></td>
                  <td class="prio"><?= $priority ?></td>
                  <?php if($data['status'] == "1"){ ?>
                    <td><i class="fa fa-check text-success"></i></td>
                    <td></i></td>
                    <td></i></td>
                  <?php }?>

                  <?php if($data['status'] == "2"){ ?>
                    <td><i class="fa fa-check text-secondary"></i></td>
                    <td><i class="fa fa-check text-success"></i></td>
                    <td></td>
                  <?php }?>

                  <?php if($data['status'] == "3"){ ?>
                    <td><i class="fa fa-check text-secondary"></i></td>
                    <td><i class="fa fa-check text-secondary"></i></td>
                    <td><i class="fa fa-check text-success"></i></td>
                  <?php }?>

                  <td>
                      <a href="<?= base_url('C_MyActivity/delete/'.$data['id']); ?>" class="btn btn-danger"> <i class="fa fa-trash text-white"></i> </a> 
                      <button type="button" id="edit" class="edit btn btn-warning text-white"  data-toggle="modal" data-target="#updateActivity"><i class="fa fa-pen"> </i></button>
                  </td>
                </tr>
              <?php }?>  
            </tbody>
        </table>
    </div> 
</div>

<div class="modal fade" id="newActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"> </i> New Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_MyActivity/newActivity'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="judul">Activity Name</label>
            <input type="text" name="activity_name" id="activity_name" placeholder="Insert Activity Name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Description</label>
            <input type="text" name="desc" id="desc" placeholder="Insert Description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">From</label>
            <input type="time" name="time" id="time" placeholder="Insert Time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">To</label>
            <input type="time" name="time2" id="time2" placeholder="Insert Time" class="form-control" required>
        </div>
        <div class="form-group" >
            <label for="judul">Priority</label>
            <select name="priority" id="priority" class="form-control" required>
              <option value="0" disabled selected>-</option>
              <option value="1"> High </option>
              <option value="2"> Medium </option>
              <option value="3"> Low </option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
              <option value="0" disabled selected>-</option>
              <option value="1"> To Do </option>
              <option value="2"> Do </option>
              <option value="3"> Done </option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="updateActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pen"> </i> Update Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_MyActivity/aksi_update');?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="judul">Activity Name</label>
            <input type="hidden" name="id" id="id2">
            <input type="text" name="activity_name" id="act" placeholder="Insert Activity Name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Description</label>
            <input type="text" name="desc" id="desc1" placeholder="Insert Description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">From</label>
            <input type="time" name="time" id="time" placeholder="Insert Time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">To</label>
            <input type="time" name="time2" id="time2" placeholder="Insert Time" class="form-control" required>
        </div>
        <div class="form-group" >
            <label for="judul">Priority</label>
            <select name="priority" id="priority1" class="form-control" required>
              <option value="0" disabled selected>-</option>
              <option value="1"> High </option>
              <option value="2"> Medium </option>
              <option value="3"> Low </option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
            <option value="0" disabled selected>-</option>
              <option value="1"> To Do </option>
              <option value="2"> Do </option>
              <option value="3"> Done </option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">  

$(document).ready(function(){

  $('.edit').on('click',function(){
    var $act = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".act")     // Gets a descendent with class="nr"
                       .text();         // Retrieves the text within <td>

    var $desc = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".desc")     // Gets a descendent with class="nr"
                       .text();
    var $prio = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".prio")     // Gets a descendent with class="nr"
                       .text();  
    var $id = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".id")     // Gets a descendent with class="nr"
                       .text(); 

    if($prio == "High")
    {
      $prio = 1;
    }

    if($prio == "Medium")
    {
      $prio = 2;
    }

    if($prio == "Low")
    {
      $prio = 3;
    }
         
    $('#act').val($act);
    $('#desc1').val($desc);
    $('#id2').val($id);
  });

});

</script>

