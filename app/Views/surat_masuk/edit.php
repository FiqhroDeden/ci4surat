<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Surat Masuk</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Edit Surat Masuk</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Surat_masuk/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-1">

                </div>
                <div class="col-md-6 col-sm-10">
                    <form class="needs-validation" action="/surat_masuk/update/<?= $suratmasuk['id']; ?>" method="POST" enctype="multipart/form-data" novalidate="">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="oldfile" value="<?= $suratmasuk['file']; ?>">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <select name="kategori" id="" class="form-control">
                                    <?php foreach ($ksurat as $k) : ?>
                                        <option value="<?= $k['id']; ?>" <?php if ($suratmasuk['kategori'] == $k['id']) : ?> selected <?php endif; ?>><?= $k['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_surat" value="<?= $suratmasuk['nomor_surat']; ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Nomor Surat Wajib diisi!.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-9">
                                <input type="date" value="<?= $suratmasuk['tgl_surat']; ?>" name="tgl_surat" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Tanggal Surat wajib diisi
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pengirim Surat</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?= $suratmasuk['pengirim_surat']; ?>" name="pengirim_surat" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Pengirim Surat Wajib diisi!.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Perihal</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="perihal" id="" cols="30" rows="10"><?= $suratmasuk['perihal']; ?></textarea>
                                <div class="invalid-feedback">
                                    Harap Memilih Level
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi Ringkas</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="isi_ringkas" id="" cols="30" rows="10"><?= $suratmasuk['isi_ringkas']; ?></textarea>
                                <div class="invalid-feedback">
                                    Harap Memilih Level
                                </div>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">Sifat Surat</label>
                            <div class="col-sm-9">
                                <select name="sifat_surat" id="" class="form-control">
                                    <option value="Sangat Segera" <?php if ($suratmasuk['sifat_surat'] == 'Sangat Segera') { ?> selected <?php } ?>>Sangat Segera</option>
                                    <option value="Segera" <?php if ($suratmasuk['sifat_surat'] == 'Segera') { ?> selected <?php } ?>>Segera</option>
                                    <option value="Rahasia" <?php if ($suratmasuk['sifat_surat'] == 'Rahasia') { ?> selected <?php } ?>>Rahasia</option>
                                    <option value="Penting" <?php if ($suratmasuk['sifat_surat'] == 'Penting') { ?> selected <?php } ?>>Penting</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-3 col-form-label">File Surat</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" class="form-control">
                                <small>biarkan kosong jika tidak ada</small>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"><?= $suratmasuk['keterangan']; ?></textarea>

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