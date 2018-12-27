<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 23:20:43
         compiled from "modules/tt_featuredproducts/views/templates/hook/tt_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14938672755959d87b83a006-87143149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca21f0df2d3b6e30af013de3ef15171a145d4d4' => 
    array (
      0 => 'modules/tt_featuredproducts/views/templates/hook/tt_featuredproducts.tpl',
      1 => 1510545100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14938672755959d87b83a006-87143149',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b862af6_60108052',
  'variables' => 
  array (
    'products' => 0,
    'tt_total' => 0,
    'tt_cnt' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b862af6_60108052')) {function content_5959d87b862af6_60108052($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["tt_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["tt_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['tt_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt_total']->value+1, null, 0);?>
<?php } ?>

<section class="ttfeatured-products clearfix">
    <h3 class="tab-title"><?php echo smartyTranslate(array('s'=>'Productos destacados','d'=>'Modules.FeaturedProducts.Shop'),$_smarty_tpl);?>
</h3>
    <div class="ttfeatured-content products">
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
				<!-- Start TemplateTrip 2 product slide code -->
				<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2!=0) {?>
				<ul>
					<li class="featureli">
						<ul>
						<li>
				<?php }?>
			<?php }?>
				<!-- End TemplateTrip 2 product slide code -->

				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


				<!-- Start TemplateTrip 2 product slide code -->
			<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
				<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2==0) {?>
						</li>
						</ul>
					</li>
					</ul>
				<?php }?>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['tt_cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt_cnt']->value+1, null, 0);?>
				<!-- End TemplateTrip 2 product slide code -->
        <?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
			<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2==0) {?>
					</li>
					</ul>
				</li>
				</ul>
			<?php }?>
		<?php }?>
    </div>
    <div class="allproduct"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Todos','d'=>'Modules.FeaturedProducts.Shop'),$_smarty_tpl);?>
</a></div>
</section>
<?php }} ?>
