
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
                <a href="<?php echo site_url("daftar_pegawai/tambah_riwayat_kontrak/$pegawai->id_pegawai") ?>" class="btn btn-success btn-small"><i class="fas fa-user-plus"> Tambah</i></a>

                </div>
              </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                  <h3>Riwayat Kontrak</h3>   
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">

                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                              <th>No.SK Kontrak</th>
                              <th>TMT SK Kontrak</th>
                              <th>TMT Akhir Kontrak</th>
                              <th>Tgl SK Kontrak</th>
                              <th>Kontrak Pertama</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        //print_r($datakontrak); 
                          if(count($datakontrak)>0){
                          $no = 1;
                            foreach ($datakontrak as $dk) {
                          ?>
                              <tr>
                                <!-- <td><?php echo $no++; ?></td> -->
                                <td><?php echo $dk->no_kontrak; ?></td>
                                <td><?php echo ubah_tanggal_indo($dk->tgl_mulai_kontrak); ?></td>
                                <td><?php echo ubah_tanggal_indo($dk->tgl_akhir_kontrak); ?></td>
                                <td><?php echo ubah_tanggal_indo($dk->tgl_kontrak); ?></td>
                                <td><?= ($dk->is_kontrak_awal=="1")?"ya":""; ?></td>


                                <td>

                                    <a href="<?php echo site_url('daftar_pegawai/update_kontrak/'.$dk->id_riwayat) ?>"><button
                                                type="button" class="btn btn-default btn-xs"><span
                                                  class="fas fa-pencil-alt"
                                                  aria-hidden="true"></span>edit</button></a>
                                      <?php
                                          if(!empty($dk->nama_file) || $dk->nama_file!=""){
                                      ?>
                                            
                                            <a target="_blank"  class="btn btn-block btn-success btn-sm" href="<?php echo site_url('assets/files/doc_kontrak/'.$dk->nama_file) ?>">View</a>
                                      <?php
                                          }
                                      ?>

                                      
                                      <a href="#"     
                                              onclick="return confirm('Anda yakin menghapus ?')"><button type="button"
                                                class="btn btn-danger btn-xs"><span 
                                  
                                                  class="glyphicon glyphicon-remove"></span> Hapus</button></a>
                                </td> 
                            </tr>
                              <?php
                                }
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