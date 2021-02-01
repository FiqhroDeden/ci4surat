<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Pegawai</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Pegawai</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Pegawai/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Pegawai</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th>Telepon <br> Email</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>

                                <td><?= $i++; ?></td>
                                <td><?= $p['nip']; ?></td>
                                <td><?= $p['nama_lengkap']; ?></td>
                                <td><?= $p['nama_golongan']; ?> (<?= $p['kode_golongan']; ?>)</td>
                                <td><?= $p['nama_jabatan']; ?></td>
                                <td><?= $p['no_telp']; ?> <br> <?= $p['email']; ?></td>
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