
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
                       src="<?php echo base_url('upload/').$datajenjang[0]->foto ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $datajenjang[0]->nama ?></h3>

               <?php if ($level == '1') { ?>
                <!-- <a href="<?php echo base_url('daftar_pegawai/edit/'.$datajenjang[0]->id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
                 
               <?php } else { ?>
                 
                   <center><p>Data Pribadi</p></center>
              <?php } ?>

              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/utama/$id_pegawai") ?>" class="nav-link">
                      <p>
                        Data utama
                        <i class="fas fa-Dashboard"></i>
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$id_pegawai") ?>" class="nav-link">
                      <p>
                        Riwayat Pendidikan
                        <i class="fas fa-alipay"></i>
                      </p>
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/kontrak/$id_pegawai") ?>" class="nav-link">
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
            <div class="card">
              <div class="card-header p-2">
                <div class="card-header">
                <a href="<?php echo site_url("daftar_pegawai/tambah_riwayat_pendidikan/$id_pegawai") ?>" class="btn btn-success btn-small"><i class="fas fa-user-plus"> Tambah</i></a>

                </div>
              </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                  <h3>Riwayat Pendidikan</h3>   
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">

                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Jenjang</th>
                            <th>Nama Pendidikan</th>
                            <th>Nama Sekolah</th>
                            <th>Tahun Lulus</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no = 1;
                            foreach ($datajenjang as $dj) {
                          ?>
                          <tr>
                                <!-- <td><?php echo $no++; ?></td> -->
                                <td><?php echo $dj->nama_jenjang; ?></td>
                                <td><?php echo $dj->nama_pendidikan; ?></td>
                                <td><?php echo $dj->nama_sekolah; ?></td>
                                <td><?php echo $dj->tahun_lulus; ?></td>

                                <td>
                                
                                <a href="<?php echo site_url('daftar_pegawai/update_pendidikan/'.$dj->id_jenjang) ?>"><button
                                          type="button" class="btn btn-default btn-xs"><span
                                            class="fas fa-pencil-alt"
                                            aria-hidden="true"></span>edit</button></a>
                                <a href="#"     
                                        onclick="return confirm('Anda yakin menghapus ?')"><button type="button"
                                          class="btn btn-danger btn-xs"><span 
                             
                                            class="glyphicon glyphicon-remove"></span> Hapus</button></a>
                                            </td> 
                            </tr>
                              <?php
                                }
                              ?>
                        </tbody>
                              
                            
                      </table>
                    </div>
                      
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
<script>
  function konfirmasi(){
    
  }
</script>