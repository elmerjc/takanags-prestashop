<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 00:52:57
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1770189109595b2d39828c01-24491213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60df2502ae729e87f9ffde5bff5f6bb380c898d1' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1499040041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770189109595b2d39828c01-24491213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595b2d39837b18_74582044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595b2d39837b18_74582044')) {function content_595b2d39837b18_74582044($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
