<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Jabatan</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Edit Jabatan</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Jabatan/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-1">
                </div>
                <div class="col-md-6 col-sm-10">
                    <form class="needs-validation" novalidate="" action="/jabatan/update/<?= $jabatan['id']; ?>" method="POST">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_jabatan" value="<?= $jabatan['nama_jabatan']; ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Nama Jabatan Wajib Diisi?
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_jabatan" value="<?= $jabatan['kode_jabatan']; ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Apa Kode Jabatannya?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <select name="level" id="level" class="form-control">
                                    <option value="1" <?php if ($jabatan['level'] == 1) : ?> selected <?php endif; ?>>Level 1</option>
                                    <option value="2" <?php if ($jabatan['level'] == 2) : ?> selected <?php endif; ?>>Level 2</option>
                                    <option value="3" <?php if ($jabatan['level'] == 3) : ?> selected <?php endif; ?>>Level 3</option>
                                    <option value="4" <?php if ($jabatan['level'] == 4) : ?> selected <?php endif; ?>>Level 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Atasan</label>
                            <div class="col-sm-9">
                                <select name="atasan" id="level" class="form-control">
                                    <?php foreach ($atasan as $a) : ?>
                                        <option value="<?= $a['nama_jabatan']; ?>" <?php if ($jabatan['atasan'] == $a['nama_jabatan']) : ?> selected <?php endif; ?>><?= $a['nama_jabatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <label class="col-sm-3 col-form-label">Uraian</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="<?= $jabatan['uraian']; ?>" name="uraian" id="" cols="30" rows="10"></textarea>

                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-1">

                </div>

            </div>

        </div>

    </div>
</div>

<?= $this->endSection(); ?>