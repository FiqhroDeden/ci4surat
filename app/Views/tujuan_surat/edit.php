<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Tujuan Surat</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Edit Tujuan Surat</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Tujuan_surat/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-1">
                </div>
                <div class="col-md-6 col-sm-10">
                    <form class="needs-validation" novalidate="" action="/tujuan_surat/update/<?= $tsurat['id']; ?>" method="POST">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat_tujuan" value="<?= $tsurat['alamat_tujuan']; ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Alamat Surat Wajib Diisi!
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 row">
                            <label class="col-sm-3 col-form-label">Uraian</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="<?= $tsurat['uraian']; ?>" name="uraian" id="" cols="30" rows="10"></textarea>

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