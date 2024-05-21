<?= $this->extend('layouts/auth') ?>
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>

<div class="card">
    <div class="card-body text-center">
        <div class="mb-5">
        <center> <img src ="img/rullz.jpg" width="150" height="150" alt="logo"  style="border-radius: 50%; margin-top:30px;"></center>

        </div>
        <h4 class="mb-4 text-muted">Forgot Password</h4>
       
        <form action="<?= site_url('forgot-password'); ?>" method="POST" accept-charset="UTF-8" onsubmit="submitButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Type Email" value="<?= old('email') ?>" required>
            </div>
           
            <button class="btn btn-primary shadow-2 mb-4">Send New Password</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
