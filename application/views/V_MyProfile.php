<div id="layoutSidenav_content">
<div class="row d-flex justify-content-center mt-4">
<div class="card" style="width: 20rem;">
   <div class="text-center text-white" style="font-size:10em; background-color:black; border-radius:10px;">
        <i class="fa fa-user" > </i>
   </div>
  <div class="card-body">
    <h5 class="card-title text-center">Your Profile</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nama User</b> : <?= $this->session->userdata('nama_user'); ?></li>
    <li class="list-group-item"><b>Username</b> : <?= $this->session->userdata('username'); ?></li>
  </ul>
  <div class="card-body text-center">
  <button type="button" class="btn btn-warning text-white"  data-toggle="modal" data-target="#updateAccount"><i class="fa fa-pen"> </i> Update Account</button>
  </div>
</div>
</div>

<div class="modal fade" id="updateAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"> </i> Update Account </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_MyProfile/updateAccount'); ?>" method="post">
      <div class="modal-body">
      <div class="form-group">
            <label for="judul">Nama User</label>
            <input type="text" name="nama_user" id="nama_user" placeholder="Insert Nama User" class="form-control" value="<?= $this->session->userdata('nama_user'); ?>" required>
        </div>
        <div class="form-group">
            <label for="judul">Username</label>
            <input type="text" name="username" id="username" placeholder="Insert Username" class="form-control" value="<?= $this->session->userdata('username'); ?>" required>
        </div>

        <div class="form-group">
            <label for="judul">Password</label>
            <input type="password" name="password" id="pass1" placeholder="Insert Password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Password Verify</label>
            <input type="password" name="password2" id="pass1" placeholder="Verify your password" class="form-control" required>
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