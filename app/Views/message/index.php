<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>My Document</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-warning" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Manage Massage</h4>
            <div class="card-header-action">
                <a href="/message/kirim">
                    <button class=" btn btn-primary btn-sm"><i class="fa fa-plus"></i>Create New</button>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center;" class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>#</th>
                            <th>Pengirim</th>
                            <th>DateTime</th>
                            <th><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($message as $m) :
                            if (user()->id == $m['penerima']) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <form class="needs-validation" action="/message/message" method="POST" novalidate="">
                                            <input type="hidden" name="id" value="<?= $m['messageid']; ?>">
                                            <input type="hidden" name="nama" value="<?= $m['nama_lengkap']; ?>">
                                            <input type="hidden" name="pengirim" value="<?= $m['pengirim']; ?>">
                                            <input type="hidden" name="penerima" value="<?= $m['penerima']; ?>">
                                            <button type="submit" name="submit" style="color: blue;" class="btn btn-transparent"><?= $m['nama_lengkap']; ?></button>
                                        </form>
                                    </td>
                                    <td><?= $m['date']; ?></td>
                                    <td>
                                        <!-- <a href="/jabatan/edit/" class="btn btn-primary"><span class="fa fa-edit"></span></button></a> -->
                                        <a href="/myarchive/deletedocument/<?= $m['messageid']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"><span class="fa fa-trash"></span></a>

                                    </td>

                                </tr>
                        <?php endif;
                        endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>