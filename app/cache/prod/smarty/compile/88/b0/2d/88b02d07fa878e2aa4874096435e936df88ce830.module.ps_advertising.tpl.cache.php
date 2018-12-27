<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 17:29:38
         compiled from "module:ps_advertising/ps_advertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:656189659595d6852516099-66113074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b02d07fa878e2aa4874096435e936df88ce830' => 
    array (
      0 => 'module:ps_advertising/ps_advertising.tpl',
      1 => 1499052150,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '656189659595d6852516099-66113074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595d685251de04_07746698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d685251de04_07746698')) {function content_595d685251de04_07746698($_smarty_tpl) {?>

<div class="ttleftbanner">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"/></a>
</div>
<?php }} ?>
