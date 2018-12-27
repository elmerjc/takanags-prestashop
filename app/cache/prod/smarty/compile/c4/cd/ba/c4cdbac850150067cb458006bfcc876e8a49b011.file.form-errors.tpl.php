<?php /* Smarty version Smarty-3.1.19, created on 2017-07-17 03:18:41
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1756277928596c72e1838dd8-72991895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4cdbac850150067cb458006bfcc876e8a49b011' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/form-errors.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756277928596c72e1838dd8-72991895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596c72e1843094_26319572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596c72e1843094_26319572')) {function content_596c72e1843094_26319572($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
