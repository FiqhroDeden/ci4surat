<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Surat Masuk</h1>
</div>
<div class="section-body">
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
                        <tr>
                            <td>1</td>
                            <td>07/KR.TA/11/2020
                                <hr>
                                03 Oktober 2020
                            </td>
                            <td>Kantor Gubernur</td>
                            <td>Undangan Rapat</td>
                            <td>Undangan
                                <hr><b>File</b> : <a href="">Download</a>
                            </td>
                            <td>Harap Kehadirannya</td>
                            <td align="center">
                                <?php if (in_groups('sekertaris')) : ?>
                                    <button class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></button>
                                    <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
                                    <br>
                                <?php endif; ?>

                                <button class="btn btn-info btn-sm mt-2"><span class="fa fa-bookmark"></span> lihat disposisi</button>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>07/KR.TA/11/2020
                                <hr>
                                03 Oktober 2020
                            </td>
                            <td>Kantor Gubernur</td>
                            <td>Undangan Rapat</td>
                            <td>Undangan
                                <hr><b>File</b> : <a href="">Download</a>
                            </td>
                            <td>Harap Kehadirannya</td>
                            <td align="center">
                                <?php if (in_groups('sekertaris')) : ?>
                                    <button class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></button>
                                    <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
                                    <br>
                                    <button class="btn btn-outline-warning btn-sm mt-2"> belum ada disposisi</button>
                                <?php endif; ?>

                                <?php if (in_groups('kepala')) : ?>
                                    <a href="<?= base_url('disposisi/index'); ?>"><button class="btn btn-primary btn-sm mt-2"><span class="fa fa-plus"></span> input disposisi</button></a>

                                <?php endif; ?>
                            </td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>