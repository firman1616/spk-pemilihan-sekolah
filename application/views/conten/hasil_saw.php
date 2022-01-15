<?php
// fasilitas
$fa1 = array();
for ($a = 0; $a < 6; $a++) {
    array_push($fa1, $_POST['fas' . $a]);
}
$famin = min($fa1);
$famax = max($fa1);
$kali = ($fa1[0] * $fa1[1]);

// akreditasi
$akre = array();
for ($b = 0; $b < 6; $b++) {
    array_push($akre, $_POST['akr' . $b]);
}
$akremin = min($akre);
$akremax = max($akre);

//biaya
$duit = array();
for ($c = 0; $c < 6; $c++) {
    array_push($duit, $_POST['bia' . $c]);
}
$duitmin = min($duit);
$duitmax = max($duit);

// beasiswa
$bonus = array();
for ($d = 0; $d < 6; $d++) {
    array_push($bonus, $_POST['bea' . $d]);
}
$bonusmin = min($bonus);
$bonusmax = max($bonus);

// jarak
$jar = array();
for ($e = 0; $e < 6; $e++) {
    array_push($jar, $_POST['jarak' . $e]);
}
$jarmin = min($jar);
$jarmax = max($jar);

// fasilitas
$fas1 = $fa1[0] / $famax;
$fas2 = $fa1[1] / $famax;
$fas3 = $fa1[2] / $famax;
$fas4 = $fa1[3] / $famax;
$fas5 = $fa1[4] / $famax;
$fas6 = $fa1[5] / $famax;

// akreditasi
$akred1 = $akre[0] / $akremax;
$akred2 = $akre[1] / $akremax;
$akred3 = $akre[2] / $akremax;
$akred4 = $akre[3] / $akremax;
$akred5 = $akre[4] / $akremax;
$akred6 = $akre[5] / $akremax;

// biaya
$spp1 = $duitmin / $duit[0];
$spp2 = $duitmin / $duit[1];
$spp3 = $duitmin / $duit[2];
$spp4 = $duitmin / $duit[3];
$spp5 = $duitmin / $duit[4];
$spp6 = $duitmin / $duit[5];

// Beasiswa
$bantuan1 = $bonus[0] / $bonusmax;
$bantuan2 = $bonus[1] / $bonusmax;
$bantuan3 = $bonus[2] / $bonusmax;
$bantuan4 = $bonus[3] / $bonusmax;
$bantuan5 = $bonus[4] / $bonusmax;
$bantuan6 = $bonus[5] / $bonusmax;

// jarak
$km1 = $jarmin / $jar[0];
$km2 = $jarmin / $jar[1];
$km3 = $jarmin / $jar[2];
$km4 = $jarmin / $jar[3];
$km5 = $jarmin / $jar[4];
$km6 = $jarmin / $jar[5];

foreach ($bobot->result() as $row) {
    $ahp1 = $row->r_fasilitas;
    $ahp2 = $row->r_akreditasi;
    $ahp3 = $row->r_biaya;
    $ahp4 = $row->r_beasiswa;
    $ahp5 = $row->r_jarak;
}


// refrensi
$ref1 =  ($ahp1 * $fas1) + ($ahp2 * $akred1) + ($ahp3 * $spp1) + ($ahp4 * $bantuan1) + ($ahp5 * $km1);
$ref2 =  ($ahp1 * $fas2) + ($ahp2 * $akred2) + ($ahp3 * $spp2) + ($ahp4 * $bantuan2) + ($ahp5 * $km2);
$ref3 =  ($ahp1 * $fas3) + ($ahp2 * $akred3) + ($ahp3 * $spp3) + ($ahp4 * $bantuan3) + ($ahp5 * $km3);
$ref4 =  ($ahp1 * $fas4) + ($ahp2 * $akred4) + ($ahp3 * $spp4) + ($ahp4 * $bantuan4) + ($ahp5 * $km4);
$ref5 =  ($ahp1 * $fas5) + ($ahp2 * $akred5) + ($ahp3 * $spp5) + ($ahp4 * $bantuan5) + ($ahp5 * $km5);
$ref6 =  ($ahp1 * $fas6) + ($ahp2 * $akred6) + ($ahp3 * $spp6) + ($ahp4 * $bantuan6) + ($ahp5 * $km6);
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Perhitungan SAW</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Perhitungan SAW</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 30%;">Bobot Perhitungan AHP</th>
                        <th><?= number_format($ahp1, 3)  ?></th>
                        <th><?= number_format($ahp2, 3)  ?></th>
                        <th><?= number_format($ahp3, 3)  ?></th>
                        <th><?= number_format($ahp4, 3)  ?></th>
                        <th><?= number_format($ahp5, 3)  ?></th>
                    </tr>
                </thead>
            </table>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="background-color: red; color:white"></th>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                            <th>Jarak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SMA Jati Agung</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[0] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Dharma Wanita 4</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[1] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Muhammadiyah 1</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[2] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Ulul Albab</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[3] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Wachid Hasyim 2</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[4] ?>" readonly>
                            </td>
                        </tr>

                        <tr>
                            <td>SMA Yayasan Taman</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fa1[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akre[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jar[5] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <bold>MIN</bold>
                            </td>
                            <td>
                                <bold><?= $famin ?></bold>
                            </td>
                            <td>
                                <bold><?= $akremin ?></bold>
                            </td>
                            <td>
                                <bold><?= $duitmin ?></bold>
                            </td>
                            <td>
                                <bold><?= $bonusmin ?></bold>
                            </td>
                            <td>
                                <bold><?= $jarmin ?></bold>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <bold>MAX
                            </td>
                            <td>
                                <bold><?= $famax ?></bold>
                            </td>
                            <td>
                                <bold><?= $akremax ?></bold>
                            </td>
                            <td>
                                <bold><?= $duitmax ?></bold>
                            </td>
                            <td>
                                <bold><?= $bonusmax ?></bold>
                            </td>
                            <td>
                                <bold><?= $jarmax ?></bold>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Prioritas -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hasil Prioritas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fasilitas</th>
                            <th>Akreditasi</th>
                            <th>Biaya</th>
                            <th>Beasiswa</th>
                            <th>Jarak</th>
                            <th>Refrensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= number_format($fas1, 3) ?></td>
                            <td><?= number_format($akred1, 3) ?></td>
                            <td><?= number_format($spp1, 3) ?></td>
                            <td><?= number_format($bantuan1, 3) ?></td>
                            <td><?= number_format($km1, 3) ?></td>
                            <td><?= number_format($ref1, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas2, 3) ?></td>
                            <td><?= number_format($akred2, 3) ?></td>
                            <td><?= number_format($spp2, 3) ?></td>
                            <td><?= number_format($bantuan2, 3) ?></td>
                            <td><?= number_format($km2, 3) ?></td>
                            <td><?= number_format($ref2, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas3, 3) ?></td>
                            <td><?= number_format($akred3, 3) ?></td>
                            <td><?= number_format($spp3, 3) ?></td>
                            <td><?= number_format($bantuan3, 3) ?></td>
                            <td><?= number_format($km3, 3) ?></td>
                            <td><?= number_format($ref3, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas4, 3) ?></td>
                            <td><?= number_format($akred4, 3) ?></td>
                            <td><?= number_format($spp4, 3) ?></td>
                            <td><?= number_format($bantuan4, 3) ?></td>
                            <td><?= number_format($km4, 3) ?></td>
                            <td><?= number_format($ref4, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas5, 3) ?></td>
                            <td><?= number_format($akred5, 3) ?></td>
                            <td><?= number_format($spp5, 3) ?></td>
                            <td><?= number_format($bantuan5, 3) ?></td>
                            <td><?= number_format($km5, 3) ?></td>
                            <td><?= number_format($ref5, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas6, 3) ?></td>
                            <td><?= number_format($akred6, 3) ?></td>
                            <td><?= number_format($spp6, 3) ?></td>
                            <td><?= number_format($bantuan6, 3) ?></td>
                            <td><?= number_format($km6, 3) ?></td>
                            <td><?= number_format($ref6, 3) ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->