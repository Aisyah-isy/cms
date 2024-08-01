<div id="done">
    <?= $this->session->flashdata('alert'); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-b" id="modalCenterTitle">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                    <div class="row d-flex">
                        <div class="col-lg-12 mb-0">
                            <label for="emailWithTitle" class="form-label">Nama Kategori</label>
                            <input type="text" id="emailWithTitle" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
                        </div>
                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-head-row card-tools-still-right">
            <h2 class="card-title fw-b">Kategori</h4>
        </div>
        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label">
                <i class="fa fa-plus"></i>
            </span>
            Tambah Kategori
        </button>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kategori Konten</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kategori2 as $aa) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $aa['kategori'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-dark" onClick="return confirm('Yakin pengen hapus?')" href="<?= base_url('admin/kategori/hapus/' . $aa['id_kategori']) ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#Modal2<?= $aa['id_kategori'] ?>">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal2<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="<?= site_url('admin/kategori/edit') ?>" method="post">
                                                <div class="modal-content">
                                                <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-b" id="modalCenterTitle">Edit Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nameWithTitle" class="form-label">Nama Kategori Konten</label>
                                                                <input type="text" id="nameWithTitle" class="form-control" value="<?= $aa['kategori'] ?>" name="nama_kategori">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>