<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data Kredit Pegawai
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Kredit Pegawai</a></li>
            <li class="active">Edit Data Kredit Pegawai</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">FORM EDIT PENGAJUAN KREDIT</h3>
            </div>
            <div class="box-body">
                <!-- Menampilkan pesan validasi -->
                <?php echo validation_errors(); ?>

                <form method="post" action="<?php echo base_url() . 'Kredit_pegawai/update'; ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id_kredit_pegawai" value="<?= $pengajuan_kredit->id_kredit_pegawai; ?>">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Email..." name="Email" value="<?= set_value('Email', $pengajuan_kredit->Email); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Email'); ?>
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap..." name="Nama" value="<?= set_value('Nama', $pengajuan_kredit->Nama_Lengkap); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Nama'); ?>
                    </div>

                    <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor KTP..." name="No_KTP" value="<?= set_value('No_KTP', $pengajuan_kredit->No_KTP); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('No_KTP'); ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap..." name="Alamat" value="<?= set_value('Alamat', $pengajuan_kredit->Alamat_Lengkap); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('Alamat'); ?>
                    </div>

                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone..." name="No_HP" value="<?= set_value('No_HP', $pengajuan_kredit->No_Handphone); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('No_HP'); ?>
                    </div>

                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda..." name="pekerjaan" value="<?= set_value('pekerjaan', $pengajuan_kredit->Pekerjaan); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('pekerjaan'); ?>
                    </div>

                    <div class="form-group">
                        <label>Jenis Agunan</label>
                        <select class="form-control" name="jenis_agunan">
                            <option value="">Pilih Jenis Agunan</option>
                            <option value="SK Pegawai Terakhir" <?= set_select('jenis_agunan', 'SK Pegawai Terakhir', ($pengajuan_kredit->Jenis_Agunan == 'SK Pegawai Terakhir')); ?>>SK Pegawai Terakhir</option>
                            <option value="Surat Kuasa Potong Gaji" <?= set_select('jenis_agunan', 'Surat Kuasa Potong Gaji', ($pengajuan_kredit->Jenis_Agunan == 'Surat Kuasa Potong Gaji')); ?>>Surat Kuasa Potong Gaji</option>
                            <option value="BPKB Kendaraan Bermotor" <?= set_select('jenis_agunan', 'BPKB Kendaraan Bermotor', ($pengajuan_kredit->Jenis_Agunan == 'BPKB Kendaraan Bermotor')); ?>>BPKB Kendaraan Bermotor</option>
                            <option value="Deposito Berjangka RWAP" <?= set_select('jenis_agunan', 'Deposito Berjangka RWAP', ($pengajuan_kredit->Jenis_Agunan == 'Deposito Berjangka RWAP')); ?>>Deposito Berjangka RWAP</option>
                            <option value="Sertifikat Pendidik" <?= set_select('jenis_agunan', 'Sertifikat Pendidik', ($pengajuan_kredit->Jenis_Agunan == 'Sertifikat Pendidik')); ?>>Sertifikat Pendidik</option>
                            <option value="Sertifikat Tanah dan atau Bangunan" <?= set_select('jenis_agunan', 'Sertifikat Tanah dan atau Bangunan', ($pengajuan_kredit->Jenis_Agunan == 'Sertifikat Tanah dan atau Bangunan')); ?>>Sertifikat Tanah dan atau Bangunan</option>
                        </select>
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('jenis_agunan'); ?>
                    </div>

                    <div class="form-group">
                        <label>Agunan Atas Nama</label>
                        <div class="radio">
                            <label for="radio1">
                                <input type="radio" id="radio1" name="radio_group" value="Pemohon/Pasangan" <?= set_radio('radio_group', 'Pemohon/Pasangan', ($pengajuan_kredit->Agunan_Atas_Nama == 'Pemohon/Pasangan')); ?>>
                                Pemohon/Pasangan
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio2">
                                <input type="radio" id="radio2" name="radio_group" value="Keluarga" <?= set_radio('radio_group', 'Keluarga', ($pengajuan_kredit->Agunan_Atas_Nama == 'Keluarga')); ?>>
                                Keluarga
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio3">
                                <input type="radio" id="radio3" name="radio_group" value="Orang Lain" <?= set_radio('radio_group', 'Orang Lain', ($pengajuan_kredit->Agunan_Atas_Nama == 'Orang Lain')); ?>>
                                Orang Lain
                            </label>
                        </div>
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('radio_group'); ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input type="text" class="form-control" placeholder="Masukkan nominal pinjaman..." name="jml_pinjaman" value="<?= set_value('jml_pinjaman', $pengajuan_kredit->Jumlah_Pinjaman); ?>">
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('jml_pinjaman'); ?>
                    </div>

                    <div class="form-group">
                        <label>Lama Pinjaman</label>
                        <select class="form-control" name="lama_pinjaman">
                            <option value="">Pilih Lama Pinjaman</option>
                            <option value="1 Tahun (12 Bulan)" <?= set_select('lama_pinjaman', '1 Tahun (12 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '1 Tahun (12 Bulan)')); ?>>1 Tahun (12 Bulan)</option>
                            <option value="1,5 Tahun (18 Bulan)" <?= set_select('lama_pinjaman', '1,5 Tahun (18 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '1,5 Tahun (18 Bulan)')); ?>>1,5 Tahun (18 Bulan)</option>
                            <option value="2 Tahun (24 Bulan)" <?= set_select('lama_pinjaman', '2 Tahun (24 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '2 Tahun (24 Bulan)')); ?>>2 Tahun (24 Bulan)</option>
                            <option value="2,5 Tahun (30 Bulan)" <?= set_select('lama_pinjaman', '2,5 Tahun (30 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '2,5 Tahun (30 Bulan)')); ?>>2,5 Tahun (30 Bulan)</option>
                            <option value="3 Tahun (36 Bulan)" <?= set_select('lama_pinjaman', '3 Tahun (36 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '3 Tahun (36 Bulan)')); ?>>3 Tahun (36 Bulan)</option>
                            <option value="4 Tahun (48 Bulan)" <?= set_select('lama_pinjaman', '4 Tahun (48 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '4 Tahun (48 Bulan)')); ?>>4 Tahun (48 Bulan)</option>
                            <option value="4,5 Tahun (54 Bulan)" <?= set_select('lama_pinjaman', '4,5 Tahun (54 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '4,5 Tahun (54 Bulan)')); ?>>4,5 Tahun (54 Bulan)</option>
                            <option value="5 Tahun (60 Bulan)" <?= set_select('lama_pinjaman', '5 Tahun (60 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '5 Tahun (60 Bulan)')); ?>>5 Tahun (60 Bulan)</option>
                            <option value="6 Tahun (72 Bulan)" <?= set_select('lama_pinjaman', '6 Tahun (72 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '6 Tahun (72 Bulan)')); ?>>6 Tahun (72 Bulan)</option>
                            <option value="6,5 Tahun (78 Bulan)" <?= set_select('lama_pinjaman', '6,5 Tahun (78 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '6,5 Tahun (78 Bulan)')); ?>>6,5 Tahun (78 Bulan)</option>
                            <option value="7 Tahun (84 Bulan)" <?= set_select('lama_pinjaman', '7 Tahun (84 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '7 Tahun (84 Bulan)')); ?>>7 Tahun (84 Bulan)</option>
                            <option value="7,5 Tahun (90 Bulan)" <?= set_select('lama_pinjaman', '7,5 Tahun (90 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '7,5 Tahun (90 Bulan)')); ?>>7,5 Tahun (90 Bulan)</option>
                            <option value="8 Tahun (96 Bulan)" <?= set_select('lama_pinjaman', '8 Tahun (96 Bulan)', ($pengajuan_kredit->Lama_Pinjaman == '8 Tahun (96 Bulan)')); ?>>8 Tahun (96 Bulan)</option>
                        </select>
                        <!-- Menampilkan pesan validasi khusus untuk bidang ini -->
                        <?php echo form_error('lama_pinjaman'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
