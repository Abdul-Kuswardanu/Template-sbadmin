<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Update Profil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Form Update Profil</li>
        </ol>
        <div class="card mb-4 ">
            <div class="card-body ">
                <form action="" method="post">
                     
                      <div class="form-row">
                        <div class="col-md-6">
                            <!-- INPUT Text-->
                            <div class="form-group">
                                <label for="exampleInputNama1">First Name</label>
                                <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp" autofocus required>
                            </div>
                        </div>
                      <!-- INPUT Text-->
                      <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputNama1">Last Name</label>
                                <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                            </div>
                        </div>
                      </div>
                    
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputNama1">Username</label>
                                <input type="text" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                            </div>
                        </div>
                        <div class="col-md-6"> 
                      <!-- INPUT Email-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6">
                                <!-- INPUT Password-->    
                                <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="" id="exampleInputPassword1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- INPUT Number-->
                            <div class="form-group">
                                <label for="exampleInputNama1">Phone</label>
                                <input type="number" class="form-control" name="" id="exampleInputNama1" aria-describedby="namaHelp">
                            </div>
                        </div>
                    </div>
                    
                      <!-- INPUT Select-->
                      <div class="form-group">
                        <label>Level Pengguna</label>
                        <select class="custom-select" id="inputGroupSelect01" name="">
                          <option selected>Pilih Pengguna</option>
                          <option value="1">Pengguna</option>
                          <option value="2">Petugas</option>
                        </select>
                      </div>

                      <!-- INPUT File-->
                        <div class="form-group">
                          <label for="file">File</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info">Submit</button>
                          <a href="<?php echo site_url();?>/profil" class="btn btn-link float-right">Kembali</a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</main>