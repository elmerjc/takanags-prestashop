<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 00:55:39
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1886334670595b2ddb1c7ff5-95900041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb6ceb062e0f7a17c78ba1bfd41e6c99d3020a5' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1499040041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1886334670595b2ddb1c7ff5-95900041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595b2ddb1db623_59573208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595b2ddb1db623_59573208')) {function content_595b2ddb1db623_59573208($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
