<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="/img/mylogo.png" alt="logo" width="100" class="shadow-primary rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>

                        <div class="card-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form action="<?= route_to('login') ?>" method="post">
                                <?= csrf_field() ?>
                                <?php if ($config->validFields === ['email']) : ?>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.emailOrUsername') ?></label>
                                        <input id="email" type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <?php if ($config->allowRegistration) : ?>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="<?= route_to('register') ?>">Create One</a>
                        </div>

                    <?php endif; ?>

                    <div class="simple-footer">
                        Copyright &copy; M4S <?php
                                                $timezone = time() + (60 * 60 * 9);
                                                echo gmdate('Y', $timezone);

                                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>