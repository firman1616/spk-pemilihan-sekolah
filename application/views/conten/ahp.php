<?php
foreach ($kriteria->result() as $row) {
    $kode_arr[] = $row->kode_kriteria;
    $nama_arr[] = $row->nama_kriteria;
}
$int_matrix = count($nama_arr);
?>
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
                            <?php
                            $j = 0;
                            while ($j < $int_matrix) { ?>
                                <th><?= $nama_arr[$j] ?></th>
                            <?php $j++;
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($i < $int_matrix) { ?>
                            <tr>
                                <td><?= $nama_arr[$i] ?></td>
                                <?php
                                $h = 0;
                                while ($h < $int_matrix) { ?>
                                    <td>
                                        <?php
                                        if ($i == $h) {
                                            echo '<input name="index[' . $i . '][' . $h . ']" value="1" data-id="' . $i . '-' . $h . '" class="form-control" readonly>';
                                        } elseif (($i - $h) < 0) {
                                            echo '<select class="form-control" name="index[' . $i . '][' . $j . ']" data-id="' . $i . '-' . $j . '">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            </select>';
                                        } else {
                                            echo '<input name="index[' . $i . '][' . $h . ']" value="0" data-id="' . $i . '-' . $h . '" class="form-control" readonly>';
                                        }
                                        ?>
                                    </td>
                                <?php $h++;
                                }
                                ?>
                            </tr>
                        <?php $i++;
                        }
                        ?>
                        <tr>
                            <td>Jumlah</td>
                            <?php
                            $h = 0;
                            while ($h < $int_matrix) { ?>
                                <td><input type="number" class="form-control" name="jumlah<?= $h ?>" value="1" readonly></td>
                            <?php $h++;
                            }
                            ?>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- tes tabel baru -->

    <!-- end tabel baru -->

</div>
<!-- /.container-fluid -->




<!-- 
<script>

</script> -->