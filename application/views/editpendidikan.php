  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
    
      
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="<?php echo base_url('upload/').$updatependidikan[0]['foto']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $updatependidikan[0]['nama']; ?></h3>

               <?php
                $id_pegawai=$updatependidikan[0]['pegawai_id'];
                if ($level == '1') { ?>
                <!-- <a href="<?php echo base_url('Daftar_pegawai/update_pendidikan/'.$id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
                 
               <?php } else { ?>
                 
                   <center><p>Data Pribadi</p></center>
              <?php } ?>

              
              <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="<?= site_url("daftar_pegawai/detail/utama/$id_pegawai") ?>" class="nav-link" class="nav-link">
                    <p>
                      Data utama
                      <i class="fas fa-Dashboard"></i>
                    </p>
                  </a>
                </li>

                <li class="nav-item menu-open">
                  <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$id_pegawai") ?>" class="nav-link" class="nav-link">
                    <p>
                      Riwayat Pendidikan
                      <i class="fas fa-alipay"></i>
                    </p>
                  </a>
                </li>

                <li class="nav-item menu-open">
                  <a href="<?= site_url("daftar_pegawai/detail_kontrak/kontrak/$id_pegawai") ?>" class="nav-link" class="nav-link">
                    <p>
                      Riwayat Kontrak
                      <i class="fas fa-alipay"></i>
                    </p>
                  </a>
                </li>
              
              </ul>
      </nav>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
              <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit riwayat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url("daftar_pegawai/proses_edit_riwayat_pendidikan")?>" method="post"> 
                
             
                <div class="card-body">

                <input type="hidden" name="id_pegawai" value="<?= $updatependidikan[0]['id_pegawai'] ?>">
                <input type="hidden" name="id_riwayat" value="<?= $updatependidikan[0]['id_jenjang'] ?>">
                    <div class="form-group">
                        <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
                        <select name="jenjang_pendidikan" class="form-control col-md-6">
                          <option value="SD"  <?= ($updatependidikan[0]['nama_jenjang']=="SD")?"selected":""; ?>>SD</option>
                          <option value="SMP" <?= ($updatependidikan[0]['nama_jenjang']=="SMP")?"selected":""; ?>>SMP</option>
                          <option value="SMA" <?= ($updatependidikan[0]['nama_jenjang']=="SMA")?"checked":""; ?>>SMA</option>
                          <option value="D-I" <?= ($updatependidikan[0]['nama_jenjang']=="D-I")?"checked":""; ?>>D-I</option>
                          <option value="D-II" <?= ($updatependidikan[0]['nama_jenjang']=="D-II")?"checked":""; ?>>D-II</option>
                          <option value="D-III" <?= ($updatependidikan[0]['nama_jenjang']=="D-III")?"checked":""; ?>>D-III</option>
                          <option value="D-IV" <?= ($updatependidikan[0]['nama_jenjang']=="D-IV")?"checked":""; ?>>D-IV</option>
                          <option value="S-1" <?= ($updatependidikan[0]['nama_jenjang']=="S1")?"checked":""; ?>>S-1</option>
                          <option value="S-2" <?= ($updatependidikan[0]['nama_jenjang']=="S-2")?"checked":""; ?>>S-2</option>
                          <option value="S-3" <?= ($updatependidikan[0]['nama_jenjang']=="S-3")?"checked":""; ?>>S-2</option>
                          
                      </select>
                      </div>


                  <div class="form-group">
                    <label for="Nama Pendidikan">Nama Pendidikan</label>
                    <input type="text" name="pendidikan"  class="form-control col-md-6" value="<?php echo $updatependidikan[0]['nama_pendidikan']; ?>"  placeholder="Nama Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="Nama Pendidikan">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah"  class="form-control col-md-6" value="<?php echo $updatependidikan[0]['nama_sekolah']; ?>"  placeholder="Nama Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="Nama Pendidikan">Tahun Lulus</label>
                    
                    <input type="text" name="tahun_lulus"   class="form-control col-md-6"  value="<?php echo $updatependidikan[0]['tahun_lulus']; ?>"  placeholder="Tahun Lulus">
                  </div>

                 
               <!-- /.card-body -->
               <button type="submit" class="btn btn-primary">Simpan </button>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
               <!-- /.card-body -->
                  

                  
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
<!-- /.content -->
</div>

