<div id="done">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-head-row card-tools-still-right">
            <h2 class="card-title fw-b">File Input</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="<?= site_url('admin/carausel/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="emailWithTitle" class="form-label">Judul Foto</label>
                <input type="text" id="emailWithTitle" class="form-control" placeholder="Judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Pilih Foto (1:3)</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php foreach ($caraousel as $aa) { ?>
    <div class="card">
        <div class="col-md-12 mb-3 mt-3">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $aa['judul'] ?></h5>
                    <a class="btn btn-sm btn-danger mt-2" onClick="return confirm('Yakin Ingin Menghapus Gambar?')" href="<?= site_url('admin/carausel/hapus/' . $aa['foto']) ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>