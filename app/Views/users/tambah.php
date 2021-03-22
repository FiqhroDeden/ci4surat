<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Manage Users</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Add New User</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('users/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-1">

                </div>
                <div class="col-md-6 col-sm-10">
                    <form class="needs-validation" action="save" method="POST" novalidate="">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" required>
                                <div class="invalid-feedback">
                                    Nama Lengkap wajib diisi?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" class="form-control" required>
                                <div class="invalid-feedback">
                                    Nomor Telepon wajib diisi?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" required>
                                <div class="invalid-feedback">
                                    Email wajib diisi?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select name="group_id" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <?php foreach ($roles as $r) : ?>
                                        <option value="<?= $r['id']; ?>"><?= $r['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </option>
                                <div class="invalid-feedback">
                                    Jabatan wajib dipilih?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control" required>
                                <div class="invalid-feedback">
                                    Username wajib diisi?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_hash" class="form-control" required>
                                <div class="invalid-feedback">
                                    Password wajib diisi?.
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-footer text-right"> -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <!-- </div> -->
                    </form>
                </div>
                <div class="col-md-3 col-sm-1">

                </div>

            </div>

        </div>

    </div>
</div>

<?= $this->endSection(); ?>