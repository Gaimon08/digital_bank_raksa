<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Halaman
      <small>Data Kredit KAB</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Kredit KAB</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <?php $this->load->view('message'); ?>  
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Kredit KAB</h3>
        <div class="box-tools pull-right">
          <a href="<?= site_url('kredit/KAB/add') ?>" class="btn btn-success">
            <i class="fa fa-plus"></i> Tambah Kredit KAB</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-responsive" id="table2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nomor KTP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Jenis Agunan</th>
              <th>Agunan Atas Nama</th>
              <th>Jumlah Pinjaman</th>
              <th>Lama Pinjaman</th>
              <th class="text-center" style="width: 8%;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $kamu => $data) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->No_KTP ?></td>
                <td><?= $data->Nama_Lengkap ?></td>
                <td><?= $data->Jenis_Kelamin ?></td>
                <td><?= $data->Alamat_Lengkap ?></td>
                <td><?= $data->Jenis_Agunan ?></td>
                <td><?= $data->Agunan_Atas_Nama ?></td>
                <td>Rp <?= number_format($data->Jumlah_Pinjaman, 0, ',', '.'); ?></td>
                <td><?= $data->Lama_Pinjaman ?></td>
                <td>
                  <a href="<?= site_url('Kredit_KAB/edit/' . $data->id_KAB) ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                  <a href="<?= site_url('Kredit_KAB/hapus/' . $data->id_KAB) ?>" onclick="return confirm('Yakin Hapus data!!')" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
