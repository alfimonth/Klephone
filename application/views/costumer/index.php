<div class="container-fluid " style="overflow:auto;">
    <?= $this->session->flashdata('pesan'); ?>
    <div class=" row">
        <div class="col-lg-12">
            <!-- Page Heading -->
            <a href="<?= base_url('costumer/tambah') ?>" class="btn btn-success mb-3"><i class="fas fa-file-alt"></i> Tambah Costumer</a>
            <!-- data-toggle="modal" data-target="#bukuBaruModal" -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Catatan</th>
                            <th scope="col" class="center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cos as $c) : ?>
                            <tr>
                                <td scope="row"><?= $c['name'] ?></td>
                                <td scope="row"><?= $c['tlp'] ?></td>
                                <td scope="row"><?= $c['catatan'] ?></td>
                                <td class="opsi">
                                    <a href="<?= base_url('costumer/edit/') . $c['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> edit</a>
                                    <a class="badge badge-danger hapus-cos" href="" data-toggle="modal" data-target="#hapusBrandModal" data-nama="<?= $c['name'] ?>" data-id="<?= $c['id'] ?>"><i class="fas fa-trash"></i> hapus</a>
                                </td>
                            </tr>


                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.container-fluid -->



    </div>
    <!-- End of Main Content -->
    <!-- Hapus Modal-->
    <div class="modal fade" id="hapusBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin akan menghapus <span id="dihapus"></span> ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-danger" id="linkHapus">Yakin</a>
                </div>
            </div>
        </div>
    </div>