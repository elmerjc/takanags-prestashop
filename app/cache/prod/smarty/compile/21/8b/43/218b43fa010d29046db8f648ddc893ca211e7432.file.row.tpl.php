<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 01:12:46
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/new-theme/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18479368095a0937dee61382-78322716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218b43fa010d29046db8f648ddc893ca211e7432' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/new-theme/template/helpers/kpi/row.tpl',
      1 => 1499040041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18479368095a0937dee61382-78322716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0937dee782e2_32464328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0937dee782e2_32464328')) {function content_5a0937dee782e2_32464328($_smarty_tpl) {?>
<div class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="kpi-container">
        <div class="row">
          <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
              </div>
              <div class="row">
            <?php }?>
            <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
