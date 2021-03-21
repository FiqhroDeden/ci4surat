<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="section-header">
    <h1>Dashboard Admin</h1>
</div>

<div class="card mb-3">
    <div class="row g-0">
        <p> </p>
    </div>
    <div class="row g-0">
        <div class="col-md-1">
            <p></p>
        </div>
        <div class="col-md-1">
            <img src="/img/<?= user()->user_image; ?>" width="50" height="50" style="border-radius: 50%;" />
        </div>
        <div class="col-md-10 card-body">
            <?php $nama = explode(' ', user()->nama_lengkap); ?>
            <input data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-align: left;" type="button" class="form-control" value="Apa yang anda pikirkan, <?= $nama[0]; ?>?" placeholder="Apa yang anda pikirkan?">
            <!-- <button style="font-size: 50px;" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Apa yang kamu pikirkan?
            </button> -->
        </div>
    </div>
    <hr>
</div>

<?php foreach ($beranda as $b) : ?>
    <div class="section-body">
        <div class="card" style="height:640; width:520">
            <br>
            <div class="row g-0">
                <div class="col-md-1">
                    <p></p>
                </div>
                <div class="col-md-1">
                    <img src="/img/<?= $b['user_image']; ?>" width="50" height="50" style="border-radius: 50%;" />
                </div>
                <div class="col-md-10 card-body">
                    <h3 class="card-title"><?= $b['nama_lengkap']; ?></h3>
                </div>
            </div>
            <ul id="<?= $b['id']; ?>" class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5><?= $b['news']; ?></h5>
                </li>
            </ul>
            <?php $media = explode('.', $b['media']); ?>
            <?php if ($media[1] == 'mp4' || $media[1] == 'mkv') { ?>
                <video src="/archive/<?= $b['media']; ?>" controls>
                </video>
            <?php } else if ($media[1] == 'jpg' || $media[1] == 'png') { ?>
                <img src="/archive/<?= $b['media']; ?>" class="card-img-top" alt="...">
            <?php } else { ?>


            <?php } ?>
            <ul class="list-group list-group-flush">
                <!-- Tampilkan Jumlah Like -->
                <?php $i = 0; ?>
                <?php $j = 0; ?>
                <?php foreach ($like as $l) {
                    if ($b['id'] == $l['id_beranda']) {
                        $i++;
                    }
                } ?>
                <li class="list-group-item"><?= $i; ?> orang menyukai.</li>
                <!-- Akhir Tampilan Jumlah Like -->
            </ul>
            <div class="card-body">
                <?php foreach ($like as $l) {
                    if ($b['id'] == $l['id_beranda'] && user()->id == $l['id_user']) {
                        $j++;
                ?>
                        <form action="/dashboard/unlike" method="POST">
                            <input type="hidden" name="id_beranda" value="<?= $b['id']; ?>">
                            <input type="hidden" name="id" value="<?= $l['id']; ?>">
                            <button tipe="submit" class="btn btn-primary" name=" submit"><i class="fas fa-heart"></i></button>
                        </form>
                    <?php } else {
                    ?>
                    <?php
                    }
                }
                if ($j == 0) { ?>
                    <form action="/dashboard/like" method="POST">
                        <input type="hidden" name="id_beranda" value="<?= $b['id']; ?>">
                        <button tipe="submit" class="btn btn-primary" name=" submit"><i class="far fa-heart"></i></button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>



<?= $this->endSection(); ?>