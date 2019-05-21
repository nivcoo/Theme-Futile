<div class="head-pages"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;background-size: cover;"
<?php else: ?>
style="background: url(../theme/Futile/img/banniere.png) no-repeat top fixed;background-size: cover;"
<?php endif; ?>>
</div>
<div class="title-pages text-center">
	<h2 class="section-heading-pages"><?= $Lang->get("FAQ") ?></h2>
</div>
<div style="margin-bottom: 20px" class="container">
	<div class="spacer" style="height: 80px;"></div>

	<div class="panel">
		<div class="panel-body">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?= (empty($faqs)) ? "<p>Aucune FAQ pour le moment</p>" : ""?>
				<?php foreach($faqs as $k=>$v): $v = current($v); ?>
				<div style="border:1px solid black;margin-bottom:10px;border-radius:10px" class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading-<?= $v['id'] ?>">
						<h3 class="panel-title">
							<a style="text-decoration:none;color:#337ab7;margin-left:10px;height:60px" role="button"
							   data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $v['id'] ?>"
							   aria-expanded="true" aria-controls="collapse-<?= $v['id'] ?>">
								<?= $v['question'] ?>
							</a>
						</h3>
					</div>
					<div id="collapse-<?= $v['id'] ?>" class="panel-collapse collapse<?= ($k == 0) ? " in
					" : "" ?>" role="tabpanel" aria-labelledby="heading-<?= $v['id'] ?>">
					<div style="border-top:1px solid #777;" class="panel-body">
						<?= $v['answer'] ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</div>
