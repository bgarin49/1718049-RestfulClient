<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kode Pos
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" id="kode_pos">
                            <small class="form-text text-danger"><?= form_error('kode_pos'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <input type="text" name="desa" class="form-control" id="desa">
                            <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="wilayah">Wilayah</label>
                            <input type="text" name="wilayah" class="form-control" id="wilayah">
                            <small class="form-text text-danger"><?= form_error('wilayah'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>