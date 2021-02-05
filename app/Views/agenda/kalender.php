<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Agenda</h1>
</div>
<div class="section-body">
    <div class="container">
        <div id="kalender"></div>
    </div>
</div>

<?= $this->endSection(); ?>