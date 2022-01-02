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
                     <h6 class="m-0 font-weight-bold text-primary">Master Jarak</h6>
                 </div>
                 <div class="card-body">


                     <div class="form-group">
                         <form action="<?= base_url('admin/Master/tambah_jarak') ?>" method="post">
                             <label for="exampleFormControlInput1">Nama Desa</label>
                             <input type="hidden" class="form-control" id="id_desa" value="<?= $a ?>" name="id_desa">
                             <input type="text" readonly class="form-control" id="nama_desa" value="<?= $b ?>" name="nama_desa">
                             <?php for ($i = 0; $i < 6; $i++) { ?>

                                 <div class="row">
                                     <div class="col">
                                         <label for="exampleFormControlInput1">Pilih Nama Sekolah</label>
                                         <select name="sekolah[]" id="sekolah" class="form-control">
                                             <option value="">Pilih Sekolah</option>
                                             <?php foreach ($master_alternatif->result() as $row) { ?>
                                                 <option value="<?= $row->id_master_alt ?>"><?= $row->nama_alt ?></option>
                                             <?php } ?>
                                         </select>
                                     </div>
                                     <div class="col">
                                         <label for="jarak">Jarak Sekolah</label>
                                         <input type="number" name="jarak[]" id="jarak" class="form-control">
                                     </div>
                                 </div>

                             <?php } ?>
                             <br>
                             <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> | Simpan</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Tambah Kriteria -->
 <!-- End Tambah Kriteria -->

 </div>
 <!-- /.container-fluid -->