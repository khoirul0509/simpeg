<!-- Profile Image -->
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                src="<?php echo base_url('upload/').$pegawai->foto ?>"
                alt="User profile picture">
        </div>

        <h3 class="profile-username text-center"><?php echo $pegawai->nama ?></h3>

        <?php if ($level == '1') { ?>
        <!-- <a href="<?php echo base_url('Daftar_pegawai/update_pendidikan/'.$pegawai->id_pegawai); ?>" class="btn btn-primary btn-block"><b>Update</b></a> -->
            
        <?php } else { ?>
            
            <center><p>Data Pribadi</p></center>
        <?php } ?>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
                <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/utama/$pegawai->id_pegawai") ?>" class="nav-link">
                        <p>Data utama</p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/pendidikan/$pegawai->id_pegawai") ?>" class="nav-link">
                        <p>Riwayat Pendidikan</p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="<?= site_url("daftar_pegawai/detail/kontrak/$pegawai->id_pegawai") ?>" class="nav-link">
                        <p>Riwayat Kontrak</p>
                    </a>
                </li>
         
            </ul>
        </nav>
    </div>
              <!-- /.card-body -->
</div>
<!-- /.card -->