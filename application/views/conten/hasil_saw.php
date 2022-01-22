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
                        <th><?= number_format($bobot1, 3)  ?></th>
                        <th><?= number_format($bobot2, 3)  ?></th>
                        <th><?= number_format($bobot3, 3)  ?></th>
                        <th><?= number_format($bobot4, 3)  ?></th>
                        <th><?= number_format($bobot5, 3)  ?></th>
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
                    $ref1 =  ($bobot1 * $fas0) + ($bobot2 * $akr0) + ($bobot3 * $spp0) + ($bobot4 * $bantuan0) + ($bobot5 * $km0);
                    $ref2 =  ($bobot1 * $fas1) + ($bobot2 * $akr1) + ($bobot3 * $spp1) + ($bobot4 * $bantuan1) + ($bobot5 * $km1);
                    $ref3 =  ($bobot1 * $fas2) + ($bobot2 * $akr2) + ($bobot3 * $spp2) + ($bobot4 * $bantuan2) + ($bobot5 * $km2);
                    $ref4 =  ($bobot1 * $fas3) + ($bobot2 * $akr3) + ($bobot3 * $spp3) + ($bobot4 * $bantuan3) + ($bobot5 * $km3);
                    $ref5 =  ($bobot1 * $fas4) + ($bobot2 * $akr4) + ($bobot3 * $spp4) + ($bobot4 * $bantuan4) + ($bobot5 * $km4);
                    $ref6 =  ($bobot1 * $fas5) + ($bobot2 * $akr5) + ($bobot3 * $spp5) + ($bobot4 * $bantuan5) + ($bobot5 * $km5);
                    ?>
                    <tbody>
                        <tr>
                            <td><?= number_format($fas0, 3) ?></td>
                            <td><?= number_format($akr0, 3) ?></td>
                            <td><?= number_format($spp0, 3) ?></td>
                            <td><?= number_format($bantuan0, 3) ?></td>
                            <td><?= number_format($km0, 3) ?></td>
                            <td><?= number_format($ref1, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas1, 3) ?></td>
                            <td><?= number_format($akr1, 3) ?></td>
                            <td><?= number_format($spp1, 3) ?></td>
                            <td><?= number_format($bantuan1, 3) ?></td>
                            <td><?= number_format($km1, 3) ?></td>
                            <td><?= number_format($ref2, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas2, 3) ?></td>
                            <td><?= number_format($akr2, 3) ?></td>
                            <td><?= number_format($spp2, 3) ?></td>
                            <td><?= number_format($bantuan2, 3) ?></td>
                            <td><?= number_format($km2, 3) ?></td>
                            <td><?= number_format($ref3, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas3, 3) ?></td>
                            <td><?= number_format($akr3, 3) ?></td>
                            <td><?= number_format($spp3, 3) ?></td>
                            <td><?= number_format($bantuan3, 3) ?></td>
                            <td><?= number_format($km3, 3) ?></td>
                            <td><?= number_format($ref4, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas4, 3) ?></td>
                            <td><?= number_format($akr4, 3) ?></td>
                            <td><?= number_format($spp4, 3) ?></td>
                            <td><?= number_format($bantuan4, 3) ?></td>
                            <td><?= number_format($km4, 3) ?></td>
                            <td><?= number_format($ref5, 3) ?></td>
                        </tr>
                        <tr>
                            <td><?= number_format($fas5, 3) ?></td>
                            <td><?= number_format($akr5, 3) ?></td>
                            <td><?= number_format($spp5, 3) ?></td>
                            <td><?= number_format($bantuan5, 3) ?></td>
                            <td><?= number_format($km5, 3) ?></td>
                            <td><?= number_format($ref6, 3) ?></td>
                        </tr>
                    </tbody>
                </table>

                <!-- <table>
                    <tr>
                        <td><?= number_format($ref1, 3) ?></td>
                        <td><?= number_format($ref2, 3) ?></td>
                        <td><?= number_format($ref3, 3) ?></td>
                        <td><?= number_format($ref4, 3) ?></td>
                        <td><?= number_format($ref5, 3) ?></td>
                        <td><?= number_format($ref6, 3) ?></td>
                    </tr>
                </table> -->

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->