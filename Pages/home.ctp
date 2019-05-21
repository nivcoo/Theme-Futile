<!-- Intro Header -->
<header id="slider"
	<?php if($theme_config['accueil']->slider != ""): ?>
		style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;background-size: cover;"
	<?php else: ?>
		style="background: url(theme/Futile/img/banniere.png) no-repeat top fixed;background-size: cover;"
	<?php endif; ?>>

	<!-- Overlay -->
	<div class="overlay"></div>
	<?php $heure = date("H");
	if($heure >=20 or $heure <=8):?>
		<div id="particles-js"></div>
	<?= $this->Html->script('particles.js') ?>
	<?php else: ?>
	<?php endif; ?>
	<div class="title">
		<?php if($theme_config['logo'] != ""): ?>
		<img class="pulse" src="<?= $theme_config['logo'] ?>"/>
		<?php else: ?>
		<h6><?= $website_name ?></h6>
		<?php endif; ?>
	</div>
	<div class="connections">
		<?php if($banner_server): ?>
		<?= $server_infos['GET_PLAYER_COUNT'] ?> connectés
		<?php else: ?>
		<?= $Lang->get('SERVER__STATUS_OFF'); ?>
		<?php endif; ?>
		<br>
		<i class="fa fa-map-marker" > <?= $theme_config['accueil']->ip ?></i>
	</div>
</header>
<section id="services">
	<div class="title-services text-center">
		<h2 class="section-heading" href="#news">SERVICES</h2>
	</div>
	<div style="margin-right:0;margin-left:0" class="row">

		<div class="col-lg-4 col-sm-4">
			<div class="services-case">
				<div class="services-image">
					<a class="services-link" href="<?= $theme_config['service']->un->lien ?>" target="_blank">
						<?php if($theme_config['service']->un->image != ""): ?>
						<img src=<?= $theme_config['service']->un->image ?> />
						<?php else: ?>

						<img src="theme/Futile/img/img-taille/400x350.png"/>
						<?php endif; ?>
						<div class="services-info">
							<h2 style="font-family: 'Concert One', sans-serif;"><?= $theme_config['service']->un->titre
								?></h2>
							<div style="font-family: 'Concert One', sans-serif;"
								 class="services-description"><?= $theme_config['service']->un->description ?>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4">
			<div class="services-case">
				<div class="services-image">
					<a class="services-link" href="<?= $theme_config['service']->deux->lien ?>" target="_blank">
						<?php if($theme_config['service']->deux->image != ""): ?>
						<img src=<?= $theme_config['service']->deux->image ?> />
						<?php else: ?>
						<img src="theme/Futile/img/img-taille/400x350.png"/>
						<?php endif; ?>
						<div class="services-info">
							<h2 style="font-family: 'Concert One', sans-serif;"><?= $theme_config['service']->
								deux->titre ?></h2>
							<div style="font-family: 'Concert One', sans-serif;"
								 class="services-description"><?= $theme_config['service']->deux->description ?>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4">
			<div class="services-case">
				<div class="services-image">
					<a class="services-link" href="<?= $theme_config['service']->trois->lien ?>" target="_blank">
						<?php if($theme_config['service']->trois->image != ""): ?>
						<img src=<?= $theme_config['service']->trois->image ?> />
						<?php else: ?>
						<img src="theme/Futile/img/img-taille/400x350.png"/>
						<?php endif; ?>
						<div class="services-info">
							<h2 style="font-family: 'Concert One', sans-serif;"><?= $theme_config['service']->
								trois->titre ?></h2>
							<div style="font-family: 'Concert One', sans-serif;"
								 class="services-description"><?= $theme_config['service']->trois->description ?>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="news">
	<div class="title-news text-center">
		<h2 class="section-heading" href="#news">NEWS</h2>
	</div>
	<div style="margin-top:20px;margin-bottom:20px" class="container">
		<?php
        if(!empty($search_news)) {
        $i = 0;
        foreach ($search_news as $k => $v) {
		$i++;
		if($i > 1) {
		break;
		}
		?>
		<div class="col-md-12">
			<div class="panel-default">
				<?= $v['News']['content']; ?>
				<br>
				<a style="color:#337ab7;"
				   href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>">
					<i class="fa fa-plus-circle"></i>
					<?= $Lang->get('Mettre un commentaire') ?>
				</a>
				<div class="pull-right">
					<span><?= $v['News']['count_comments'] ?> <i class="fa fa-comments" style="color: #000"></i></span>
					<span style="margin-left:15px"><?= $v['News']['count_likes'] ?> <i class="fa fa-thumbs-up"
																					   style="color: #000"></i></span>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php } else { ?>
		<div class="col-lg-12"><h4 style="font-family: 'Concert One', sans-serif;margin-top:40px"><?= $Lang->get('NEWS__NONE_PUBLISHED') ?></h4></div>
		<?php } ?>
	</div>
</section>