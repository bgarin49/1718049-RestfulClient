<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Kode Pos
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $tulungagung['kode_pos']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $tulungagung['desa']; ?></h6>
                        <p class="card-text"><?= $tulungagung['wilayah']; ?></p>
                    <a href="<?= base_url(); ?>Jpos_control" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>