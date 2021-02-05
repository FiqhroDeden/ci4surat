<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Agenda</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Agenda</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Agenda/kalender'); ?>">
                    <button class=" btn btn-info btn-sm"><i class="fa fa-calendar"></i> Lihat Kalender</button>
                </a>
                <?php if (in_groups('sekertaris')) : ?>
                    <a href=" <?= base_url('Agenda/tambah'); ?>">
                        <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Agenda</button>
                    </a>
                <?php endif; ?>

            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Tgl Mulai <br>Acara</th>
                            <th>Tgl Selesai <br>Acara</th>
                            <th>Perihal Acara</th>
                            <th>Tempat <br>Acara</th>
                            <th>Keterangan</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($agenda as $a) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $a['tgl_mulai']; ?> <br><?= $a['jam_mulai']; ?> WIT</td>
                                <td><?= $a['tgl_selesai']; ?> <br><?= $a['jam_selesai']; ?> WIT</td>
                                <td><?= $a['perihal']; ?></td>
                                <td><?= $a['tempat']; ?></td>
                                <td><?= $a['keterangan']; ?></td>
                                <td>
                                    <a href="/agenda/edit/<?= $a['id']; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="/agenda/delete/<?= $a['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><span class="fa fa-trash"></span></a>
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