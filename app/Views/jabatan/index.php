<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Jabatan</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Kelola Jabatan</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('Jabatan/tambah'); ?>">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i> Input Jabatan</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Nama Jabatan</th>
                            <th>Kode</th>
                            <th>Level</th>
                            <th>Atasan</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rektor Universitas Pattimura</td>
                            <td>001</td>
                            <td><span class="badge badge-pill badge-dark">Level 1</span></td>
                            <td></td>
                            <td>
                                <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sekertaris</td>
                            <td>002</td>
                            <td><span class="badge badge-pill badge-dark">Level 2</span></td>
                            <td>Rektor Universitas Pattimura</td>
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