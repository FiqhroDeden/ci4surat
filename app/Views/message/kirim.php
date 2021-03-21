<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Create New Message</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Create New Message</h4>
            <div class="card-header-action">
                <a>
                    <h4>Create New Message</h4>
                </a>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h4 style="text-align: center;">Silahkan Cari Dan Klick Nama Penerima Pesan Anda</h4>
                <table style="text-align: center;" class="table table-bordered table-hover dt-bootstrap4" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: blue">
                        <tr>
                            <th>Penerima</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($user as $u) : ?>
                            <?php if (user()->id !== $u['id']) { ?>
                                <tr>
                                    <td>
                                        <form class="needs-validation" action="/message/message" method="POST" novalidate="">
                                            <input type="hidden" name="id" value="<?= $u['messageid']; ?>">
                                            <button type="submit" name="submit" style="color: blue;" class="btn btn-transparent"><?= $u['nama_lengkap']; ?></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>