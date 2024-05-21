<?= $this->extend('layouts/auth') ?>
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12 d-none d-lg-block">
                           <center> <img src ="img/rullz.jpg" width="320" height="280"  style="border-radius: 50%; margin-top:50px;"></center>
                        </div>
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
