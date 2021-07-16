<div id="layoutSidenav_content">
<div class="container">
    <h1 class="text-center">Update Activity </h1>
</div>

<div class="container">
    <form method="post" action="<?= base_url('C_MyActivity/aksi_update');  ?>">
        <div class="form-group">
          <label for="judul">Activity Name</label>
            <input type="hidden" name="id" id="id" value="<?= $activity['id'] ?>" placeholder="Insert Activity Name" class="form-control" required>
            <input type="text" name="activity_name" id="activity_name" value="<?= $activity['activity'] ?>" placeholder="Insert Activity Name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Description</label>
            <input type="text" name="desc" id="desc" value="<?= $activity['deskripsi'] ?>" placeholder="Insert Description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Time</label>
            <input type="text" name="time" id="time" value="<?= $activity['time'] ?>" placeholder="Insert Time" class="form-control" required>
        </div>
        <div class="form-group" >
            <label for="judul">Priority</label>
            <select name="priority" id="priority"  class="form-control">
              <option value="1"> High </option>
              <option value="2"> Medium </option>
              <option value="3"> Low </option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
              <option value="1"> To Do </option>
              <option value="2"> Do </option>
              <option value="3"> Done </option>
            </select>
        </div>
        <div class="form-group mt-4">
          <a class="btn btn-primary" href="<?= base_url('C_MyActivity')?> "> Kembali </a>
          <button type="submit" class="btn btn-success"> Update Data </button>
        </div>
    </form>
</div>


                     