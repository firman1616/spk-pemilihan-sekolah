<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Perhitungan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Silakan Lengkapi Data</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('user/Perhitungan/hasil_perhitungan') ?>" method="post">
                <select name="desa" id="desa" class="form-control" style="width: 25%;" onchange="return autofill();" required>
                    <option value="" disabled selected>Pilih Desa</option>
                    <?php foreach ($desa->result() as $row) { ?>
                        <option value="<?= $row->id_master_desa ?>"><?= $row->nama_desa ?></option>
                    <?php  } ?>
                </select>
                <br>

                <table>
                    <?php
                    $f = 0;
                    $akr = 0;
                    $bi = 0;
                    $be = 0;
                    foreach ($saw->result() as $row) { ?>
                        <tr>
                            <td><input type="hidden" class="form-control" name="fas<?= $f++; ?>" value="<?= $row->fasilitas ?>"></td>
                            <td><input type="hidden" class="form-control" name="akr<?= $akr++; ?>" value="<?= $row->akreditasi ?>"></td>
                            <td><input type="hidden" class="form-control" name="bia<?= $bi++; ?>" value="<?= $row->biaya ?>"></td>
                            <td><input type="hidden" class="form-control" name="bea<?= $be++ ?>" value="<?= $row->beasiswa ?>"></td>
                        </tr>
                    <?php } ?>
                </table>

                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Jarak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $a = 0;
                        $s = 1;
                        foreach ($alt->result() as $row) { ?>
                            <tr>
                                <td><?= $s++; ?></td>
                                <td><?= $row->nama_alt ?></td>
                                <td>
                                    <input type="number" readonly name="jarak<?= $i ?>" id="jarak<?= $a++ ?>" class="form-control">
                                </td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>

                <!-- Perbadingan AHP -->
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Perbandingan</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lebih Penting mana <b>Fasilitas</b> dengan <b>Akreditasi</b></td>
                            <td>
                                <select name="c12" id="c12" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Lebih Penting mana <b>Fasilitas</b> dengan <b>Biaya</b></td>
                            <td>
                                <select name="c13" id="c13" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Lebih Penting mana <b>Fasilitas</b> dengan <b>Beasiswa</b></td>
                            <td>
                                <select name="c14" id="c14" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Lebih Penting mana <b>Fasilitas</b> dengan <b>Jarak</b></td>
                            <td>
                                <select name="c15" id="c15" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Lebih Penting mana <b>Akreditasi</b> dengan <b>Biaya</b></td>
                            <td>
                                <select name="c23" id="c23" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Lebih Penting mana <b>Akreditasi</b> dengan <b>Beasiswa</b></td>
                            <td>
                                <select name="c24" id="c24" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Lebih Penting mana <b>Akreditasi</b> dengan <b>Jarak</b></td>
                            <td>
                                <select name="c25" id="c25" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Lebih Penting mana <b>Biaya</b> dengan <b>Beasiswa</b></td>
                            <td>
                                <select name="c34" id="c34" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Lebih Penting mana <b>Biaya</b> dengan <b>Jarak</b></td>
                            <td>
                                <select name="c35" id="c35" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Lebih Penting mana <b>Beasiswa</b> dengan <b>Jarak</b></td>
                            <td>
                                <select name="c45" id="c45" class="form-control" required>
                                    <option value="" disabled selected></option>
                                    <?php foreach ($bobot->result() as $row) { ?>
                                        <option value="<?= $row->id_bobot ?>"><?= $row->keterangan_bobot ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Perbandingan AHP -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-calculator"></i> | Hitung </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>

                    </tbody>
                </table>
            </div> -->