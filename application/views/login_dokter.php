<div style="background-image: url(<?php echo base_url('assets/gambar/PEOP.jpg'); ?>); width: 100%; height: 100%; position: fixed; background-repeat: no-repeat; background-size: cover;">

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-info justify-content-center fixed-top">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= base_url()?>index/utama" style="centered">
            <img src="<?= base_url() ?>assets/gambar/logo.png" alt="logo" style="width: 100px; height: 41px; display: block; background-position: 50%!important; background-size: 100px 33px!important;">
        </a>
    </nav>

    <div style="width: 350px; background: white; margin: 170px auto; padding: 30px 20px; border-radius: 6px;">
        <h2 style="text-align: center; font-style: bold;">Telkomedika</h4>
        <h5 style="text-align: center; margin-bottom: 20px;">Login Form - Dokter</h5>

        <?php if ($this->session->flashdata('success')) : ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <form action="<?=base_url()?>dokter/do_login" method="POST">
            <div class="form-group">
                <label>Username</label><br/>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required><br/>

                <label>Password</label><br/>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required><br/>

                <input type="submit" value="MASUK">
            </div>
        </form>
    </div>
    <br/>
</div>