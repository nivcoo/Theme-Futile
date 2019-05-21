<section id="footer">
	<div class="footer-up-blue">
		<div class="socials">
			<?php
				if (!empty($findSocialButtons)):
					foreach ($findSocialButtons as $key => $value):
			?>
			<span class="social-btn">
			</span>
			<?php
					endforeach;
				endif;
			?>
			<?php
				if(!empty($facebook_link)): ?>
			<li class="social-btn">
				<a class="facebook" href="<?= $facebook_link ?>"><i class="fa fa-facebook"></i></a>
			</li>
			<?php
				endif;
				if(!empty($twitter_link)):
			?>
			<li class="social-btn">
				<a class="twitter" href="<?= $twitter_link ?>"><i class="fa fa-twitter"></i></a>
			</li>
			<?php
				endif;
				if(!empty($youtube_link)):
			?>
			<li class="social-btn">
				<a class="youtube" href="<?= $youtube_link ?>"><i class="fa fa-youtube"></i></a>
			</li>
			<?php
				endif;
				if(!empty($skype_link)):
			?>
			<li class="social-btn">
				<a class="skype" href="<?= $skype_link ?>"><i class="fa fa-skype"></i></a>
			</li>
			<?php
				endif;
			?>
		</div>
	</div>
	<div style="margin-right:0;margin-left:0" class="row">
		<div class="footer-left ">
			<div class="title-footer">
				Top Voteurs <?= $items_solded[0]['count'] ?>
			</div>

			<div id="greatest-voters" class="section-footer ">
				<?php if($EyPlugin->isInstalled('eywek.vote')) { ?>
				<?php
                        $users_vote = ClassRegistry::init('Vote.Vote')->find('all', [
				'fields' => ['username', 'COUNT(id) AS count'],
				'conditions' => ['created LIKE' => date('Y') . '-' . date('m') . '-%'],
				'order' => 'count DESC',
				'group' => 'username',
				'limit' => 3
				]);
				?>
				<?php } else { ?>
				<div class="alert alert-danger"><b>Erreur :</b> Le plugin vote n'est pas installé.</div>
				<?php } ?>
				<?php $i_cl = 0;foreach($users_vote as $userv): $i_cl++; ?>
				<div class="player-info">
					<div class="title-votes">Top <?= $i_cl; ?></div>
					<strong class="player-name"
							style="text-transform: uppercase"><?= $userv['Vote']['username']; ?></strong>

					<div class="votes"><?= $userv[0]['count']; ?>
						vote<?php if($userv[0]['count'] == 1){ ?> <?php }else{ ?>s<?php }?></div>
				</div>
				<?php endforeach; ?>
			</div>

		</div>
		<div class="footer-middle">
			<div class="title-footer">
				Statistiques
			</div>
			<div style="text-align:center" class="stats-title">
				<div class="fa fa-angle-double-right"></div>
				Connectés :<a><?php if($banner_server): ?>
				<?= $server_infos['GET_PLAYER_COUNT'] ?> connectés
				<?php else: ?>
				<?= $Lang->get('SERVER__STATUS_OFF'); ?>
				<?php endif; ?></a>
				<div class="fa fa-angle-double-left"></div>
			</div>
			<div style="text-align:center" class="stats-title">
				<div class="fa fa-angle-double-right"></div>
				Visites : <a><?= $visits_count ?></a>
				<div class="fa fa-angle-double-left"></div>
			</div>
			<div style="text-align:center" class="stats-title">
				<div class="fa fa-angle-double-right"></div>
				Inscriptions :<a> <?= $users_count ?></a>
				<div class="fa fa-angle-double-left"></div>
			</div>
			<div style="text-align:center" class="stats-title">
				<div class="fa fa-angle-double-right"></div>
				Dernier inscrit :<a> <?= $users_last['pseudo'] ?></a>
				<div class="fa fa-angle-double-left"></div>
			</div>
		</div>
		<div class="footer-right">
		<div style="margin-right:0px;margin-left:0px" class="row">
		<div class="left-footer">
		<div class="title-footer">
				Partenaires
		</div>
		<div class="lien-title">
            <?php if(!empty($theme_config['footer']->un->titre)): ?>
			<div class="fa fa-angle-double-right"></div>
			<a href="<?= $theme_config['footer']->un->lien ?>">
			<?= $theme_config['footer']->un->titre ?>
			</a><br>
			<?php endif; ?>
            <?php if(!empty($theme_config['footer']->deux->titre)): ?>
			<div class="fa fa-angle-double-right"></div>
			<a href="<?= $theme_config['footer']->deux->lien ?>">
			<?= $theme_config['footer']->deux->titre ?>
			</a><br>
			<div class="fa fa-angle-double-right"></div>
			<?php endif; ?>
			<?php if(!empty($theme_config['footer']->trois->titre)): ?>
			<a href="<?= $theme_config['footer']->trois->lien ?>">
			<?= $theme_config['footer']->trois->titre ?>
			</a>
			
			<?php endif; ?>
        </div>
		</div>
		<div class="right-footer">
		<div class="title-footer">
				Informations
		</div>
		<div class="infos-footer">
		<?= $theme_config['footer']->infos ?>
			</div>
			</div>
			</div>

		</div>
	</div>
	<div class="footer-by">
            <span style="color:white">
				Copyright &copy; <?php echo date('Y');?>
				<a href=""><?= $website_name ?></a> -
				Thème créé par <a href="" target="_blank">nivcoo</a>, <a href="" target="_blank">0ddlyoko</a>
			</span>
		<span style="float: right; margin-right:50px; color:white">
				Propulsé par <a href="https://mineweb.org/" target="_BLANK">MineWeb</a>
			</span>
	</div>
</section>
