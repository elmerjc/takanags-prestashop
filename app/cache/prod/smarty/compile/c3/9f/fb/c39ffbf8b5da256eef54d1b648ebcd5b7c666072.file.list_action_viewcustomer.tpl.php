<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 21:11:02
         compiled from "/var/www/takanags.com/public_html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21287196765a08ff36c74745-62478711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c39ffbf8b5da256eef54d1b648ebcd5b7c666072' => 
    array (
      0 => '/var/www/takanags.com/public_html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1499040043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21287196765a08ff36c74745-62478711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a08ff36d087a5_00812869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a08ff36d087a5_00812869')) {function content_5a08ff36d087a5_00812869($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
