<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:22:59
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4958603485a092c335be830-56464093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '874d39daf76bf899974094a89a983c9112688d9d' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4958603485a092c335be830-56464093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'urls' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a092c335dd201_32113800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a092c335dd201_32113800')) {function content_5a092c335dd201_32113800($_smarty_tpl) {?>

<div class="product-add-to-cart">
	<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
			<div class="product-quantity" style="display:none;">
				<input type="number" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
				<input type="number" name="id_customization" value="0" class="product_customization_id">
				<input type="number" name="qty" class="quantity_wanted input-group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"/>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>0&&$_smarty_tpl->tpl_vars['product']->value['quantity']>=$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {?>
				<a href="javascript:void(0);" class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
">
					<span><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
				</a>
			<?php } else { ?>
				<a href="javascript:void(0);" class="button ajax_add_to_cart_button add-to-cart-disable btn-default" title="<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'out of stock'),$_smarty_tpl);?>
</span>
			</a>
			<?php }?>
		</form>
	<?php }?>
</div>

<?php }} ?>
