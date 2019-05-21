<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

	<div class="nav-all-size">
		<div class="NavtitlePhone">
			<li class="navbar-brand js-scroll-trigger title" href="/"><?= $website_name ?></li>

		</div>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive" aria-expanded="true">
			<ul class="navbar-nav nav-main ml-auto">

				<?php if(!empty($nav)): ?>
				<?php $i = 0; ?>
				<?php foreach ($nav as $key => $value): ?>
				<?php if(empty($value['Navbar']['submenu'])): ?>
				<li class="nav-item"><a class="nav-link js-scroll-trigger"
										href="<?= $value['Navbar']['url'] ?>">
				<?php if(!empty($value['Navbar']['icon'])): ?>
				<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
				<?php endif; ?><?= $value['Navbar']['name'] ?></a></li>
				<?php else: ?>
				<li class="dropdown">
					<a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown" role="button"
					   aria-expanded="false">
					   <?php if(!empty($value['Navbar']['icon'])): ?>
							<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
						<?php endif; ?>
					   <?= $value['Navbar']['name'] ?> 
					   <i class="fa fa-angle-down"></i></a>
					<ul style="text-align: left;padding: 0px;" class="dropdown-menu" role="menu">


						<?php
                                            $submenu = json_decode($value['Navbar']['submenu']);
                                            foreach ($submenu as $k => $v) {
						?>
						<div class="dropd-menu">
							<a class="title-drop"
							   href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ?'target="_blank"':''?>
							><?= rawurldecode(str_replace('+', ' ', $k)) ?></a></div>
						
						<?php } ?>
					</ul>
				</li>
				<?php endif; ?>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>
			<ul class="navbar-nav nav-logo ml-auto">
				<div class="Navtitle">
					<li class="navbar-brand js-scroll-trigger title" href="/"><?= $website_name ?></li>
				</div>
			</ul>
		</div>
	</div>
	<div class="nav-bottom">
		<div id="nav-admin-buttons" class="nav-link" style="display: none">
			<?php if(!$isConnected): ?>
				<?php if($EyPlugin->isInstalled('phpierre.signinup')) { ?>
					<a href="/login" class="right nav-link">
						<?= $Lang->get('USER__LOGIN') ?> <i aria-hidden="true" class="fa fa-sign-in"></i>
					</a>
					<a href="/register" class="right nav-link">
						<?= $Lang->get('USER__REGISTER') ?> <i aria-hidden="true" class="fa fa-user-plus"></i>
					</a>
				<?php } else { ?>
					<a href="#login" data-toggle="modal" class="right nav-link">
						<?= $Lang->get('USER__LOGIN') ?> <i aria-hidden="true" class="fa fa-sign-in"></i>
					</a>
					<a href="#register" data-toggle="modal" class="right nav-link">
						<?= $Lang->get('USER__REGISTER') ?> <i aria-hidden="true" class="fa fa-user-plus"></i>
					</a>
				<?php } ?>
			
			<?php else: ?>
			<?php if($Permissions->can('ACCESS_DASHBOARD')): ?>
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>">
				Admin <i aria-hidden="true" class="fa fa-cogs"></i>
			</a>
			<?php endif; ?>
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>">
				Se déconnecter <i aria-hidden="true" class="fa fa-power-off"></i>
			</a>
			<a class="right nav-link" href="#notifications_modal" data-toggle="modal">
				Mes notifications <i aria-hidden="true" class="fa fa-flag"></i>
			</a>
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>">
				Mon profil <i aria-hidden="true" class="fa fa-user"></i>
			</a>
			<?php endif; ?>
		</div>
		<div id="hidder" class="fa fa-angle-double-down">
		</div>
	</div>
</nav>
	