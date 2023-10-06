<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data Tabungan
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tabungan</a></li>
            <li class="active">Edit Data Tabungan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">FORM EDIT Data Tabungan</h3>
            </div>
            <div class="box-body">
                <?php echo validation_errors(); ?>

                <form method="post" action="<?php echo site_url() . 'tabungan/update'; ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id_tabungan" value="<?= $pengajuan_tabungan->id_tabungan; ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Email..." name="Email" value="<?= set_value('Email', $pengajuan_tabungan->Email); ?>">
                        <?php echo form_error('Email'); ?>
                    </div>
                    <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor KTP..." name="No_KTP" value="<?= set_value('No_KTP', $pengajuan_tabungan->No_KTP); ?>">
                        <?php echo form_error('No_KTP'); ?>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." name="Nama" value="<?= set_value('Nama', $pengajuan_tabungan->Nama_Lengkap); ?>">
                        <?php echo form_error('Nama'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="Jenis_Kelamin">
                            <option value="">Pilih Jenis Kelamin Anda</option>
                            <option value="Laki-Laki" <?= set_select('Jenis_Kelamin', 'Laki-Laki', ($pengajuan_tabungan->Jenis_Kelamin == 'Laki-Laki')); ?>>Laki-Laki</option>
                            <option value="Perempuan" <?= set_select('Jenis_Kelamin', 'Perempuan', ($pengajuan_tabungan->Jenis_Kelamin == 'Perempuan')); ?>>Perempuan</option>
                        </select>
                        <?php echo form_error('Jenis_Kelamin'); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap..." name="Alamat" value="<?= set_value('Alamat', $pengajuan_tabungan->Alamat_Lengkap); ?>">
                        <?php echo form_error('Alamat'); ?>
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone..." name="No_HP" value="<?= set_value('No_HP', $pengajuan_tabungan->No_Handphone); ?>">
                        <?php echo form_error('No_HP'); ?>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda..." name="pekerjaan" value="<?= set_value('pekerjaan', $pengajuan_tabungan->Pekerjaan); ?>">
                        <?php echo form_error('pekerjaan'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jenis Tabungan</label>
                        <select class="form-control" name="Jenis_Tabungan">
                            <option value="">Pilih Tabungan Anda</option>
                            <option value="Tamades" <?= set_select('Jenis_Tabungan', 'Tamades', ($pengajuan_tabungan->Jenis_Tabungan == 'Tamades')); ?>>Tabungan Tamades</option>
                            <option value="Taprona" <?= set_select('Jenis_Tabungan', 'Taprona', ($pengajuan_tabungan->Jenis_Tabungan == 'Tamprona')); ?>>Tabungan Taprona</option>
                            <option value="Ciremaiku" <?= set_select('Jenis_Tabungan', 'Ciremaiku', ($pengajuan_tabungan->Jenis_Tabungan == 'Ciremaiku')); ?>>Tabungan Ciremaiku</option>
                        </select>
                        <?php echo form_error('Jenis_Tabungan'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tabungan Awal</label>
                        <input type="text" class="form-control" id="jml_pinjaman" placeholder="Masukkan nominal tabungan awal..." name="Tabungan_Awal" value="<?= number_format($pengajuan_tabungan->Tabungan_Awal, 0, ',', '.'); ?>">
                        <?php echo form_error('Tabungan_Awal'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </section>
</div>
