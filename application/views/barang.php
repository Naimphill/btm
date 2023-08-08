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
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Data Barang</h2>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-primary" href="<?php echo site_url('Adminpanel/add_barang') ?>"
                                        data-toggle="modal" data-target=".tambah">Tambah</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <table id="datatabel2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($barang as $val) {
                                        $idb = $val->id_barang; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $val->nm_barang; ?>
                                            </td>
                                            <td>
                                                <?php
                                                foreach ($kategori as $kat) {
                                                    if ($kat->id_kategori == $val->id_kategori) {
                                                        $kate = $kat->nm_kategori;
                                                        echo $kate;
                                                    }
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $val->keterangan; ?>
                                            </td>
                                            <td>
                                                <?php echo $val->stok; ?>
                                            </td>
                                            <td>
                                                <?php echo "Rp. " . number_format($val->harga, 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('/upload_gambar/' . $val->foto); ?>" alt="">

                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $idb; ?>">Edit</a>
                                                <a class="btn btn-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_barang/' . $idb) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $idb ?>" id="id_<?php echo $idb ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Edit Barang
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form enctype="multipart/form-data" method="POST"
                                                            action="<?php echo site_url('Adminpanel/edit_barang') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Nama Barang</label>
                                                                <input type="text" class="form-control" name="nm_barang"
                                                                    value="<?php echo $val->nm_barang; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Kategori</label>
                                                                <select class="form-control" name="id_kategori" id="">
                                                                    <option value="<?php echo $val->id_kategori; ?>">
                                                                        <?php echo $kate; ?>
                                                                    </option>
                                                                    <?php foreach ($kategori as $kat) { ?>
                                                                        <option value="<?php echo $kat->id_kategori; ?>"><?php echo $kat->nm_kategori; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Keterangan</label>
                                                                <input type="text" class="form-control" name="keterangan"
                                                                    value="<?php echo $val->keterangan; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Stok</label>
                                                                <input type="number" class="form-control" name="stok"
                                                                    value="<?php echo $val->stok; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Harga</label>
                                                                <input type="number" class="form-control" name="stok"
                                                                    value="<?php echo $val->harga; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">Foto</label>
                                                                <input type="file" name="foto" class="form-control-file"
                                                                    id="exampleFormControlFile1">
                                                            </div>
                                                            <input type="hidden" class="form-control" name="id_barang"
                                                                value="<?php echo $idb; ?>">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Edit -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!-- Modal Tambah-->
    <div class="modal fade tambah" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST"
                        action="<?php echo site_url('Adminpanel/add_barang') ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Barang</label>
                            <input type="text" class="form-control" name="nm_barang">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Barang</label>
                            <select class="form-control" name="id_kategori" id="">
                                <option value="">---Pilih---</option>
                                <?php foreach ($kategori as $kat) { ?>
                                    <option value="<?php echo $kat->id_kategori; ?>"><?php echo $kat->nm_kategori; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga</label>
                            <input type="number" class="form-control" name="harga" value="<?php echo $val->harga; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->