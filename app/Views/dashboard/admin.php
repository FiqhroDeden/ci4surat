<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Dashboard Admin</h1>
</div>
<div class="section-body">
    <div class="card" style="height:640; width:520">
        <br>
        <div class="row g-0">
            <div class="col-md-1">
                <p></p>
            </div>
            <div class="col-md-1">
                <img src="/img/atin.JPG" width="50" height="50" style="border-radius: 50%;" />
            </div>
            <div class="col-md-10 card-body">
                <h5 class="card-title"><?= user()->nama_lengkap; ?></h5>
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Selamat Hari Natal Semuanya</li>
        </ul>
        <img src=" /img/marthin.jpg" class="card-img-top" alt="...">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">0 orang menyukai</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Like</a>
            <a href="#" class="card-link">Comment</a>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>