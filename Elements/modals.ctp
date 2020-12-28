<style>
.button-co{
    position: absolute;
    top: 0px;
    left: 375px;
    width: 100px;
    border-radius: 0px;
    background-color: #337ab7;
    border-color: #337ab7;
}
.button-reg {
    position: absolute;
    top: -50px;
    width: 100px;
    border-radius: 0px;
    background-color: #337ab7;
    border-color: #337ab7;
}
.button-reg-2 {
    text-align:center;
    width: 100%;
    border-radius: 0px;
    background-color: #337ab7;
    border-color: #337ab7;
}
.button-insc{
    position: absolute;
    top: 0;
    width: 130px;
    left: 374px;
    border-radius: 0;    
	background-color: #337ab7;
    border-color: #337ab7;
}
.button-perdu {
    position: absolute;
    top: 0;
    width: 130px;
    left: 374px;
    border-radius: 0;    background-color: #337ab7;
    border-color: #337ab7;
}
@media (max-width: 576px) {
.button-insc{
    top: 48px;
    left: 15px;
}
.button-perdu{
    top: 48px;
    left: 15px;
}
.button-co{
    top: 48px;
    left: 15px;
}
}
</style>
<div style="font-family: 'Concert One', sans-serif;margin-top:10pc" class="modal modal-medium fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div style="background-color:transparent;color:white;border:none" class="modal-content">
			<div style="border:none;text-align:center;display: inline-block;" class="modal-header">
			<button style="background-color:transparent;border:none;color:white;cursor:pointer;font-size:30px" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
				<h3 ><?= $Lang->get('USER__LOGIN') ?></h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_login')) ?>" data-redirect-url="?">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"><?= $Lang->get('USER__USERNAME') ?></label>

						<div class="col-sm-10">
							<input style="border-radius:0px" type="text" class="form-control" name="pseudo" id="inputEmail3" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">

						</div>

					</div>


					<div class="form-group">
						<label class="col-sm-4 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
							<div style="border:none" class="modal-footer">
								<button type="submit" class="btn button-co btn-primary"><?= $Lang->get('USER__LOGIN') ?></button>

							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember_me">
									<?= $Lang->get('USER__REMEMBER_ME') ?>
									<a style="margin-left: 40px;color:#337ab7;text-decoration:none" data-dismiss="modal" href="#" data-toggle="modal" data-target="#lostpasswd">Mot de passe oublié ?</a>
								</label>
							</div>
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
</div>
<div style="font-family: 'Concert One', sans-serif;margin-top:10pc" class="modal modal-medium fade" id="lostpasswd" tabindex="-1" role="dialog" aria-labelledby="lostpasswdLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div style="background-color:transparent;color:white;border:none" class="modal-content">
			<div style="border:none" class="modal-header">
                			<button style="background-color:transparent;border:none;color:white;cursor:pointer;font-size:30px;position: absolute;top: -20px;left: 60px;" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
				<h4 class="modal-title" id="myModalLabel">Mot de passe oublié !</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_lostpasswd')) ?>">
					<div class="form-group">
						<label class="col-sm-2 control-label"><?= $Lang->get('USER__EMAIL') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="text" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
							<div style="border:none" class="modal-footer">
								<button  type="submit" class="btn button-perdu btn-primary"><?= $Lang->get('USER__PASSWORD_FORGOT_SEND_MAIL') ?></button>
				
			</div>
		</div>
	</div>
	</form>
</div>

</div>
</div>

</div>



<?php if(!empty($resetpsswd)) { ?>
<div style="font-family: 'Concert One', sans-serif;margin-top:10pc" class="modal modal-medium fade" id="lostpasswd2Label" tabindex="-1" role="dialog" aria-labelledby="lostpasswd2Label" aria-hidden="true">
	<div class="modal-dialog">
		<div style="background-color:transparent;color:white;border:none" class="modal-content">
			<div style="border:none" class="modal-header">
						<button style="background-color:transparent;border:none;color:white;cursor:pointer;font-size:30px;position: absolute;top: -20px;left: 60px;" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
				<h4 class="modal-title" id="myModalLabel">Mot de passe oublié !</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_resetpasswd')) ?>" data-redirect-url="?">
					<input type="hidden" name="key" value="<?= $resetpsswd['key'] ?>">
					<input type="hidden" name="email" value="<?= $resetpsswd['email'] ?>">
					<div class="form-group">
						<label class="col-sm-4 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">

						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="password" class="form-control" name="password2" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
							<div style="border:none" class="modal-footer">
								<button type="submit" class="btn button-perdu btn-success"><?= $Lang->get('GLOBAL__SAVE') ?></button>
				</form>
			</div>
		</div>
	</div>
</div>

</div>
</div>
</div>
<?php } ?>

<div style="font-family: 'Concert One', sans-serif;margin-top:10pc" class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div style="background-color:transparent;color:white;border:none" class="modal-content">
			<div style="border:none" class="modal-header">
			<button style="background-color:transparent;border:none;color:white;cursor:pointer;font-size:30px;position: absolute;top: -20px;left: 60px;" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
				<h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__REGISTER') ?></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_register')) ?>" data-redirect-url="?">
					<div class="form-group">
						<label  class="col-sm-2 control-label"><?= $Lang->get('USER__USERNAME') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="text" class="form-control" name="pseudo" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-4 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="password" class="form-control" name="password_confirmation" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label"><?= $Lang->get('USER__EMAIL') ?></label>
						<div class="col-sm-10">
							<input style="border-radius:0px" type="email" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
						</div>
					</div>

                    <?php if($captcha['type'] == "google") { ?>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="form-group">
                            <h5><?= $Lang->get('FORM__CAPTCHA') ?></h5>
                            <div class="g-recaptcha" data-sitekey="<?= $captcha['siteKey'] ?>"></div>
                        </div>
                    <?php } else if($captcha['type'] == "hcaptcha") { ?>
                        <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
                        <div class="form-group">
                            <h5><?= $Lang->get('FORM__CAPTCHA') ?></h5>
                            <div class="h-captcha" data-sitekey="<?= $captcha['siteKey'] ?>"></div>
                        </div>
                    <?php } else { ?>
                        <div class="form-group">
                            <h5><?= $Lang->get('FORM__CAPTCHA') ?></h5>
                            <?php
                            echo $this->Html->image(array('controller' => 'user', 'action' => 'get_captcha', 'plugin' => false, 'admin' => false), array('plugin' => false, 'admin' => false, 'id' => 'captcha_image'));
                            echo $this->Html->link($Lang->get('FORM__RELOAD_CAPTCHA'), 'javascript:void(0);',array('id' => 'reload'));
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="captcha" id="inputPassword3" placeholder="<?= $Lang->get('FORM__CAPTCHA_LABEL') ?>">
                        </div>
                    <?php } ?>
					<?php if (!empty($condition)) { ?>
					  <br><div class="col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="condition">
								<?=$Lang->get('USER__CONDITION_1')?> <a href="<?= $condition ?>"> <?= $Lang->get('USER__CONDITION_2')?></a>
							</label>
						</div>
					  </div>
					 
					<div class="form-group">
						<div class="col-sm-10">
							<div style="border:none" class="modal-footer">
								 <button type="submit" class="btn button-reg btn-primary"><?= $Lang->get('USER__REGISTER') ?></button>
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div class="form-group">
						<div class="col-sm-10">
							<div style="border:none" class="modal-footer">
								 <button type="submit" class="btn button-reg-2 btn-primary"><?= $Lang->get('USER__REGISTER') ?></button>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</form>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
    <?php if(!empty($resetpsswd)) { ?>
            $('#lostpasswd2').modal('show');
        <?php } ?>
    });
</script>

<?php if(isset($isConnected) && $isConnected) { ?>
<div style="font-family: 'Concert One', sans-serif;margin-top:10pc" class="modal modal-medium fade" id="notifications_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div style="background-color:transparent;color:white;border:none" class="modal-content">
			<div style="border:none" class="modal-header">
						<button style="background-color:transparent;border:none;color:white;cursor:pointer;font-size:30px;position: absolute;top: -20px;left: 60px;" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
				<h4 style="margin-left: 13%;" class="modal-title"><?= $Lang->get('NOTIFICATIONS__LIST') ?></h4>
			</div>
			<div  class="modal-body" style="padding:0;">

				<div style="color:black;" class="notifications-list"></div>

			</div>
			<div style="border:none" class="modal-footer">
				<button type="button" class="btn btn-default" onclick="notification.markAllAsSeen()" data-dismiss="modal">Marquer comme lue</button>
				<button type="submit" class="btn btn-danger" onclick="notification.clearAll()" data-dismiss="modal"><?= $Lang->get('NOTIFICATIONS__CLEAR_ALL') ?></button>
			</div>
		</div>
	</div>
</div>

<?php } ?>


