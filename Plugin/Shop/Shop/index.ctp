<div class="boutique" id="boutique">
	<div class="container">
		<div class="row" style="margin-left:0px;margin-right:0px;">
			<div class="col-md-3">
				<div class="panel-categories">
					<div class="text-center"><h3 class="panel-title"><b>Catégories</b></h3></div>
					<div class="panel-body">
						<?php
						$i = 0;
						foreach ($search_categories as $k => $v) {
							$i++;
						?>
						<a class="btn btn-block categories"
						   href="<?= $this->Html->url(array('controller' => 'c/'.$v['Category']['id'], 'plugin' => 'shop')) ?>"
						   class="list-group-item<?= (isset($category) AND $v['Category']['id'] == $category OR !isset($category) AND $i == 1) ? ' active' : ''; ?>"><?= before_display($v['Category']['name']) ?></a>
						<?php } ?>
					</div>
				</div>
				<div class="compte-shop">
					<div class="panel-heading text-center"><h3 class="panel-title"><b>Compte</b></h3></div>
					<div class="panel-body">
						<?php if($isConnected) { ?>
						<button style="opacity: 1;" class="btn btn-block categories disabled">Vous
							avez <?= ($isConnected) ? $money : $Lang->get('SHOP__TITLE');
							?>
						</button>
						<?php if($Permissions->can('CREDIT_ACCOUNT')) { ?>
						<a href="#" data-toggle="modal" data-target="#addmoney"
						   class="btn  categories btn-block"><?= $Lang->get('SHOP__ADD_MONEY') ?></a>
						<?php } ?>
						<a href="#" data-toggle="modal" data-target="#cart-modal"
						   class="btn  categories btn-block"><?= $Lang->get('SHOP__BUY_CART') ?></a>
						<?php } else { ?>
						<button style="opacity: 1;" class="btn btn-block categories disabled">Vous êtes déconnecté.</button>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div style="width: 100%; margin-top: 20px;"><?= $vouchers->get_vouchers() // Les promotions en cours ?>
					</div>
				</div>

				<div class="row">

				<?php
				$col = 4;
				$i = 0;
				if(!isset($category)== $search_first_category){
					echo '<div class="col-lg-12 text-center">'.$theme_config['boutique'].'
					</div>';
					$i = 1;
					$col = 4;
				}
				foreach ($search_items as $k => $v) {
				if($v['Item']['category'] == isset($category) AND $v['Item']['category'] == $category) {
					$i++;
					$newRow = ( ( $i % ( (12 / $col) ) ) == 0);
				?>
				<div class="col-sm-<?= $col ?> col-lg-<?= $col ?> col-md-<?= $col ?>">
					<div class="thumbnail">
						<div class="caption" style="height:auto;width:auto;">
							<h4 style="color: black; text-align: center; font-family: 'Concert One', sans-serif;"><i
									class="fa fa-angle-down"></i> <?= before_display($v['Item']['name']) ?> <i
									class="fa fa-angle-down"></i></h4>
						</div>
						<?php if(isset($v['Item']['img_url'])) { ?><img src="<?= $v['Item']['img_url'] ?>" alt=""><?php } ?>
						<?php if(('CAN_BUY')) { ?>
						<button style="border-radius: 0px;" class="btn items btn-block pull-right display-item"
								data-item-id="<?= $v['Item']['id'] ?>"><?= $Lang->get('SHOP__BUY') ?>
							- <?= $v['Item']['price'] ?><?php if($v['Item']['price'] == 1) { echo  ' '.$singular_money; } else { echo  ' '.$plural_money; } ?></button>
						<?php } ?>
					</div>
				</div>

				<?= ($newRow) ? '</div>' : '' ?>
				<?= ($newRow) ? '<div class="row">' : '' ?>
				<?php } ?>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
    var LOADING_MSG = '<?= $Lang->get('GLOBAL__LOADING') ?>';
    var ADDED_TO_CART_MSG = '<?= $Lang->get('SHOP__BUY_ADDED_TO_CART') ?> <i class="fa fa-check"></i>';
    var CART_EMPTY_MSG = '<?= $Lang->get('SHOP__BUY_CART_EMPTY') ?>';
    var ITEM_GET_URL = '<?= $this->Html->url(array('controller' => 'shop/ajax_get', 'plugin' => 'shop')); ?>/';
    var VOUCHER_CHECK_URL = '<?= $this->Html->url(array('action' => 'checkVoucher')) ?>/';
    var BUY_URL = '<?= $this->Html->url(array('action' => 'buy_ajax')) ?>';

    var CART_ITEM_NAME_MSG = '<?= $Lang->get('SHOP__ITEM_NAME') ?>';
    var CART_ITEM_PRICE_MSG = '<?= $Lang->get('SHOP__ITEM_PRICE') ?>';
    var CART_ITEM_QUANTITY_MSG = '<?= $Lang->get('SHOP__ITEM_QUANTITY') ?>';
    var CART_ACTIONS_MSG = '<?= $Lang->get('GLOBAL__ACTIONS') ?>';

    var CSRF_TOKEN = '<?= $csrfToken ?>';
</script>
<?= $this->Html->script('Shop.jquery.cookie') ?>
<?= $this->Html->script('Shop.shop') ?>
<?= $this->Html->script('Shop.jquery.bootstrap-touchspin.js') ?>
<div class="modal fade" id="buy-modal" tabindex="-1" role="dialog">
	<div style="max-width: 700px;" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
				<h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CONFIRM') ?></h4>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="cart-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
				<h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CART') ?></h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<div class="pull-left">
					<input name="cart-voucher" type="text" class="form-control" autocomplete="off" id="cart-voucher"
						   style="width:245px;" placeholder="<?= $Lang->get('SHOP__BUY_VOUCHER_ASK') ?>">
				</div>
				<button class="btn disabled"><?= $Lang->get('SHOP__ITEM_TOTAL') ?> : <span
						id="cart-total-price">0</span>  <?= $Configuration->getMoneyName() ?>
				</button>
				<button type="button" class="btn categories" id="buy-cart"><?= $Lang->get('SHOP__BUY') ?></button>
			</div>
		</div>
	</div>
</div>
<?= $this->element('payments_modal') ?>
