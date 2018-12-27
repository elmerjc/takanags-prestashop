<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:22:35
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/products-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4373889195a092c1baa3b50-67201315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc94135cd6e2edf13c9f9b482047791fe8b8be6' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/products-top.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
    '1411d1a7bcbef3ebebe028ab8c9c5e0bda66de95' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/sort-orders.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4373889195a092c1baa3b50-67201315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a092c1bb44e83_24151240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a092c1bb44e83_24151240')) {function content_5a092c1bb44e83_24151240($_smarty_tpl) {?>

 <div id="js-product-list-top" class="products-selection">
 
  <div class="col-md-6 hidden-sm-down total-products">
  	<!-- Grid-List Buttons --> 
	<div class="grid-list col-md-2">
	<span id="ttgrid"></span>
	<span id="ttlist"></span>
	</div>
    <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])>1) {?>
      <p><?php echo smartyTranslate(array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>count($_smarty_tpl->tpl_vars['listing']->value['products']))),$_smarty_tpl);?>
</p>
    <?php } else { ?>
      <p><?php echo smartyTranslate(array('s'=>'There is %product_count% product.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>count($_smarty_tpl->tpl_vars['listing']->value['products']))),$_smarty_tpl);?>
</p>
    <?php }?>
  </div>
  <div class="col-md-6">
    <div class="row">

      
        <?php /*  Call merged included template "catalog/_partials/sort-orders.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, '4373889195a092c1baa3b50-67201315');
content_5a092c1bb0a0b3_27807990($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/sort-orders.tpl" */?>
      

      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary">
            <?php echo smartyTranslate(array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        </div>
      <?php }?>
    </div>
  </div>
  <div class="col-sm-12 hidden-md-up text-xs-center showing">
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>

  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:22:35
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/sort-orders.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a092c1bb0a0b3_27807990')) {function content_5a092c1bb0a0b3_27807990($_smarty_tpl) {?><span class="col-sm-3 col-md-3 hidden-sm-down sort-by"><?php echo smartyTranslate(array('s'=>'Sort by:','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-sm-9 col-xs-8<?php } else { ?>col-sm-12 col-xs-12<?php }?> col-md-9 products-sort-order dropdown">
  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo smartyTranslate(array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

    <i class="material-icons pull-xs-right">&#xE5C5;</i>
  </a>
  <div class="dropdown-menu">
    <?php  $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['sort_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->key => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->_loop = true;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php } ?>
  </div>
</div>
<?php }} ?>
