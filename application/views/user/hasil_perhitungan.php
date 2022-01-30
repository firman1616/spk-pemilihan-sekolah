<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Perhitungan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Silakan Lengkapi Data</h6>
        </div>
        <div class="card-body">


            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bobot Perhitungan AHP</th>
                        <?php foreach ($rata as $row) { ?>
                            <th><?= number_format($row, 3) ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>

            <!-- End Perbandingan AHP -->
            <button type="submit" class="btn btn-primary"><i class="fa fa-calculator"></i> | Hitung </button>
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