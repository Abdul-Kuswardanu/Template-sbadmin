<main>
  <div class="container-fluid">
    <h1 class="mt-4">Form Tambah User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Form Tambah User</li>
    </ol>
    <div class="card mb-4 ">
      <div class="card-body ">

        <?php echo validation_errors(); ?>

        <form action="<?php echo site_url('users/users_tambah'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="active" value="1">
          <!-- INPUT Text Username -->
          <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" name="username" id="inputUsername" value="<?php echo set_value('username') ?>" autofocus>
          </div>

          <!-- INPUT Text First Name -->
          <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" name="first_name" id="inputFirstName" value="<?php echo set_value('first_name') ?>">
          </div>

          <!-- INPUT Text Last Name -->
          <div class="form-group">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="inputLastName" value="<?php echo set_value('last_name') ?>">
          </div>

          <!-- INPUT Email -->
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo set_value('email') ?>">
          </div>

          <!-- INPUT Password -->
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword" value="<?php echo set_value('password') ?>">
          </div>

          <!-- INPUT Number-->
          <div class="form-group">
            <label for="exampleInputNama1">Phone</label>
            <input type="number" class="form-control" name="phone" id="exampleInputNama1" value="<?php echo set_value('phone') ?>" aria-describedby="namaHelp">
          </div>

          <!-- INPUT Select-->
          <div class="form-group">
            <label>Level Pengguna</label>
            <select class="custom-select" id="inputGroupSelect01" name="level_users">
              <option value="" <?php echo set_select('level_users', '', TRUE); ?>>Pilih Pengguna</option>
              <option value="admin" <?php echo set_select('level_users', 'admin'); ?>>admin</option>
              <option value="pengguna" <?php echo set_select('level_users', 'pengguna'); ?>>Pengguna</option>
            </select>
          </div>
          <!-- INPUT File-->
          <div class="form-group">
            <label for="file">File</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="<?php echo site_url(); ?>/users" class="btn btn-link float-right"><i class="fas fa-arrow-left"></i>Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>