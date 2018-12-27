<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 00:55:39
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85406654595b2ddb1f51c2-70162899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1686566abc2ed2c00dd1f9e9004a5294d14a4c0' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1499040041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85406654595b2ddb1f51c2-70162899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595b2ddb1ffac9_64413465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595b2ddb1ffac9_64413465')) {function content_595b2ddb1ffac9_64413465($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
