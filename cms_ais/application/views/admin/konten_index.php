<div id="done">
    <?= $this->session->flashdata('alert'); ?>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-b" id="modalCenterTitle">Konten</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex">
                        <div class="col-lg-12 mb-0">
                            <label for="emailWithTitle" class="form-label">Judul</label>
                            <input type="text" id="emailWithTitle" class="form-control" placeholder="Judul" name="judul">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 mb-0">
                            <label for="nameWithTitle" class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control">
                                <?php foreach ($kategori2 as $aa) { ?>
                                    <option value="<?= $aa['id_kategori'] ?>"><?= $aa['kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 mb-0">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 mb-0">
                            <label for="image_uploads">Upload Foto (16:9)</label>
                            <input class="form-control" type="file" id="image_uploads" name="foto" accept="image/jpg, image/jpeg, image/png" />
                        </div>
                    </div>
                    <!-- 6.00 -->
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
            <h2 class="card-title fw-b">Konten</h4>
        </div>
        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label">
                <i class="fa fa-plus"></i>
            </span>
            Tambah Konten
        </button>
    </div>

    <div class="card-body">
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Katogori</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kreator</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($konten2 as $aa) { ?>
                        <?php $limit = 50;
                        $string = $aa['keterangan'];
                        if (strlen($string) > $limit) {
                            $limited_string = substr($string, 0, $limit) . '...';
                        } else {
                            $limited_string = $string;
                        } ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $aa['judul'] ?></td>
                            <td><?= $aa['kategori'] ?></td>
                            <td><?= $limited_string;?>
                            </td>
                            <td><?= $aa['tanggal'] ?></td>
                            <td><?= $aa['nama'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                    <span class="fas fa-image"></span> Lihat Foto</a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-dark" onClick="return confirm('Yakin Ingin Menghapus Konten?')" href="<?= site_url('admin/konten/hapus/' . $aa['foto']) ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <form action="<?= site_url('admin/konten/edit') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-content ">
                                                <input type="hidden" name="fotoN" value="<?= $aa['foto'] ?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-b" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row d-flex">
                                                        <div class="col-lg-12 mb-0">
                                                            <label for="judul" class="form-label">Judul</label>
                                                            <input type="text" id="judul" class="form-control" value="<?= $aa['judul'] ?>" name="judul">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-12 mb-0">
                                                            <label for="nameWithTitle" class="form-label">Kategori</label>
                                                            <select name="id_kategori" class="form-control">
                                                                <?php foreach ($kategori2 as $bb) { ?>
                                                                    <option <?php if ($bb['id_kategori'] == $aa['id_kategori']) {
                                                                                echo "selected";
                                                                            } ?> value="<?= $bb['id_kategori'] ?>"><?= $bb['kategori'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-12 mb-0">
                                                            <label class="form-label">Keterangan</label>
                                                            <textarea name="keterangan" id="tiny" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-12 mb-0">
                                                            <label for="image_uploads">Upload Foto</label>
                                                            <input class="form-control" type="file" id="image_uploads" name="foto" accept="image/jpg, image/jpeg, image/png" />
                                                        </div>
                                                    </div>
                                                    <!-- 6.00 -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
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