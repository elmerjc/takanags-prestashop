<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ttcmssubbanner/views/templates/hook/ttcmssubbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5416403375959d87b5236f4-75567883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cad604d844bddf6e9cb7c59c2100fb17465433' => 
    array (
      0 => 'module:ttcmssubbanner/views/templates/hook/ttcmssubbanner.tpl',
      1 => 1499052149,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5416403375959d87b5236f4-75567883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b52a029_91979084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b52a029_91979084')) {function content_5959d87b52a029_91979084($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	<div id="ttcmssubbanner">
	  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

	</div>
<?php }?><?php }} ?>
