<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Manage Archives</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Add New Archive</h4>
            <div class="card-header-action">
                <a href="/myarchive/document">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>Kembali</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-1">

                </div>
                <div class="col-md-6 col-sm-10">
                    <form class="needs-validation" action="saveall" method="POST" novalidate="" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Pengirim</label>
                            <div class="col-sm-9">
                                <select name="user" id="" class="form-control" required>
                                    <option value=""></option>
                                    <?php foreach ($users as $u) : ?>
                                        <option value="<?= $u['id']; ?>"><?= $u['nama_lengkap']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Pilih user terlebih dahulu
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" required>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                    Masukan nama terlebih dahulu
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select File</label>
                            <div class="col-sm-9">
                                <input type="file" name="filename" class="form-control <?= ($validation->hasError('filename')) ? 'is-invalid' : ''; ?>" required>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('filename'); ?>
                                    Pilih file terlebih dahulu
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <label class="col-sm-3 col-form-label">Detail</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="detail" id="" cols="30" rows="10"></textarea>
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