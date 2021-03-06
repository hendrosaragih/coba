<?php
    $data_user = $this->session->userdata("datauser");
    $nama = $data_user["nama_pasien"];
?>

<div class="row">
  <div class="col-lg-12">
    <div class="profile-header">
      <img class="foto" src="<?= base_url();?>assets/gambar/<?= $data_user['foto'] ?>">
    </div>
  </div>
</div>

<div class="container" style="margin-top:20px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <h4><b>Profil Pasien</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            Nama
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['nama_pasien'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            Username
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['username'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            Email
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['email'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            Jenis Kelamin
                        </div>
                        <div class="col-lg-8">
                            : <?php echo $data_user['jenis_kelamin'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            Tanggal Lahir
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['birthday'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            No Telepon
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['no_telepon'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            Alamat
                        </div>
                        <div class="col-lg-10">
                            : <?php echo $data_user['alamat'] ?>
                        </div>
                        <div class="col-lg-12">
                            <a href="<?= base_url()?>pasien/ubahProfil/<?= $data_user['id_pasien'] ?>">
                                <button class="btn btn-primary float-right">Edit Profil</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" role="tab" data-toggle="tab">Status Jadwal Periksa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" role="tab" data-toggle="tab">Riwayat Pemeriksaan</a>
    </li>
  </ul> -->
  <!-- Tab panes -->
  <!-- <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="profile">
      <div class="row">
        <div class="col-lg-12">
          <div class="people">
            <div class="row">
              <div class="col-lg-2">
                Nama
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['nama_pasien'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Username
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['username'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Email
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['email'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Jenis Kelamin
              </div>
              <div class="col-lg-8">
                : <?php //echo $data_user['jenis_kelamin'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Tanggal Lahir
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['birthday'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                No Telepon
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['no_telepon'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Alamat
              </div>
              <div class="col-lg-10">
                : <?php //echo $data_user['alamat'] ?>
              </div>
              <div class="col-lg-2">
                <a href="#">
                   <button class="btn btn-primary float-right">Edit</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
