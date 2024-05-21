<?= $this->extend('layouts/auth') ?>
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>

<div class="card">
    <div class="card-body text-center">
        <div class="mb-4">
        <center> <img src ="img/rullz.jpg" height="90" alt="logo"  style="border-radius: 50%; margin-top:50px;"></center>
      </div>
        <h6 class="mb-4 text-muted">Fill up the registration form!</h6>
       
        <form action="<?= site_url('register'); ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group">
                <input class="form-control" required type="text" name="firstname" value="<?= old('firstname') ?>" placeholder="First Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" required type="text" name="lastname" value="<?= old('lastname') ?>" placeholder="Last Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" required type="text" name="name" value="<?= old('name') ?>" placeholder="Nickname"/>
            </div>
            <div class="form-group">
                <input class="form-control" required type="email" name="email" value="<?= old('email') ?>" placeholder="<?= lang('Auth.email') ?>"/>
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password" value="" placeholder="<?= lang('Auth.password') ?>" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password_confirm" value="" placeholder="Confirm Password" />
            </div>
            
            <button name="registerButton" class="btn btn-primary shadow-2 mb-4"><?= lang('Auth.register') ?></button>
        </form>
        <p class="mb-0 text-muted">Already registered? <a href="<?= site_url('login'); ?>"> <?= lang('Auth.login') ?></a></p>
    </div>
</div>

<?= $this->endSection() ?>
