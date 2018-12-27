<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:57:44
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/controllers/currencies/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10892348365a09345859f084-87870030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f530d340405523da65d2f6856f987a54944cc02' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/controllers/currencies/content.tpl',
      1 => 1499040042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10892348365a09345859f084-87870030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'isForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0934585efbe7_46006744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0934585efbe7_46006744')) {function content_5a0934585efbe7_46006744($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div>
<?php }} ?>
