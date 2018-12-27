<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:02
         compiled from "/var/www/takanags.com/public_html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8663649475959d876e21842-91821214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb629a64a9abbb5e28c90f1d2b1365fe9aa8b2b' => 
    array (
      0 => '/var/www/takanags.com/public_html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1499040042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8663649475959d876e21842-91821214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d876e26c50_01951543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d876e26c50_01951543')) {function content_5959d876e26c50_01951543($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
