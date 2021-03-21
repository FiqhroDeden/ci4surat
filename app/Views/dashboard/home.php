<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Users</h4>
                    </div>
                    <div class="card-body">
                        <?php $ro = 0 ?>
                        <?php foreach ($groups_users as $g) {
                            $g['group_id'];
                            $rol = ++$ro;
                        }
                        echo $rol;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>My Archives</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $s = 0;
                        foreach ($archive as $a) {
                            if (user()->id === $a['user_id']) {
                                $a['id'];
                                $se = ++$s;
                            } else {
                                $se = $s;
                            }
                        }
                        echo $se;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Archives</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $ar = 0;
                        foreach ($archive as $a) {
                            $a['id'];
                            $arc = ++$ar;
                        }
                        echo $arc;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Year</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $timezone = time() + (60 * 60 * 9);
                        echo gmdate('Y', $timezone);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>