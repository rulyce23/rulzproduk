<?= $this->extend('layouts/auth') ?>
<?= $this->section('main') ?>

<h1>Reset Password</h1>

<?= view('App\Views\components\notifications') ?>

<form method="POST" action="<?= site_url('reset-password'); ?>" accept-charset="UTF-8">
    <?= csrf_field() ?>
    <p>
        <label>New Password</label><br />
        <input required type="password" name="password" value="" />
    </p>
    <p>
        <label>Retype New Password</label><br />
        <input required type="password" name="password_confirm" value="" />
    </p>
    <p>
        <input type="hidden" name="token" value="<?= $_GET['token'] ?>" />
        <button type="submit">Reset Password</button>
    </p>
</form>

<?= $this->endSection() ?>