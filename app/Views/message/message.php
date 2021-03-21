<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>
        <?= $nama; ?>
        <?= session()->getFlashdata('nama');; ?>
    </h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <?php foreach ($isi as $i) :
            if ($kode == $i['messageid']) { ?>
                <div class="card-header py-3">
                    <?php if ($i['ipengirim'] == $i['mpengirim']) { ?>
                        <div class="col-md-6">
                            <div class="col-md-10 card-body">
                                <p>
                                    <img src="/img/<?= $i['user_image']; ?>" width="50" height="50" style="border-radius: 50%;" /><?= $i['pesan']; ?>
                                </p>
                            </div>
                        </div>
                    <?php }
                    if ($i['ipenerima'] == $i['mpenerima']) { ?>
                        <div class="col-md-6">
                            <div class="col-md-10 card-body">
                                <p>
                                    <img src="/img/<?= user()->user_image; ?>" width="50" height="50" style="border-radius: 50%;" /><?= $i['pesan']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        <?php }
        endforeach; ?>
        <div style="text-align: center;" class="card-body">
            <form class="needs-validation" action="/message/send" method="POST" novalidate="">
                <input type="hidden" name="pengirim" value="<?= $pengirim ?>">
                <input type="hidden" name="penerima" value="<?= $penerima ?>">
                <input type="hidden" name="nama" value="<?= $nama ?>">
                <input type="hidden" name="kode" value="<?= $kode ?>">
                <textarea class="form-control" name="pesan" id="pesan" placeholder="Masukan Pesan Anda..."></textarea>
                <button data-id="<?= $kode; ?>" type="submit" name="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>

    </div>
</div>


<?= $this->endSection(); ?>