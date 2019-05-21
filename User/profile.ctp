
<div class="profile">

	<div class="row">
		<div style=";text-align:center;margin-bottom:3pc" class="col-md-12">
			<h1 style="font-family: 'Concert One', sans-serif;"><?= $Lang->get('USER__PROFILE') ?></h1>
		</div>
	</div>
	<div style="font-family: 'Righteous', cursive;text-align:center;" class="panel panel-default">
		<div class="panel-body">

			<?= $Module->loadModules('user_profile_messages') ?>

			<div class="section">
				<p><b><?= $Lang->get('USER__USERNAME') ?> :</b><a style="color: #337ab7"> <?= $user['pseudo'] ?></a></p>
			</div>

			<div class="section">
				<p><b><?= $Lang->get('USER__EMAIL') ?> :</b><a style="color: #337ab7"> <span
						id="email"><?= $user['email'] ?></span></a></p>
			</div>
			<div class="section">
				<p>
					<b><?= $Lang->get('USER__RANK') ?> :</b><a style="color: #337ab7">
					<?php foreach ($available_ranks as $key => $value) {
					if($user['rank'] == $key) {
					echo $value;
					}
					} ?>
				</a></p>
			</div>
			<?php if($EyPlugin->isInstalled('eywek.shop.1')) { ?>
			<div class="section">
				<p><b><?= $Lang->get('USER__MONEY') ?> :</b><a style="color: #337ab7"> <span
						class="money"><?= $user['money'] ?></span></a></p>
			</div>
			<?php } ?>

			<div class="section">
				<p><b><?= $Lang->get('GLOBAL__CREATED') ?> :</b><a style="color: #337ab7"> <?= $Lang->
					date($user['created']) ?></a></p>
			</div>

			<hr>

			<h3 style="font-family: 'Concert One', sans-serif;"><?= $Lang->get('USER__UPDATE_PASSWORD') ?></h3>

			<form style="display: inline-block;" method="post" class="form-inline" data-ajax="true"
				  action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_pw')) ?>">
				<div class="form-group">
					<input style="border-radius: 0px" type="password" class="form-control" name="password"
						   placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM') ?>">
				</div>
				<div class="form-group">
					<input style="border-radius: 0px" type="password" class="form-control" name="password_confirmation"
						   placeholder="<?= $Lang->get('USER__PASSWORD') ?>">
				</div>

				<div class="form-group">
					<button style="width: 198px;border-radius: 0px;background-color: #337ab7;" class="btn btn-primary"
							type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
					</button>
				</div>
			</form>

			<?php if($Permissions->can('EDIT_HIS_EMAIL')) { ?>
			<hr>

			<h3 style="font-family: 'Concert One', sans-serif;"><?= $Lang->get('USER__UPDATE_EMAIL') ?></h3>

			<form style="display: inline-block;" method="post" class="form-inline" data-ajax="true"
				  action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_email')) ?>">
				<div class="form-group">
					<input style="border-radius: 0px" type="email" class="form-control" name="email"
						   placeholder="<?= $Lang->get('USER__EMAIL_CONFIRM_LABEL') ?>">
				</div>
				<div class="form-group">
					<input style="border-radius: 0px" type="email" class="form-control" name="email_confirmation"
						   placeholder="<?= $Lang->get('USER__EMAIL') ?>">
				</div>

				<div class="form-group">
					<button style="width: 198px;border-radius: 0px;background-color: #337ab7;" class="btn btn-primary"
							type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
					</button>
				</div>
			</form>
			<?php } ?>

			<?php if($shop_active) { ?>

			<hr>

			<h3 style="font-family: 'Concert One', sans-serif;"><?= $Lang->get('SHOP__USER_POINTS_TRANSFER') ?></h3>

			<form style="display: inline-block;" method="post" class="form-inline" data-ajax="true"
				  action="<?= $this->Html->url(array('plugin' => 'shop', 'controller' => 'payment', 'action' => 'transfer_points')) ?>">
				<div class="form-group">
					<input style="border-radius: 0px" type="text" class="form-control" name="to"
						   placeholder="<?= $Lang->get('SHOP__USER_POINTS_TRANSFER_WHO') ?>">
				</div>
				<div class="form-group">
					<input style="border-radius: 0px" type="text" class="form-control" name="how"
						   placeholder="<?= $Lang->get('SHOP__USER_POINTS_TRANSFER_HOW_MANY') ?>">
				</div>

				<div class="form-group">
					<button style="width: 198px;border-radius: 0px;background-color: #337ab7;" class="btn btn-primary"
							type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
					</button>
				</div>
			</form>

			<?php } ?>

			<?php if($can_skin) { ?>
			<hr>

			<h3><?= $Lang->get('API__SKIN_LABEL') ?></h3>

			<form class="form-inline" method="post" id="skin" method="post" data-ajax="true" data-upload-image="true"
				  action="<?= $this->Html->url(array('action' => 'uploadSkin')) ?>">
				<div class="form-group">
					<label><?= $Lang->get('FORM__BROWSE') ?></label>
					<input name="image" type="file">
				</div>
				<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
				<button type="submit" class="btn btn-default"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
				<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="form-group">
					<u><?= $Lang->get('USER__PROFILE_FORM_IMG') ?> :</u><br>

					- <?= $Lang->get('USER__IMG_UPLOAD_TYPE_PNG') ?><br>
					- <?= str_replace('{PIXELS}', $skin_width_max, $Lang->get('USER__IMG_UPLOAD_WIDTH_MAX')) ?><br>
					- <?= str_replace('{PIXELS}', $skin_height_max, $Lang->get('USER__IMG_UPLOAD_HEIGHT_MAX')) ?><br>
				</div>
			</form>
			<?php } ?>

			<?php if($can_cape) { ?>
			<hr>

			<h3><?= $Lang->get('API__CAPE_LABEL') ?></h3>

			<form class="form-inline" method="post" id="cape" method="post" data-ajax="true" data-upload-image="true"
				  action="<?= $this->Html->url(array('action' => 'uploadCape')) ?>">
				<div class="form-group">
					<label><?= $Lang->get('FORM__BROWSE') ?></label>
					<input name="image" type="file">
				</div>
				<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
				<button type="submit" class="btn btn-default"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
				<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="form-group">
					<u><?= $Lang->get('USER__PROFILE_FORM_IMG') ?> :</u><br>

					- <?= $Lang->get('USER__IMG_UPLOAD_TYPE_PNG') ?><br>
					- <?= str_replace('{PIXELS}', $cape_width_max, $Lang->get('USER__IMG_UPLOAD_WIDTH_MAX')) ?><br>
					- <?= str_replace('{PIXELS}', $cape_height_max, $Lang->get('USER__IMG_UPLOAD_HEIGHT_MAX')) ?><br>
				</div>
			</form>
			<?php } ?>

			<?= $Module->loadModules('user_profile') ?>

		</div>
	</div>
</div>


