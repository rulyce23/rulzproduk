<div class="modal fade" id="createuserformmodal" tabindex="-1" role="dialog" aria-labelledby="createuserformmodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="createuserformmodaltitle">Buat User Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('users/create-user'); ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group row">
                <div class="col">
                    <label for="firstname">First name</label>
                    <input class="form-control" required type="text" name="firstname" value="<?= old('firstname') ?>" placeholder="First name"/>
                </div>
                <div class="col">
                    <label for="lastname">Last name</label>
                    <input class="form-control" required type="text" name="lastname" value="<?= old('lastname') ?>" placeholder="Last name"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Nickname</label>
                <input class="form-control" required type="text" name="name" value="<?= old('name') ?>" placeholder="Nickname"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" required type="email" name="email" value="<?= old('email') ?>" placeholder="Email"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" required type="password" name="password" value="" placeholder="Password" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password_confirm" value="" placeholder="Confirm Password" />
            </div>

            <div class="text-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="registerButton"><i class="fa fa-plus"></i>Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>