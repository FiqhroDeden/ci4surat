<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Agenda</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Agenda</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Agenda/calendar'); ?>">
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
                        <tr>
                            <td>1</td>
                            <td>01/08/2018 <br>07:00 WIT</td>
                            <td>03/08/2018 <br>20:00 WIT</td>
                            <td>Seminar</td>
                            <td>Hotel Santika</td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>12/08/2018 <br>07:00 WIT</td>
                            <td>14/08/2018 <br>20:00 WIT</td>
                            <td>Rapat</td>
                            <td>Dinas Pendidikan</td>
                            <td>Memakai Pakaian Dinas</td>
                            <td>
                                <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>