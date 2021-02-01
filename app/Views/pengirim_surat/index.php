<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Pengirim Surat</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Pengirim Surat</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Pengirim_surat/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Pengirim Surat</button>
                </a>
            </div>


        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Nama Golongan</th>
                            <th>Uraian</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pengirim_surat as $pengirim) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pengirim["nama_pengirim"]; ?></td>
                                <td><?= $pengirim["uraian"]; ?></td>
                                <td>
                                    <a href="/pengirim_surat/ubah/<?= $pengirim["id"]; ?>">
                                        <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                    </a>
                                    <form action="/pengirim_surat/delete/<?= $pengirim['id']; ?>" method="post" class="d-inline">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus <?= $pengirim['nama_pengirim']; ?>?');"><span class="fa fa-trash"></span></button>
                                    </form>
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