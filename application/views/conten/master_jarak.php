 <?php
    foreach ($get_data->result() as $row) {
        $a = $row->id_master_desa;
        $b = $row->nama_desa;
    }
    ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Master Jarak</h1>

     <!-- DataTales Example -->

     <div class="row">
         <div class="col col-lg-7">
             <div class="card shadow mb-4">
                 <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Master Jarak <?= $b; ?></h6>
                 </div>
                 <div class="card-body">

                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Nama Alternatif</th>
                                 <th scope="col">Jarak</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $x = 1;
                                foreach ($get_jarak->result() as $row) { ?>
                                 <tr>
                                     <th scope="row"><?= $x++; ?></th>
                                     <td><?= $row->nama_alt; ?></td>
                                     <td><?= $row->jarak ?> KM</td>
                                 </tr>
                             <?php }
                                ?>
                         </tbody>
                     </table>

                 </div>
             </div>
         </div>
     </div>

     <!-- Tambah Kriteria -->
     <!-- End Tambah Kriteria -->

 </div>
 <!-- /.container-fluid -->