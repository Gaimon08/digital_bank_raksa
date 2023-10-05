 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman 
        <small>Data User</small>
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
                            <th>username </th>
                         
                            <th>level </th>
                            <th>jenis kelamin </th>
                            <th class="text-center" style="width: 8%;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            $no = 1;
                            foreach ($row->result() as $kamu => $data) { ?>
                               <td><?= $no++ ?></td>
                               <td><?= $data->nama ?></td>
                               <td><?= $data->username ?></td>
                               <td><?php if($data->level == 1 ) {
                                echo 'Administrator';
                               }else if($data->level== 2){ 
                                echo 'Costumer Sirvice';

                               } ?></td>
                               <td><?php if($data->jenis_kelamin == 1 ) {
                                echo 'Laki Laki';
                               }else if($data->jenis_kelamin== 2){ 
                                echo 'Perempuan';

                               } ?></td>
                               <td>
                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?=site_url('user/del/' . $data->user_id)?>" onclick="return confirm('Yakin Hapus data!!')" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                             
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