<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ttcmstestimonial/views/templates/hook/ttcmstestimonial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5689363025959d87b504fb9-56560983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ab51f63ceedf657293339dab5b3ee0e2388ffe' => 
    array (
      0 => 'module:ttcmstestimonial/views/templates/hook/ttcmstestimonial.tpl',
      1 => 1499052149,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5689363025959d87b504fb9-56560983',
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
  'unifunc' => 'content_5959d87b512da7_25061150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b512da7_25061150')) {function content_5959d87b512da7_25061150($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	<div id="ttcmstestimonial">
	  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

	</div>
<?php }?><?php }} ?>
