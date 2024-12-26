<main>
  <div class="container-fluid">
    <h1 class="mt-4">Form Edit User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Form Edit User</li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?php echo site_url('users/users_edit/' . $user->id); ?>" method="post" enctype="multipart/form-data">
          <!-- Hidden Input for User ID -->
          <input type="hidden" name="user_id" value="<?php echo isset($user->id) ? $user->id : ''; ?>">

          <!-- Input Text: Username -->
          <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" name="username" id="inputUsername" value="<?php echo isset($user->username) ? $user->username : ''; ?>" autofocus required>
          </div>

          <!-- Input Text: First Name -->
          <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" name="first_name" id="inputFirstName" value="<?php echo isset($user->first_name) ? $user->first_name : ''; ?>" required>
          </div>

          <!-- Input Text: Last Name -->
          <div class="form-group">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="inputLastName" value="<?php echo isset($user->last_name) ? $user->last_name : ''; ?>">
          </div>

          <!-- Input Email -->
          <div class="form-group">
            <label for="inputEmail">Email Address</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo isset($user->email) ? $user->email : ''; ?>" required>
          </div>

          <!-- Input Password -->
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Leave blank to keep current password">
          </div>

          <!-- Input Number: Phone -->
          <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="number" class="form-control" name="phone" id="inputPhone" value="<?php echo isset($user->phone) ? $user->phone : ''; ?>">
          </div>

          <!-- Input Select: Level Pengguna -->
          <div class="form-group">
            <label for="inputLevelUsers">Level Pengguna</label>
            <select class="form-control" name="level_users" id="inputLevelUsers" required>
              <option value="admin" <?php echo (isset($user->level_users) && $user->level_users == 'admin') ? 'selected' : ''; ?>>Admin</option>
              <option value="pengguna" <?php echo (isset($user->level_users) && $user->level_users == 'pengguna') ? 'selected' : ''; ?>>Pengguna</option>
            </select>
          </div>

          <!-- Input Select: Status Aktif -->
          <div class="form-group">
            <label for="inputActive">Status Aktif</label>
            <select class="form-control" name="active" id="inputActive" required>
              <option value="1" <?php echo (isset($user->active) && $user->active == '1') ? 'selected' : ''; ?>>Aktif</option>
              <option value="0" <?php echo (isset($user->active) && $user->active == '0') ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
          </div>

          <!-- Input File: Foto -->
          <div class="form-group">
            <label for="inputFoto">Foto</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="inputFoto">
                <label class="custom-file-label" for="inputFoto">Choose file</label>
              </div>
            </div>
          </div>

          <!-- Submit and Back Buttons -->
          <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo site_url(); ?>/users" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>