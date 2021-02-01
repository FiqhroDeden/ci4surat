<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Tujuan Surat</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Tujuan Surat</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Tujuan_surat/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Tujuan Surat</button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Alamat Tujuan</th>
                            <th>Uraian</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($tsurat as $t) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $t['alamat_tujuan']; ?></td>
                                <td><?= $t['uraian']; ?></td>
                                <td>
                                    <a href="/tujuan_surat/edit/<?= $t['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="/tujuan_surat/delete/<?= $t['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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