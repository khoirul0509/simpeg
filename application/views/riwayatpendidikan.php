
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

            <?php
                $this->load->view('navigasi_profil_pegawai');
            ?>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <div class="card-header">
                <a href="<?php echo site_url("daftar_pegawai/tambah_riwayat_pendidikan/$pegawai->id_pegawai") ?>" class="btn btn-success btn-small"><i class="fas fa-user-plus"> Tambah</i></a>

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