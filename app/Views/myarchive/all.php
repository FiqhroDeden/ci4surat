<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Manage Archives</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Manage Archives</h4>
            <div class="card-header-action">
                <a href="/myarchive/addall">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah Document</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center;" class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Nama User</th>
                            <th>File Name</th>
                            <th>Jenis File</th>
                            <th>Date Time</th>
                            <th>Keterangan</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($document as $d) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $d['nama_lengkap']; ?></td>
                                <td>
                                    <a href="/archive/<?= $d['filename']; ?>" onclick="return confirm('Download File <?= $d['name']; ?>?');" download>
                                        <?= $d['name']; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php $jenis = explode('.', $d["filename"]); ?>
                                    <?= $jenis[1]; ?>
                                </td>
                                <td><?= $d['date']; ?></td>
                                <td><?= $d['detail']; ?></td>
                                <td>
                                    <!-- <a href="/jabatan/edit/<?= $d['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></button></a> -->
                                    <a href="/myarchive/deletedocument/<?= $d['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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