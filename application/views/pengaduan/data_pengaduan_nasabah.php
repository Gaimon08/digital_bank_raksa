 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman 
        <small>Data Pengaduan Nasabah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <table class="table table-bordered table-hover table-responsive" id="table2">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Name </th>
                            <th>Subjek </th>
                            <th>wa</th>
                            <th> Pesan </th>
                            <th> Tanggal  </th>
                            <th> Waktu </th>
                            <th class="text-center" style="width: 12%;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                         <?php
                            $no = 1;
                            foreach ($row->result() as $kamu => $data) { ?>
                               <td><?= $no++ ?></td>
                               <td><?= $data->nama ?></td>
                               <td><?= $data->subjek ?></td>
                               <td><?= $data->no_wa ?></td>
                               <td><?= $data->pesan ?></td>
                               <td><?= $data->waktu ?></td>
                               <td><?= $data->tanggal ?></td>
                               <td>
                                <a href="" class="btn btn-success btm-sm"><i class="fa fa-trash"></i></a>
                                <a href="" class="btn btn-danger btm-sm"><i class="fa fa-pencil"></i></a>
                               </td>      
                              </tr>
                              <?php } ?>
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