<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Agenda</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Agenda</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('agenda/index'); ?>">
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
                            <label class="col-sm-3 col-form-label">Tanggal Mulai Acara</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_mulai" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jam Mulai Acara</label>
                            <div class="col-sm-9">
                                <input type="time" name="jam_mulai" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Selesai Acara</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_selesai" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jam Selesai Acara</label>
                            <div class="col-sm-9">
                                <input type="time" name="jam_selesai" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">Perihal Acara</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" class="form-control" required="">

                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">Tempat Acara</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat" class="form-control" required="">

                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" required="">

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