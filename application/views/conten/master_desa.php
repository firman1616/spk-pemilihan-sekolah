 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Master Desa</h1>

     <!-- DataTales Example -->

     <div class="row">
         <div class="col col-lg-7">
             <div class="card shadow mb-4">
                 <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Master Desa</h6>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nama Desa</th>
                                     <th style="width: 30%;">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $x = 1;
                                    $a = 1;
                                    foreach ($master_desa->result() as $row) { ?>

                                     <tr>
                                         <td><?= $x++; ?></td>
                                         <td><?= $row->nama_desa ?></td>
                                         <td>
                                             <button type="button" class="btn btn-primary" title="Detail">
                                                 <i class="fa fa-list"></i>
                                             </button>
                                             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $a++; ?>">
                                                 <i class="fa fa-edit"></i>
                                             </button>
                                             <a href="<?= site_url('admin/Master/jarak/' . $row->id_master_desa) ?>" class="btn btn-success" title="Tambah Jarak"><i class="fa fa-plus"></i></a>


                                         </td>
                                     </tr>

                                 <?php  } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col col-lg-5">
             <div class="card shadow mb-4">
                 <form action="<?= base_url('admin/Master/tambah_desa') ?>" method="post">
                     <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">Tambah Nama Desa</h6>
                     </div>
                     <div class="card-body">

                         <div class="form-group">
                             <label for="kriteria">Nama Desa</label>
                             <input type="text" class="form-control" id="nama_kriteria" name="nama_desa" required>
                         </div>
                         <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> | Simpan</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <!-- Tambah Kriteria -->
     <!-- End Tambah Kriteria -->

 </div>
 <!-- /.container-fluid -->


 <!-- Modal Edit -->
 <?php
    $y = 1;
    foreach ($master_desa->result() as $row) {
    ?>
     <div class="modal fade" id="editModal<?= $y++; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <form action="<?= base_url('admin/Master/update_desa/' . $row->id_master_desa) ?>" method="post">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">

                         <div class="form-group">
                             <label for="kriteria">Nama Desa</label>
                             <input type="text" class="form-control" name="nama_desa" value="<?= $row->nama_desa ?>">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 <?php $a++;
    }
    ?>