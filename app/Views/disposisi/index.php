<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Disposisi Surat Masuk</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Surat Dari : <br><b>Kantor Gubernur</b></td>
                                    <td>Tanggal Terima : <br><b>10/01/2020</b> </td>
                                </tr>
                                <tr>
                                    <td>Nomor Surat : <br><b>07/KR.TA/11/2020</b> </td>
                                    <td>Tanggal Surat : <br><b>09/01/2020</b> </td>
                                </tr>
                                <tr>
                                    <td>Perihal : <br><b>Undangan Rapat</b> </td>
                                    <td>Sifat : <br><b>Segera</b> </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-sm-1"></div>

            </div>

        </div>

    </div>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>History Disposisi</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Disposisi/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
                <?php if (in_groups('kepala')) : ?>
                    <a href=" <?= base_url('Disposisi/tambah'); ?>">
                        <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Disposisi</button>
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
                            <th>Disposisi Oleh</th>
                            <th>Diteruskan Kepada</th>
                            <th>Dengan Hormat Harap</th>
                            <th>Catatan Disposisi</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rektor Universitas Pattimura</td>
                            <td>
                                <ul>
                                    <li>Sekertaris <br> Martin Salakory</li>
                                    <li>Kepala Bagian <br> Dio</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Proses Lebih Lanjut</li>
                                    <li>Koordinasikan / konfirmasikan</li>
                                </ul>
                            </td>
                            <td>Segera</td>
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