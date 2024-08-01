<div id="done">
    <?= $this->session->flashdata('alert'); ?>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-head-row card-tools-still-right">
            <h2 class="card-title fw-b">Konfigurasi</h4>
        </div>
        </button>
    </div>
</div>
<form class="mt-0" action="<?= site_url('admin/konfigurasi/edit') ?>" method="post" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title f-b" id="modalCenterTitle"></h5>

        </div>
        <div class="modal-body">
            <div class="row d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="emailWithTitle" class="form-label">Judul Website</label>
                    <input type="text" id="emailWithTitle" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>">
                    <!-- 10.35 -->
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12 mb-0">
                    <label class="form-label">Profil Website</label>
                    <textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="Instagram" class="form-label">Instagram</label>
                    <input type="text" id="Instagram" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" id="facebook" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" id="alamat" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
                </div>
            </div>
            <div class="row mt-2 d-flex">
                <div class="col-lg-12 mb-0">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" id="whatsapp" class="form-control" name="whatsapp" value="<?= $konfig->no_wa; ?>">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>