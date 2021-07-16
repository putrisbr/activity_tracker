<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
                <h4 class="company_title"><img src="<?= base_url('/assets/img/logo5.png'); ?>" width='200' height='200' ></h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Register</h2>
					</div>
					<div class="row">
						<form control="" class="form-group" method="POST" action="<?= base_url('C_Register/aksi_register');?>">
                            <div class="row">
								<input type="text" name="nama_user" id="nama_user" class="form__input" placeholder="Nama Lengkap">
							</div>
                            <div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username">

                                <?php if($this->session->flashdata('username')){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('username') ?>
                                    </div>                                
                                <?php } ?>
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							<div class="row">
								<input type="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="container-fluid text-center footer">
		Coded with &hearts; by <a href="#">Putri Salsabila.</a></p>
	</div>
</body>