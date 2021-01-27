<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Pegawai</h1>
</div>
<div class="section-body">
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
                        <tr>
                            <td>1</td>
                            <td>1920020123121</td>
                            <td>Fiqhro Dedhen</td>
                            <td>Pembina Utama Muda (IV/c)</td>
                            <td>Admin</td>
                            <td>082248212180 <br> dedhensupatmo@gmail.com</td>
                            <td>
                                <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>0281302311231</td>
                            <td>Marthin Salakory</td>
                            <td>Sekertaris</td>
                            <td>Admin</td>
                            <td>082231230221 <br> Marthinsalakory@gmail.com</td>
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