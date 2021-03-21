<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Hi, <?= user()->nama_lengkap; ?>!</h2>
        <p class="section-lead">
            Change information about yourself on this page.
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <a data-bs-toggle="modal" data-bs-target="#profile" href="">
                            <img alt="image" src="/img/<?= user()->user_image; ?>" class="rounded-circle profile-widget-picture">
                        </a>
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-value"><?= user()->nama_lengkap; ?></div>
                                <div class="profile-widget-item-label">Username : <?= user()->username; ?></div>
                                <div class="profile-widget-item-label">Email : <?= user()->email; ?></div>
                                <div class="profile-widget-item-label">Contact : <?= user()->no_telp; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name"><?= user()->nama_lengkap; ?> <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> Web Developer
                            </div>
                        </div>
                        Tentang <?= user()->nama_lengkap; ?> : <br>
                        <?= user()->bio; ?>
                    </div>
                    <div class="card-footer text-center">
                        <div class="font-weight-bold mb-2">Follow <?= user()->nama_lengkap; ?> On</div>
                        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-github mr-1">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('gagal')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('gagal'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#password" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form method="post" action="/profile/save" class="needs-validation" novalidate="">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="nama_lengkap" value="<?= user()->nama_lengkap; ?>" required="">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-7 col-12">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" value="<?= user()->email; ?>" required="">
                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-5 col-12">
                                                    <label>Phone</label>
                                                    <input type="tel" name="no_telp" class="form-control" value="<?= user()->no_telp; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>Bio</label>
                                                    <textarea name="bio" class="form-control summernote-simple"><?= user()->bio; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="profile-tab">
                                        <form method="post" action="/profile/savepass" class="needs-validation" novalidate="">
                                            <!-- <div class="form-group col-md-6 col-12">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="oldpass" placeholder="Enter your old password" autocomplete="off" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your old password
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="form-group col-md-5 col-12">
                                                    <label>New Password</label>
                                                    <input type=password name="pass" class="form-control" placeholder="Enter your new password" autocomplete="off" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your new password
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-7 col-12">
                                                    <label>Confirm new password</label>
                                                    <input autocomplete="off" type="password" name="pass1" class="form-control" placeholder="Enter your new password confirmation" required>
                                                    <div class="invalid-feedback">
                                                        Password confirmation does not match
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Update Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>