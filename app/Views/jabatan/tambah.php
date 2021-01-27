<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Jabatan</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Jabatan</h4>
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
                    <form class="needs-validation" novalidate="">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Nama Jabatan Wajib Diisi?
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Apa Kode Jabatannya?.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <select name="" id="" class="form-control">
                                    <option value="">Level 1</option>
                                    <option value="">Level 2</option>
                                </select>
                                <div class="invalid-feedback">
                                    Harap Memilih Level
                                </div>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">Atasan</label>
                            <div class="col-sm-9">
                                <select name="" id="" class="form-control">
                                    <option value="">Rektor</option>
                                    <option value="">Wakil Rektor 1</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <label class="col-sm-3 col-form-label">Uraian</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>

                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Simpan</button>
                            <button class="btn btn-danger">Batal</button>
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