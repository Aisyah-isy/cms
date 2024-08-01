<div id="done">
    <?= $this->session->flashdata('alert'); ?>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-head-row card-tools-still-right">
            <h2 class="card-title fw-b">File Input</h4>
        </div>
    </div>
    <div class="card-body table-responsive">
        <form action="<?= site_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="emailWithTitle" class="form-label">Judul Foto</label>
                <input type="text" id="emailWithTitle" class="form-control" placeholder="Judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Pilih Foto (16:9)</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($galeri as $aa) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $aa['judul'] ?></td>
                            <td><?= $aa['tanggal'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="<?= base_url('assets/upload/galeri/' . $aa['foto']) ?>" target="_blank">
                                    <span class="fas fa-image"></span> Lihat Foto</a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-dark" onClick="return confirm('Yakin Ingin Menghapus Gambar?')" href="<?= site_url('admin/galeri/hapus/' . $aa['foto']) ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
    </div>
</div>
