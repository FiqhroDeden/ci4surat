<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Manage Users</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Manage Users</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Pegawai/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Pegawai</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center;" class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telepon <br> Email</th>
                            <th>Role</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>

                                <td><?= $i++; ?></td>
                                <td><?= $p['nama_lengkap']; ?></td>
                                <td><?= $p['username']; ?></td>
                                <td><?= $p['no_telp']; ?> <br> <?= $p['email']; ?></td>
                                <td><span class="badge badge-pill badge-<?= $p['name'] == 'admin' ? 'dark'
                                                                            : ($p['name'] == 'ketua' ? 'primary'
                                                                                : ($p['name'] == 'sekertaris' ? 'info'
                                                                                    : ($p['name'] == 'pegawai' ? 'success'
                                                                                        : 'warning'))); ?>"><?= $p['name']; ?></span></td>
                                <td>
                                    <a href="/pegawai/edit/<?= $p['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="/pegawai/delete/<?= $p['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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