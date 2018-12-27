<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:22:52
         compiled from "modules/tt_productimagehover/views/templates/hook/tt_productimagehover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20675774015a092c2c021987-42748730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d60df362aac98f50d894de4c41b960a0bf841a' => 
    array (
      0 => 'modules/tt_productimagehover/views/templates/hook/tt_productimagehover.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20675774015a092c2c021987-42748730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home_image' => 0,
    'large_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a092c2c064fb0_23023410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a092c2c064fb0_23023410')) {function content_5a092c2c064fb0_23023410($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['home_image']->value) {?>
	<img class="second_image img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['home_image']->value, ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['large_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" />
<?php }?>
<?php }} ?>
