<?php /* Smarty version Smarty-3.1.19, created on 2017-08-20 23:12:47
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/customer/_partials/customer-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:608487452599a5dbfa84f76-73740141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2a74e4d8a24c2bb182ca0cecbdd61337c7a2ee4' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/customer/_partials/customer-form.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '608487452599a5dbfa84f76-73740141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_599a5dbfa9c5e9_74415773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599a5dbfa9c5e9_74415773')) {function content_599a5dbfa9c5e9_74415773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>


<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
      <?php } ?>
    
  </section>

  <footer class="form-footer clearfix">
    <input type="hidden" name="submitCreate" value="1">
    
      <button class="btn btn-primary form-control-submit pull-xs-right" data-link-action="save-customer" type="submit">
        <?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
    
  </footer>

</form>
<?php }} ?>
