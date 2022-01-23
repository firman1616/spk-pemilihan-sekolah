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
                        <th><?= number_format($bobot0, 3)  ?></th>
                        <th><?= number_format($bobot1, 3)  ?></th>
                        <th><?= number_format($bobot2, 3)  ?></th>
                        <th><?= number_format($bobot3, 3)  ?></th>
                        <th><?= number_format($bobot4, 3)  ?></th>
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
                                <input type="number" class="form-control" value="<?= $fasi1[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[0] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[0] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Dharma Wanita 4</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fasi1[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[1] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[1] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Muhammadiyah 1</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fasi1[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[2] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[2] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Ulul Albab</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fasi1[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[3] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[3] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>SMA Wachid Hasyim 2</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fasi1[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[4] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[4] ?>" readonly>
                            </td>
                        </tr>

                        <tr>
                            <td>SMA Yayasan Taman</td>
                            <td>
                                <input type="number" class="form-control" value="<?= $fasi1[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $akred1[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $duit1[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $bonus1[5] ?>" readonly>
                            </td>
                            <td>
                                <input type="number" class="form-control" value="<?= $jarak1[5] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <bold>MIN</bold>
                            </td>
                            <td>
                                <bold><?= $fasmin ?></bold>
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
                                <bold><?= $jarakmin ?></bold>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <bold>MAX
                            </td>
                            <td>
                                <bold><?= $fasmax ?></bold>
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
                                <bold><?= $jarakmax ?></bold>
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
                    <?php
                    $ref0 =  number_format(($bobot0 * $fas0) + ($bobot1 * $akr0) + ($bobot2 * $spp0) + ($bobot3 * $bantuan0) + ($bobot4 * $km0), 3);
                    $ref1 =  number_format(($bobot0 * $fas1) + ($bobot1 * $akr1) + ($bobot2 * $spp1) + ($bobot3 * $bantuan1) + ($bobot4 * $km1), 3);
                    $ref2 =  number_format(($bobot0 * $fas2) + ($bobot1 * $akr2) + ($bobot2 * $spp2) + ($bobot3 * $bantuan2) + ($bobot4 * $km2), 3);
                    $ref3 =  number_format(($bobot0 * $fas3) + ($bobot1 * $akr3) + ($bobot2 * $spp3) + ($bobot3 * $bantuan3) + ($bobot4 * $km3), 3);
                    $ref4 =  number_format(($bobot0 * $fas4) + ($bobot1 * $akr4) + ($bobot2 * $spp4) + ($bobot3 * $bantuan4) + ($bobot4 * $km4), 3);
                    $ref5 =  number_format(($bobot0 * $fas5) + ($bobot1 * $akr5) + ($bobot2 * $spp5) + ($bobot3 * $bantuan5) + ($bobot4 * $km5), 3);
                    // $max = array($ref0 => 'SMA Jati Agung', $ref1 => 'SMA Dharma Wanita 4', $ref2 => 'SMA Muhammadiyah 1', $ref3 => 'SMA Ulul Albab', $ref4 => 'SMA Wachid Hasyim 2', $ref5 => 'SMA Yayasan Taman');
                    // krsort($max);

                    // $arrlength = count($max);
                    // for ($x = 0; $x < $arrlength; $x++) {
                    //     echo $max[$x];
                    //     echo "<br>";
                    // }
                    // foreach ($max as $kunci => $nilai) {
                    //     echo "<tr><td>$kunci</td>
                    //   <td>$nilai</td></tr>\n";
                    // }
                    ?>

                    <input type="hidden" class="form-control" name="jar0" id="jar0" value="<?= $jarak1[0] ?>">

                    <input type="hidden" class="form-control" name="ref0" value="<?= $ref0 ?>">
                    <input type="hidden" class="form-control" name="ref1" value="<?= $ref1 ?>">
                    <input type="hidden" class="form-control" name="ref2" value="<?= $ref2 ?>">
                    <input type="hidden" class="form-control" name="ref3" value="<?= $ref3 ?>">
                    <input type="hidden" class="form-control" name="ref4" value="<?= $ref4 ?>">
                    <input type="hidden" class="form-control" name="ref5" value="<?= $ref5 ?>">

                    <tbody>
                        <tr>
                            <td><?= number_format($fas0, 3) ?></td>
                            <td><?= number_format($akr0, 3) ?></td>
                            <td><?= number_format($spp0, 3) ?></td>
                            <td><?= number_format($bantuan0, 3) ?></td>
                            <td><?= number_format($km0, 3) ?></td>
                            <td><?= number_format($ref0, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas1, 3) ?></td>
                            <td><?= number_format($akr1, 3) ?></td>
                            <td><?= number_format($spp1, 3) ?></td>
                            <td><?= number_format($bantuan1, 3) ?></td>
                            <td><?= number_format($km1, 3) ?></td>
                            <td><?= number_format($ref1, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas2, 3) ?></td>
                            <td><?= number_format($akr2, 3) ?></td>
                            <td><?= number_format($spp2, 3) ?></td>
                            <td><?= number_format($bantuan2, 3) ?></td>
                            <td><?= number_format($km2, 3) ?></td>
                            <td><?= number_format($ref2, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas3, 3) ?></td>
                            <td><?= number_format($akr3, 3) ?></td>
                            <td><?= number_format($spp3, 3) ?></td>
                            <td><?= number_format($bantuan3, 3) ?></td>
                            <td><?= number_format($km3, 3) ?></td>
                            <td><?= number_format($ref3, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas4, 3) ?></td>
                            <td><?= number_format($akr4, 3) ?></td>
                            <td><?= number_format($spp4, 3) ?></td>
                            <td><?= number_format($bantuan4, 3) ?></td>
                            <td><?= number_format($km4, 3) ?></td>
                            <td><?= number_format($ref4, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas5, 3) ?></td>
                            <td><?= number_format($akr5, 3) ?></td>
                            <td><?= number_format($spp5, 3) ?></td>
                            <td><?= number_format($bantuan5, 3) ?></td>
                            <td><?= number_format($km5, 3) ?></td>
                            <td><?= number_format($ref5, 3) ?></td>
                        </tr>
                    </tbody>
                </table>

                <!-- <table>
                    <tr>
                        <td><?= number_format($ref0, 3) ?></td>
                        <td><?= number_format($ref1, 3) ?></td>
                        <td><?= number_format($ref2, 3) ?></td>
                        <td><?= number_format($ref3, 3) ?></td>
                        <td><?= number_format($ref4, 3) ?></td>
                        <td><?= number_format($ref5, 3) ?></td>
                    </tr>
                </table> -->

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->