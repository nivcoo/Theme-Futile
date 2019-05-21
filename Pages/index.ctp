<div class="head-pages"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed; background-size: cover;"
<?php else: ?>
style="background: url(../theme/Futile/img/banniere.png) no-repeat top fixed; background-size: cover;"
<?php endif; ?>>
</div>
<div class="title-pages text-center">
	<h2 class="section-heading-pages"><?= before_display($page['title']) ?></h2>
</div>
<div class="title-pages-author text-center">
	<h6 class="section-heading-author" href="#news"><?= $Lang->get('GLOBAL__UPDATED') ?> : <?= $Lang->date($page['updated']) ?></h6>
	<h6 class="section-heading-author" href="#news"><?= $Lang->get('GLOBAL__AUTHOR') ?> : <?= $page['author'] ?></h6>
</div>
<div class="container">
    <div class="row">

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $page['content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>
