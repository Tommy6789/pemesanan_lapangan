  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
          <h3>DATA TEAM</h3>
          <?php 
            $message = $this->session->flashdata('message');
            if ($message == "success"){
            ?>
              <script>alert('berhasil merubah')</script>
              <?php
              }else if($message == "success update"){
                ?>
                <script>alert('berhasil merubah')</script>
                <?php
              }else if($message == "success delete"){
                ?>
                <script>alert('berhasil menghapus')</script>
                <?php
              };
            ?>
            
          </div>
          <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>NAME TEAM</th>
                <th>JUMLAH PEMAIN</th>
                <th>CREATE TIME</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
                $i = 1;
                foreach($data as $t) :
              ?>
              <tr>
              <td><?= $i?></td>
              <td><?= $t->name_team ?></td>
              <td><?= $t->jumlah_pemain ?></td>
              <td><?= $t->create_time ?></td>
              <td>
                <a href="<?= base_url()?>team/update_team?id=<?= $t->id?>" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"> EDIT</i></a>
                <a href="<?= base_url()?>team/delete_team?id=<?= $t->id?>" type="button" class="btn btn-danger"><i class="fas fa-trash"> DELETE</i></a>
              </td>
              </tr>
              <?php
                $i++;
                endforeach;
              ?>
            </tbody>
          </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->