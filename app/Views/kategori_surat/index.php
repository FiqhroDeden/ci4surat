<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Kategori Surat</h1>
</div>
<div class="section-body">
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
                        <tr>
                            <td>1</td>
                            <td>010</td>
                            <td>Kantor Gubernur</td>
                            <td>Lorem ipsum</td>
                            <td>
                                <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>021</td>
                            <td>Dinas Perhubungan</td>
                            <td></td>
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