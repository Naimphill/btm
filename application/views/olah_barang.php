<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Data Barang</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <a href="" data-toggle="modal" data-target=".tambahbarangmasuk">
                        <div class="card-body">
                            <center>
                                <h2 style="color:#000 ;"><b>Barang Masuk</b><i class="fas fa-fw fa-arrow-down"></i></h2>
                            </center>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <a href="" data-toggle="modal" data-target=".tambahbarangkeluar">
                        <div class="card-body">
                            <center>
                                <h2 style="color:#000 ;"><b>Barang Keluar</b><i class="fas fa-fw fa-arrow-up"></i></h2>
                            </center>
                        </div>
                    </a>
                </div>
            </div>
        </div>



        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Riwayat Data Barang Masuk</h2>
                        </div>
                        <div class="card-body">
                            <table id="datatabel2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Barang</th>
                                        <th scope="col">Jumlah</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($olah_barang as $key) {
                                        $idk = $key->id_data;
                                        if ($key->data == 'Barang_masuk') { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $no++; ?>
                                                </th>
                                                <td>
                                                    <?php foreach ($barang as $val) {
                                                        if ($val->id_barang == $key->id_barang) {
                                                            echo $val->nm_barang;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->jumlah; ?>
                                                </td>

                                            </tr>
                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Riwayat Data Barang Keluar</h2>
                        </div>
                        <div class="card-body">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Barang</th>
                                        <th scope="col">Jumlah</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($olah_barang as $key) {
                                        $idk = $key->id_barang;
                                        if ($key->data == 'Barang_keluar') { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $no++; ?>
                                                </th>
                                                <td>
                                                    <?php foreach ($barang as $val) {
                                                        if ($val->id_barang == $key->id_barang) {
                                                            echo $val->nm_barang;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->jumlah; ?>
                                                </td>

                                            </tr>
                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- 
        <form method="POST" action="<? php // echo site_url('Adminpanel/add_data_barang') ?>">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Barang</label>
                <input type="text" class="form-control" name="id_barang" id="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah barang masuk</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="data_b" value="Barang_masuk">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script>
            $(document).ready(function () {
                // Ambil data barang dari PHP dan simpan dalam bentuk array JavaScript
                var dataBarang = <?php echo json_encode($barang); ?>;

                // Fungsi untuk mengaktifkan autocompletion pada input Nama Barang
                $("#nama_barang").autocomplete({
                    source: dataBarang.map(function (item) {
                        return item.nnm_barag;
                    }),
                    minLength: 1 // Mulai menampilkan saran setelah 1 karakter diketik
                });
            });
        </script>

 -->


        <!-- Modal Tambah  barang-->
        <div class="modal fade tambahbarangmasuk" id="tambahbarangmasuk" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah barang Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo site_url('Adminpanel/add_data_barang') ?>">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Barang</label>
                                <select name="id_barang" id="" class="form-control">
                                    <option value="">---PILIH----</option>
                                    <?php foreach ($barang as $bar) { ?>
                                        <option value="<?php echo $bar->id_barang ?>"><?php echo $bar->nm_barang ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah barang masuk</label>
                                <input type="number" class="form-control" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="data_b" value="Barang_masuk">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah -->
        <!-- Modal Tambah  barang-->
        <div class="modal fade tambahbarangkeluar" id="tambahbarangkeluar" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah barang Keluar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo site_url('Adminpanel/add_data_barang') ?>">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Barang</label>
                                <select name="id_barang" id="" class="form-control">
                                    <option value="">---PILIH----</option>
                                    <?php foreach ($barang as $bar) { ?>
                                        <option value="<?php echo $bar->id_barang ?>"><?php echo $bar->nm_barang ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah barang Keluar</label>
                                <input type="number" class="form-control" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="data_b" value="Barang_keluar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah -->