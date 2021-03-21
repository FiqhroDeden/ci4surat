<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Profile</h1>
</div>
<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mathin Alfreinsco Salakory Personal Website</title>
    </head>

    <body>

        <hr />

        <header style="text-align: center;">
            <img src="/img/atin.JPG" width="200" height="200" style="border-radius: 50%;" />
            <h1><?= user()->nama_lengkap; ?></h1>
            <p>(Web Developer)</p>
            <a href="">Edit</a>
        </header>

        <hr />

        <article style="text-align: center;">
            <h2>Overview</h2>
            <p>
                Hi, saya adalah web developer yang berdomisisli di Jakarta.
                Saat ini sedang belajar HTML di Petnai Kode
            </p>
        </article>

        <div style="max-width: 600px; margin: 3em auto">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Pengalaman</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <li>HTML (Expert)</li>
                                <li>CSS (Beginner)</li>
                                <li>Javascript (Beginner)</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Freelancer di Internet</li>
                                <li>Leaeder Local Linux Community</li>
                                <li>Leaeder Local Linux Community</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

    </html>

</div>

<?= $this->endSection(); ?>