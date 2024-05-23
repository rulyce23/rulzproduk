<?= $this->extend('layouts/auth') ?>
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>

<div class="card">
    <div class="card-body text-center">
        <div class="mb-4">
        <center> <img src ="img/rullz.jpg" height="90" alt="logo"  style="border-radius: 50%; margin-top:50px;"></center>

        </div>
        <h4 class="mb-4 text-muted">Login</h4>
       
     <form action="<?= base_url('login')?>" method="POST" accept-charset="UTF-8">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" value="<?= old('email') ?>">
                            </div>

                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                    </div>

                                    <hr>
                                </form>
                              
                                    <div class="text-center">
                                    <a href="<?= site_url('forgot-password'); ?>">Forgot Password</a>
                                    </div>
                                <hr>

                                    <div class="text-center">
                                    Don't have an account?<a href="<?= site_url('register'); ?>"> Registrasi</a>
                                       </div>
    </div>
</div>
<br><br><br>
<?= $this->endSection() ?>
