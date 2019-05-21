<div class="head-pages"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;"
<?php else: ?>
style="background: url(theme/Futile/img/banniere.png) no-repeat top fixed;background-size: cover;"
<?php endif; ?>>
</div>
<div class="title-pages text-center">
	<h2 class="section-heading-pages"><?= $Lang->get('ERROR__404_LABEL') ?></h2>
</div>

<div style="margin-top:60px;margin-bottom:60px" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
					<?php
					$msg = $Lang->get('ERROR__404_CONTENT');
					$msg = str_replace('{URL}', $url, $msg);
					echo $msg;
					?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /*if (Configure::read('debug') > 0) { ?>
<div class="error-actions">
    <?= $this->element('exception_stack_trace'); ?>
</div>
<?php }*/ ?>
