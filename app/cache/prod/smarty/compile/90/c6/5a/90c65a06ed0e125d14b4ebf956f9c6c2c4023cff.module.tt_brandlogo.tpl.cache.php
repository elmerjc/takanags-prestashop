<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:01:47
         compiled from "module:tt_brandlogo/views/templates/hook/tt_brandlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019221625959d87b55a5c1-86342596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90c65a06ed0e125d14b4ebf956f9c6c2c4023cff' => 
    array (
      0 => 'module:tt_brandlogo/views/templates/hook/tt_brandlogo.tpl',
      1 => 1510549293,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1019221625959d87b55a5c1-86342596',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b586312_51366333',
  'variables' => 
  array (
    'display_link_brand' => 0,
    'page_link' => 0,
    'brands' => 0,
    'brand' => 0,
    'link' => 0,
    'brandname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b586312_51366333')) {function content_5959d87b586312_51366333($_smarty_tpl) {?>


 <section class="brands container">
	<h1 class="h1 products-section-title text-uppercase tt-title">
		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Brands','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>
"><?php }?>
		<?php echo smartyTranslate(array('s'=>'Brands','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
	</h1>
	  
	<div class="products">
			<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
	 <ul id="ttbrandlogo-carousel" class="product_list">
		<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
	<li>
	<div class="brand-image">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerImageLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
		</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['brandname']->value) {?>
		<h1 class="h3 product-title" itemprop="name">
			<a class="product-name" style="color: #FFF" itemprop="url"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
		</h1>
	<?php }?>
	</li>
	<?php } ?>
	</ul>
	<?php } else { ?>
	<p><?php echo smartyTranslate(array('s'=>'No brand','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</section>

<?php }} ?>
