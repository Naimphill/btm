<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">AdminPanel</h4>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-clipboard btn-icon-prepend"></i>Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="no-gutters align-items-center">
                            <center>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <h3><b>Jumlah Total Barang</b></h3>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h4><b>
                                            <?php $jml = 0;
                                            foreach ($barang as $key) {
                                                $jml = $jml + $key->stok;
                                            }
                                            echo $jml; ?>
                                        </b></h4>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="no-gutters align-items-center">
                            <center>
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <h3><b>Total Barang Masuk</b></h3>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h4><b>
                                            <?php $jml = 0;
                                            foreach ($olah_barang as $key) {
                                                if ($key->data == 'Barang_masuk') {
                                                    $jml = $jml + $key->jumlah;
                                                }
                                            }
                                            echo $jml; ?>
                                        </b></h4>
                                </div>
                            </center>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="no-gutters align-items-center">
                            <center>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <h3><b>Total Barang Keluar</b></h3>
                                </div>
                                <div class="no-gutters align-items-center">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <h4><b>
                                                <?php $jml = 0;
                                                foreach ($olah_barang as $key) {
                                                    if ($key->data == 'Barang_keluar') {
                                                        $jml = $jml + $key->jumlah;
                                                    }
                                                }
                                                echo $jml; ?>
                                            </b></h4>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Data Barang</h2>
                        </div>
                        <div class="card-body">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($barang as $val) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php
                                                foreach ($kategori as $kat) {
                                                    if ($kat->id_kategori == $val->id_kategori) {
                                                        echo $kat->nm_kategori;
                                                    }
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $val->nm_barang; ?>
                                            </td>
                                            <td>
                                                <?php echo $val->stok; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>


    </div>
    <!-- content-wrapper ends -->