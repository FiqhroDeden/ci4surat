<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Kategori Surat</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Kategori Surat</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Kategori_surat/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Kategori Surat</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Uraian</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($ksurat as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['kode_kategori']; ?></td>
                                <td><?= $k['nama_kategori']; ?></td>
                                <td><?= $k['uraian']; ?></td>
                                <td>
                                    <a href="/kategori_surat/edit/<?= $k['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></button></a>
                                    <a href="/kategori_surat/delete/<?= $k['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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