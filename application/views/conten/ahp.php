 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Perhitungan AHP</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Perbandingan Kriteria AHP</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th style="background-color: red; color:white">Kriteria</th>
                             <th>Fasilitas</th>
                             <th>Akreditasi</th>
                             <th>Biaya</th>
                             <th>Beasiswa</th>
                             <th>Jarak</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Fasilitas</td>
                             <td>
                                 <input type="number" class="form-control" name="C11" id="C11" value="1" readonly>
                             </td>
                             <td>
                                 <select name="C12" id="C12" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C13" id="C13" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C14" id="C14" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C15" id="C15" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                         </tr>

                         <!-- Akreditasi -->
                         <tr>
                             <td>Akreditasi</td>
                             <td>
                                 <input type="number" class="form-control" name="C21" id="C21" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C22" id="C22" value="1" readonly>
                             </td>
                             <td>
                                 <select name="C23" id="C23" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C24" id="C24" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C25" id="C25" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                         </tr>

                         <!-- Biaya -->
                         <tr>
                             <td>Biaya</td>
                             <td>
                                 <input type="number" class="form-control" name="C31" id="C31" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C32" id="C32" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C33" id="C33" value="1" readonly>
                             </td>
                             <td>
                                 <select name="C34" id="C34" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                             <td>
                                 <select name="C35" id="C35" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                         </tr>

                         <!-- Beasiswa -->
                         <tr>
                             <td>Beasiswa</td>
                             <td>
                                 <input type="number" class="form-control" name="C41" id="C41" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C42" id="C42" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C43" id="C43" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C44" id="C44" value="1" readonly>
                             </td>
                             <td>
                                 <select name="C45" id="C45" required class="form-control">
                                     <option value=""></option>
                                     <?php foreach ($bobot->result() as $row) { ?>
                                         <option value="<?= $row->id_bobot ?>"><?= $row->id_bobot ?></option>
                                     <?php } ?>
                                 </select>
                             </td>
                         </tr>

                         <!-- Jarak -->
                         <tr>
                             <td>Jarak</td>
                             <td>
                                 <input type="number" class="form-control" name="C51" id="C51" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C52" id="C52" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C53" id="C53" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C54" id="C54" value="0" readonly>
                             </td>
                             <td>
                                 <input type="number" class="form-control" name="C55" id="C55" value="1" readonly>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->