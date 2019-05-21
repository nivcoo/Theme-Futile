<div class="head-pages"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;background-size: cover;"
<?php else: ?>
style="background: url(../theme/Futile/img/banniere.png) no-repeat top fixed;background-size: cover;"
<?php endif; ?>>
</div>
<div class="title-pages text-center">
	<h2 class="section-heading-pages"><?= $Lang->
					get('BANLIST__TITLE') ?></h2>
</div>
<div style="margin-top:20px;margin-bottom:20px" id="content">
	<section class="bar background-white">
		<div class="container vote">
			<div class="row">
				<?php foreach ($server_registre as $server_dec) { ?>
				<?php foreach ($server_dec as $server_fin) { ?>
				<div class="col-md-6">
					<table class="table table-bordered dataTable">
						<thead>
						<tr>
							<th><?= $Lang->get('BANLIST__USER') ?> <?= $server_fin['nameServer']; ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($server_fin['GET_BANNED_LIST'] as $player) { ?>
						<tr>
							<td><img src="<?= $this->Html->url('/API/get_head_skin/'.$player.'/16') ?>"> <?= $player ?>
							</td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<?php }?>
				<?php }?>
				<div class="col-md-12">
					<table class="table table-bordered dataTable">
						<thead>
						<tr>
							<th><?= $Lang->get('BANLIST__SITE') ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($users as $v2): ?>
						<tr>
							<td><img src="<?= $this->Html->url('/API/get_head_skin/'.$v2[" User"]["pseudo"].'/16')
								?>"> <?= $v2["User"]["pseudo"] ?></td>
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
