<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Surat Masuk</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Surat Masuk</h4>
            <?php if (in_groups('sekertaris')) : ?>
                <div class="card-header-action">
                    <a href=" <?= base_url('Surat_masuk/tambah'); ?>">
                        <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Surat Masuk</button>
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>No. Surat <br>Tgl Surat</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Isi Ringkas
                                <br>
                                File
                            </th>
                            <th>Ket.</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($suratmasuk as $sm) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $sm['nomor_surat']; ?>
                                    <hr>
                                    <?= $sm['tgl_surat']; ?>
                                </td>
                                <td><?= $sm['pengirim_surat']; ?></td>
                                <td><?= $sm['perihal']; ?></td>
                                <td><?= $sm['isi_ringkas']; ?>
                                    <hr><b>File</b> :
                                    <?php if ($sm['file'] == 'tidakada') { ?>
                                        <p>Tidak Ada File</p>
                                    <?php } else { ?>
                                        <a href="/file/suratmasuk/<?= $sm['file']; ?>" target="_blank">Download</a>
                                    <?php } ?>

                                </td>
                                <td><?= $sm['keterangan']; ?></td>
                                <td align="center">
                                    <?php if (in_groups('sekertaris')) : ?>
                                        <a href="/surat_masuk/edit/<?= $sm['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                        <a href="/surat_masuk/delete/<?= $sm['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>

                                        <br>
                                    <?php endif; ?>
                                    <?php if ($sm['status_disposisi'] == 0) { ?>
                                        <button class="btn btn-default btn-sm mt-2"><span class="fa fa-warning"></span> Belum disposisi</button>
                                    <?php } else { ?>
                                        <button class="btn btn-info btn-sm mt-2"><span class="fa fa-bookmark"></span> Lihat disposisi</button>
                                    <?php } ?>


                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>