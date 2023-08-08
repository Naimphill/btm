<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Data Kategori</h4>
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
                                    <h2>Data Kategori</h2>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-primary" href="" data-toggle="modal"
                                        data-target=".tambah">Tambah</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <table id="datatabel2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $val) {
                                        $idk = $val->id_kategori; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $val->nm_kategori; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $idk; ?>">Edit</a>
                                                <a class="btn btn-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_kategori/' . $idk) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $idk ?>" id="id_<?php echo $idk ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="<?php echo site_url('Adminpanel/edit_kategori') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Nama Kategori</label>
                                                                <input type="text" class="form-control" name="nm_kategori"
                                                                    value="<?php echo $val->nm_kategori; ?>">
                                                                <input type="hidden" class="form-control" name="id_kategori"
                                                                    value="<?php echo $val->id_kategori; ?>">
                                                            </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('Adminpanel/add_kategori') ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Kategori</label>
                            <input type="text" class="form-control" name="nm_kategori">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->