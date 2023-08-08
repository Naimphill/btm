<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Data Admin</h4>
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
                                    <h2>Data Admin</h2>
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($admin as $val) {
                                        $ida = $val->id_admin; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $val->username; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $ida; ?>">Edit</a>
                                                <a class="btn btn-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_admin/' . $ida) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $ida ?>" id="id_<?php echo $ida ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Edit Admin
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="<?php echo site_url('Adminpanel/edit_admin') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Username</label>
                                                                <input type="text" class="form-control" name="username"
                                                                    value="<?php echo $val->username; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Password</label>
                                                                <input type="text" class="form-control" name="password">
                                                            </div>
                                                            <input type="hidden" class="form-control" name="id_admin"
                                                                value="<?php echo $ida; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('Adminpanel/add_admin') ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->