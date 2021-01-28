<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Jabatan</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Jabatan</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Jabatan/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Jabatan</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Nama Jabatan</th>
                            <th>Kode</th>
                            <th>Level</th>
                            <th>Atasan</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($jabatan as $j) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $j['nama_jabatan']; ?></td>
                                <td><?= $j['kode_jabatan']; ?></td>
                                <td><span class="badge badge-pill badge-<?= $j['level'] == 1 ? 'dark'
                                                                            : ($j['level'] == 2 ? 'primary'
                                                                                : ($j['level'] == 3 ? 'info'
                                                                                    : ($j['level'] == 4 ? 'success'
                                                                                        : 'warning'))); ?>">Level <?= $j['level']; ?></span></td>
                                <td><?= $j['atasan']; ?></td>
                                <td>
                                    <a href="/jabatan/edit/<?= $j['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></button></a>
                                    <a href="/jabatan/delete/<?= $j['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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