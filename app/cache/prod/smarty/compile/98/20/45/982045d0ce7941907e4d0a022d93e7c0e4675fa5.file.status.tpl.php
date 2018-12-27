<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 00:57:46
         compiled from "/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/controllers/currencies/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8421702905a09345adb5eb3-95399191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '982045d0ce7941907e4d0a022d93e7c0e4675fa5' => 
    array (
      0 => '/var/www/takanags.com/public_html/admin453bbuh6d/themes/default/template/controllers/currencies/status.tpl',
      1 => 1499040042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8421702905a09345adb5eb3-95399191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a09345ae06ce2_33985187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a09345ae06ce2_33985187')) {function content_5a09345ae06ce2_33985187($_smarty_tpl) {?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading">
				<?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>

				<div id="currencyStatus" class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
					<label>
						<input type="checkbox" <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? 'checked="checked"' : '';?>
><span></span>
					</label>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is disabled"),$_smarty_tpl);?>
</span>
			<span class="status enabled <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is enabled"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<?php }} ?>
